@extends('layouts.web.master')
@section('head')
   @include('layouts.web.head')
@endsection
@section('content')

@push('sweet-alert')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This Invoice will be permanently deleted',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
@endpush

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
                    @include('insurer.dashBox')
                    <div class="col col-lg-9" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                              <tr style="background-color:rgb(245, 197, 66);">
                                <th colspan="10">List of Client Invoices</th>
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
                                @isset($clientsInvoice)
                                 @foreach($clientsInvoice as $clientsInvoice)
                                  @php
                                    $client = App\User::find($clientsInvoice->user_id);
                                    $package = App\Category::find($clientsInvoice->category_id);
                                  @endphp
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $client->name }}</td>
                                  <td>{{ $client->email }}</td>
                                  <td>{{ $client->phone }}</td>
                                  <td>{{ $package->package->name }}</td>
                                  <td>{{ $package->name }}</td>
                                  <td>{{ $package->price }}</td>
                                  <td>{{ $clientsInvoice->total }}</td>
                                  <td>
                                    {{ $clientsInvoice->status }}</td>
                                  <td>
                                    <a class="btn btn-primary" href="{{ route('insurer.view.invoice',['invoice_alias'=>$clientsInvoice->invoice_alias]) }}">View</a>    
                                  </td>
                                  <td>
                                  <a href="{{ route('insurer.delete.invoice',['invoice'=>$clientsInvoice->id]) }}" class="btn btn-danger delete-confirm">Delete</a>
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