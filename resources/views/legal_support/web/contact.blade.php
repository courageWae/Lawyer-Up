@extends('layouts/web/master')
@section('head')
   @include('layouts/web/head')
@endsection

@section('content')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start contact-pg-section -->
        <section class="contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <div class="icon"><i class="fa fa-phone"></i></div>
                                    <p><span>Hotline</span> +1 478 (2492) 54 </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <p><span>Email</span> support@industrial.com  </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                                    <p><span>Working Hours:</span> +1 478 (2492) 54 </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                    <p><span>Office</span> 1802 Stout Rd, Menomonie,WI 54751 </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-offset-1 col-md-8">
                        
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3970.488798115422!2d-0.2155061!3d5.6421824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9bf17be6647d%3A0x3f0496356d82a81f!2sJohn%20Nii%20Owoo%20Street%2C%20Accra!5e0!3m2!1sen!2sgh!4v1597342956340!5m2!1sen!2sgh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                    </div>
                </div> <!-- end row -->
                <div class="row">
                    <div class="col col-xs-12">
                        <!-- Contact forms -->
                        <form class="contact-form form "  method="post" action="/legal_support_message">
                            {{ csrf_field() }}
                            <div class="col col-sm-6">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col col-sm-6">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col col-sm-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>
                                <input type="hidden" class="form-control" id="destination" name="destination" value="admin">
                            <div class="col col-sm-12 submit-btn">
                                <button class="theme-btn" type="submit">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-section -->

@endsection