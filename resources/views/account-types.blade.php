@extends('layouts.pageLayout')
@section('content') 
         <!--=======Banner-Section Starts Here=======-->
        <section class="bg_img hero-section-2" data-background="https://Stockmutualinvest.net/assets/images/about/hero-bg2.jpg">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Plan</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.htm">Home</a>
                        </li>
                        <li>
                            Plan
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hero-shape">
                <img class="wow slideInUp" src="assets/images/about/hero-shape1.png" alt="about" data-wow-duration="1s">
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


          <!--=======Offer-Section Stars Here=======-->
        <section class="offer-section padding-top padding-bottom pb-max-md-0" id="plan">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="assets/images/balls/ball-group1.png" alt="balls">
            </div>
            <div class="ball-group-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="assets/images/balls/ball-group2.png" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">INVESTMENT OFFER</span>
                            <h2 class="title">OUR INVESTMENT PLANS</h2>
                            <p>
                                Trade Cryptocurrencies, Stock indexes, Commodities and Forex with a single Bitcoin-based platform.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="offer-wrapper">
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">Stock 1</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer1.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$350</span><span class="to">to</span><span class="max">$1000</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer2.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">10 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="{{ route('fund')}}" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">Stock 2</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer1.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$1000</span><span class="to">to</span><span class="max">$5000</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer2.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">15 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="{{ route('fund') }}" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">Stock 3</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer1.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$5000</span><span class="to">to</span><span class="max">$10,000</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer2.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">20 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="{{ route('fund') }}" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">Stock 4</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer1.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$10,000</span><span class="to">to</span><span class="max">$50,000</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="assets/images/offer/offer2.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">30 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="{{ route('fund') }}" class="custom-button">invest now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Offer-Section Ends Here=======-->
        
@endsection