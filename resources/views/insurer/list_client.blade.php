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
                    @include('insurer.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                              <tr style="background-color:rgb(245, 197, 66);">
                                <th colspan="6">List of Clients</th>
                              </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                  <th colspan="6" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>Name of Client</th>
                                  <th>Phone</th>
                                  <th>Email</th>
                                  <th>Action</th>
                                </tr>
                                @isset($client)
                                 @foreach($client as $client)
                                <tr>
                                  <td>{{ $client->name }}</td>
                                  <td>{{ $client->Email }}</td>
                                  <td>{{ $client->phone }}</td>
                                  <td class="btn btn-primary">View</td>
                                  <td class="btn btn-danger">Delete</td>
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