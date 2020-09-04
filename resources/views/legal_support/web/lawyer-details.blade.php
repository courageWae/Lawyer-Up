<!DOCTYPE html>
<html lang="en">

<!-- shop-details 19:58:44 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Industrial - Industry, Factory and Engineering Template </title>

    <!-- Favicon and Touch Icons -->
    <link href="../assets/images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="../assets/images/favicon/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="../assets/images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="../assets/images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="../assets/images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/slick-theme.css" rel="stylesheet">
    <link href="../assets/css/owl.transitions.css" rel="stylesheet">
    <link href="../assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="../assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-touchspin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        @include('layouts/web/head')


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Shop Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Shop Details</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start sop-details-main-content -->
        <section class="shop-details-main-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="shop-single-slider-wrapper">    
                            <div><img src="{{ asset('uploads/lawyer/'. $lawyer->photo ) }}" class="img img-responsive" alt></div>   
                        </div>
                    </div>

                    <div class="col col-md-6">
                        <div class="product-details">
                            <h2>Barrister {{ $lawyer->name }}</h2>
                            <p>{{ $lawyer->personal_statement }}</p>

                            <div class="product-option">
                                <form action="#" class="form">
                                    <div class="p-row">
                                        <div>
                                            <img src = "../assets/images/facebook.png">
                                        </div>
                                        <div>
                                           <img src="../assets/images/twitter.png">
                                        </div>
                                         <div>
                                            &nbsp&nbsp&nbsp&nbsp
                                        </div>
                                        <div>
                                            <img src="../assets/images/msg.png">
                                        </div>
                                    </div>
                                    @if(count($package))
                                      @foreach($package as $package)
                                        @if(($package->client_email == auth()->user()->email) && (auth()->user()->role_id == 4))
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="#">Book Now</a>
                                         </div>
                                        @else
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="{{ route('Legal_Support_Packages') }}">Book Now</a>
                                         </div>
                                        @endif 
                                      @endforeach

                                    @else
                                         <div class = "p-row" style = "padding-top: 20px;">
                                           <a class = "btn btn-success" href="{{ route('Legal_Support_Packages') }}">Book Now</a>
                                         </div>
                                    @endif 
                                </form>
                            </div> <!-- end option -->
                        </div> <!-- end product details -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="product-info">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#description" data-toggle="tab">Experience</a></li>
                                <li><a href="#tags" data-toggle="tab">Education</a></li>
                                 <li><a href="#review" data-toggle="tab">Contact Lawyer</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="description">
                                   <p>{{ $lawyer->experience }}</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="review">
                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="client-review">
                                                
                                                <div class="details">
                                                    <div class="name-rating-time">
                                                        <div class="name-rating">
                                                            <div>
                                                                <h4>Email Address</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{ $lawyer->email }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="client-review">
                                                
                                                <div class="details">
                                                    <div class="name-rating-time">
                                                        <div class="name-rating">
                                                            <div>
                                                                <h4>Facebook</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{ $lawyer->name }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="client-review">
                                                <div class="details">
                                                    <div class="name-rating-time">
                                                        <div class="name-rating">
                                                            <div>
                                                                <h4>Twitter</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{ $lawyer->name }}@twitter.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col col-md-6 review-form-wrapper">
                                            <div class="review-form">
                                                <h4>Send a personal message to Barrister {{ $lawyer->name }}</h4>
                                                <form method="post" action="/lawyer_message">
                                                    {{ csrf_field() }}
                                                    <div>
                                                        <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                                                    </div>
                                                    <div>
                                                        <input type="email" name="email" class="form-control" placeholder="Email *" required>
                                                    </div>
                                                    <div>
                                                        <input type="phone" name = "phone" class="form-control" placeholder="Pnone number *" required>
                                                    </div>
                                                    <div>
                                                        <textarea class="form-control" name="message" placeholder="Message *"></textarea>
                                                    </div>
                                                    <input type="hidden" value="LAWYER - {{ $lawyer->name }}" name ="destination">
                                                    <div>
                                                        <button type="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tags">
                                    <p>{{ $lawyer->education }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of sop-details-main-content -->        


        @include('layouts/web/footer')
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="../assets/js/jquery-plugin-collection.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.js"></script>

    <!-- Custom script for this template -->
    <script src="../assets/js/script.js"></script>
</body>

<!-- shop-details 19:58:47 GMT -->
</html>
