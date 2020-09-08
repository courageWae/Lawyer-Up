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
                    <div class="col col-lg-4" style = "border-width:1px; border-style:groove;padding:15px;">                     
                        <div class="card">
                           <center><h3>My Dashboard</h3></center>
                           <hr>
                           <center><img class="card-img-top" src="{{ asset('uploads/pictures/user/'. Auth::user()->photo ) }}" alt="Card image" width="100" height="100" style="border-radius: 20px;"></center>
                           <hr>
                         <div class="card-body">
                           <center>
                               <h4 class="card-title">{{ strtoupper(Auth::user()->name) }}</h4>
                               <h5> {{ Auth::user()->email }}</h5>
                               <p> {{ Auth::user()->phone }}</p>
                           
                           <hr>
                           <a href="{{ route('user.dashboard') }}" style="font-size: 20px;">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                              </svg> 
                               &nbsp&nbspMy Packages
                           </a>
                           <hr>
                           <a href="{{ route('user.profile') }}" style="font-size: 20px;">
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                               </svg> 
                               &nbsp&nbspEdit Profile
                           </a>
                           <hr>
                           <a href="/logout" style="font-size: 20px;">
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                                   <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                               </svg>
                               &nbsp&nbspLogout
                           </a>
                         </center>
                         </div>
                     </div>
                    </div>
                    <div class="col col-lg-8" style ="padding-left:20px;">   
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr>
                                   <th colspan="4">My Profile</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                   <td colspan="4" style="padding:15px;">
                                     <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="/user_profile_edit/{{ Auth::user()->id }}">
                                  {{ csrf_field() }}
                                  @method('PATCH')
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ Auth::user()->name }}" name ="name" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email Address</label>
                                        <div class="col-md-12">
                                            <input type="email" value = "{{ Auth::user()->email }}" class="form-control form-control-line" name="email" id="example-email" required="">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                            <input type="text" value = "{{ Auth::user()->phone }}" name="phone" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                          <select class = "form-control" name="insurer" required>
                                            <option selected ="selected">{{ Auth::user()->insurer }}</option>
                                            <option>Serene Insurance<option>
                                            
                                          </select>
                                            <!-- <input type="text" value = "" class="form-control form-control-line"> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ Auth::user()->password }}" name="password" class="form-control form-control-line" required>
                                             @error('password')
                                              <span class="invalid-feedback" role="alert" style="color:red;">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                             @enderror
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="password_confirmation" class="form-control form-control-line" required>
                                        </div>
                                         
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">
                                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                                               </svg>&nbsp&nbspUpdate Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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