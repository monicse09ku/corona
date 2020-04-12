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
          <label for="inputEmail3" class="control-label">নাম</label>
          <input type="text" v-model="family.name" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputEmail3" class="control-label">মোবাইল নাম্বার</label>
          <input type="text" v-model="family.phone" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">এলাকা</label>
          <select v-model="family.donation_area_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($donation_areas as $donation_area)
            <option value="{{$donation_area->id}}">{{$donation_area->area_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">আর্থিক অবস্থা কেমন</label>
          <select v-model="family.type" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="Extreme Poor">Extreme Poor</option>
            <option value="Poor">Poor</option>
            <option value="Not Poor">Not Poor</option>
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">বৃদ্ধ কতজন?</label>
          <select v-model="family.elderly" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">প্রাপ্তবয়স্ক কতজন?</label>
          <select v-model="family.adult" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">শিশু কতজন?</label>
          <select v-model="family.children" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($numbers as $number)
            <option value="{{$number}}">{{$number}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">ঝুকিপূর্ণ এলাকা/মানুষের স্পর্শ?</label>
          <select v-model="family.contact_history" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">ব্যবহৃত ওষুধের ধরণ?</label>
          <select v-model="family.smoker" class="form-control" multiple="">
            <option disabled value="">Please select one</option>
            <option value="Respiratory">শ্বাসতন্ত্</option>
            <option value="Diabetes">ডায়াবেটিস</option>
            <option value="Blood Pressure">রক্তচাপ</option>
            <option value="Smoking">ধূমপান</option>
          </select>
        </div>
        <div class="col-md-9 col-sm-12">
          <label for="inputEmail3" class="control-label">অন্য কিছু</label>
          <textarea type="text" v-model="family.details" class="form-control"></textarea> 
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