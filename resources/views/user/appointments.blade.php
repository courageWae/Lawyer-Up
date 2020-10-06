@extends('/layouts/web/master')
@section('head')
   @include('/layouts/web/head')
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
                    <!-- PACKAGE ONE -->
                    @include('user.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr style="background-color:rgb(245, 197, 66);">
                                   <th colspan="6">My Appointments</th>
                               </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                  <th colspan="6" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>Name of Lawyer</th>
                                  <th>Type of Lawyer</th>
                                  <th>Call Credits</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                  <th>Status</th>
                                </tr>
                                @forelse($book as $book)
                                <tr>
                                    <td style="padding:10px;font-size: 20px;">
                                         {{ $book->name_of_lawyer }}                  
                                    </td>
                                    <td style="padding:10px;font-size: 20px;">{{ $book->type_of_lawyer }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $book->call_credits }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $book->date }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $book->timeslot }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $book->status }}</td>
                                    <td style="padding:10px;font-size: 20px;">
                                      <a class="btn btn-primary"href = "{{ route('user.viewAppointment',['id'=>$book->id]) }}" >View</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" style = "color:red;">
                                        <center>YOU HAVE NO APPOINTMENT SCHEDULED</center>
                                    </td>
                                </tr>
                                @endforelse   
                           </tbody>
                        </table>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section --> 
@endsection