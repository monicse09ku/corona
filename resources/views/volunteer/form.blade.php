<div class="card-body">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Volunteer Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Name</label>
          <input type="text" v-model="volunteer.name" class="form-control"> 
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Phone</label>
          <input type="text" v-model="volunteer.phone" class="form-control"> 
        </div> 
        <div class="col-md-8 col-sm-12">
          <label for="inputEmail3" class="control-label">Expertise</label>
          <input type="text" v-model="volunteer.expertise" class="form-control"> 
        </div> 
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Organisation</label>
          <select v-model="volunteer.org_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeVolunteerForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveVolunteer()">Save Volunteer</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>