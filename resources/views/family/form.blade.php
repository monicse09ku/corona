<div class="card-body">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Family Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="col-md-3 col-sm-12">
          <label for="inputEmail3" class="control-label">Name</label>
          <input type="text" v-model="family.name" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputEmail3" class="control-label">Phone</label>
          <input type="text" v-model="family.phone" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Donation Area</label>
          <select v-model="family.donation_area_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($donation_areas as $donation_area)
            <option value="{{$donation_area->id}}">{{$donation_area->area_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Type</label>
          <select v-model="family.type" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="Extreme Poor">Extreme Poor</option>
            <option value="Poor">Poor</option>
            <option value="Not Poor">Not Poor</option>
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Elderly</label>
          <select v-model="family.elderly" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Adult</label>
          <select v-model="family.adult" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Children</label>
          <select v-model="family.children" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Smoker</label>
          <select v-model="family.smoker" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Respiratory</label>
          <select v-model="family.respiratory" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Diabetes</label>
          <select v-model="family.diabetes" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Heart</label>
          <select v-model="family.heart" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Contact History</label>
          <select v-model="family.contact_history" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
        <div class="col-md-12 col-sm-12">
          <label for="inputEmail3" class="control-label">Details</label>
          <input type="text" v-model="family.details" class="form-control"> 
        </div>
        
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeFamilyForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveFamily()">Save Family</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>