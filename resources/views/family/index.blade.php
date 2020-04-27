@extends('layouts.master')

@section('title', 'Families')

@section('content')
<family-component inline-template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                  <button v-if="!showFamilyForm" type="button" class="btn btn-primary pull-right" @click="toggoleFamilyForm()">
                    Add Families
                  </button>

                  <div v-if="showFamilyForm">

                    @include('family.form')
                  </div>

                    <h1 class="card-header">Families</h1>

                    <div class="card-body">

                        <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Families Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tr>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Occupation</th>
                              <th>Donation Area</th>
                              <th>Type</th>
                              <th>Members</th>
                              <th>Health Issues</th>
                              <th style="width: 120px">Actions</th>
                            </tr>
                            <tr v-for="family in families.data">
                              <td v-if="family.contact_history" style="color: red; font-weight: bold;" v-text="family.name"></td>
                              <td v-else style="color: green;font-weight: bold;" v-text="family.name"></td>
                              <td v-text="family.phone"></td>
                              <td v-text="family.occupation"></td>
                              <td v-text="family.donation_area.area_name"></td>
                              <td v-text="family.type"></td>
                              <td>
                                <p>
                                  <b>Elderly: </b><span v-text="family.elderly"></span>&nbsp
                                  <b>Adult: </b><span v-text="family.adult"></span>&nbsp
                                  <b>Children: </b><span v-text="family.children"></span>
                                </p>
                                <p><b>Total: </b><span v-text="family.total_member"></span></p>
                              </td>
                              <td v-text="family.medications"></td>
                              <td>
                                <button style="margin-bottom: 5px" @click="EditFamily(family)" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button style="margin-bottom: 5px" @click="deleteFamily(family.id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                              </td>
                            </tr>

                          </table>
                        </div>
                            <div v-if="pagination.total>0" class="box-footer">
                                <pagination :data="pagination" @pagination-change-page="fetchFamilies"></pagination>
                            </div>
                        <!-- /.box-body -->
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</family-component>



@endsection
