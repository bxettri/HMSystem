@include('admin/adminHeader')
<div class="adminRoom">
<h1 class="text-center">Please fill up the form to insert data.</h1>

<form method="POST" action="{{url('admin/adminRoom')}}">
        @csrf
        {{method_field('put')}}




        <div class="form-group row">
            <label for="roomType" class="col-md-4 col-form-label text-md-right">{{ __('Room Type') }}</label>

            <div class="col-md-6">
                <input id="roomType" type="text" class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" name="roomType" value="{{ old('roomType') }}" required autofocus>

                @if ($errors->has('roomType'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomType') }}</strong>
                    </span>
                @endif
            </div>
        </div>





        <div class="form-group row">
            <label for="roomPrice" class="col-md-4 col-form-label text-md-right">{{ __('Room Price') }}</label>

            <div class="col-md-6">
                <input id="roomPrice" type="text" class="form-control{{ $errors->has('roomPrice') ? ' is-invalid' : '' }}" name="roomPrice" value="{{ old('roomPrice') }}" required>

                @if ($errors->has('roomPrice'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomPrice') }}</strong>
                    </span>
                @endif
            </div>
        </div>



                         <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="btn btn-primary">
                                  {{ __('Insert') }}
                                 </button>
                             </div>
                         </div>
    </form>
</div>
