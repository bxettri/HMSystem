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
        <li class="nav-item active">
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



      <script>

        if('{{Session::has('success')}}')
        {
          alert('{{Session::get('success')}}');
        }
      </script>









      <table class="table table-bordered" border="1">
        <thead>
            <tr>
            <th>Booking ID</th>

            <th>Room Num</th>
            <th>Room Price</th>
            <th>Booked Date</th>
            <th>Check In Date</th>
            <th>Check-Out Date</th>
            <th>Action</th>
            </tr>
            <tbody>
                @if($booking->count())
                @foreach($booking as $key=>$booked)
                <tr>

                <td> {!!$booked->roomId!!}</td>
                <td> {!!$booked->roomNum!!}</td>
                <td> {!!$booked->roomPrice!!}</td>


                <td> {!!$booked->bookingDate!!}</td>
                <td> {!!$booked->checkInDate!!}</td>
                <td> {!!$booked->checkOutDate!!}</td>


                <td>


                    {{-- <form action="{!! url('/admin/adminRoom',[$rooms->roomId]) !!}" method="POST"> --}}
                    <form action="{{route('Room.delete',$booked->bookingId)}}" method="POST">
                        @csrf
                        {!! method_field('DELETE') !!}

                        <button type="submit" class="btn-md btn-danger " onclick="if (!confirm('Are you sure to cancel Booking?')) { return false }">Cancel Booking</button>
                    </form>
                </td>
                @endforeach
                @endif
                </tr>
        </thead>
    </table>
