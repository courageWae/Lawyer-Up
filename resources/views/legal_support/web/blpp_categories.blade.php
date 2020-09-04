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
                        <h2>Categories</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('Legal_Support_Packages') }}">Packages</a></li>
                            <li>BLPP</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
         


        <!-- start blog-grid-section -->
         <section class="blog-grid-section section-padding">
            <div class="container">
                <div class="news-grids">
                    <div class="grid">
                        
                        <div class="entry-details">
                            <div class="entry-body">
                               <h3>BRONZE </h3>
                                 <hr style="height:4px; background-color: blue;">
                                <p>
                                 <span style="font-size:20px; color:blue;">&raquo</span>
                                 Land Litigation
                                </p>    
                                <hr>
                                @if(auth()->user()->role_id == 4 )
                                <a class ="btn btn-success" href="{{ route('checkout') }}">Purchase Plan</a>
                                @elseif((auth()->user()->role_id == 3) && (auth()->user()->role_id == 2) && (auth()->user()->role_id == 1))
                                <h2>SORRY YOU CAN'T HAVE ACCESS TO THIS SERVICE</h2>
                                @else
                                <a class ="btn btn-success" href="/user_login">Purchase Plan</a>
                                @endif   
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-details">
                            <div class="entry-body">
                                <h3>SILVER</h3>
                                 <hr style="height:4px; background-color: blue;">
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <hr>
                                 @if(auth()->user()->role_id == 4 )
                                <a class ="btn btn-success" href="{{ route('checkout') }}">Purchase Plan</a>
                                @elseif((auth()->user()->role_id == 3) && (auth()->user()->role_id == 2) && (auth()->user()->role_id == 1))
                                <h2>SORRY YOU CAN'T HAVE ACCESS TO THIS SERVICE</h2>
                                @else
                                <a class ="btn btn-success" href="/user_login">Purchase Plan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-details">
                            <div class="entry-body">
                                <h3>GOLD</h3>
                                 <hr style="height:4px; background-color: blue;">
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <hr>
                                 @if(auth()->user()->role_id == 4 )
                                <a class ="btn btn-success" href="{{ route('checkout') }}">Purchase Plan</a>
                                @elseif((auth()->user()->role_id == 3) && (auth()->user()->role_id == 2) && (auth()->user()->role_id == 1))
                                <h2>SORRY YOU CAN'T HAVE ACCESS TO THIS SERVICE</h2>
                                @else
                                <a class ="btn btn-success" href="/user_login">Purchase Plan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div> <!-- end news-grids -->
            </div> <!-- end container -->
         </section> 
                <!-- end blog-grid-section     -->


        

@endsection