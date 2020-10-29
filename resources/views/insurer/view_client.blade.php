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
                    @include('insurer.dashBox')
                  <div class="col col-lg-8" style ="padding-left:20px;">
                    <h3>Clients Name</h3>
                    <div class = "well well-sm">{{ $client->name }}</div>
                    <h3>Clients Email</h3>
                    <div class = "well well-sm">{{ $client->email }}</div>
                    <h3>Clients Phone</h3>
                    <div class = "well well-sm">{{ $client->phone }}</div>
                    <div>
                      <a class = "btn btn-primary btn-lg" href="{{ route('insurer.list.client') }}">Back</a>
                    </div>
                  </div> 
                  
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection