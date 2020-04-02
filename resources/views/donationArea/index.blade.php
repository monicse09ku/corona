@extends('layouts.master')

@section('title', 'Donation Areas')

@section('content')
<donation-area-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showDonationAreaForm" type="button" class="btn btn-primary pull-right" @click="toggoleDonationAreaFormForm()">
                    Add Donation Area
                  </button>

                  <div v-if="showDonationAreaForm">
                    
                    @include('donationArea.form')
                  </div>

                    <h1 class="card-header">Donation Areas</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Donation Areas Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Donation Area Name</th>
                              <th>Status</th>
                              <th style="width: 60px">Actions</th>
                            </tr>
                            <tr v-for="donationArea in donationAreas">
                              <td v-text="donationArea.area_name"></td>
                              <td v-text="donationArea.status"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditDonationArea(donationArea)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button @click="deleteDonationArea(donationArea.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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


</donation-area-component>



@endsection
