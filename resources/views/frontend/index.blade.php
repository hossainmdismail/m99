<?php
use App\Models\Config;

$config = Config::first();
?>
@extends('frontend.layouts.app')

@section('content')
    <!-- Modal -->
    <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="deal" style="background-image: url('assets/imgs/banner/menu-banner-7.png')">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day</h2>
                            <h5>Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden
                                    Design</a></h6>
                            <div class="product-price"><span class="new-price">$139.00</span><span
                                    class="old-price">$160.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"><span
                                    class="countdown-section"><span class="countdown-amount hover-up">03</span><span
                                        class="countdown-period"> days </span></span><span class="countdown-section"><span
                                        class="countdown-amount hover-up">02</span><span class="countdown-period"> hours
                                    </span></span><span class="countdown-section"><span
                                        class="countdown-amount hover-up">43</span><span class="countdown-period"> mins
                                    </span></span><span class="countdown-section"><span
                                        class="countdown-amount hover-up">29</span><span class="countdown-period"> sec
                                    </span></span></div>
                            <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i
                                    class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    @if ($config)
                        <h5 class="mb-5">{{ $config->name }}</h5>
                    @endif
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        @livewire('frontend.header-ads')
        @livewire('frontend.product')
        <section class="newsletter p-30 text-white wow fadeIn animated animated animated" style="visibility: visible;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt=""
                                    loading="lazy">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>discount for first
                                        shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated animated animated"
                            style="visibility: visible;">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
