<div class="col-md-12">
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
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Summary</label>
          <div class="col-sm-10">
            <input type="text" v-model="expense.summary" class="form-control"> 
          </div> 
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
          <div class="col-sm-10">
            <input type="text" v-model="expense.amount" class="form-control"> 
          </div> 
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Vouchar</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" v-on:change="onImageChange"> 
          </div> 
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