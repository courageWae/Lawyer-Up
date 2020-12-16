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
                        <h2>{{ Auth::user()->name }}</h2>
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
                    @include('lawyer.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">
                      <h2>Lawyer Details</h2><hr>   
                      <h4>Full Name</h4>
                      <div class="well well-sm">{{ Auth::user()->name }}</div>
                      <h4>Email Address</4>
                      <div class = "well well-sm">{{ Auth::user()->email }}</div>
                      <h4>Phone Number</h4>
                      <div class = "well well-sm">{{ Auth::user()->phone }}</div>
                      <h4>Address</h4>
                      <div class = "well well-sm">{{ Auth::user()->address }}</div>
                      <h4>House Address</h4>
                      <div class = "well well-sm">{{ Auth::user()->house_address }}</div>
                      <h4>Education</h4>
                      <div class = "well well-sm">{{ Auth::user()->education}}</div>
                      <h4>Type Of Lawyer</h4>
                      <div class = "well well-sm">{{ Auth::user()->type_of_lawyer }}</div>
                      <h4>Experience</h4>
                      <div class = "well well-sm">{{ Auth::user()->experience }}</div>
                      <h4>Personal Statement</h4>
                      <div class = "well well-sm">{{ Auth::user()->personal_statement }}</div>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection