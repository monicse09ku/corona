<!-- Section: Become a Volunteer -->
<section>
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-6">
          <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
          <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action="includes/become-volunteer.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_name">Name <small>*</small></label>
                  <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_email">Email <small>*</small></label>
                  <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">               
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_sex">Sex <small>*</small></label>
                  <select id="form_sex" name="form_sex" class="form-control required">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_branch">Choose Branch <small>*</small></label>
                  <select id="form_branch" name="form_branch" class="form-control required">
                    <option value="UK">UK</option>
                    <option value="USA">USA</option>
                    <option value="Australia">Australia</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="form_message">Message <small>*</small></label>
              <textarea id="form_message" name="form_message" class="form-control required" rows="3" placeholder="Your cover letter/message sent to the employer"></textarea>
            </div>
            <div class="form-group">
              <label for="form_attachment">C/V Upload</label>
              <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
            </div>
            <div class="form-group">
              <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
            </div>
          </form>
          <!-- Job Form Validation-->
          <script type="text/javascript">
            $("#volunteer_apply_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
          </script>
        </div>
        <div class="col-md-6 sm-text-center mt-40">
          <img class="hidden-sm hidden-xs" src="images/photos/v1.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>