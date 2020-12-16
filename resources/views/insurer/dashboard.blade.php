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
                        <h2>{{ auth()->user()->name }}</h2>
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
                    <div class="col col-lg-9">
                      <div class="row" >
                        <div class="col-sm-3" style="margin-bottom:20px;" >
                          <div class="card" style="background-color:#cedbda;padding:20px;border-radius:10px;">
                            <div class="card-body">
                              <center>
                                <h5 class="card-title">TOTAL NUMBER OF CLIENT</h5><hr>
                                <a href="#" style="font-size:70px">{{ count($insurerClient) }}</a>
                              </center>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3" style="margin-bottom:20px;" >
                          <div class="card" style="background-color:#cedbda; padding:20px;border-radius:10px;">
                            <div class="card-body">
                              <center>
                                <h5 class="card-title">TOTAL NUMBER OF ACTIVE PACKAGES</h5><hr>
                                <a href="#" style="font-size:70px">{{ count($activePackage) }}</a>
                              </center>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3" style="margin-bottom:20px;" >
                          <div class="card" style="background-color:#cedbda;padding:20px;border-radius:10px;">
                            <div class="card-body">
                              <center>
                                <h5 class="card-title">TOTAL NUMBER OF INACTIVE PACKAGES</h5><hr>
                                <a href="#" style="font-size:70px">{{ count($inActivePackage) }}</a>
                              </center>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3" style="margin-bottom:20px;" >
                          <div class="card" style="background-color:#cedbda;padding:20px;border-radius:10px;">
                            <div class="card-body">
                              <center>
                                <h5 class="card-title">TOTAL NUMBER OF INOVICES</h5><hr>
                                <a href="#" style="font-size:70px">{{ count($clientInvoice)}}</a>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->     

@endsection