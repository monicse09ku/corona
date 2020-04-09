<div class="col-md-12">
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
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" v-model="volunteer.name" class="form-control"> 
          </div> 
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" v-model="volunteer.phone" class="form-control"> 
          </div> 
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Organisation</label>
          <div class="col-sm-10">
            <select v-model="volunteer.org_id" class="form-control" >
              <option disabled value="">Please select one</option>
              @foreach($organisations as $organisation)
              <option value="{{$organisation->id}}">{{$organisation->name}}</option>
              @endforeach
            </select>
          </div>
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