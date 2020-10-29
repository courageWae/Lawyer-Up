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
                                            <p>John Nii Owoo Street 10</p>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <div class="details">
                                            <p>+2331234321</p>
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
                        <div class="col col-sm-6">
                          
                        </div>
                        <div class="col col-sm-3">
                            @auth
                              @if(Auth::user()->role_id == 4)
                             <div style="padding-top: 30px; font-weight: bold;font-size: 20px;">
                                <a href="{{ route('user.dashboard') }}">
                                <img class="card-img-top" src="{{ asset('uploads/pictures/user/'. Auth::user()->photo ) }}" alt width="30" height="30" style="border-radius: 20px;">
                               {{ Auth::user()->name }}</a>
                             </div>
                              @elseif(Auth::user()->role_id == 3)
                             <div style="padding-top: 30px; font-weight: bold;font-size: 20px;">
                                <a href="{{ route('lawyer.dashboard') }}">
                                    <img class="card-img-top" src="{{ asset('uploads/pictures/user/'. Auth::user()->photo ) }}" alt="Card image" width="30" height="30" style="border-radius: 20px;"> |
                                    {{ Auth::user()->name }}</a>
                             </div>
                             @elseif(Auth::user()->role_id == 2)
                             <div style="padding-top: 30px; font-weight: bold;font-size: 20px;">
                                <a href="{{ route('insurer.dashboard') }}">
                                    <img class="card-img-top" src="{{ asset('uploads/pictures/user/'. Auth::user()->photo ) }}" alt="Card image" width="30" height="30" style="border-radius: 20px;"> |
                                    {{ Auth::user()->name }}</a>
                             </div>
                             @elseif(Auth::user()->role_id == 1)
                             <div style="padding-top: 30px; font-weight: bold;font-size: 20px;">
                                <a href="{{ route('admin.dashboard') }}">
                                    <img class="card-img-top" src="{{ asset('uploads/pictures/user/'. Auth::user()->photo ) }}" alt="Card image" width="30" height="30" style="border-radius: 20px;"> |
                                    {{ Auth::user()->name }}</a>
                             </div>
                             @endif   
                            @endauth
                            @guest
                            <div style="padding-top: 30px; font-weight: bold;font-size: 20px;">
                              <span>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              </svg>
                              <a href="/login">  Login </a></span>&nbsp&nbsp&nbsp 
                              <span>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                </svg>
                                <a href="/register"> Register</a></span>
                           </div>
                           @endguest
                        </div>
                    </div>
                </div>
            </div>
            <!-- end lower-topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    
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
                            <a href="{{ route('legal.home') }}">Home</a>
                            </li>
                            <li><a href="{{ route('legal.about') }}">About</a></li>
                            <li><a href="{{ route('legal.plans') }}">Our Plans</a></li>
                            <li><a href="{{ route('legal.contact') }}">Contact</a></li>
                            <li><a href="{{ route('legal.lawyers') }}">Book a Lawyer</a></li>

                        </ul> 
                    </div><!-- end of nav-collapse -->
                    <a href="{{ route('legal.plans') }}" class="theme-btn-s2 request-quote">Get a Plan</a> 
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->
