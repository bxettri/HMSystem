

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('HMSystemLayout/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{url('HMSystemLayout/css/fonts.css')}}"/>
   <script src="{{url('HMSystemLayout/js/jquery.js')}}"></script>
   <script src="{{url('HMSystemLayout/js/bootstrap.js')}}"></script>
   <script src="{{url('HMSystemLayout/js/popper.js')}}"></script>   <title>HMS</title>
 <style>
  body{
  background:url(image/background.jpg);
  background-size:100%;
  }

  .booking
  {
	padding:50px;
	padding-bottom:50px;
  }


.footer{padding:10px;}
  </style>
  </head>


<body>
<div class="container">

<nav class="navbar navbar-expand-lg  navbar-light bg-light mr-0">
  <a class="navbar-brand" href="#">Hotel Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto font-weight-bold">
      <li class="nav-item">
        <a class="nav-link" href="{!! url('/') !!}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{!! url('/booking') !!}">Booking</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{!! url('/gallery') !!}">Gallery</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="{!! url('/aboutus') !!}">About us</a>
      </li>



    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success mr-2" type="submit">Search</button>


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Login</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-dark">
	<div class="modal-header bg-light">
							<h4 class="modal-title">Login</h4>
							</div>
							<div class="container text-center bg-info">

			<form method="post" action="#">
				<div class="container text-center">
							<!-- <img src="image/logoo.png" class="img-fluid" style="width:150px"alt="Responsive image">
				 -->
				 </div></br>
					<label for="username">Username</label>
						<input type="username" class=" form-control" id="username" name="user_name"/></br>
							<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="ppass"/></br>

			<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
			</div>
							<br/>

					<button class="btn btn-primary btn-md" type="submit" name="login" >Sign in</button>
					<a href="signup.html" class="btn btn-secondary btn-md" role="button" aria-pressed="true">Sign up</a>
					<p>*If you are new please sign up to continue.</p>
					</form>

</div>
    </div>
  </div>
</div>

 </form>
	</div>
	</nav>

    <div class="container mt-5 mb-5">
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
                            <input class="datetime" type="date" value="2011-08-19" id="example-date-input">
                        </div>
            </div>


            <div class="col-md-4">

                    <div class="row">
                            <p>Check Out</p>&nbsp;&nbsp;
                            <input class="datetime" type="date" value="2011-08-19" id="example-date-input">

                        </div>
            </div>


        </div>
    </div>


	<footer class="footer bg-light clearfix">
	  <div class="row">
   <div class="container col-md-4">
   <h2 class="text-info">Additional info</h2>
   <p class="font-weight-bold">Palm beach inc.<p>
   <p>New Baneshwor </br> kathmandu, Nepal</p>
   </div>

	<div class="container col-md-4">
	<h2 class="text-info">Quick Links</h2>
     <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About</a></li>
          </ul>
  </div>
	<div class="footer3 col-md-4">
   <h2 class="text-info">Get In Touch</h2>


			<p>
		  <ul class="list-unstyled inline">
            <li><a href="#"></a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Linked in</a></li>

          </ul>
		  </p>
				<form  method="post">
				<div class="form-inline">
					<input type="email" name="nEmail" placeholder="Sign up for newsleter"class="form-control" />
							&nbsp;
					<button type="submit" class="btn btn-primary " name="nSig">Sign up</button>
				</div>
		     </form>

	</div>
		</div>
	<div class="container text-center copy">
 &nbsp;&nbsp;&nbsp;&copy; BibekDahal-Design -2018</div>
</footer>


</div>
</body>
</html>
