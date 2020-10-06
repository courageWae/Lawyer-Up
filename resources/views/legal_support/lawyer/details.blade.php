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
                        <h2>Shop Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('Legal_Support_Home') }}">Home</a></li>
                            <li>Shop Details</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start sop-details-main-content -->
        <section class="shop-details-main-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="shop-single-slider-wrapper">    
                            <div><img src="{{ asset('uploads/pictures/user/'. $lawyer->photo ) }}" class="img img-responsive" alt></div>   
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="product-details">
                            <h2>Barrister {{ $lawyer->name }}</h2>
                            <p>{{ $lawyer->email }}</p>
                            <p>{{ $lawyer->type_of_lawyer}}</p>
                            <div class="product-option">
                                <div class="form">
                                    <div class="p-row">
                                        <div>
                                            <img src = "{{asset('assets/images/facebook.png') }}">
                                        </div>
                                        <div>
                                           <img src="{{asset('assets/images/twitter.png') }}">
                                        </div>
                                         <div>
                                            &nbsp&nbsp&nbsp&nbsp
                                        </div>
                                        <div>
                                            <img src="{{asset('assets/images/msg.png') }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card" style="width: 35rem;">
                                      <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h3>Personal Statement</h3>
                                            <p>{{ $lawyer->personal_statement }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <h3>Experience</h3>
                                            <p>{{ $lawyer->experience }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <h3>Education</h3>
                                            <p>{{ $lawyer->education }}</p>
                                        </li>
                                      </ul>
                                    </div>
                                  
                                    {{ Session::put('lawyer_name',$lawyer->name) }}
                                    {{ Session::put('lawyer_type',$lawyer->type_of_lawyer)}}
                                    {{ Session::put('lawyer_id',$lawyer->id)}}
                                    {{ Session::put('lawyer_email',$lawyer->email )}}
                                    {{ Session::put('lawyer_photo',$lawyer->photo )}}
                                    {{ Session::put('lawyer_phone',$lawyer->phone )}}
                                    
                                    @if(count($clientPackage) && auth()->check())
                                      @foreach($clientPackage as $clientPackage)
                                        @if(($clientPackage->client_email == auth()->user()->email) && (auth()->user()->role_id == 4) && ($clientPackage->status == "Active"))
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="{{ route('book',[$lawyer->id]) }}">Book Now</a>
                                         </div>
                                        @endif 
                                      @endforeach
                                    @else
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="{{ route('Legal_Support_Packages') }}">Book Now</a>
                                         </div>
                                    @endif 
                                </div>
                            </div> <!-- end option -->
                        </div> <!-- end product details -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of sop-details-main-content -->        

@endsection
