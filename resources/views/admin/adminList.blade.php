<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Lexicon Support Services</title>

  <!-- Bootstrap CSS -->
  <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../admin/css/style.css" rel="stylesheet">
  <link href="../admin/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    @include('layouts/admin/header')
    <!--header end-->

    <!--sidebar start-->
    @include('layouts/admin/sidebar')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Administrators</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ route('Legal_Support_Home') }}">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>List of Administrators</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                List of Administrators
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_profile"></i> Photo</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_calendar"></i> Date</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach($admin as $admin)
                  <tr>
                    <td>{{ $admin->name }}</td>
                    <td><img src="{{ asset('/uploads/pictures/user/'.$admin->photo) }}" style="width:30px; height: 30px;" alt></td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>{{ $admin->created_at }}</td>
                    <td>
                      <div>
                        <buttton type="button" class = "btn btn-danger but" onclick="ask()"><i class="icon_close_alt2" ></i> DELETE</buttton>
                      </div>
                      <form method="post" action = "/admin/{{ $admin->id }}">
                        @method('DELETE')
                        @csrf
                      <div class="btn-group ask" style="padding-top: 5px;display: inline-block;">
                        <p>Are you sure you want to delete this administrator ? </p>
                        <button class="btn btn-success" type="submit"><i class="icon_check_alt2"></i> Yes</button>
                      </div>
                      </form>
                      <div style="padding-top: 5px;" class ="no">
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> No</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach         
                </tbody>
              </table>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="../admin/js/jquery.js"></script>
  <script src="../admin/js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="../admin/js/jquery.scrollTo.min.js"></script>
  <script src="../admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="../admin/js/scripts.js"></script>

  <script>
  $(document).ready(function(){
    $(".ask").hide();
    $(".no").hide();
    $(".but").click(function(){
      $(".ask").show();
      $(".no").show();
    });
    $(".no").click(function(){
      $(".ask").hide();
      $(".no").hide();
    });
  });
</script>


</body>

</html>
