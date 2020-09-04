@extends('layouts/master')
@section('head')
   @include('layouts/head')
@endsection
@section('banner')
<header id="header" class="site-header header-style-5">
           
   <!-- start of hero -->   
        <section class="hero hero-slider-wrapper" >
            <div class="hero-slider hero-slider-style-1">
                <div class="slide">
                    <img src="assets/images/slider/slide-2.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-sm-9 slide-caption">
                                <h2>Welcome to Lexicon Support  Services. <span> SAVE TIME, SAVE MONEY</span></h2>
                                <p>We are here to work for you 24/7. Lexicon Support Services, Shielding families and businesses!!</p>
                                <!-- <div class="btns">
                                    <a href="#" class="theme-btn">About us</a>
                                    <a href="#" class="theme-btn-s2">Explore</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

@endsection

@section('content')
 <!-- start page-title -->      
   


 <!-- start of services -->
        <section class="section-padding services-grid-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title">
                            <h2>Our services</h2>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-5">
                    </div>
                    <div class="col col-lg-3 col-md-3">
                       <div class="all-service-link">
                            <a href="javascript:void(0)" class="theme-btn">All services</a>
                       </div>
                    </div>
                </div> <!-- end row -->
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids services-grid-view">
                            <div class="grid">
                               <div class="inner mk-bg-img">
                                    <div class="details ">
                                       <div class="info">
                                            <img src="assets/images/services/img_1.jpg" alt class="bg-image">
                                            <a href="service-single.html">
                                                <h3>Pay-Roll Managment System</h3>
                                            </a>
                                            <a class="btn btn-danger" href="#"> Get Details</a>
                                           
                                       </div>
                                    </div>
                               </div>
                            </div>
                            <div class="grid">
                               <div class="inner mk-bg-img">
                                    <div class="details ">
                                       <div class="info">
                                            <img src="assets/images/services/img_1.jpg" alt class="bg-image">
                                            <a href="service-single.html">
                                                <h3>Skills and Management Training</h3>
                                            </a>
                                            <a class="btn btn-danger" href="#"> Get Details</a>
                                           
                                       </div>
                                    </div>
                               </div>
                            </div>
                            <div class="grid">
                               <div class="inner mk-bg-img">
                                    <div class="details ">
                                       <div class="info">
                                            <img src="assets/images/services/img_1.jpg" alt class="bg-image">
                                            <a href="service-single.html">
                                                <h3> Business and Startup support</h3>
                                            </a>
                                            <a class="btn btn-danger" href="#">Get Details</a>
                                           
                                       </div>
                                    </div>
                               </div>
                            </div>
                            <div class="grid">
                               <div class="inner mk-bg-img">
                                    <div class="details ">
                                       <div class="info">
                                            <img src="assets/images/services/img_1.jpg" alt class="bg-image">
                                            <a href="service-single.html">
                                                <h3><i class="fi flaticon-construction"></i> Legal support</h3>
                                            </a>
                                            <a class="btn btn-danger" href="{{ route('Legal_Support_Home') }}"> Get Details</a>
                                       </div>
                                    </div>
                               </div>
                            </div>
                           
                        </div> <!-- end services-grids -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end of services -->

           <!-- start about-us-faq -->
  <section class="section-padding about-us-faq" id="about">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12">
                        <div class="about-us-section">
                            <div class="section-title-s3">
                                <span>About us</span>
                                <h2>Lexicon Support Services</h2>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-lg-6 col-lg-offset-1">
                        <div class="faq-section">
                            <div class="section-title-s3">
                                <span>FAQ</span>
                                <h2>All these years, our different services have delivered long lasting innovation</h2>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Ipsam voluptatem quia voluptas sit</a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Ted quia non numquam eius modi</a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Tempora incidunt ut labore</a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 -->                </div> <!-- end row -->
            </div> <!-- end container -->
  </section>
        <!-- end start about-us-faq --> 

   <!-- start contact-section -->
        <section class="contact-section section-padding parallax" id = "contact" data-bg-image="assets/images/contact-section-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-md-offset-1 col-md-5">
                        <div class="contact-section-contact-box">
                            <div class="section-title-white">
                                <h2>Contact</h2>
                            </div>
                            <div class="details">
                                <p>For any kind of query, contact us with the details below.</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> +123 (569) 254 78</li>
                                    <li><i class="fa fa-envelope"></i> info@lexiconservices.com</li>
                                    <li><i class="fa fa-home"></i> John nii owoo street 10, Accra-Ghana</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                        <div class="section-title-white">
                            <h2>CONTACT US NOW</h2>
                        </div>   
                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>

                        <div class="contact-form-s1 form">
                            <form method="post" class="wpcf7-form contact-validation-active" action="/lexicon_message">
                                {{ csrf_field() }}
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div>
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                                <div>
                                    <label>Message</label>
                                    <textarea rows="20" placeholder="Send us a message" name="message"></textarea>
                                </div>

                                <input type="hidden" value = "admin" name="destination">

                                <div class="submit-btn-wrap">
                                    <input value="Submit" class="theme-btn wpcf7-submit" type="submit">
                                </div>
                            </form>
                        </div>                     
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
            <div class="contact-women wow fadeInLeft">
                <img src="assets/images/contact-women.png" alt>
            </div>
        </section>
        <!-- end contact-section --> 
        <!-- start our-team -->
        <section class="our-team our-team-bg section-padding" id="team">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <h2>Our team</h2>
                            <p>Our Hardworking and Dedicated Team is Ever Ready to Support You</p>
                        </div>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="team-slider team-grids">
                            <div class="team-grid">
                                <div class="member-pic-social square-hover-effect-parent">
                                    <div class="square-hover-effect">
                                        <span class="hover-1"></span>
                                        <span class="hover-2"></span>
                                        <span class="hover-3"></span>
                                        <span class="hover-4"></span>
                                    </div>
                                    <div class="member-pic">
                                        <img src="assets/images/team/img-1.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h3>Simon Nertey</h3>
                                    <p>Director of the board</p>
                                </div>
                            </div>
                            <div class="team-grid">
                                <div class="member-pic-social square-hover-effect-parent">
                                    <div class="square-hover-effect">
                                        <span class="hover-1"></span>
                                        <span class="hover-2"></span>
                                        <span class="hover-3"></span>
                                        <span class="hover-4"></span>
                                    </div>
                                    <div class="member-pic">
                                        <img src="assets/images/team/img-3.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h3>Lizbeth MacClen</h3>
                                    <p>Director of the board</p>
                                </div>
                            </div>
                            <div class="team-grid">
                                <div class="member-pic-social square-hover-effect-parent">
                                    <div class="square-hover-effect">
                                        <span class="hover-1"></span>
                                        <span class="hover-2"></span>
                                        <span class="hover-3"></span>
                                        <span class="hover-4"></span>
                                    </div>
                                    <div class="member-pic">
                                        <img src="assets/images/team/img-1.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h3>Man Paul</h3>
                                    <p>Director of the board</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div> <!-- end container -->
        </section>
        <!-- end our-team -->         
    





@endsection