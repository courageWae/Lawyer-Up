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
                            <p>{{ $lawyer->personal_statement }}</p>

                            <div class="product-option">
                                <form action="#" class="form">
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
                                    @if(count($clientPackage))
                                      @foreach($clientPackage as $clientPackage)
                                        @if(($clientPackage->client_email == auth()->user()->email) && (auth()->user()->role_id == 4))
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="#">Book Now</a>
                                         </div>
                                        @else
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="{{ route('Legal_Support_Packages') }}">Book Now</a>
                                         </div>
                                        @endif 
                                      @endforeach

                                    @else
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="{{ route('Legal_Support_Packages') }}">Book Now</a>
                                         </div>
                                    @endif 
                                </form>
                            </div> <!-- end option -->
                        </div> <!-- end product details -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="product-info">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#description" data-toggle="tab">Experience</a></li>
                                <li><a href="#tags" data-toggle="tab">Education</a></li>
                                 <li><a href="#review" data-toggle="tab">Contact Lawyer</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="description">
                                   <p>{{ $lawyer->experience }}</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="review">
                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="client-review">
                                                
                                                <div class="details">
                                                    <div class="name-rating-time">
                                                        <div class="name-rating">
                                                            <div>
                                                                <h4>Email Address</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{ $lawyer->email }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="client-review">
                                                
                                                <div class="details">
                                                    <div class="name-rating-time">
                                                        <div class="name-rating">
                                                            <div>
                                                                <h4>Facebook</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{ $lawyer->name }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="client-review">
                                                <div class="details">
                                                    <div class="name-rating-time">
                                                        <div class="name-rating">
                                                            <div>
                                                                <h4>Twitter</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{ $lawyer->name }}@twitter.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col col-md-6 review-form-wrapper">
                                            <div class="review-form">
                                                <h4>Send a personal message to Barrister {{ $lawyer->name }}</h4>
                                                <form method="post" action="{{ route('lawyer.message') }}">
                                                    {{ csrf_field() }}
                                                    <div>
                                                        <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                                                    </div>
                                                    <div>
                                                        <input type="email" name="email" class="form-control" placeholder="Email *" required>
                                                    </div>
                                                    <div>
                                                        <input type="phone" name = "phone" class="form-control" placeholder="Pnone number *" required>
                                                    </div>
                                                    <div>
                                                        <textarea class="form-control" name="message" placeholder="Message *"></textarea>
                                                    </div>
                                                    <input type="hidden" value="LAWYER - {{ $lawyer->name }}" name ="destination">
                                                    <div>
                                                        <button type="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tags">
                                    <p>{{ $lawyer->education }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of sop-details-main-content -->        

@endsection
