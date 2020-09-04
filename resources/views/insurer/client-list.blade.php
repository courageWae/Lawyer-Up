@extends('layouts/insurer/master')

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
                                <li class="breadcrumb-item"><a href="{{ route('Legal_Home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Client List</li>
                            </ol>
                        </div>
                    </div>
                </div>
               

               <!--  Users and Lawyers -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clients Table</h4>
                                <h6 class="card-subtitle">Clients <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Full Name</th>
                                                <th>Image</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Packages</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><span class="text-success"></span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>     
                                                <td><a class = "btn btn-danger" style="color:white;">Remove Client</a></td>    
                                            </tr>
                                  

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