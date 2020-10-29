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
                                <th colspan="10">List of Clients</th>
                              </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                  <th colspan="10" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>#</th>
                                  <th>Name of Client</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Package Name</th>
                                  <th>Category</th>
                                  <th>Price</th>
                                  <th>Total Price</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                                </tr>
                                @php ($i = 1)
                                @isset($allClientInvoice)
                                 @foreach($allClientInvoice as $allClientInvoice)
                                  @php($client = App\User::find($allClientInvoice->user_id))
                                  @php($package = App\Category::find($allClientInvoice->category_id))
                                <tr>
                                  <td>{{ $i }}</td>
                                  <td>{{ $client->name }}</td>
                                  <td>{{ $client->email }}</td>
                                  <td>{{ $client->phone }}</td>
                                  <td>{{ $package->package->name }}</td>
                                  <td>{{ $package->name }}</td>
                                  <td>{{ $package->price }}</td>
                                  <td>{{ $allClientInvoice->total }}</td>
                                  <td>{{ $allClientInvoice->status }}</td>
                                  <td>
                                    <a class="btn btn-primary" href="{{ route('insurer.view.invoice',['clientInvoice'=>$allClientInvoice->id]) }}">View</a>
                                  </td>
                                </tr>
                                 @php($i++)
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