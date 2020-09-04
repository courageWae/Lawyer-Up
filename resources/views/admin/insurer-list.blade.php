@extends('layouts/admin/master')

@section('content')
     <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">All Users</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('Legal_Support_Home') }}">Home</a></li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>
                        </div>
                    </div>
                </div>
               

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">INSURANCE COMPANIES</h4>
                                <h6 class="card-subtitle">Insurers<code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Full Name</th>
                                                <th>Image</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($insurer as $insurer)
                                            <tr>
                                                <td>{{ $insurer->id }}</td>
                                                <td>{{ $insurer->name }}</td>
                                                <td>
                                                    <span class="text-success"><img style = "width:70px;height:70px" src="{{ asset('uploads/insurer/'. $insurer->photo ) }}" alt></span>
                                                </td>
                                                <td>{{ $insurer->email }}</td>
                                                <td>{{ $insurer->phone }}</td>
                                                <td>
                                                    <form method="post" action = "/insurer/{{ $insurer->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                         <button class = "btn btn-danger" style="color:white;">Remove Insurer</button>     
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection