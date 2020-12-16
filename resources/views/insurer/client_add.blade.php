@extends('layouts.web.master')
@section('head')
   @include('layouts.web.head')
@endsection
@section('content')
      <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>DashBoard</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
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
                @include('insurer.dashBox')
                <div class="col col-lg-8" style ="padding-left:20px;">
                   @if(session()->has('message'))
                        <div class="alert {{session('alert') ?? 'alert-success'}}">
                          {{ session('message') }}
                        </div>
                    @endif
                  <form class="form-validate form-horizontal"method="post" action="{{ route('insurer.add.client') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="table table-striped table-bordered">
                    <thead>
                      <tr style="background-color:rgb(245, 197, 66);">
                        <th colspan="3">Add New Client</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th colspan="10" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span>
                        </th>
                      </tr>
                      <tr>
                        <td colspan="3" style="padding:5px;">
                          <input type="hidden" name="role_id" value="4">
                            <div class="form-group ">
                              <label for="name" class="control-label col-lg-2">Full name</label>
                                 <div class="col-lg-10">
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" required/>
                                     @error('name')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                     @enderror
                                 </div>
                            </div>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3" style="padding:5px;">
                          <input type="hidden" name="role_id" value="4">
                            <div class="form-group ">
                              <label for="name" class="control-label col-lg-2">User Name</label>
                                 <div class="col-lg-10">
                                    <input class="form-control @error('user_name') is-invalid @enderror" name="user_name" type="text" required/>
                                     @error('user_name')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                     @enderror
                                 </div>
                            </div>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3">
                          <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">Email</label>
                              <div class="col-lg-10">
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" required/>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="form-group ">
                            <label for="phone" class="control-label col-lg-2">Phone</label>
                            <div class="col-lg-10">
                              <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="phone" required/>
                                @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="form-group ">
                            <label for="password" class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                              <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password"  required/>
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                            <div class="col-lg-10">
                              <input class="form-control " id="confirm_password" name="password_confirmation" type="password" required/>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <input type="hidden" name = "insurer" value = "{{ Auth::user()->id }}">
                      <tr>
                        <td>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-primary btn-lg" type="submit">Add</button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    </table>
                  </form>
                </div>  
              </div>  
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->       

@endsection