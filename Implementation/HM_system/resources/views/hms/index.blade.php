<div class="container">
@include('hms/header')
</div>
<body>
<div class="container">
@include('hms/nav')
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
  @include('/hms/footer')
</div>

