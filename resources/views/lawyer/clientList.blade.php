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
                        <h2>DashBoard</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>Dashboard</li>
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
                    @include('lawyer.dashbox')
                    <div class="col col-lg-9" style ="padding-left:20px;"> 
                        @if($hasBookLawyer != null)  
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr>
                                   <th style="background-color: rgb(235, 149, 52)" colspan="3">My Appointments</th>
                               </tr>
                            </thead>
                            <tbody> 
                               <tr>
                                   <th colspan="4" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;">Recent</span></th>
                               </tr>
                               <tr>
                                  <th>#</th>
                                  <th>Name of Client</th>
                                  <th>Phone Number</th>
                                  <th>Email Address</th>
                                  <th>Photo of Client</th>
                                </tr>
                                @foreach($hasBookLawyer as $hasBookLawyer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $hasBookLawyer->name_of_client }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $hasBookLawyer->phone_of_client }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $hasBookLawyer->email_of_client }}</td>
                                    <td style="padding:10px;font-size: 20px;">
                                      <a href="{{ asset('uploads/pictures/user/'.$hasBookLawyer->photo_of_client ) }}" target="blank">
                                        <img src="{{ asset('uploads/pictures/user/'.$hasBookLawyer->photo_of_client ) }}" alt="user image" width="40" height="40" style="border-radius: 20px;">
                                      </a>
                                    </td>
                                         
                                    <td style="padding:10px;font-size: 20px; color: red;">
                                      <button class ="btn btn-danger">Accept</button>
                                    </td>
                                    <td style="padding:10px;font-size: 20px; color: red;">
                                      <a class="btn btn-primary" href="{{ route('lawyer.client.view',$hasBookLawyer->id) }}">view</a>
                                    </td>
                                </tr>
                                @endforeach
                           </tbody>
                        </table>
                        @else
                        <center><strong>YOU HAVE NO REGISTERED CLIENTS YET</strong></center> 
                        @endif

                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection