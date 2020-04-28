@extends('layouts.frontend')

@section('content')

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
            <ul class="menuzord-menu">
              <li class="active"><a href="{{ url('/')}}">Home</a></li>
              <li><a href="{{ url('/#about/')}}">About</a></li>

              <li><a href="{{ url('/#team') }}">Volunteer</a></li>
              <!--
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#blog">Blog</a></li>-->
              <li><a href="{{ url('/#contact') }}">Contact</a></li>
              <li><a href="{{ url('/user-area') }}">Login/Register</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</header>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <h2 class="donation-title">Donation Information</h2>
                    <p>You can donate using one of the following services</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="bkash-border">
                <div class="logo-outer">
                    <div class="logo">
                        <img src="{{ asset('/images/donationLogos/paypal.png')}}" alt="paypal" height="60px"/>
                    </div>
                </div>
                <div class="footer-info">
                    <ul>
                        <li><p><b>**</b>&nbsp;Pay with Paypal</p></li>
                        <li><p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p></li>
                    </ul>
                    <a href="{{route('donation.paypal')}}" class="btn btn-success">Pay Now</a>
                </div>
            </div>
        </div><div class="col-sm-6">
            <div class="bkash-border">
                <div class="logo-outer">
                    <div class="logo">
                        <img src="{{ asset('/images/donationLogos/Card.png')}}" alt="paypal" height="60px"/>
                    </div>
                </div>
                <div class="footer-info">
                    <ul>
                        <li><p><b>**</b>&nbsp;Pay with Caedit/Debit Card</p></li>
                        <li><p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p></li>
                    </ul>
                    <a href="{{route('donation.stripe')}}" class="btn btn-success">Pay Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="bkash-border">
                <div class="logo-outer">
                    <div class="logo">
                        <img src="{{ asset('/images/donationLogos/bkash.png')}}" alt="bkash" height="60px"/>
                    </div>
                </div>
                <div class="acc-details">
                    <ul>
                        <li><p>01627621937 (সাইদুর রহমান)</p></li>
                        <li><p>01711433117 (আরাফাত হাবিব আকাশ)</p></li>
                        <li><p>01670695630 (আহমাদ আল রাজী)</p></li>
                    </ul>
                </div>
                <div class="footer-info">
                    <ul>
                        <li><p><b>**</b>&nbsp;সবগুলো পার্সোনাল অ্যাকাউন্ট</p></li>
                        <li><p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="rocket-border">
                <div class="logo-outer">
                    <div class="logo">
                        <img src="{{ asset('/images/donationLogos/dutch-bangla-rocket.png')}}" alt="rocket" height="60px"/>
                    </div>
                </div>
                <div class="acc-details">
                    <ul>
                        <li><p>017238735146 (অপূর্ব কুমার সেন)</p></li>
                        <li><p>016706956301 (আহমাদ আল রাজী)</p></li>
                        <li><p>013031547524 (নিলয় সরকার)</p></li>
                    </ul>
                </div>
                <div class="footer-info">
                    <ul>
                        <li><p><b>**</b>&nbsp;সবগুলো পার্সোনাল অ্যাকাউন্ট</p></li>
                        <li><p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="nogod-border">
                <div class="logo-outer">
                    <div class="logo">
                        <img src="{{ asset('/images/donationLogos/nogod.png')}}" alt="nogod" height="60px"/>
                    </div>
                </div>
                <div class="acc-details">
                    <ul>
                        <li><p>01670695630 (আহমাদ আল রাজী)</p></li>
                    </ul>
                </div>
                <div class="footer-info">
                    <ul>
                        <li><p><b>**</b>&nbsp;পার্সোনাল অ্যাকাউন্ট</p></li>
                        <li><p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="dbbl-border">
                <div class="logo-outer">
                    <div class="logo-dbbl">
                        <img src="{{ asset('/images/donationLogos/dutch-bangla-bank2.png') }}" alt="dbbl" height="60px"/>
                    </div>
                </div>
                <div class="acc-details">
                    <h4 class="bank-info">Shounok Rahman</h4>
                    <p>Dutch-Bangla Bank Ltd.</p>
                    <p>A/C No: 1201010309440
                    <br>Branch: Khulna
                    <br>Branch Code: 120
                    <br>SWIFT Code: DBBLBDDH
                    <br>Routing No: 090471544</p>
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







  @endsection
