

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

  .gallery_area{
margin-top:50px;
 }

.gallery_item {
  margin-bottom: 30px;
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
        <a class="nav-link" href="{!! url('/') !!}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{!! url('/booking') !!}">Booking</a>
      </li>
        <li class="nav-item active">
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