<!DOCTYPE html>
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
                        <h2>Business Life Protection Plan</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">PLANS</a></li>
                            <li>BLPP</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start service-singel-section -->
        <section class="service-singel-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-push-4">
                        <div class="service-single-content">
                            <div>
                                <img src="assets/images/service-single-info.jpg" alt>
                            </div>
                            <div class="title">
                                <h3>Business Life Protection Plan</h3>
                                <!-- <div class="download">
                                    <a href="#"><i class="fa fa-file-word-o"></i> Download Doc</a>
                                    <a href="#"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
                                </div> -->
                            </div>
                          <!--   <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>
                                <ul>
                                    <li><i class="fa fa-plus"></i> Mollis Pharetra Euismod Tellus Fermentum</li>
                                    <li><i class="fa fa-plus"></i> Vulputate sem Pellentesque Adipiscing</li>
                                    <li><i class="fa fa-plus"></i> Cursus sit Tortor Ligula Nullam</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>
                                <h4>Sem Aenean Pharetra</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>
                                <hr>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div> -->
                        </div> <!-- end service content -->
                    </div> <!-- end col -->
                    
                    <div class="col col-md-4 col-md-pull-8">
                        <div class="service-single-sidebar">
                            <div class="services-link-widget widget">
                                <h2>OUR PLANS</h2>
                                <ul>
                                    <li><a href="{{ route('legal.plans.flpp') }}">Family Life Protection Plan</a></li>
                                    <li><a href="{{ route('legal.plans.plpp') }}">Personal Life Protection Plan</a></li>
                                    <li class = "current"><a href="{{ route('legal.plans.blpp') }}">Business Life Protection Plan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end service-single-section -->

@endsection