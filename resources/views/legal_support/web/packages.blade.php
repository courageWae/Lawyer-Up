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
                        <h2>Packages</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>packages</li>
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
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <!-- <img src="assets/images/shop/img-4.jpg" alt class="img img-responsive"> -->
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="#">FAMILY LEGAL PROTECTION PLAN</a></h3>
                                 <span class="price"> starting from GH&cent 300</span>
                                <hr>
                                <span>
                                    <h3><a href="#">BENEFITS</a></h3>
                                    <hr>
                                    <ul>
                                        <p>Initial phone consultation about any legal issue</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Initial face to face consultation about any legal issue</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on land litigation</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on tenant and land lord agreement</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on labor and employment disputes</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on the drafting and execution of Wills</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on probate and letters of administration</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on matrimonial cases</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on bail applications</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on misdemeanor trials</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on defamation and libel trail</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on estate litigations</p>
                                    </ul>
                                </span>
                                <a class="btn btn-danger" href="{{ route('flpp') }}">Read More</a> 
                                <a class="btn btn-success" href="{{ route('flpp_cat') }}">Categories</a>
                                  
                            </div>
                        </div>
                    </div>

                    <!-- PACKAGE TW0 -->
                     <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <!-- <img src="assets/images/shop/img-4.jpg" alt class="img img-responsive"> -->
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="#">BUSINESS LEGAL PROTECTION PLAN</a></h3>
                                 <span class="price">starting from GH&cent 400</span>
                                <hr>
                                <span>
                                    <h3><a href="#">BENEFITS</a></h3>
                                    <hr>
                                    <ul>
                                        <p>Legal Services on Labor and Employment Disputes</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal Sevices on Statutory Declarations</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Initial phone consultation about any legal issue</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Initial face to face consultation about any legal issue</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on land litigation</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on tenant and land lord agreement</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on labor and employment disputes</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on the drafting and execution of Wills</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on probate and letters of administration</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on matrimonial cases</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on bail applications</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on misdemeanor trials</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on defamation and libel trail</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on estate litigations</p>
                                    </ul>
                                </span>
                                <a class="btn btn-danger" href="{{ route('blpp') }}">Read More</a>
                                <a class="btn btn-success" href="{{ route('blpp_cat') }}">Categories</a>
                                
                            </div>
                        </div>
                    </div>
                    <!-- PACKAGE THREE -->
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <!-- <img src="assets/images/shop/img-4.jpg" alt class="img img-responsive"> -->
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="#">PERSONAL LIFE PROTECTION</a></h3>
                                 <span class="price">starting from GH&cent 300</span>
                                <hr>
                                <span>
                                    <h3><a href="#">BENEFITS</a></h3>
                                    <hr>
                                    <ul>
                                        <p>Initial phone consultation about any legal issue</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Initial face to face consultation about any legal issue</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on land litigation</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on tenant and land lord agreement</p>
                                        <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on labor and employment disputes</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on the drafting and execution of Wills</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on probate and letters of administration</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on matrimonial cases</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                         <p>Legal Services on statutory Declarations</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on bail applications</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on misdemeanor trials</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on defamation and libel trail</p>
                                         <hr style="width:20px;height: 2px; background-color:yellow;">
                                        <p>Legal services on estate litigations</p>
                                    </ul>
                                </span>
                                <a class="btn btn-danger" href="{{ route('plpp') }}">Read More</a>
                                <a class="btn btn-success" href="{{ route('plpp_cat') }}">Categories</a> 
                            </div>
                        </div>
                    </div>

                    

                </div> <!-- end row -->

               
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection