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
                    @include('insurer.dashBox')
                  <div class="col col-lg-8" style ="padding-left:20px;">
                    <h2>Client Package Details</h2><hr>
                    <h4>Client's Name</h4>
                    <div class = "well well-sm">{{ $package->user->name }}</div>
                    <h4>Client's Package Name</h4>
                    <div class = "well well-sm">{{ $package->package->name }}</div>
                    <h4>Client's Package Category Name</h4>
                    <div class = "well well-sm">{{ $package->category->name }}</div>
                    <h4>Client's Package Status</h4>
                    <div class = "well well-sm">{{ $package->status }}</div>
                    <div>
                      <a class = "btn btn-primary btn-lg" href="{{ route('insurer.list.package') }}">Back</a>
                    </div>
                  </div> 
                  
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection