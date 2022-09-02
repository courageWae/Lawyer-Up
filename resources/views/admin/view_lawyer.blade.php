<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>{{ config('app.name','Lawyer Up Service') }}</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('admin/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('admin/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    @include('layouts.admin.header')
    <!--header end-->

    <!--sidebar start-->
    @include('layouts.admin.sidebar')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">

          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Lawyers</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ route('legal.home') }}">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>List of Lawyers</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3"> 
          </div>
          <div class="col-lg-6">
             <div class="jumbotron">
               <h1 class="display-4">Lawyer Details</h1>
               <hr class="my-4">
               <h3>Full Name </h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->name }}
               </div>
               <h3>Email Address </h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->email }}
               </div>
               <h3>Phone Number</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->phone }}
               </div>
               <h3>Address</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->address }}
               </div>
               <h3>House Address</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->house_address }}
               </div>
                <h3>Education</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->education }}
               </div>
                <h3>Type of Lawyer</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->type_of_lawyer }}
               </div>
                <h3>Experience</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->experience }}
               </div>
                <h3>Personal Statement</h3>
               <div class="alert alert-info" role="alert" style="font-weight: bolder;color:black">
                {{ $lawyer->personal_statement }}
               </div>
               <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('lawyer.list') }}" role="button">back</a>
               </p>

            </div>
          </div>
          <div class="col-lg-3"> 
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{ asset('admin/js/jquery.js') }}"></script>
  <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
  <!-- nicescroll -->
  <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="{{ asset('admin/js/scripts.js') }}"></script>
</body>

</html>
