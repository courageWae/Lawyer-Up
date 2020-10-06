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
                    @include('user.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">   
                        <div class="jumbotron">
                          <h1 class="display-4">Package Details</h1>
                          <hr class="my-4">
                          <p class="lead"><strong>Package Name :</strong> {{ $clientPackage->package_name }}</p>
                          <p><strong>Category  :</strong>{{ $clientPackage->category }}</p>
                          <p><strong>Package Price  :</strong> {{ $clientPackage->price }}</p>
                          <p><strong>Package Status  :</strong> {{ $clientPackage->status }}</p>
                          
                        </div>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section --> 
@endsection