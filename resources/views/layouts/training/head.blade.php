  <!-- Start header -->
        <header id="header" class="site-header header-style-5">
            <div class="topbar topbar-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-7">
                            <div class="topbar-contact-info-wrapper">
                                <div class="topbar-contact-info">
                                    <div>
                                        <i class="fa fa-location-arrow"></i>
                                        <div class="details">
                                            <p>Ablekuma Fanmilk</p>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <div class="details">
                                            <p>+2331234565</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-5">
                            <div class="social">
                                <span>Follow: </span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <div class="lower-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-3">
                            <div class="site-logo">
                                <a href="index-2.html"><img src="{{ asset('assets/images/logo-2.png') }}" alt></a>
                            </div>
                        </div>
                        <div class="col col-sm-9">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- end lower-topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                    </svg> 
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('training.home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('training.completed.projects') }}">Completed Projects</a></li>
                                    <li><a href="{{ route('training.ongoing.projects') }}">Ongoing Projects</a></li>    
                                </ul>
                            </li>
                            <li><a href="{{ route('training.gallery') }}">Gallery</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->
