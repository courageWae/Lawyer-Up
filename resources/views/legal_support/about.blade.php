@extends('layouts.web.master')
@section('head')
   @include('layouts.web.head')
@endsection
@section('content')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>About us</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>About us</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start offer -->
        <section class="section-padding offer-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="section-title-s3">
                            <h2> About Us </h2>
                        </div>                        
                        <div class="offer-text">
                            <p>
                                Lawyers should not be just for emergencies and we believe everyone deserves legal protection. Good legal advice helps individuals and businesses to make informed decisions about a variety of matters. Lexicon offers a platform with a network of lawyers with a wide range of specialties, who will offer all forms of legal services to members on the platform. Our business strategy incorporates on our platform, lawyers who are extremely qualified in their fields, and a highly responsive team, with good customer relationship skills, to manage the demands of our members.
                            </p>

                             <p>
                                These plans give members peace of mind because they have support with dealing with their legal issues, at any time. The services provided by the legal team include but not limited to consultations, drafting and review of documents, representation in courts and any other benefits on the plans. Members who sign up for the services will pay a monthly premium from as little as Ghs50 or an annual premium to enjoy the benefits specified in the various plans.
                             </p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                       
                            <img src="{{ asset('assets/images/about-1.jpg') }}" alt>
                
                    </div>
                </div> <!-- end row -->
                <div class="row"> 
                    <div class="col col-md-7">     
                            <img src="{{ asset('assets/images/about-1.jpg') }}" alt>
                    </div>
                    <div class="col col-md-5">
                        <div class="section-title-s3">
                            <h2>Our Mission</h2>
                        </div>                        
                        <div class="offer-text">
                            <p>
                                Most individuals and/or businesses will need some type of assistance to manage a common legal issue at some time in their lives and/or businesses. However, hiring or retaining a lawyer can be intimidating and most often than not prohibitively expensive, costing thousands of cedis an hour. For small and upcoming businesses, these sudden costs can have a downturn on their cashflows. For the individuals, because of the high cost of hiring a lawyer, they often resort to trying to solve issues on their own, thereby turning legal questions into legal problems.
                            </p>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> 
        </section>
        <!-- end offer -->  


        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="{{asset('assets/images/cta-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2> We are Here to Help you <span>Get the peace of mind you want and the protection you need with a legal plan for as low as GHC 50/month</span></h2>
                        <a href="{{ route('legal.plans') }}" class="theme-btn-s5">Get a Plan</a>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta -->


       <!--
        <section class="features section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="features-title">
                            <h2>Why we are best</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-4">
                        <div class="feature-grid">
                            <div class="icon">
                                <i class="fi flaticon-people"></i>
                            </div>
                            <div class="details">
                                <h3>Expert Engineers</h3>
                                <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                                <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-4">
                        <div class="feature-grid">
                            <div class="icon">
                                <i class="fi flaticon-support"></i>
                            </div>
                            <div class="details">
                                <h3>Customer Support</h3>
                                <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                                <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-4">
                        <div class="feature-grid">
                            <div class="icon">
                                <i class="fi flaticon-time-passing"></i>
                            </div>
                            <div class="details">
                                <h3>Delivery On time</h3>
                                <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                                <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         end features -->


        


        <!-- start fun-fact 
        <section class="fun-fact">
            <div class="container">
                <div class="row start-count">
                    <div class="col col-sm-4">
                        <div class="grid">
                            <h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
                            <span class="fact-title">Projects</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="grid">
                            <h3><span class="counter" data-count="800">00</span><span>+</span></h3>
                            <span class="fact-title">Clients</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="grid">
                            <h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
                            <span class="fact-title">satisfaction</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         end fun-fact -->


        <!-- start partners -->
        <section class="section-padding partners partners-bg">
            <center><h3>Our Partners</h3></center>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partners-slider">
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/bima.jpg') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/enterprise.png') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/serene.png') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('assets/images/partners/star.png') }}" alt>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end partners -->


@endsection