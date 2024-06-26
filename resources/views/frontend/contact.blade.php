@extends('frontend.layouts.app')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('index') }}" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Contact us
                </div>
            </div>
        </div>
        <section class="hero-2 bg-green">
            <div class="hero-content">
                <div class="container">
                    <div class="text-center">
                        <h4 class="text-brand mb-20">Get in touch</h4>
                        <h1 class="mb-20 wow fadeIn animated font-xxl fw-900">
                            Let's Talk About <br>Your <span class="text-style-1">Idea</span>
                        </h1>
                        <p class="w-50 m-auto mb-50 wow fadeIn animated">e99shop has become a premier e-commerce platform in
                            Bangladesh, offering the largest online hypermarket in the country to help you save both time
                            and money.</p>
                        <p class="wow fadeIn animated">
                            <a class="btn btn-brand btn-lg font-weight-bold text-white border-radius-5 btn-shadow-brand hover-up"
                                href="{{ route('index') }}">About Us</a>
                            {{-- <a class="btn btn-outline btn-lg btn-brand-outline font-weight-bold text-brand bg-white text-hover-white ml-15 border-radius-5 btn-shadow-brand hover-up">Support Center</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-border pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-15 text-brand">Office</h4>
                        Newmarket 1205 Dhaka, Dhaka Division, Bangladesh<br>
                        <abbr title="Phone">Phone:</abbr> +8801521-435540<br>
                        <abbr title="Email">Email: </abbr><a>info@e99shop.com</a><br>
                    </div>
                    {{-- <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-15 text-brand">Studio</h4>
                    205 North Michigan Avenue, Suite 810<br>
                    Chicago, 60601, USA<br>
                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                    <abbr title="Email">Email: </abbr><a href="https://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="42212d2c362321360207342330236c212d2f">[email&#160;protected]</a><br>
                    <a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-10"></i>View map</a>
                </div> --}}
                    <div class="col-md-6">
                        <h4 class="mb-15 text-brand">Warehouse</h4>
                        Newmarket 1205 Dhaka, Dhaka Division, Bangladesh<br>
                        <abbr title="Phone">Phone:</abbr> +8801521-435540<br>
                        <abbr title="Email">Email: </abbr><a>info@e99shop.com</a><br>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
