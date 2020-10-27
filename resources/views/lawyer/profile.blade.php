@extends('/layouts/web/master')
@section('head')
   @include('/layouts/web/head')
@endsection
@section('content')


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>DashBoard</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
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
                      <h3>Full Name</h3>
                      <div class="well well-sm">{{ Auth::user()->name }}</div>
                      <h3>Email Address</h3>
                      <div class = "well well-sm">{{ Auth::user()->email }}</div>
                      <h3>Phone Number</h3>
                      <div class = "well well-sm">{{ Auth::user()->phone }}</div>
                      <h3>Address</h3>
                      <div class = "well well-sm">{{ Auth::user()->address }}</div>
                      <h3>House Address</h3>
                      <div class = "well well-sm">{{ Auth::user()->house_address }}</div>
                      <h3>Education</h3>
                      <div class = "well well-sm">{{ Auth::user()->education}}</div>
                      <h3>Type Of Lawyer</h3>
                      <div class = "well well-sm">{{ Auth::user()->type_of_lawyer }}</div>
                      <h3>Experience</h3>
                      <div class = "well well-sm">{{ Auth::user()->experience }}</div>
                      <h3>Personal Statement</h3>
                      <div class = "well well-sm">{{ Auth::user()->personal_statement }}</div>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection