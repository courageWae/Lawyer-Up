@extends('layouts.training.master')
@section('head')
   @include('layouts.training.head')
@endsection
@section('content')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Skill and Management Training</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>About us</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start offer -->
        <section class="section-padding offer-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="section-title-s3">
                            <h2> About Us </h2>
                        </div>                        
                        <div class="offer-text">
                            <p>
                                Lawyers should not be just for emergencies and we believe everyone deserves legal protection. Good legal advice helps individuals and businesses to make informed decisions about a variety of matters. Lexicon offers a platform with a network of lawyers with a wide range of specialties, who will offer all forms of legal services to members on the platform. Our business strategy incorporates on our platform, lawyers who are extremely qualified in their fields, and a highly responsive team, with good customer relationship skills, to manage the demands of our members.
                            </p>

                             <p>
                                These plans give members peace of mind because they have support with dealing with their legal issues, at any time. The services provided by the legal team include but not limited to consultations, drafting and review of documents, representation in courts and any other benefits on the plans. Members who sign up for the services will pay a monthly premium from as little as Ghs50 or an annual premium to enjoy the benefits specified in the various plans.
                             </p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <img src="{{ asset('assets/images/about-1.jpg') }}" alt>
                    </div>
                </div> <!-- end row -->
            </div> 
        </section>
        <!-- end offer -->  
@endsection