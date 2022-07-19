 


<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('img/fav.png')}}">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>book a flight</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href=" {{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href=" {{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href=" {{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href=" {{asset('css/jquery-ui.css')}}">				
    <link rel="stylesheet" href=" {{asset('css/nice-select.css')}}">							
    <link rel="stylesheet" href=" {{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/owl.carousel.css')}}">				
    <link rel="stylesheet" href=" {{asset('css/main.css')}}">
  </head>
  <body>	
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6 col-6 header-top-left">
              <ul>
                <li><a href="#">Visit Us</a></li>
                <li><a href="#">Buy Tickets</a></li>
              </ul>			
            </div>
            <div class="col-lg-6 col-sm-6 col-6 header-top-right">
            <div class="header-social">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
            </div>
          </div>			  					
        </div>
      </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
             <h1>dear : {{Auth::user()->name}} </h1>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="packages.html">Packages</a></li>
                <li><a href="hotels.html">Hotels</a></li>
                <li><a href="insurance.html">Insurence</a></li>
                <li class="menu-has-children"><a href="">Blog</a>
                  <ul>
                    <li><a href="blog-home.html">Blog Home</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                </li>
                <li>

                  <form action="{{url('userlogout')}}" method="post">
                    @csrf
                  <input type="submit"  class="primary-btn text-uppercase" value="log out ">
                  </form>
                </li>

                 
            </nav><!-- #nav-menu-container -->					      		  
        </div>
      </div>
    </header><!-- #header -->
    
    <!-- start banner Area -->
    <section class="banner-area relative">
      <div class="overlay overlay-bg"></div>				
      <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
          <div class="col-lg-6 col-md-6 banner-left">
            <h6 class="text-white">you are going to book flight in </h6>
            <h1 class="text-white">{{$data->title}}</h1>
            <p class="text-white">
              If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.

            </p>
            <form action="{{url('profile')}}" method="get">
             <input type="submit" class="primary-btn text-uppercase" value="show all possible flights">
          </form>
        </div>
          <div class="col-lg-4 col-md-6 banner-right">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
              </li>
               
               
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
            
                <form action="{{url('book_flight')}}" method="post">
                  @csrf
                  <input type="number"  name="price" value="{{$data->price }}" readonly required hidden ><br>

              <h2>   the ticket price for one seat :   {{$data->price }}</h2> <br>
              <h2>  the flight will tick off from  :   {{$data->from }}</h2> <br>
              <h2>   the distination to           :   {{$data->to }}</h2> <br>
                
                    <input type="number" name="flight_id" value="{{$data->id }}" readonly hidden><br>
                  <input type="number" name="passenger_id" value="{{Auth::user()->id}}" readonly hidden><br>
                  <h4>  number of seats</h4> <input type="number" name="seats" min="1" required ><br>  
                  <br> 
                <input type="submit" class="primary-btn text-uppercase" value="submit ticket">								
              </form>
                
                
              </div>
              
            </div>
          </div>
        </div>
      </div>					
    </section>
    <!-- End banner Area -->
<br>
    <!-- start footer Area -->		
    <footer class="footer-area section-gap">
      <div class="container">

        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Agency</h6>
              <p>
                The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Navigation Links</h6>
              <div class="row">
                <div class="col">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                  </ul>
                </div>
                <div class="col">
                  <ul>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li>

                      <form action="{{url('userlogout')}}" method="post">
                      <input type="submit" value="log out ">
                      </form>
                    </li>

                  </ul>
                </div>										
              </div>							
            </div>
          </div>							
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>
                For business professionals caught between high OEM price and mediocre print and graphic output.									
              </p>								
              <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                  <div class="input-group d-flex flex-row">
                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                    <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                  </div>									
                  <div class="mt-10 info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">InstaFeed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="{{asset('img/i1.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i2.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i3.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i4.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i5.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i6.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i7.jpg')}}" alt=""></li>
                <li><img src="{{asset('img/i8.jpg')}}" alt=""></li>
              </ul>
            </div>
          </div>						
        </div>

        <div class="row footer-bottom d-flex justify-content-between align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->	
   
    <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>			
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
    <script src="{{asset('js/jquery-ui.js')}}"></script>					
      <script src="{{asset('js/easing.min.js')}}"></script>			
    <script src="{{asset('js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish.min.js')}}"></script>	
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('}js/jquery.magnific-popup.min.js')}}"></script>						
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>					
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>							
    <script src="{{asset('js/mail-script.js')}}"></script>	
    <script src="{{asset('js/main.js')}}"></script>	
  </body>
</html>
