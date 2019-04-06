@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName"  required autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName"  required autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DOB" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="DOB" type="date" class="form-control" name="DOB"  required autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="sex" class="col-md-4 col-form-label text-md-right">{{__('gender')}}</label>
                            <input class="gender" type="radio" class="form-control{{
                             $errors->has('gender') ? ' is-invalid' : '' }}" name="sex" value="male" checked>Male



                            <input class="gender" type="radio" class="form-control{{
                             $errors->has('gender') ? ' is-invalid' : '' }}" name="sex" value="Female" checked>Female

                             <input class="gender" type="radio" class="form-control{{
                                $errors->has('gender') ? ' is-invalid' : '' }}" name="sex" value="Others" checked>Others

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif

                        </div>


                        <div class="form-group row ">
                                <label for="uTypeid" class="col-md-4 col-form-label text-md-right" hidden>{{ __('user Type') }}</label>

                                <div class="col-md-6">
                                    <input id="uTypeid" type="text" class="form-control" name="uTypeid"  value="1" hidden>


                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contactNo" class="col-md-4 col-form-label text-md-right">{{ __('Contactno') }}</label>

                            <div class="col-md-6">
                                <input id="contactNo" type="text" class="form-control" name = "contactNo" required>

                            </div>
                        </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control" name = "address" required>

                                    </div>
                                </div>

                                         <div class="form-group row mb-0">
                                             <div class="col-md-6 offset-md-4">
                                                 <button type="submit" class="btn btn-primary">
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
@endsection
