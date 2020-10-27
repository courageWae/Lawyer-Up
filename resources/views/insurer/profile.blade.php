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
                    @include('insurer.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">   
                      <h3>Full Name</h3>
                      <div class="well well-sm">{{ Auth::user()->name }}</div>
                      <h3>Email Address</h3>
                      <div class = "well well-sm">{{ Auth::user()->email }}</div>
                      <h3>Phone Number</h3>
                      <div class = "well well-sm">{{ Auth::user()->phone }}</div>

                      <div class = "btn btn-primary">Edit</div>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->      

@endsection