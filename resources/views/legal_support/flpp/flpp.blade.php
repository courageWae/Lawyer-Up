<!DOCTYPE html>
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
                        <h2>Family Life Protection Plan</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">PLANS</a></li>
                            <li>FLPP</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start service-singel-section -->
        <section class="service-singel-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-push-4">
                        <div class="service-single-content">
                            <div>
                                <img src="assets/images/flpp.png" alt>
                            </div>
                            <div class="title">
                                <h3>Family Life Protection Plan</h3>
                                <!-- <div class="download">
                                    <a href="#"><i class="fa fa-file-word-o"></i> Download Doc</a>
                                    <a href="#"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
                                </div> -->
                            </div>
                            <div class="details">
                                <p>
                                   This policy provides cover for individuals against unexpected legal costs. These legal costs are usually high and unforeseen.

                                   This product seeks to protect or minimize the shock usually associated with the notoriously high legal fees demanded by lawyers in a legal case. In Ghana, cost of procuring the services of Lawyers are usually expensive, often ranging in thousands of Ghana Cedis. Many people who would benefit from legal counsel end up getting the short end of the stick because they can't afford a lawyer. Most low-income individuals and Small and Medium Enterprises do not get the help they need because they simply can't afford the fees. This is further compounded due to the fact that unpredictability in the timing for the need of a lawyer.  Legal insurance is therefore a great and relatively inexpensive option when you need guidance or you're not sure you understand your legal rights. 

                                   The Lexicon Legal Protect policy facilitates ready and easy access to legal representation through providing legal advice and covering legal costs of a dispute, regardless of whether the case is brought by or against the policyholder.
                               </p>
                               <p>
                                    It is worth noting that the Lexicon Legal Protect policy is a "Before the event" legal protection policy. This means that it     provides cover for Individuals, family or businesses who seek to protect themselves against possible future claims. It has to be  purchased before any case requiring legal advice is required.  It cannot be used as an After the event policy.

                                    The Policyholder commits to make monthly/annual premium at the beginning of the policy term. This category has a standard and comprehensive type of plans with possible riders based on the selected package within the selected category.
                                </p>
                                <ul>
                                    <li><i class="fa fa-plus"></i> HOW IT WORKS</li>
                                </ul>
                                <p>
                                    Lexicon Legal Protect product is underpinned by IT platform which allows policyholders to interact and seek legal advice from lawyers who are extremely qualified in their fields. This helps ensure a highly responsive service that meets the legal needs of Ghanaians at very competitive prices. With good customer relationship skills, the team will attend to the demands of our cherish clients.

                                    Policyholders will have the option to pay either monthly or annual premium. This in turn will allow policyholders, free and convenient access to legal advice and assistance at their point of need.

                                    Prospective clients will purchase product from the insurance firm as a stand-alone, rider or embedded product based on the distribution preference of the insurer. Members shall be entitled to opt for the services of their own lawyers
                                </p>
                                
                                <!-- HOW IT WORKS -->
                                @include('layouts/web/how')

                                <hr>
                                <a href="{{ route('Legal_Support_Packages') }}" class="btn btn-success">View Benefits</a>
                            </div>
                        </div> <!-- end service content -->
                    </div> <!-- end col -->
                    
                    <div class="col col-md-4 col-md-pull-8">
                        <div class="service-single-sidebar">
                            <div class="services-link-widget widget">
                                <h2>OUR PLANS</h2>
                                <ul>
                                    <li class="current"><a href="{{ route('flpp') }}">Family Life Protection Plan</a></li>
                                    <li><a href="{{ route('plpp') }}">Personal Life Protection Plan</a></li>
                                    <li><a href="{{ route('blpp') }}">Business Life Protection Plan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end service-single-section -->

@endsection