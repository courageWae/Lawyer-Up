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
                        <h2>Lawyers</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
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
                <div class="row">
                    @forelse($lawyer as $lawyer)
                    <div class="col col-lg-3">
                    <div class="card" style="width: 18rem;"> 
                      <img class="card-img-top" style = "width:100%; height:250px;"src="{{ asset('uploads/pictures/user/'. $lawyer->photo ) }}" alt="Lawyers Photo">
                      <div class="card-body"><br>
                        <center>
                            <h5 class="card-title">{{ strtoupper($lawyer->name) }}</h5>
                            <p class="card-text">{{ $lawyer->type_of_lawyer }}</p>
                            <a href="{{ route('legal.lawyer.details',['lawyer'=>$lawyer->alias]) }}" class="btn btn-danger">View Details</a>
                        </center>
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