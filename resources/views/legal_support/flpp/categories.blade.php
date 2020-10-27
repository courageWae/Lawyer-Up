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
                            <li>FLPP</li>
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
                  @isset($categories)
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
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Traffic Offense
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 LandLord and Tenant Agreement
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Labour Issues
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Review of Independent Legal Documents ( 6-page max / doc. Max 5 per yr)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Contingency Discount for Legal Casse ( 10%)
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
                                    <h2>GH&cent{{ $categories->price }}</h2>
                                </center>
                                 <hr style="height:4px; background-color: blue;">
                                <p>
                                 <span style="font-size:20px; color:blue;">&raquo</span>
                                 Land Litigation
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Traffic Offense
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 LandLord and Tenant Agreement
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Labour Issues
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Wills (Simple)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Matrimonial Causes
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Statutory Declarations
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Estate Litigation
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Legal Consultation
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Initial minutes phone consultation for each new legal matter (up to 15min)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Initial Face to Face Consultation for each new legal matter (unlimited)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Review of independent legal documents (10-pages max/doc. Max 5 per yr)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 One letter by preferred lawyer per legal issue, limits on number of new legal mattes (5 per year)  
                                </p>
                                 <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 One Phone call per legal issue, limits on new legal matters per month (3 month)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                  Contigency discount for legal cases (15%) 
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
                    @elseif($categories->name == "gold")
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
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Traffic Offense
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 LandLord and Tenant Agreement
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Labour Issues
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Wills (Unlimited)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Probate and Letters of Administration(Non-Contentious)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Matrimonial Causes
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Statutory Declarations
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Estate Litigation
                                </p>
                                <p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Bail Applications
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Misdemeanor Trials
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Legal Consultation
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Initial minutes phone consultation for each new legal matter (up to 30min)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Initial Face to Face Consultation for each new legal matter (unlimited)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 Review of independent legal documents (10-pages max/doc. Max 10 per yr)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 One letter by preferred lawyer per legal issue, limits on number of new legal mattes (Unlimited)  
                                </p>
                                 <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                 One Phone call per legal issue, limits on new legal matters per month (5 month)
                                </p>
                                <p>
                                <span style="font-size:20px; color:blue;">&raquo</span>
                                  Contigency discount for legal cases (20%) 
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
                    @endif 
                  @endforeach 
                  @endisset 
                </div> <!-- end news-grids -->
            </div> <!-- end container -->
        </section>
        <!-- end blog-grid-section     -->


@endsection
</div>