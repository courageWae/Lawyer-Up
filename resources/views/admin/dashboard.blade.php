<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Lexicon Support Service</title>

  <!-- Bootstrap CSS -->
  <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="../admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="../admin/css/widgets.css" rel="stylesheet">
  <link href="../admin/css/style.css" rel="stylesheet">
  <link href="../admin/css/style-responsive.css" rel="stylesheet" />
  <link href="../admin/css/xcharts.min.css" rel=" stylesheet">
  <link href="../admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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

    <!-- Header -->
    @include('layouts/admin/header')
    <!-- End Header -->

    <!--sidebar start-->
    @include('layouts/admin/sidebar')
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ route('Legal_Support_Home') }}">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-users"></i>
              <div class="count">{{ count($user->where('role_id','4')) }}</div>
              <div class="title">Users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-user"></i>
              <div class="count">{{ count($user->where('role_id','3')) }}</div>
              <div class="title">Lawyers</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">{{ count($user->where('role_id','2')) }}</div>
              <div class="title">Insurers</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">{{ count($package) }}</div>
              <div class="title">Purchased Packages</div>
            </div>
            <!--/.info-box-->
          </div>

        </div>
        <!--/.row-->


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Packages </strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>Package Name</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Clients Name</th>
                      <th>Clients Email</th>
                      <th>Clients Photo</th>
                      <th>Status</th>
                      <th>Approved By</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><img src="/admin/img/Germany.png" style="height:30px; margin-top:-2px;"></td>   
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
 
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>0</strong>
                  <span>Followers</span>
                </li>
                <li>
                  <strong>0</strong>
                  <span>Feeds Posted</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>0</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>0</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>



        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">

          <!-- Messages -->
          <div class="col-lg-6 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left"> Messages To Administrators</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body"style="background-color: green;">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    @forelse($msg as $msg)
                    <li class="by-other" >
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">{{ $msg->created_at }}<span class="pull-right">{{ $msg->name }}</span></div>
                        <strong>{{ $msg->message }}</strong>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                   
                     @empty
                    <li class="by-me">
                      <div class="chat-content">
                        <strong>There are no messages to display</strong>
                      </div>
                    </li>
                   @endforelse

                  </ul>

                </div>
              </div>


            </div>
          </div>
          <!-- Messages to -->
         
         <div class="col-lg-6 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left"> Messages To Lawyers</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body"style="background-color: green;">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    @forelse($msgLawyer as $msgLawyer)
                    <li class="by-other" >
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">{{ $msgLawyer->created_at }}<span class="pull-right">{{ $msgLawyer->name }}</span></div>
                        <strong>{{ $msgLawyer->message }}</strong>
                        <div class="clearfix"><span class="pull-right" style="color:red;">Sent to: {{ $msgLawyer->destination }}</span></div>     

                      </div>
                    </li>
                   
                     @empty
                    <li class="by-me">
                      <div class="chat-content">
                        <strong>There are no messages to display</strong>
                      </div>
                    </li>
                   @endforelse

                  </ul>

                </div>
              </div>


            </div>
          </div>


        </div><br><br>

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>

          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Tags</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../admin/js/jquery.js"></script>
  <script src="../admin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="../admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../admin/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../admin/js/jquery.scrollTo.min.js"></script>
  <script src="../admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../admin/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../admin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../admin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="../admin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../admin/js/calendar-custom.js"></script>
    <script src="../admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../admin/js/jquery.customSelect.min.js"></script>
    <script src="../admin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../admin/js/sparkline-chart.js"></script>
    <script src="../admin/js/easy-pie-chart.js"></script>
    <script src="../admin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../admin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../admin/js/xcharts.min.js"></script>
    <script src="../admin/js/jquery.autosize.min.js"></script>
    <script src="../admin/js/jquery.placeholder.min.js"></script>
    <script src="../admin/js/gdp-data.js"></script>
    <script src="../admin/js/morris.min.js"></script>
    <script src="../admin/js/sparklines.js"></script>
    <script src="../admin/js/charts.js"></script>
    <script src="../admin/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
