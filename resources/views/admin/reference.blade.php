<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>{{ config('app.name','Lexicon Support Service') }}</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ route('Legal_Support_Home') }}">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>References Table</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3"></div>

          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                List
              </header>
              <div class="panel-body">
                <!-- Tables -->
                <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>Paid By</th>
                    <th>Phone Number</th>
                    <th>Reference Code</th>
                    <th>Date</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody> 
                 @if(count($reference)) 
                 @foreach($reference as $reference)  
                  <tr>
                    <td>{{ $reference->by }}</td>
                    <td>{{ $reference->phone }}</td>
                    <td>{{ $reference->code }}</td>
                    <td>{{ $reference->date }}</td>
                     <td>
                      <a href="/references/{{$reference->id}}" class="btn btn-danger delete-confirm">Delete</a>
                    </td>
                  </tr>       
                 @endforeach
                 @endif
                </tbody>
              </table>
                
              </div>
            </section>   
          </div>
          <div class="col-lg-3"></div>

        </div>


        <div class="row">
          <div class="col-lg-3"></div>

          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Payment References
              </header>
              <div class="panel-body">
                <!-- forms -->
                <form class="form-horizontal " method="POST" action ="{{ route('reference.store') }}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Paid By</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="by" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="phone" placeholder="Name on Wallet" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Reference Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="code" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date of Payment</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="date" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <div class="btn-group">
                      <button class="btn btn-primary" type="submit" >Save</button>
                    </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </section>   
          </div>
          <div class="col-lg-3"></div>

        </div>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This item will be permanently deleted',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>


</body>

</html>
