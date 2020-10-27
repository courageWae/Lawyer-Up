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
                        <h2>DashBoard</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
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
                   @if(session()->has('message'))
                    <div class="alert {{session('alert') ?? 'alert-success'}}">
                     {{ session('message') }}
                    </div>
                   @endif

                    <!-- PACKAGE ONE -->
                    @include('lawyer.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;"> 
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr style="background-color:rgb(245, 197, 66);">
                                   <th colspan="5">My Appointments</th>
                               </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                   <th colspan="5" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>Name of Client</th>
                                  <th>Client Phone Number</th>
                                  <th>Email</th>
                                  <th>Expectance</th>
                                  <th>Call Credits</th>
                                  <th>Action</th>

                                </tr>
                                
                                @isset($lawyerAppointment)
                                @foreach($lawyerAppointment as $lawyerAppointment)
                                @php($client = App\User::find($lawyerAppointment->user_id))
                                <tr>
                                    <td style="padding:10px;font-size: 15px;">
                                     {{ $client->name }}                  
                                    </td>
                                    <td style="padding:5px;font-size: 15px;">{{ $client->phone }}</td>
                                    <td style="padding:5px;font-size: 15px;">{{ $client->email }}</td>
                                    <td style="padding:5px;font-size: 15px;">{{ $lawyerAppointment->timeslot }}</td>
                                    <td style="padding:5px;font-size: 15px;">{{ $lawyerAppointment->credits }}</td>
                                    
                                    <td style="padding:10px;font-size: 15px;">
                                      @if($lawyerAppointment->status == "pending")
                                      <a class="btn btn-warning delete-confirm" href = "{{ route('lawyer.approve',['book'=>$lawyerAppointment->id])}}">Meet Appointment
                                      </a>
                                      @else
                                      <button class="btn btn-success">{{ $lawyerAppointment->status }}</button>
                                      @endif   
                                    </td>
                                    <td style="padding:10px;font-size: 15px;">
                                      <a class="btn btn-primary" href = "{{ route('lawyer.appointment',['appointment'=>$lawyerAppointment->id]) }}">View</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset 
                                @empty($lawyerAppointment)
                                <tr>
                                  <td  colspan="4" style = "color:red;">
                                    <center>You Have no Active or Pending Packages</center>
                                  </td>     
                                </tr>
                                @endempty 
                           </tbody>
                        </table>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section --> 
         

@endsection