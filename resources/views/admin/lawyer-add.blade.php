@extends('layouts/admin/master')

@section('content')
<div class="page-wrapper">
    <div class="container">
    	<hr>
        <div class="row justify-content-center">
            <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: yellow;">{{ __('Register New Lawyer') }}</div>

                <div class="card-body">

                	<!-- LAWYER FORMS -->
                    <form method="POST" action="{{ route('lawyer.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- NAME -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- EMAIL -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           
                        <!-- PHONE -->
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                            </div>
                        </div>


                        <!-- ADDRESS -->
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address-name" type="address" class="form-control"  placeholder ="Name of the box" name="address_name" value="{{ old('address') }}" required autocomplete="address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">*</label>
                            <div class="col-md-6">
                                <input id="address-number" type="address" class="form-control" placeholder ="Address Number" name="address_number" value="{{ old('address') }}" required autocomplete="address-number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">*</label>
                            <div class="col-md-6">
                                <input id="address-city" type="address" class="form-control" placeholder ="City and Country" name="address_city" value="{{ old('address') }}" required autocomplete="address-city">
                            </div>
                        </div>


                        <!-- HOUSE ADDRESS -->
                        <div class="form-group row">
                            <label for="house" class="col-md-4 col-form-label text-md-right">{{ __('House') }}</label>
                            <div class="col-md-6">
                                <input id="house" type="address" class="form-control" name="house_address" value="{{ old('house') }}" required>
                            </div>
                        </div>



                        <!-- LAWYER TYPE --> 
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type of Lawyer') }}</label>
                            <div class="col-md-6">
                            	<select name = "type_of_lawyer" class = "form-control">
                            		<option selected="selected" disabled="disabled">-- CHOOSE LAWYER TYPE --</option>
                            		<option>CRIMINAL LAWYER</option>
                            		<option>MARRIAGE LAWYER</option>
                            		<option>FINANCIAL LAWYER</option>
                            	</select>  
                            </div>
                        </div>
                        
                       
                       <!-- PERSONAL STATEMENT -->
                        <div class="form-group row">
                            <label for="personal_statement" class="col-md-4 col-form-label text-md-right">{{ __('Personal Statement') }}</label>
                            <div class="col-md-6">
                                <textarea id="statement" type="text" class="form-control" name="statement" required></textarea>
                            </div>
                        </div>


                        <!-- EDUCATION -->
                        <div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education History') }}</label>
                            <div class="col-md-6">
                                <textarea id="education" type="text" class="form-control" name="education"  rows= "12" placeholder = "My Education History" required></textarea>
                            </div>
                        </div>


                        <!-- EXPERIENCE -->
                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>
                            <div class="col-md-6">
                                <textarea id="experience" type="text" class="form-control" name="experience" rows = "12" placeholder= "My experience" required></textarea>
                            </div>
                        </div>


                        <!-- PASSWORD -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- PASSWORD CONFIRMATIONI -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                         <!-- PHOTO -->
                        <div class="form-group row">''
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Photo') }}</label>
                            <div class="col-md-6">
                               <input type="file" class="form-control" name="photo">
                            </div>
                        </div>
                        
                        <!--ROLE -->
                        <input  type="hidden" name="role_id" value="3" >

                        <!-- REGISTER -->
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
            </div>
        </div>
    </div>             
</div>
@endsection