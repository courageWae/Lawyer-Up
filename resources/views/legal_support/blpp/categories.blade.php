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
                            <li><a href="{{ route('legal.home') }}">Packages</a></li>
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
                    @foreach($categories as $categories)
                      @if($categories->name == "bronze")
                    <div class="grid">  
                        <div class="entry-details">
                            <div class="entry-body">
                              <center>
                                    <h3>{{ strtoupper($categories->name) }}</h3>
                                    <h2>GH&cent {{ $categories->price }}</h2>
                                </center>
                                 <hr style="height:4px; background-color: blue;">
                                <p>
                                 <span style="font-size:20px; color:blue;">&raquo</span>
                                 Land Litigation
                                </p>    
                                <hr>
                                @auth
                                  @if(Auth::user()->role_id == 4)
                                   <a class ="btn btn-success" href="{{ route('user.invoice',['category'=>$categories->id]) }}">Purchase Plan</a>
                                  @endif 
                                @endauth
                                @guest
                                <a class ="btn btn-success" href="/login">Purchase Plan</a>
                                @endguest   
                            </div>
                        </div>
                    </div>
                     @elseif($categories->name == "silver")
                    <div class="grid">
                        <div class="entry-details">
                            <div class="entry-body">
                              <center>
                                    <h3>{{ strtoupper($categories->name) }}</h3>
                                    <h2>GH&cent {{ $categories->price }}</h2>
                                </center>
                                 <hr style="height:4px; background-color: blue;">
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <hr>
                                @auth
                                  @if(Auth::user()->role_id == 4)
                                   <a class ="btn btn-success" href="{{ route('user.invoice',['category'=>$categories->id]) }}">Purchase Plan</a>
                                  @endif 
                                @endauth
                                @guest
                                <a class ="btn btn-success" href="/login">Purchase Plan</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                     @elseif($categories->name == "gold")
                    <div class="grid">
                        <div class="entry-details">
                            <div class="entry-body">
                                <center>
                                    <h3>{{ strtoupper($categories->name) }}</h3>
                                    <h2>GH&cent {{ $categories->price }}</h2>
                                </center>                                
                                 <hr style="height:4px; background-color: blue;">
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <hr>
                                @auth
                                  @if(Auth::user()->role_id == 4)
                                   <a class ="btn btn-success" href="{{ route('user.invoice',['category'=>$categories->id]) }}">Purchase Plan</a>
                                  @endif 
                                @endauth
                                @guest
                                <a class ="btn btn-success" href="/login">Purchase Plan</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div> <!-- end news-grids -->
            </div> <!-- end container -->
         </section> 
                <!-- end blog-grid-section     -->


        

@endsection