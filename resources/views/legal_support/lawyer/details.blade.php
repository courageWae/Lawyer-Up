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
                        <h2>Lawyer Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>Lawyer Details</li>
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
                            @if($lawyer->photo)
                            <div>
                                <img src="{{ asset('uploads/pictures/user/'. $lawyer->photo ) ?? asset('assets/images/user.png')}}" class="img img-responsive" alt>
                            </div>   
                            @else
                            <div>
                                <img src="{{ asset('assets/images/user.png') }}" style="width:100%; height:100%" class="img img-responsive" alt>
                            </div>
                            @endif
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
                                       {{ Session::put('lawyer_phone',$lawyer->phone )}}
                                    
                                        @auth
                                         @isset($packageStatus)
                                           <div class = "p-row" style = "padding-top: 20px;">
                                            <a class = "btn btn-success" href="{{ route('book',['lawyer'=>$lawyer->alias]) }}">Book Now</a>
                                           </div>
                                         @endisset
                                        @endauth
                                        @guest
                                           <div class = "p-row" style = "padding-top: 20px;">
                                            <a class = "btn btn-success" href="{{ route('login') }}">Book Now</a>
                                           </div>
                                        @endguest
                                </div>
                            </div> <!-- end option -->
                        </div> <!-- end product details -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of sop-details-main-content -->        

@endsection
