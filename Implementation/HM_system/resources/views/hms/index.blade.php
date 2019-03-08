

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


  .accomodation_area{
  padding-top:20px;
  }
  .accomodation_item {
  margin-bottom: 30px;
  padding-top:10px;
}

.accomodation_item .hotel_img {
  position: relative;
  margin-bottom: 10px;
  overflow: hidden;
  border-radius: 10px;
}

.accomodation_item .hotel_img img {
  -webkit-transition: all 0.4s linear;
  -o-transition: all 0.4s linear;
  transition: all 0.4s linear;
  margin-bottom:50px;
}

.accomodation_item .hotel_img .theme_btn {
  position: absolute;
  bottom: 20px;
  left: 50%;
  -webkit-transform: translate(-50%);
  -ms-transform: translate(-50%);
  transform: translate(-50%);
  padding: 5px 25px;
  max-width: 128px;
}

.accomodation_item .hotel_img:hover img {
  -webkit-transform: scale(1.19);
  -ms-transform: scale(1.19);
  transform: scale(1.19);
}

.accomodation_item h5 {
  font-size: 24px;
  line-height: 28px;
  color: #52c5fd;
  font-weight: 600;
  margin-bottom: 0px;
}

.accomodation_item h5 small {
  font-weight: 300;
  font-size: 14px;
}

.sec_h4 {
  font-size: 18px;
  line-height: 38px;
  font-weight: 600;
  color: #222222;
  margin-bottom: 0px;
}

.accomodation_two {
  margin-bottom: -40px;
}

.accomodation_two .accomodation_item {
  margin-bottom: 45px;
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
      <li class="nav-item active">
        <a class="nav-link" href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
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


  <a href="{!! url('auth/login') !!}" class="btn btn-secondary btn-md" role="button" aria-pressed="true">Log in</a>



 </form>
	</div>
	</nav>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL::to('HMSystemLayout/image/hotel1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL::to('HMSystemLayout/image/hotel2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL::to('HMSystemLayout/image/hotel3.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap bg-dark text-white">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hotel Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{URL::to('HMSystemLayout/image/room1.jpg')}}" alt="">
                                <a href="#" class="btn btn-outline-success">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4 text-white">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{URL::to('HMSystemLayout/image/room2.jpg')}}" alt="">
                                <a href="#" class="btn btn-outline-success">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4 text-white">Single Deluxe Room</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{URL::to('HMSystemLayout/image/room3.jpg')}}" alt="">
                                <a href="#" class="btn btn-outline-success">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4 text-white">Honeymoon Suit</h4></a>
                            <h5>$750<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{URL::to('HMSystemLayout/image/room4.jpg')}}" alt="">
                                <a href="#" class="btn btn-outline-success button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4 text-white">Economy Double</h4></a>
                            <h5>$200<small>/night</small></h5>
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
