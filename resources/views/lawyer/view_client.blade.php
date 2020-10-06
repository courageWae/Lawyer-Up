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
                      <div class="jumbotron">
                          <h1 class="display-4">Client Details</h1>
                          <hr class="my-4">
                          <table>
                            <thead>
                              <th>
    
                              </th>
                              
                            </thead>>
                          </table>
                          <div style="display:inline;">
                            <p class="lead"><strong>Name of Client :</strong>{{ $hasBookLawyer->name_of_client }}</p>
                            <p><strong>Phone of Client  :</strong> {{ $hasBookLawyer->phone_of_client }}</p>
                            <p><strong>Email of Client  :</strong> {{ $hasBookLawyer->email_of_client }}</p>
                          </div>
                          
                          
                      </div>
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection