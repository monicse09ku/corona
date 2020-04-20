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
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Summary</label>
          <input type="text" v-model="donor.summary" class="form-control"> 
        </div> 
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Medium</label>
          <select v-model="donor.medium" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach(payment_methods() as $payment_method)
            <option value="{{ $payment_method }}">{{ $payment_method }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Account</label>
          <select v-model="donor.account" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach(accounts() as $account)
            <option value="{{ $account }}">{{ $account }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Amount</label>
          <input type="text" v-model="donor.amount" class="form-control"> 
        </div> 
        <div class="col-md-4 col-sm-12">
          <label for="inputEmail3" class="control-label">Vouchar</label>
          <input type="file" class="form-control" v-on:change="onImageChange"> 
        </div> 
        <div class="col-md-4 col-sm-12">
          <label for="inputPassword3" class="control-label">Organisation</label>
          <select v-model="donor.org_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
            @endforeach
          </select>
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