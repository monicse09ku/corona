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
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Name</label>
          <input type="text" v-model="organisation.name" class="form-control"> 
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="inputPassword3" class="control-label">Status</label>
          <select v-model="organisation.status" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="active">Active</option>
            <option value="pending">Pending</option>
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