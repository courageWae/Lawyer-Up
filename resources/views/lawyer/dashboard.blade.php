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
                    @include('lawyer.dashbox')
                    <div class="col col-lg-9" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr>
                                   <th style="background-color: rgb(235, 149, 52)">My Appointments</th>
                               </tr>
                            </thead>
                            <tbody> 
                               <tr>
                                   <th colspan="7" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;">Recent</span></th>
                               </tr>
                               <tr>
                                  <th>Name of Client</th>
                                  <th>Phone Number of Client</th>
                                  <th>Email of Client</th>
                                  <th>Date Booked</th>
                                  <th>Expectance</th>
                                  <th>Call Credits</th>
                                  <th>Status</th>
                                </tr>
                                <tr>
                                    <td style="padding:10px;font-size: 20px;">                     
                                    </td>
                                    <td style="padding:10px;font-size: 20px;"></td>
                                    <td style="padding:10px;font-size: 20px;"></td>
                                    <td style="padding:10px;font-size: 20px;"></td>
                                    <td style="padding:10px;font-size: 20px;"></td>
                                    <td style="padding:10px;font-size: 20px;"></td>
                                    
                                    <td style="padding:10px;font-size: 20px; color: red;"></td>
                                </tr>
                          
                                <tr>
                                    <td>
                                        You Have no Active Packages
                                    </td>
                                </tr>
                                
                           </tbody>
                        </table>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection