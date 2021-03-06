

<div class="container">

@include('/hms/header')





<nav class="navbar navbar-expand-lg  navbar-light bg-light mr-0">
        <a class="navbar-brand" href="#">Hotel Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto font-weight-bold">
                @auth
                <li class="nav-item ">
                  <a class="nav-link" href="{!! url('/home') !!}">Home <span class="sr-only">(current)</span></a>
                </li>
                @endauth
                @guest
                <li class="nav-item ">
                        <a class="nav-link " href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
                </li>
                @endguest
            <li class="nav-item active">
              <a class="nav-link" href="{!! url('/booking') !!}">Booking</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/Room') !!}">My Room</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{!! url('/RoomService') !!}">Room Service</a>
              </li>
              @endauth
              <li class="nav-item">
              <a class="nav-link" href="{!! url('/gallery') !!}">Gallery</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="{!! url('/aboutus') !!}">About us</a>
            </li>



          </ul>
          <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                    @if (Route::has('register'))
                        <li class="nav-item">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Login</button>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>




     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
         <div class="modal-content text-dark">
         <div class="modal-header bg-light">
                                 <h4 class="modal-title">Login</h4>
                                 </div>
                                 <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>

         </div>
       </div>
     </div>

          </div>
          </nav>
          <script>

          if('{{Session::has('success')}}')
          {
            alert('{{Session::get('success')}}');
          }
        </script>

          @if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif



@if(Session::has('roomNameExists'))
<div class="alert alert-success">
    <p>{{\Session::get('roomNameExists')}}</p>
</div>
@endif

          <div class="jumbotron">
                <h1 class="display-4">Book Room</h1>
                <p class="lead">Select the room type you want to stay. Also select Check In and Check Out for available rooms</p>
                <hr class="my-4">
                <p>Note: Please login to book the room</p>

              </div>





<div class="container mt-5 mb-5">
    <form action="/booking" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <p>Room type</p>
        <div class="col-md-3">
                    {{-- <input id="roomType" type="text" class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" name="roomType" value="{{ old('roomType') }}" required autofocus> --}}
                    <select class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" value="{{ old('roomType') }}" name="roomType" required>
                            <option class="" value=""> Select room Type</option>
                            @foreach($booking as $data)
                            <option class="" value="{{$data->roomTypeId}}">{{$data->roomType}}</option>
                            @endforeach
                          </select>





                    @if ($errors->has('roomType'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('roomType') }}</strong>
                        </span>
                    @endif
        </div>

        <div class="col-md-4">
                <div class="row">
                        <p>Check In</p>&nbsp;&nbsp;
                        <input class="datetime" name="checkIn" type="date" value="" id="example-date-input">
                    </div>
        </div>


        <div class="col-md-4">
            <div class="row">
              <p>Check Out</p>&nbsp;&nbsp;
                <input class="datetime" type="date" name="checkOut" value="" id="example-date-input">
            </div>
        </div>
     </div>
    <button type="submit" class="btn btn-primary btn-md mt-3" >Search rooms</button>
    </form>
</div>


@if (isset($rooms) && is_null($rooms))
<div class="form-group" style="text-align: center">
<label>no rooms found</label>
</div>
@endif
@if (!is_null($rooms))
<div class="panel-body table-responsive">
<table class="table table-bordered table-striped">
<tr>
        <th>Room ID</th>
        <th>Room Type</th>
        <th>Room Discription</th>
        <th>Room Price</th>
        <th>Room Number</th>
        <th>Image</th>
    <th>Book</th>
</tr>
@foreach($rooms as $row)

<tr>
    <td>{{$row->roomId}}</td>
    <td>{{$row->roomType}}</td>
    <td>{{$row->roomDiscription}}</td>
    <td>{{$row->roomPrice}}</td>
    <td>{{$row->roomNum}}</td>
    <td>
            <img src="{{$row->roomImage}}"  class="img-fluid image-thumbnail"  style="height:150px; width:200px">
    </td>



    <td>
        <form method="post" action="{{url('/booked')}}">
            @csrf
            <input type="hidden" name="checkInDate" value="{{$checkIn}}">
            <input type="hidden" name="checkOutDate" value="{{$checkOut}}">
            <input type="hidden" name="roomNo" value="{{$row->roomId}}">
            <button type="submit" class="btn-sm btn-success" onclick="if (!confirm('Are you sure to book this Room?')) { return false }">Book</button>
        </form>
    </td>
</tr>

@endforeach
@endif
</tbody>
</table>
@include('/hms/footer')
</div>





