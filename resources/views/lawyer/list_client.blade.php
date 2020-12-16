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
                        <h2>{{ Auth::user()->name }}</h2>
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
                    @include('lawyer.dashBox')
                    <div class="col col-lg-9" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                              <tr style="background-color:rgb(245, 197, 66);">
                                <th colspan="8">List of Clients</th>
                              </tr>
                            </thead>
                            <tbody>
                            @isset($client)         
                               <tr>
                                  <th colspan="8" style="padding:15px;">
                                    
                                  </th>
                               </tr>
                               <tr>
                                  <th>#</th>
                                  <th>Name of Client</th>
                                  <th>User Name</th>
                                  <th>Phone</th>
                                  <th>Email</th>
                                  <th>Photo</th>
                                  <th>Appointment Status</th>
                                  <th>Action</th>
                                </tr>
                                @foreach($client as $client)
                                  @php($isClient = App\User::find($client->user_id))   
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $isClient->name }}</td>
                                  <td>{{ $isClient->user_name }}</td>
                                  <td>{{ $isClient->phone }}</td>
                                  <td>{{ $isClient->email }}</td>
                                  <td>
                                    <a href="{{ asset('uploads/pictures/user/'.$isClient->photo) }}" target="blank">
                                      <img src="{{ asset('uploads/pictures/user/'.$isClient->photo) }}" style="width:40px;height:40px;">
                                    </a>       
                                  </td>
                                  <td> {{ $client->status }}</td>
                                  <td>
                                    <a class = "btn btn-primary" href="{{ route('lawyer.view.client',['id'=>$client->id]) }}">View</a>
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