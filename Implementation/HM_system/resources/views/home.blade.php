@extends('layouts.app')

@section('content')

<div class="container">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Your profile</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content text-dark">
            <div class="modal-header bg-light">
                                    <h4 class="modal-title">Profile</h4>
                                    </div>
                                    <div class="container text-center bg-info">

                                            <form method="POST" action="{!!url('homeUpdate', Auth::user()->id)!!}">
                                                    @csrf
                                                    {!!method_field('put')!!}
<br/>
                                                    <div class="form-group row">
                                                        <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="firstName" type="text" class="form-control" name="firstName" value="{{(Auth::User()->firstName)}}" required autofocus>


                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="lastName" type="text" class="form-control" name="lastName" value="{{(Auth::User()->lastName)}}" required autofocus>


                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="DOB" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="DOB" type="date" class="form-control" name="DOB" value="{{(Auth::User()->DOB)}}" required autofocus>


                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                    <label for="sex" class="col-md-4 col-form-label text-md-right">{{__('Gender')}}</label>
                                                        <input class="gender" type="radio" class="form-control{{
                                                         $errors->has('gender') ? ' is-invalid' : '' }}" name="sex" value="male" @if(Auth::User()->gender=='male') checked="checked" @endif/>Male



                                                        <input class="gender" type="radio" class="form-control{{
                                                         $errors->has('gender') ? ' is-invalid' : '' }}" name="sex" value="female" @if(Auth::User()->gender=='female') checked="checked" @endif/>Female

                                                         <input class="gender" type="radio" class="form-control{{
                                                            $errors->has('gender') ? ' is-invalid' : '' }}" name="sex" value="others" @if(Auth::User()->gender=='others') checked="checked" @endif/>Others

                                                            @if ($errors->has('gender'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                                </span>
                                                            @endif

                                                    </div>




                                                    <div class="form-group row">
                                                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                                                            value="{{(Auth::User()->username)}}"  required autofocus>

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
                                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{(Auth::User()->email)}}" required>

                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label for="contactNo" class="col-md-4 col-form-label text-md-right">{{ __('Contactno') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="contactNo" type="text" class="form-control" name = "contactNo" value="{{(Auth::User()->contactNo)}}" required>

                                                        </div>
                                                    </div>

                                                            <div class="form-group row">
                                                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="address" type="text" class="form-control" name = "address" value="{{(Auth::User()->address)}}" required>

                                                                </div>
                                                            </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="row">
                                                                <button type="submit" class="btn btn-primary mb-2">{{ __('Update') }} </button><br/>
                                                                <button type="button" class="btn btn-primary ml-2 mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

        </div>




            </div>
          </div>
        </div>

         </form>
            </div>


</div>
@endsection
