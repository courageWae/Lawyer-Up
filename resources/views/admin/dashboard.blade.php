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
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('Legal_Support_Home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Yearly Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card oh">
                            <div class="card-body">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h5 class="card-title ">Yearly Sales</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                            <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="morris-area-chart" style="height: 350px;"></div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row text-center m-b-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SUMMARY -->
                    <div class="col-lg-4">
                        <div class = "row">
                            <div class = "col-lg-6">
                            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                               <div class="card-header"><strong>TOTAL NUMBER OF USERS</strong></div>
                               <div class="card-body text-info">
                                   <center><h5 class="card-title"><img src = "../assets/images/user.png"></h5>
                                   <p class="card-text">{{ count($user->where('role_id',4)) }}</p></center>
                               </div>
                            </div>
                            </div>
                            <div class = "col-lg-6">
                            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header"><strong>TOTAL NUMBER OF LAWYERS</strong></div>
                                <div class="card-body text-info">
                                   <center><h5 class="card-title"><img src = "../assets/images/user.png"></h5>
                                   <p class="card-text">{{ count($user->where('role_id',3)) }}</p></center>
                                </div>
                            </div>
                            </div>
                            <div class = "col-lg-6">
                               <div class="card border-secondary mb-3" style="max-width: 18rem;">
                               <div class="card-header"><strong>TOTAL NUMBER OF ADMINISTATORS</strong></div>
                               <div class="card-body text-info">
                                    <center><h5 class="card-title"><img src = "../assets/images/user.png"></h5>
                                    <p class="card-text">{{ count($user->where('role_id',1)) }}</p></center>
                                </div>
                               </div>
                            </div>
                            <div class = "col-lg-6">
                            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                               <div class="card-header"><strong>TOTAL NUMBER OF INSURERS</strong></div>
                               <div class="card-body text-info">
                                   <center><h5 class="card-title"><img src = "../assets/images/user.png"></h5>
                                   <p class="card-text">{{ count($user->where('role_id',2)) }}</p></center>
                               </div>
                            </div>
                            </div>
                            <div class = "col-lg-6">
                               <div class="card border-secondary mb-3" style="max-width: 18rem;">
                               <div class="card-header"><strong>TOTAL NUMBER OF PACKAGES BOUGHT</strong></div>
                               <div class="card-body text-info">
                                    <center><h5 class="card-title"><img src = "../assets/images/user.png"></h5>
                                    <p class="card-text">{{ count($package) }}</p></center>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SUMMARY -->
                </div>
                

               

                <!-- MESSAGES AND ACTIVITIES COLUMN -->
                <div class="row">

                    <!-- ACTIVITIES COLUMN -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><b>USERS ACTIVITIES</b></h4>
                            </div>
                            <ul class="feeds p-b-20">
                                <li>
                                    <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <!--<li>
                                     <div class="bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                                <li>
                                    <div class="bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted">31 May</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-dark"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-dark"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- MESSAGES -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style ="color:red;">MESSAGES</h5>
                                 @forelse($msg as $msg)
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                    
                                            <h5><strong>{{ $msg->name }}</strong></h5><div>{{ $msg->email }}</div><div style="display:inline-block;">{{ $msg->phone }}</div>
                                             <hr>
                                            <div class="mail-contnet">
                                                 <span class="mail-desc" >{{ $msg->message }}</span>
                                                <hr> 
                                                <span class="time">9:30 AM</span>
                                                <strong style="float:right;"><span style ="color:red;">SENT TO </span>: {{ $msg->destination }}</strong>
                                            </div>
                                        
                                       
                                    </div>
                                    <hr style="height:3px; background-color: black;">
                                </div>
                                 @empty
                                  <h5>There are no messages to display</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- END MESSAGES -->
                </div>

                 
                 <!-- PACKAGES ACTIVITIES -->
                <div class="row">

                    <!-- PACKAGES COLUMN -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><b>PACKAGES ACTIVITIES</b></h4>
                            </div>
                            <ul class="feeds p-b-20">
                                
                                <li>
                                   <div class="bg-success"><i class="ti-server"></i></div>There are no package bOught<span class="text-muted">2 Hours ago</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    </div>
</div>

@endsection