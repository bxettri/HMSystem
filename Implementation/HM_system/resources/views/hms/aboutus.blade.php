

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

.aboutus
{
margin-top:100px;
margin-bottom:100px;
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
        <a class="nav-link" href="{!! url('/') !!}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{!! url('/booking') !!}">Booking</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{!! url('/gallery') !!}">Gallery</a>
      </li>
	    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/aboutus') !!}">About us</a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success mr-2" type="submit">Search</button>


  <a href="{!! url('auth/login') !!}" class="btn btn-secondary btn-md" role="button" aria-pressed="true">Log in</a>



 </form>
	</div>
	</nav>



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
