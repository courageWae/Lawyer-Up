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
               

               <!--  Users and Lawyers -->
                <div class="row">
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">LAWYERS</h4>
                                <h6 class="card-subtitle">Lawyers <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th class="text-center">#ID</th>
                                            <th>IMAGE</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>ADDRESS</th>
                                            <th>HOUSE ADDRESS</th>
                                            <th>TYPE OF LAWYER</th>
                                            <th>PERSONAL STATEMENT</th>
                                            <th>EDUCATION</th>
                                            <th>EXPERIENCE</th>                
                                            <th>DATE REGISTERED</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lawyer as $lawyer)
                                        <tr>
                                            <td class="text-center">{{ $lawyer->id }}</td>
                                            <td><span class="text-success"><img style = "width:70px;height:70px" src="{{ asset('uploads/lawyer/'. $lawyer->photo ) }}"></span></td>
                                            <td>{{ $lawyer->name }}</td>
                                            <td class="txt-oflo">{{ $lawyer->email }}</td>
                                            <td class="txt-oflo">{{ $lawyer->phone }}</td>
                                            <td>
                                                <span>
                                                    {{ $lawyer->address_name }}<br>
                                                    {{ $lawyer->address_number }}<br>
                                                    {{ $lawyer->address_city }}
                                                </span>
                                            </td>
                                            <td><span >{{ $lawyer->house_address }}</span></td>
                                            <td><span >{{ $lawyer->type_of_lawyer }}</span></td>
                                            <td><span >{{ $lawyer->personal_statement }}</span></td>
                                            <td><span >{{ $lawyer->education }}</span></td>
                                            <td><span >{{ $lawyer->experience }}</span></td>
                                            <td><span >{{ $lawyer->created_at }}</span></td>
                                            <td><a class = "btn btn-danger" style="color:white;">Remove Lawyer</a></td>       
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