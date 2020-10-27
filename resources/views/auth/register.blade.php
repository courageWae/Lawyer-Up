@extends('layouts/web/master')
@section('head')
   @include('layouts/web/head')
@endsection
@section('content')
   <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Register with us</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Register</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


         <section class="contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <!-- Contact forms -->
                        <div class ="col-md-2"></div>
                        <div class="col-md-8">
                            <h2>Register</h2>
                            <hr style = " background-color:rgb(235, 210, 52); height: 3px;">
                            <form method="POST" action="/register" enctype="multipart/form-data">

                              @csrf
                             <!-- Hidden fields -->
                            <input type="hidden" name="role_id" value="4">
                        

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-8">
                                <input id="phone" type="phone" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="insurer" class="col-md-4 col-form-label text-md-right">{{ __('Insurer') }}</label>
                            <div class="col-md-8">
                                <select class = "form-control" name="insurer" required>
                                    <option selected disabled>-- CHOOSE AN INSURER --</option>
                                    @php($insurer = \App\User::where('role_id',2)->get())
                                    @isset($insurer)
                                     @foreach($insurer as $insurer)
                                      <option>{{ $insurer->name }}</option>
                                     @endforeach
                                    @endisset
                                </select>
                                 @error('insurer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload a Photo') }}</label>
                            <div class="col-md-8">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                            </div>
                        </div>
                         <hr style = " background-color:rgb(235, 210, 52); height: 3px;">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                            </form>
                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>

@endsection