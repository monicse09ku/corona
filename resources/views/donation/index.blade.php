@extends('layouts.master')

@section('title', 'Donation')

@section('content')
<donation-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showDonationForm" type="button" class="btn btn-primary pull-right" @click="toggoleDonationForm()">
                    Add Donation
                  </button>

                  <div v-if="showDonationForm">
                    
                    @include('donation.form')
                  </div>

                    <h1 class="card-header">Donation</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Donation Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Donation Area</th>
                              <th>Name</th>
                              <th>Donation Date</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="donation in donations">
                              <td v-text="donation.donation_area.area_name"></td>
                              <td v-text="donation.family.name"></td>
                              <td v-text="donation.created_at"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditDonation(donation)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteDonation(donation.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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


</donation-component>



@endsection
