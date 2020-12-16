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
                    @include('user.dashBox')
                    <div class="col col-lg-9" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr style="background-color:rgb(245, 197, 66);">
                                   <th colspan="10">My Appointments</th>
                               </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                  <th colspan="10" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>#</th>
                                  <th>Name of Lawyer</th>
                                  <th>Type of Lawyer</th>
                                  <th>Call Credits</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                  <th>Status</th>
                                  <th colspan="3">Action</th>
                                </tr>
                                @isset($booking)
                                 @foreach($booking as $booking)
                                  @php( $lawyer = App\User::find($booking->lawyer_id))         
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lawyer->name }}</td>
                                    <td>{{ $lawyer->type_of_lawyer}}</td>               
                                    <td>{{ $booking->credits }}</td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->timeslot }}</td>
                                    <td>{{ $booking->status }}</td>
                                    <td>
                                      <a class="btn btn-primary" href = "{{ route('user.viewAppointment',['booking'=>$booking->id]) }}">View
                                      </a>
                                    </td>
                                    <td>
                                      <a class="btn btn-success" href = "{{ route('user.viewAppointment',['booking'=>$booking->id]) }}">Edit
                                      </a>
                                    </td>
                                    <td>
                                      <a class="btn btn-danger" href = "{{ route('user.viewAppointment',['booking'=>$booking->id]) }}">Cancel
                                      </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                           </tbody>
                        </table>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section --> 
@endsection