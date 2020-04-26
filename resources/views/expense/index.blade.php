@extends('layouts.master')

@section('title', 'Expense')

@section('content')
<expense-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showExpenseForm" type="button" class="btn btn-primary pull-right" @click="toggoleExpenseForm()">
                    Add Expense
                  </button>

                  <div v-if="showExpenseForm">
                    
                    @include('expense.form')
                  </div>

                    <h1 class="card-header">Expense</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Expense Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Summary</th>
                              <th>Medium</th>
                              <th>Account</th>
                              <th>Amount</th>
                              <th>Vouchar</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="expense in expenses">
                              <td v-text="expense.summary"></td>
                              <td v-text="expense.medium"></td>
                              <td v-text="expense.account"></td>
                              <td v-text="expense.amount"></td>
                              <td>
                                <span v-if="expense.vouchar">
                                  <img height="100" width="100" :src="'public/images/expenses/' + expense.org_id + '/' + expense.vouchar">
                                </span>
                              </td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditExpense(expense)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteExpense(expense.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                              </td>
                            </tr>
                            
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</expense-component>



@endsection
