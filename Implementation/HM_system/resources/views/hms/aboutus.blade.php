
<div class="container">
@include('hms/header')
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
            <li class="nav-item ">
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
              <li class="nav-item active">
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
</div>







	   <section class="aboutus section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h1 class="title title_color">About Us > Our History</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <a href="#" class="btn btn-outline-success">Know more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{URL::to('HMSystemLayout/image/about_bg.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
        </section>
			   <section class="aboutus section_gap">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <img class="img-fluid" src="{{URL::to('HMSystemLayout/image/about_bg.jpg')}}" alt="img">
                    </div>
					 <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h1 class="title title_color">About Us > Mission & Vision</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <a href="#" class="btn btn-outline-success">Know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>














<div class="container">
@include('hms/footer')

</div>
</body>
</html>
