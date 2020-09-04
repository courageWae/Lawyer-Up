@extends('layouts/web/master')

@section('head')
   @include('layouts/web/head')
@endsection
@section('content')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Lawyers</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Lawyers</li>
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
                    @forelse($lawyer as $lawyer)
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">                                
                                    <img src="{{ asset('uploads/lawyer/'. $lawyer->photo ) }}" >                          
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><i class = "fa fa-facebook"></i></a>
                                    </div>
                                    <div>
                                        <a href="#"><i class = "fa fa-twitter"></i></a>
                                    </div>
                                    <div>
                                        <a href="#"><i class = "fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <p style="font-size: 20px; font-weight: bolder;">{{ $lawyer->name }}</p>
                                <p style="font-size: 25px; font-weight: bold;">{{ $lawyer->type_of_lawyer }}</p>
                                {{ $lawyer->email }}
                                <hr>
                                <div style = "display: inline-block;">
                                   <a class="btn btn-danger" href="/lawyer_details/{{ $lawyer->id }}"> View Details</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    <center><h2>There no Lawyers listed</h2></center>

                    @endforelse

                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       
@endsection