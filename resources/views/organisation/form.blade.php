<div class="card-body">
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
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Name</label>
          <input type="text" v-model="organisation.name" class="form-control"> 
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Status</label>
          <select v-model="organisation.status" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="active">Active</option>
            <option value="pending">Pending</option>
          </select>
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Org Admin</label>
          <select v-model="organisation.user_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($org_admins as $org_admin)
            <option value="{{$org_admin->id}}">{{$org_admin->name}}</option>
            @endforeach
          </select>
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