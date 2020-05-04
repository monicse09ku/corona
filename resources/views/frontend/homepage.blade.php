@extends('layouts.frontend')

@section('content')
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> 
  
  <!-- Header -->
  @include('frontend.partials.header')
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    @include('frontend.partials.slider')

    <!-- Section: home-boxes -->
    @include('frontend.partials.homepage-boxes')

    <!-- Section: About -->
    @include('frontend.partials.about')

    <!-- Divider: Funfact -->
    @include('frontend.partials.happiness')

    <!-- Section: Mission  -->
    @include('frontend.partials.mission')

    <!-- Section: Organizaions  -->
    @include('frontend.partials.organizations')
    

    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-stellar-background-ratio="0.2"  data-bg-img="images/bg/99.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-white">Want to donate in cash?</h2>
              <h2 class="text-white">Please call at <span class="text-theme-colored">01670 695630</span> to save the humanity</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-gray">or donate here <a href="{{ url('/make_donations') }}" class="btn btn-flat btn-colored btn-default btn-theme-colored">Donate Now</a></h2>

            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: Become a Volunteer -->
    @include('frontend.partials.volunteers')

    <!-- Section: Testimonials -->
   <!--  <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg23.jpg" data-parallax-ratio="0.7">
      <div class="container pt-60 pb-60">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-white mt-0">Happy Donors Say</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="pt-20">
              <div class="testimonial style1 owl-carousel-2col">
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis. adipisicing elitvolup tatem error</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="images/testimonials/s1.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">kode inc.</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis. adipisicing elitvolup tatem error</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="images/testimonials/s2.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">kode inc.</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis. adipisicing elitvolup tatem error</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="images/testimonials/s3.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">kode inc.</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- Divider: Contact -->
    @include('frontend.partials.contact')
    
    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  <!-- Footer -->
  @include('frontend.partials.footer')
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

@endsection
