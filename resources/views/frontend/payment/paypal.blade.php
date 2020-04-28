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
                        <h2 class="donation-title">Paypal Payment Information</h2>
                        <p>You can donate using one of the following services</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @if(Session::get('error'))
                <p class="text-danger">{{Session::get('error')}}</p>
                @elseif(Session::get('success'))
                    <p class="text-danger">{{Session::get('success')}}</p>
                @endif
                <form action="{{route('donation.paypal.payment')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="guest_name">
                    </div>
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="text" class="form-control" name="amount">
                    </div>
                    <button class="btn btn-success">Pay Now</button>
                </form>
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
