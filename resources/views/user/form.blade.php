<div class="card-body">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">User Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal" enctype="multipart/form-data">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Name</label>
          <input type="text" v-model="user.name" class="form-control"> 
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Email</label>
          <input type="text" v-model="user.email" class="form-control"> 
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Phone</label>
          <input type="text" v-model="user.phone" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputEmail3" class="control-label">Password</label>
          <input type="password" v-model="user.password" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputEmail3" class="control-label">Confirm Password</label>
          <input type="password" v-model="user.confirmPassword" class="form-control"> 
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Role</label>
          <select v-model="user.role" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="admin">Admin</option>
            <option value="org_admin">Organisation Admin</option>
            <option value="informer">Informer</option>
          </select>
        </div>
        <div class="col-md-3 col-sm-12">
          <label for="inputPassword3" class="control-label">Status</label>
          <select v-model="user.status" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="active">Active</option>
            <option value="pending">Pending</option>
            <option value="dropped">Dropped</option>
          </select>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeUserForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveUser()">Save User</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>