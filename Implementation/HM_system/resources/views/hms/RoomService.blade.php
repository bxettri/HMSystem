<div class="container">
@include('hms.header')


<nav class="navbar navbar-expand-lg  navbar-light bg-light mr-0">
    <a class="navbar-brand" href="#">Hotel Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto font-weight-bold">
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{!! url('/home') !!}">Home <span class="sr-only">(current)</span></a>
            </li>
            @endauth
            @guest
            <li class="nav-item">
                    <a class="nav-link " href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
            </li>
            @endguest
        <li class="nav-item">
          <a class="nav-link" href="{!! url('/booking') !!}">Booking</a>
        </li>
        @auth
        <li class="nav-item">
            <a class="nav-link" href="{!! url('/Room') !!}">My Room</a>
          </li>

          <li class="nav-item active">
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
                        <a class="nav-link"  class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    <li class="nav-item">
                            <button type="button" class="btn btn-primary" id="addRoomType" data-toggle="modal" data-target=".bd-example-modal-lg">Login</button>
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
      </div>
      </nav>


    <section>

        <div class="RoomServiceTop pt-4">
          <H1 class="text-info text-center">Please select the room service you would like to have.</H1>
        </div>

<div class="row">
        <select class="form-control col-md-4 mr-2{{ $errors->has('serviceType') ? ' is-invalid' : '' }}" value="{{ old('serviceType') }}" name="serviceType" required>
                <option class="" value=""> Select service Type</option>
                @foreach($serviceType as $data)
                <option class="" value="{{$data->serviceTypeId}}">{{$data->serviceType}}</option>
                @endforeach
              </select>
<div class="time">
         Select Service Time     <input type="time" id="appt" name="appt" required>
</div>
            </div>
<br/>


    </section







    </div>
