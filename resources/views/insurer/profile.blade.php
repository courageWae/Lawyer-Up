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
                        <h2>DashBoard</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>Dashboard</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start products-section -->
        <section class="products-section shop section-padding">
            <div class="container">
                <div class="row products-grids">
                    <!-- PACKAGE ONE -->
                    @include('insurer.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">
                      <h2>Profile Details</h2><hr>  
                      <h4>Full Name</h4>
                      <div class="well well-sm">{{ Auth::user()->name }}</div>
                      <h4>User Name</h4>
                      <div class="well well-sm">{{ Auth::user()->user_name }}</div>
                      <h4>Email Address</h4>
                      <div class = "well well-sm">{{ Auth::user()->email }}</div>
                      <h4>Phone Number</h4>
                      <div class = "well well-sm">{{ Auth::user()->phone }}</div>
                      <a class = "btn btn-primary" href ="">Edit</a>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->      

@endsection