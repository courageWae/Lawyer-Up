@extends('layouts/web/master')
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
                    @include('lawyer.dashbox')
                    @php($client = App\User::find($book->user_id))
                    <div class="col col-lg-8" style ="padding-left:20px;"> 
                      <h3>Client Name</h3>
                      <div class = "well well-sm">{{ $client->name }}</div>
                      <h3>Phone of Client</h3>
                      <div class = "well well-sm">{{ $client->phone }}</div>
                      <h3>Call Credits</h3>
                      <div class = "well well-sm">{{ $book->credits }}</div>
                      <h3>Appointment Date</h3>
                      <div class = "well well-sm">{{ $book->date }}</div>
                      <h3>Appointment Expectance</h3>
                      <div class = "well well-sm">{{ $book->timeslot }} </div>
                      <h3>Appointment Status</h3>
                      <div class = "well well-sm">{{ $book->status }}</div>
                      <div>
                        <a class = "btn btn-primary btn-lg" href ="">Back</a>
                      </div>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection