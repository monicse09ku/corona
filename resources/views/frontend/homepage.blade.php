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
  <header class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <!-- 
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              -->
              </ul>
            </div>
          </div>
          <div class="col-md-10">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                <li class="m-0 pl-10 pr-10 text-white"><i class="fa fa-header text-white"></i> Volunteers Against Contagion, Bangladesh</li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand pull-left flip" href="#"><img src="images/logo-wide.png" alt=""></a>
            <ul class="menuzord-menu onepage-nav">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              
              <li><a href="#team">Volunteer</a></li>
              <!--
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#blog">Blog</a></li>-->
              <li><a href="#contact">Contact</a></li>
              <li><a href="{{ url('/user-area') }}">Login/Register</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg20.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg20.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['110']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;">Donate
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For the poor children 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','35','40']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95','105','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg23.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg23.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-6 text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">raise your helping hand 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg24.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg24.jpg"  alt=""  data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Help</span> The Poor
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">@{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: home-boxes -->
    <section class="layer-overlay overlay-theme-colored-8" data-bg-img="images/bg/bg10.jpg">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row" data-margin-top="-90px">
            <div class="col-sm-12 col-md-4">
              <div class="icon-box p-40 iconbox-theme-colored bg-white border-1px text-center">
                <a class="icon" href="#">
                  <i class="flaticon-charity-world-in-your-hands font-48 font-weight-100"></i>
                </a>
                <h4 class="text-uppercase mt-0">Expert Engineers</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="icon-box p-40 iconbox-theme-colored bg-white border-1px text-center">
                <a class="icon" href="#">
                  <i class="flaticon-charity-shaking-hands-inside-a-heart font-48 font-weight-100"></i>
                </a>
                <h4 class="text-uppercase mt-0">Latest Tools</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="icon-box p-40 iconbox-theme-colored bg-white border-1px text-center">
                <a class="icon" href="#">
                  <i class="flaticon-charity-child-hand-on-adult-hand font-48 font-weight-100"></i>
                </a>
                <h4 class="text-uppercase mt-0">Quick Delivery</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 mt-20">
              <div class="row">
                <div class="col-md-6 col-sm-6 pl-0">
                  <div class="img-hover-border mt-sm-40">
                    <img class="img-fullwidth" src="images/about/d1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 pl-0 pr-0">
                  <div class="img-hover-border mt-sm-30">
                    <img class="img-fullwidth" src="images/about/d2.jpg" alt="">
                  </div>
                  <div class="img-hover-border mt-15 mt-sm-30">
                    <img class="img-fullwidth" src="images/about/a4.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-details">
                <h2 class="font-36 mt-0"> Welcome to <br><span class="text-theme-colored">Volunteers Against Contagion</span></h2>
                <p> Please Rise your Helping Hand</p>
                <div class="singnature mt-20">
                  <img src="images/signature.png" alt="img1">
                </div>
                <a href="#" class="btn btn-flat btn-colored btn-theme-colored mt-15 mr-15">Read More</a><a href="#" class="btn btn-flat btn-colored btn-default btn-theme-colored mt-15">Get a Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg4.jpg" data-parallax-ratio="0.7">
      <div class="container pt-80 pb-80">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1054" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Donators</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="875" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Success Mission</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1248" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Volunteer Reached</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="54" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Globalization Work</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Mission  -->
    <section>
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 pb-sm-20">
              <h3 class="line-bottom mt-0">Our Mission</h3>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-shaking-hands-inside-a-heart text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Save The children</h4>
                      <p>Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs lorem ipsum dolor is emmit</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-shelter text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Help The Helpless</h4>
                      <p>Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs lorem ipsum dolor is emmit</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-responsible-use-of-water text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Pure Water For Poor</h4>
                      <p>Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs lorem ipsum dolor is emmit</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-make-a-donation text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Donation for poor</h4>
                      <p>Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs lorem ipsum dolor is emmit</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h3 class="line-bottom border-bottom mt-0">Upcoming Events</h3>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">28</li>
                        <li class="font-18 text-white text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#">Event: Help The Children</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i> 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> 25 Newyork City.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">26</li>
                        <li class="font-18 text-white text-center text-uppercase">OCT</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#">Event: Foods For Poor</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i> 6.00 pm - 8.30 pm</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> 25 Newyork City.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">12</li>
                        <li class="font-18 text-white text-center text-uppercase">DEC</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#">Event: Save The Water</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i> 4.00 pm - 6.00 pm</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> 25 Newyork City.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: volunteers -->
    <section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">volunteers</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="images/team/team1.jpg" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iste nihil ex libero ab esse, dignissimos maxime enim sint laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">Sakib Jacson</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="images/team/team3.jpg" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iste nihil ex libero ab esse, dignissimos maxime enim sint laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">Jerin Jacson</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="images/team/team2.jpg" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iste nihil ex libero ab esse, dignissimos maxime enim sint laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">Alex Jacobson</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-stellar-background-ratio="0.2"  data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-white">How you can help us</h2>
              <h2 class="text-white">Just call at <span class="text-theme-colored">(01) 234 5678</span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>

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

    <!-- Section: Testimonials -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg23.jpg" data-parallax-ratio="0.7">
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
    </section>


    <!-- Divider: Contact -->
    <section id="contact" class="divider bg-silver-light">
      <div class="container pt-60 pb-60">      
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Contact Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row pt-10">
          <div class="col-md-10 col-md-offset-1">
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
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
        </div>
      </div>
    </section>
    
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
  <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="images/logo-wide-white-footer.png">
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +61 3 1234 5678
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
        
        
      </div>
      <div class="row mt-10">
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  console.log(resp);
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
       
        
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2020 VAC All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

@endsection
