@extends('layouts.master')

@section('title', 'Volunteer')

@section('content')
<volunteer-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showVolunteerForm" type="button" class="btn btn-primary pull-right" @click="toggoleVolunteerForm()">
                    Add Volunteer
                  </button>

                  <div v-if="showVolunteerForm">

                    @include('volunteer.form')
                  </div>

                    <h1 class="card-header">Volunteer</h1>

                    <div class="card-body">

                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Volunteer Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Expertise</th>
                              <th>Organisation</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="volunteer in volunteers">
                              <td v-text="volunteer.name"></td>
                              <td v-text="volunteer.phone"></td>
                              <td v-text="volunteer.expertise"></td>
                              <td v-text="volunteer.organisation.name"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditVolunteer(volunteer)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteVolunteer(volunteer.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                              </td>
                            </tr>

                          </table>
                        </div>
                            <div v-if="pagination.total>0" class="box-footer">
                                <pagination :data="pagination" @pagination-change-page="fetchVolunteers"></pagination>
                            </div>
                        <!-- /.box-body -->
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</volunteer-component>



@endsection
