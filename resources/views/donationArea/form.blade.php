<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Donation Area Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form v-on:submit.prevent class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
          <div class="col-sm-10">
              <vue-google-autocomplete
                  ref="address"
                  id="map"
                  classname="form-control"
                  placeholder="Please type your address"
                  v-on:placechanged="getAddressData"
                  country="sg"
              >
              </vue-google-autocomplete>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Description</label>

          <div class="col-sm-10">
            <select v-model="donationArea.status" class="form-control" >
              <option disabled value="">Please select one</option>
              <option value="active">Active</option>
              <option value="pending">Pending</option>
            </select>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button @click="closeDonationAreaForm()" type="submit" class="btn btn-default pull-right">Cancel</button>
        <button type="submit" style="margin-right: 10px" class="btn btn-info pull-right" @click="saveDonationArea()">Save Donation Area</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  
</div>