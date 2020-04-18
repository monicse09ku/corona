@extends('layouts.master')

@section('title', 'Donor')

@section('content')
<donor-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showDonorForm" type="button" class="btn btn-primary pull-right" @click="toggoleDonorForm()">
                    Add Donor
                  </button>

                  <div v-if="showDonorForm">
                    
                    @include('donor.form')
                  </div>

                    <h1 class="card-header">Donor</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Donor Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Summary</th>
                              <th>Medium</th>
                              <th>Amount</th>
                              <th>Vouchar</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="donor in donors">
                              <td v-text="donor.summary"></td>
                              <td v-text="donor.medium"></td>
                              <td v-text="donor.amount"></td>
                              <td>
                                <span v-if="donor.vouchar">
                                  <img height="100" width="100" :src="'public/images/donors/' + donor.org_id + '/' + donor.vouchar">
                                </span>
                              </td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditDonor(donor)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteDonor(donor.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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


</donor-component>



@endsection
