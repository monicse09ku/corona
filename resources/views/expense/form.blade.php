<div class="card-body">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Expense Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal" enctype="multipart/form-data">
      <div class="box-body">
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Summary</label>
          <input type="text" v-model="expense.summary" class="form-control"> 
        </div> 
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Amount</label>
          <input type="text" v-model="expense.amount" class="form-control"> 
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="inputEmail3" class="control-label">Vouchar</label>
          <input type="file" class="form-control" v-on:change="onImageChange"> 
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="inputPassword3" class="control-label">Organisation</label>
          <select v-model="expense.org_id" class="form-control" >
            <option disabled value="">Please select one</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeExpenseForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveExpense()">Save Organisation</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>