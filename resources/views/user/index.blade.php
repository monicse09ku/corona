@extends('layouts.master')

@section('title', 'Users')

@section('content')
<user-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showUserForm" type="button" class="btn btn-primary pull-right" @click="toggoleUserForm()">
                    Add User
                  </button>

                  <div v-if="showUserForm">
                    
                    @include('user.form')
                  </div>

                    <h1 class="card-header">User</h1>

                    <div class="card-body">
                        
                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">User Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Role</th>
                              <th>Status</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="user in users">
                              <td v-text="user.name"></td>
                              <td v-text="user.email"></td>
                              <td v-text="user.phone"></td>
                              <td v-text="user.role"></td>
                              <td v-text="user.status"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditUser(user)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteUser(user.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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


</user-component>



@endsection
