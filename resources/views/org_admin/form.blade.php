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
        <div class="col-md-6 col-sm-12">
          <label for="inputPassword3" class="control-label">Organisation</label>
          <select v-model="org_admin.org_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="inputPassword3" class="control-label">Organisation Admin</label>
          <select v-model="org_admin.user_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeOrgAdminForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveOrgAdmin()">Save Organisation Admin</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>