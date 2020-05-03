@extends('layouts.frontend') @section('content')

@include('frontend.partials.header')

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <h1 class="donation-title"> <span class="text-gray"> Donation </span>  <span class="text-theme-colored" >Information</span></h1>
                    <p>You can donate using one of the following services</p>
                </div>
            </div>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="true">
                    <img src="{{ asset('/images/donationLogos/paypal.png')}}" alt="paypal" height="60px" />
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="stripe-tab" data-toggle="tab" href="#stripe" role="tab" aria-controls="stripe" aria-selected="false">
                    <img src="{{ asset('/images/donationLogos/stripe.jpg')}}" alt="stripe" height="60px" />
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bkash-tab" data-toggle="tab" href="#bkash" role="tab" aria-controls="bkash" aria-selected="false">
                    <img src="{{ asset('/images/donationLogos/bkash.png')}}" alt="bkash" height="60px" />
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="rocket-tab" data-toggle="tab" href="#rocket" role="tab" aria-controls="rocket" aria-selected="false">
                    <img src="{{ asset('/images/donationLogos/dutch-bangla-rocket.png')}}" alt="rocket" height="60px" />
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nogod-tab" data-toggle="tab" href="#nogod" role="tab" aria-controls="nogod" aria-selected="false">
                    <img src="{{ asset('/images/donationLogos/nogod.png')}}" alt="nogod" height="60px" />
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dbbl-tab" data-toggle="tab" href="#dbbl" role="tab" aria-controls="dbbl" aria-selected="false">
                    <img src="{{ asset('/images/donationLogos/dbbl.jpg') }}" alt="dbbl" height="60px" />
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                <div class="acc-details text-center">
                    <ul>
                        <li>
                            <p><b>**</b>&nbsp;Pay with Paypal</p>
                        </li>
                        <li>
                            <p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-info text-center">
                    <a href="{{route('donation.paypal')}}" class="btn btn-success">Pay Now</a>
                </div>
            </div>
            <div class="tab-pane fade" id="stripe" role="tabpanel" aria-labelledby="stripe-tab">
                <div class="acc-details text-center">
                    <ul>
                        <li>
                            <p><b>**</b>&nbsp;Pay with Caedit/Debit Card</p>
                        </li>
                        <li>
                            <p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-info text-center">
                  <a href="{{route('donation.stripe')}}" class="btn btn-success">Pay Now</a>
                </div>
            </div>
            <div class="tab-pane fade" id="bkash" role="tabpanel" aria-labelledby="bkash-tab">
                <div class="acc-details text-center">
                    <ul>
                        <li>
                            <p>01627621937 (সাইদুর রহমান)</p>
                        </li>
                        <li>
                            <p>01711433117 (আরাফাত হাবিব আকাশ)</p>
                        </li>
                        <li>
                            <p>01670695630 (আহমাদ আল রাজী)</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-info text-center">
                    <ul>
                        <li>
                            <p><b>**</b>&nbsp;সবগুলো পার্সোনাল অ্যাকাউন্ট</p>
                        </li>
                        <li>
                            <p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="rocket" role="tabpanel" aria-labelledby="rocket-tab">
                <div class="acc-details text-center">
                    <ul>
                        <li>
                            <p>017238735146 (অপূর্ব কুমার সেন)</p>
                        </li>
                        <li>
                            <p>016706956301 (আহমাদ আল রাজী)</p>
                        </li>
                        <li>
                            <p>013031547524 (নিলয় সরকার)</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-info text-center">
                    <ul>
                        <li>
                            <p><b>**</b>&nbsp;সবগুলো পার্সোনাল অ্যাকাউন্ট</p>
                        </li>
                        <li>
                            <p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="nogod" role="tabpanel" aria-labelledby="nogod-tab">
                <div class="acc-details text-center">
                    <ul>
                        <li>
                            <p>01670695630 (আহমাদ আল রাজী)</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-info text-center">
                    <ul>
                        <li>
                            <p><b>**</b>&nbsp;পার্সোনাল অ্যাকাউন্ট</p>
                        </li>
                        <li>
                            <p><b>**</b>&nbsp;রেফারেন্সে 'Corona' লিখতে ভুলবেন না</p>
                        </li>
                        <br>
                        <br>
                        <br>
                        <br>

                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="dbbl" role="tabpanel" aria-labelledby="dbbl-tab">
              <div class="acc-details text-center">
                  <ul>
                      <li>
                          <h4 class="bank-info">Shounok Rahman</h4>
                          <p>Dutch-Bangla Bank Ltd.</p>
                          <p>A/C No: 1201010309440</p>
                          <p>Branch: Khulna</p>
                          <p>Branch Code: 120</p>
                          <p>SWIFT Code: DBBLBDDH</p>
                          <p>Routing No: 090471544</p>
                      </li>
                      <li>
                          
                      </li>
                      <li>
                          
                      </li>
                  </ul>
              </div>
            </div>
        </div>

        <div class="footer-bottom bg-black-333" style="position: absolute;bottom: 0">
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
    </div>
</div>

@endsection