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
                                <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-white"></i> <a class="text-white"
                                                                                                      href="#">123-456-789</a>
                                </li>
                                <li class="m-0 pl-10 pr-10 text-white"><i class="fa fa-header text-white"></i>
                                    Volunteers Against Contagion, Bangladesh
                                </li>
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
                    <p class="text-success">{{Session::get('success')}}</p>
                @endif

                <form role="form" action="{{ route('donation.stripe.payment') }}" method="post"
                      class="require-validation"
                      data-cc-on-file="false"
                      data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                      id="payment-form">
                    @csrf

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input
                                class='form-control' size='4' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group  required'>
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                            class='form-control card-cvc'
                                                                            placeholder='ex. 311' size='4'
                                                                            type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                        </div>
                    </div>
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

        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            $(function () {
                var $form = $(".require-validation");
                $('form.require-validation').bind('submit', function (e) {
                    var $form = $(".require-validation"),
                        inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
                        $inputs = $form.find('.required').find(inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid = true;
                    $errorMessage.addClass('hide');

                    $('.has-error').removeClass('has-error');
                    $inputs.each(function (i, el) {
                        var $input = $(el);
                        if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorMessage.removeClass('hide');
                            e.preventDefault();
                        }
                    });

                    if (!$form.data('cc-on-file')) {
                        e.preventDefault();
                        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                        Stripe.createToken({
                            number: $('.card-number').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month').val(),
                            exp_year: $('.card-expiry-year').val()
                        }, stripeResponseHandler);
                    }

                });

                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        $('.error')
                            .removeClass('hide')
                            .find('.alert')
                            .text(response.error.message);
                    } else {
                        // token contains id, last4, and card type
                        var token = response['id'];
                        // insert the token into the form so it gets submitted to the server
                        $form.find('input[type=text]').empty();
                        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                        $form.get(0).submit();
                    }
                }

            });
        </script>

@endsection
