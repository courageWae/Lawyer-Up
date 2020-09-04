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
                    @include('lawyer.board')
                    <div class="col col-lg-9" style ="padding-left:20px;">   
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

                            <!-- Lawyers Forms -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="/lawyer_profile_edit/{{ Auth::user()->id }}">
                                  {{ csrf_field() }}
                                  @method('PATCH')
                                    <div class="form-group">
                                        <label for="name" class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $lawyer->name }}" name ="name" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-12">Email Address</label>
                                        <div class="col-md-12">
                                            <input type="email" value = "{{ $lawyer->email }}" class="form-control form-control-line" name="email" id="email" required="">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                            <input type="phone" value = "{{ $lawyer->phone }}" name="phone" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Address Name</label>
                                        <div class="col-md-12">
                                           <input type="text" value="{{ $lawyer->address_name }}" name="address_name" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Address Number</label>
                                        <div class="col-md-12">
                                           <input type="address" value = "{{ $lawyer->address_number }}" name="address_number" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Address City</label>
                                        <div class="col-md-12">
                                           <input type="address" value = "{{ $lawyer->address_city }}" name="address_city" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">House Address</label>
                                        <div class="col-md-12">
                                           <input type="text" value = "{{ $lawyer->house_address }}" name="house_address" class="form-control form-control-line" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Type of Lawyer</label>
                                        <div class="col-md-12">
                                          <select name="type_of_lawyer"  class="form-control">
                                            <option selected="selected">{{ $lawyer->type_of_lawyer }}</option>
                                            <option>MARRIAGE LAWYER</option>
                                            <option>FINANACIAL LAWYER</option>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Personal Statement</label>
                                        <div class="col-md-12">
                                            <textarea id="personal_statement" type="text" class="form-control" name="statement" required>{{ $lawyer->personal_statement }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Education History</label>
                                        <div class="col-md-12">
                                          <textarea id="education"  type="text" class="form-control" name="education"  rows= "12" placeholder = "My Education History" required>{{ $lawyer->education }}</textarea>    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Experience</label>
                                        <div class="col-md-12">
                                          <textarea id="experience" type="text" class="form-control" name="experience" rows = "12" placeholder= "My experience" required>{{ $lawyer->experience }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="{{ $lawyer->password }}" name="password" class="form-control form-control-line" required>
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
                                            <input type="password"  name="password_confirmation" class="form-control form-control-line" required>
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