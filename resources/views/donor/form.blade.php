<div class="card-body">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Donor Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal" enctype="multipart/form-data">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Summary</label>
          <input type="text" v-model="donor.summary" class="form-control"> 
        </div> 
        <div class="col-md-6 col-sm-12">
          <label for="inputPassword3" class="control-label">Medium</label>
          <select v-model="donor.medium" class="form-control" >
            <option disabled value="">Please select one</option>
            <option value="Bkash">Bkash</option>
            <option value="Rocket">Rocket</option>
            <option value="Nogod">Nogod</option>
            <option value="DBBL">DBBL</option>
          </select>
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Amount</label>
          <input type="text" v-model="donor.amount" class="form-control"> 
        </div> 
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Vouchar</label>
          <input type="file" class="form-control" v-on:change="onImageChange"> 
        </div> 
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeDonorForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveDonor()">Save Organisation</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>