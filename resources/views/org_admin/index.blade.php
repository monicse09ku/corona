@extends('layouts.master')

@section('title', 'Organisation Admin')

@section('content')
<org-admin-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showOrgAdminForm" type="button" class="btn btn-primary pull-right" @click="toggoleOrgAdminForm()">
                    Add Organisation Admin
                  </button>

                  <div v-if="showOrgAdminForm">
                    
                    @include('org_admin.form')
                  </div>

                    <h1 class="card-header">Organisation Admin</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Organisation Admin Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Organisation Name</th>
                              <th>Admin Name</th>
                              <th>Admin Phone</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="org_admin in org_admins">
                              <td v-text="org_admin.organisation.name"></td>
                              <td v-text="org_admin.user.name"></td>
                              <td v-text="org_admin.user.phone"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditOrgAdmin(org_admin)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteOrgAdmin(org_admin.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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


</org-admin-component>



@endsection
