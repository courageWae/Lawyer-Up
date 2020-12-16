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
                      @if(session()->has('message'))
                        <div class="alert {{session('alert') ?? 'alert-success'}}">
                          {{ session('message') }}
                        </div>
                      @endif  
                        <table class="table table-striped table-bordered">
                           <thead>
                              <tr style="background-color:rgb(245, 197, 66);">
                                <th colspan="10">List of Client Packages</th>
                              </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                  <th colspan="10" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>#</th>
                                  <th>Name of Client</th> 
                                  <th>Package Name</th>
                                  <th>Category</th>
                                  <th>Status</th>
                                  <th>Price</th>
                                  <th colspan="3">Actions</th>
                                </tr>
                                @isset($clientPackages)
                                 @foreach($clientPackages as $clientPackages)
                                  @if($clientPackages->user->insurer == auth()->user()->id)
                                <tr> 
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $clientPackages->user->name }}</td>
                                  <td>{{ $clientPackages->package->name }}</td>
                                  <td>{{ $clientPackages->category->name }}</td>
                                  <td>{{ $clientPackages->status }}</td>
                                  <td>{{ $clientPackages->category->price }}</td>
                                  <td>
                                    <a class="btn btn-primary" href="{{ route('insurer.view.package',['package'=>$clientPackages->id]) }}">View</a>    
                                  </td>
                                  <td>
                                  <a href="{{ route('insurer.delete.package',['package'=>$clientPackages->id]) }}" class="btn btn-danger delete-confirm">Delete</a>
                                  </td>
                                  @if($clientPackages->status == 'Inactive')
                                  <td>
                                    <a href="{{ route('insurer.activate.package',['package'=>$clientPackages->id]) }}" class="btn btn-warning delete-confirm">Activate</a>
                                  </td>
                                  @else
                                  <td>
                                    <a href="{{ route('insurer.deactivate.package',['package'=>$clientPackages->id]) }}" class="btn btn-dark delete-confirm">Deactivate</a>
                                  </td>
                                  @endif
                                </tr>
                                  @endif
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