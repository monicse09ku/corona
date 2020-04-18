@extends('layouts.master')

@section('title', 'Organisation')

@section('content')
<organisation-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showOrganisationForm" type="button" class="btn btn-primary pull-right" @click="toggoleOrganisationForm()">
                    Add Organisation
                  </button>

                  <div v-if="showOrganisationForm">
                    
                    @include('organisation.form')
                  </div>

                    <h1 class="card-header">Organisation</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Organisation Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Name</th>
                              <th>Status</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="organisation in organisations">
                              <td v-text="organisation.name"></td>
                              <td v-text="organisation.status"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditOrganisation(organisation)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteOrganisation(organisation.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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


</organisation-component>



@endsection
