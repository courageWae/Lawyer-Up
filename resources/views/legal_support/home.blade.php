@extends('layouts.web.master')
@section('head')
   @include('layouts.web.head')
@endsection
@section('banner')

 @include('layouts.web.slider')

@endsection
@section('content')

  <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-md-4">
                        <div class="section-title">
                            <h2>Why Us</h2>
                        </div>
                    </div>
                    <div class="col col-lg-5 col-md-5">
                        <h3>Learn More About Our Plans</h3>
                    </div>
                    <div class="col col-lg-3 col-md-3">
                       <div class="all-service-link">
                            <a href="{{ route('legal.plans') }}" class="theme-btn">See Plans</a>
                       </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-4 col-md-4"> 

                      <div class="col col-lg-3 col-md-4"> 
                          <img src = "../assets/images/book.png">   
                      </div>
                      <div class="col col-lg-9 col-md-4"> 
                         <h5>Plans Built for You</h5>
                         <p>No Complicated Forms. No Robots</p>   
                      </div> 

                      <hr style="width:60px; ">

                      <div class="col col-lg-3 col-md-4"> 
                          <img src = "../assets/images/squad.png">   
                      </div>
                      <div class="col col-lg-9 col-md-4"> 
                         <h5>BEST TEAM</h5>
                         <p>Get Quality Legal Assistance.</p>   
                      </div> 

                      <hr style="width:60px;">

                      <div class="col col-lg-3 col-md-4"> 
                          <img src = "../assets/images/thumb.png">   
                      </div>
                      <div class="col col-lg-9 col-md-4"> 
                         <h5>FLAT-FEE PRICING</h5>
                         <p>You can always count us to be upfront about pricing.</p>   
                      </div> 

                      <hr style="width:60px;">

                      <div class="col col-lg-3 col-md-4"> 
                          <img src = "{{ asset('assets/images/book.png') }}">   
                      </div>
                      <div class="col col-lg-9 col-md-4"> 
                         <h5>BEST CASE STRATEGY</h5>
                         <p>When you need it</p>   
                      </div> 

                      <hr style="width:60px;">

                    </div>
                    <div class="col col-lg-8 col-md-5">
                        <p>
                           For as low as GHc 50 per month, you can have access to affordable legal support from a network of experienced lawyers practicing in Ghana. These plans are paid through and underwritten by your trusted insurance company so your legal bills are covered and therefore you do not have to worry about receiving high legal bills.
                        </p>
                        <p>
                           Become a member an enjoy these benefits:
                       </p>
                       <h4>Easy access to a lawyer</h4>
                       <p>
                           Search our network of lawyers provided on the platform and select any lawyer of choice. Schedule a meeting right away to meet with your lawyer.
                       </p>
                       <h4>Free legal consultation</h4>
                       <p>
                         As a member of our legal protect plan you will have direct access to free consultation either face- to-face or on phone or even both with your preferred lawyer. Seek advice from your lawyer whenever you need it.
                       </p>
                       <h4>Free document review</h4>
                       <p>
                          Get a lawyer to review all legal document, and legal contract before you sign any agreement.
                       </p>
                       <h4>Low cost for Board representation</h4>
                       <p>
                         As a member you can choose any lawyer as your company secretary and have the lawyer present in board meetings for an affordable fee which is covered under the plan.
                       </p>
                    </div>
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </section>
        <!-- end of services -->
        
        
        <!-- start testimonials -->


        <!-- PUT THE TESTIMONIAL SNIPPET HERE -->

        <section class="section-padding">
            <div class = "container"> 
                <div class ="row">
                  <h3>EASY STEPS TO JOIN ONLINE</h3>
                   <hr style = "width:100px; float:left; background-color:rgb(235, 210, 52); height: 3px;">
                    <div class = "col col-lg-12">
                      <div class="col col-md-3">
                        <img src="{{ asset('assets/images/consent.png') }}" ><br>
                        <div style="margin-top:20px;">Pick a plan that best suits the needs of your business</div>
                      </div> 
                      <div class="col col-md-3">
                        <img src="{{ asset('assets/images/insure.png') }}" >
                        <div style="margin-top:20px;">Select your trusted insurer from a list of our insurance partners</div>
                      </div> 
                      <div class="col col-md-3">
                        <img src="{{ asset('assets/images/forms.png') }}" >
                        <div style="margin-top:20px;">Fill out the required details and submit. You will receive a welcome confirmation email or text from us.</div>
                      </div> 
                      <div class="col col-md-3">
                        <img src="{{ asset('assets/images/congrat.png') }}" >
                        <div style="margin-top:20px;">Congratulations, Start using the lexicon platform </div>
                      </div>                
                    </div>   
                </div>
            </div>         
        </section>

        <section class="section-padding">
            <div class = "container"> 
                <div class ="row">
                  <h3>EASY STEPS TO JOIN THROUGH INSURANCE PARTNERS</h3>
                   <hr style = "width:100px; float:left; background-color:rgb(235, 210, 52); height: 3px;">
                    <div class = "col col-lg-12">
                      <div class="col col-md-3">
                        <img src="../assets/images/consent.png" ><br>
                        <div style="margin-top:20px;">Visit the office of the insurer and purchase a plan that suits your needs or the needs of your company. Plans can be purchased</div>
                      </div> 
                      <div class="col col-md-3">
                        <img src="../assets/images/insure.png" >
                        <div style="margin-top:20px;">Your trusted insurer will automatically sign you unto the lexicon platform and give you all details and Guidance</div>
                      </div> 
                      <div class="col col-md-3">
                        <img src="../assets/images/call.png" >
                        <div style="margin-top:20px;">A member of the Lawyer Up team will contact you to welcome you to the family.</div>
                      </div> 
                      <div class="col col-md-3">
                        <img src="../assets/images/congrat.png" >
                        <div style="margin-top:20px;">Start using the benefits as specified on your plan by booking for a lawyer or call our customer service to book a lawyer</div>
                      </div>                
                    </div>   
                </div>
            </div>         
        </section>


        <!-- start offer -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="section-title">
                            <h2>What we offer</h2>
                        </div>
                        <div class="offer-text">
                            <p>
                               We offer a wide range of packages to suit your Personal, Family and Business legal protection plans
                           </p>
                           
                            <a href="{{ route('legal.plans') }}" class="theme-btn read-more">See Plans</a>
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="offer-grids">
                            <div class="grid">
                                <div class="details">
                                    <div class="icon">
                                        <i class="fi flaticon-construction"></i> 
                                    </div>
                                    <h3>Business Plans: </h3>
                                    <p>
                                       Focus on building your business and lets lexicon focus on helping you get your legal work done in an easy, fast and affordable way. 
                                       We are changing how legal services are accessed and delivered!!!!
                                       We understand that SME’s and start ups need certain legal services in order to grow their businesses.
                                   </p>
                                    <a href="{{ route('legal.plans.blpp') }}" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="details">
                                    <div class="icon">
                                        <i class="fi flaticon-people"></i> 
                                    </div>
                                    <h3>Family Legal Protection Plan</h3>
                                    <p>This policy provides cover for individuals against unexpected legal costs. These legal costs are usually high and unforeseen.</p>
                                    <a href="{{ route('legal.plans.flpp') }}" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="details">
                                    <div class="icon">
                                        <i class="fi flaticon-support"></i> 
                                    </div>
                                    <h3>Personal Legal Protection Plan</h3>
                                    <p>This policy provides cover for individuals against unexpected legal costs. These legal costs are usually high and unforeseen.</p>
                                    <a href="{{ route('legal.plans.plpp') }}" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end offer -->  


        <!-- start about-us-faq 
        <section class="section-padding about-us-faq">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="about-us-section">
                            <div class="section-title-s3">
                                <span>About us</span>
                                <h2>Get full range of premium Industrial services for your business</h2>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn-s3">Read More</a>
                                    <a href="#" class="theme-btn-s4">Company History</a>
                                </div>
                            </div>
                            <div class="social">
                                <p>Get Connected With Us:</p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-lg-offset-1">
                        <div class="faq-section">
                            <div class="section-title-s3">
                                <span>FAQ</span>
                                <h2>All these years, our different services have delivered long lasting innovation</h2>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Ipsam voluptatem quia voluptas sit</a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Ted quia non numquam eius modi</a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Tempora incidunt ut labore</a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            <div class="backhoe-loader">
                <img src="assets/images/backhoe-loader.png" alt>
            </div>
        </section>
        end start about-us-faq -->


        <!-- start partners -->
        <section class="section-padding partners">
            <center><h2>Partners</h2></center>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <hr>
                        <div class="partners-slider">
                            @inject('user','App\User')
                            
                            @foreach($user->Insurer()->get() as $insurer)
                            <div class="grid">
                                <img src="{{ asset('uploads/pictures/user/'.$insurer->photo) }}" alt>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end partners -->


        <!-- start contact-section 
        <section class="contact-section section-padding parallax" data-bg-image="assets/images/contact-section-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-md-offset-1 col-md-5">
                        <div class="contact-section-contact-box">
                            <div class="section-title-white">
                                <h2>Contact</h2>
                            </div>
                            <div class="details">
                                <p>For any kind of query, contact us with the details below.</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> +123 (569) 254 78</li>
                                    <li><i class="fa fa-envelope"></i> info@industrial.com</li>
                                    <li><i class="fa fa-home"></i> #59, East Madison Ave, Melbourne Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                        <div class="section-title-white">
                            <h2>Request a quote</h2>
                        </div>   
                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>

                        <div class="contact-form-s1 form">
                            <form method="post" id="contact-form" class="wpcf7-form contact-validation-active">
                                <div>
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div>
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                                <div>
                                    <label>Business Type</label>
                                    <select name="select">
                                        <option selected disabled> -- Select One -- </option>
                                        <option value="Select One">Select One</option>
                                        <option value="Select Two">Select Two</option>
                                        <option value="Select Three">Select Three</option>
                                    </select>
                                </div>
                                <div class="submit-btn-wrap">
                                    <input value="Submit" class="theme-btn wpcf7-submit" type="submit">
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>                     
                    </div>
                </div>
            </div> 
            <div class="contact-women wow fadeInLeft">
                <img src="assets/images/contact-women.png" alt>
            </div>
        </section>
         end contact-section -->


        <!-- news-section 
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title">
                            <h2>Recent news</h2>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div class="col col-lg-3 col-md-3">
                       <div class="all-news-link">
                            <a href="#" class="theme-btn">More News</a>
                       </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="news-grids">
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-1.jpg" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                            <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-body">
                                        <h3><a href="#">China's industrial profits grow faster in first eight months</a></h3>
                                        <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-2.jpg" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                            <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-body">
                                        <h3><a href="#">Exploring the wild side in an industrial jungle</a></h3>
                                        <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-3.jpg" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                            <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-body">
                                        <h3><a href="#">Bus drivers in Liverpool vote for industrial action</a></h3>
                                        <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section>
         end news-section -->

@endsection