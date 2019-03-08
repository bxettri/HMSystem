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

<header>

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

</header>
