<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Organisation Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" v-model="organisation.name" class="form-control"> 
          </div> 
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
            <select v-model="organisation.status" class="form-control" >
              <option disabled value="">Please select one</option>
              <option value="active">Active</option>
              <option value="pending">Pending</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Org Admin</label>
          <div class="col-sm-10">
            <select v-model="organisation.user_id" class="form-control" >
              <option disabled value="">Please select one</option>
              @foreach($org_admins as $org_admin)
              <option value="{{$org_admin->id}}">{{$org_admin->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeOrganisationForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveOrganisation()">Save Organisation</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>