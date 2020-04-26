<div class="card-body">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Donation Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Donation Area</label>
          <select v-model="donation.donation_area_id" class="form-control" @change="getAllFamilies()">
            <option disabled value="">Please select one</option>
            @foreach($donation_areas as $donation_area)
            <option value="{{$donation_area->id}}">{{$donation_area->area_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Organisation</label>
          <select v-model="donation.org_id" class="form-control">
            <option disabled value="">Please select one</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4 col-sm-12">
          <!-- <label for="inputPassword3" class="control-label">Family</label>
          <select v-model="donation.family_id" class="form-control" >
            <option disabled value="">Please select one</option>
            <option v-for="(item, key) in families" :value="item.id">
              @{{item.name}}
            </option>
          </select> -->
          <label for="inputPassword3" class="control-label">Families</label>
          <multiselect v-model="donation.family_ids" :options="families" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Pick some" label="name" track-by="name">
          </multiselect>
          <!-- <select v-model="family.smoker" class="form-control" multiple="">
            <option disabled value="">Please select one</option>
            <option value="Respiratory">শ্বাসতন্ত্</option>
            <option value="Diabetes">ডায়াবেটিস</option>
            <option value="Blood Pressure">রক্তচাপ</option>
            <option value="Smoking">ধূমপান</option>
          </select> -->
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeDonationForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveDonation()">Save Donation</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>