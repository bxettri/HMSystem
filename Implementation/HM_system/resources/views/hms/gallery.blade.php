


<body>
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
                  <li class="nav-item active">
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









	<section class="gallery_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Royal Hotel Gallery</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row imageGallery1" id="gallery">
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/01.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/01.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/02.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/02.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/03.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/03.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/04.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/04.jpg"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/05.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/05.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/06.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/06.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/01-1.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/01-1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/02-1.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/02-1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{URL::to('HMSystemLayout/image/03-1.jpg')}}" alt="">
                            <div class="hover">
                            	<a class="light" href="image/03-1.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>













<div class="container">
 @include('hms/footer')
</div>


</div>
</body>
</html>
