<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QucikPayAds</title>
    <!-- Favicon -->
    {{--<link rel="shortcut icon" type="image/icon" href=""/>--}}
    {{--<link rel="shortcut icon" type="image/icon" href="/public//public/assets/images/favicon.ico"/>--}}
    <!-- Font Awesome -->
    <link href="{{asset('public/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/slick.css')}}"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('public/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/animate.css')}}"/>
     <!-- Theme color -->
    <link id="switcher" href="{{asset('public/assets/css/theme-color/default.css')}}" rel="stylesheet">
    
    <link href="{{asset('public/assets/preloader.css')}}" rel="stylesheet">
    <!-- Main Style -->
    <link href="{{asset('public/assets/style.css')}}" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  {{--<div id="preloader">--}}
    {{--<div class="loader">&nbsp;</div>--}}
  {{--</div>--}}
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="{{asset('public/assets/images/header-bg.jpg')}}" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">WE PROVIDE
          <span>QUALITY</span>
          <span>AD PERFORMANCE,</span>
          <span>SERVICE</span>
         </h2>
        <!-- End header content slider -->
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="#">KNOW MORE</a>
          <a class="download-btn" href="{{route('register')}}">Create Account</a>
        </div>
      </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
           {{--<a class="navbar-brand logo" href="#"><img src="{{asset('Logo-old.jpg')}}" alt="logo"></a>--}}
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#about">ABOUT</a>
            </li>
              <li>
                  <a href="#pricing-table">PRICE </a>
              </li>
            {{--<li><a href="#team">TEAM</a></li>--}}
            <li>
                <a href="#service">SERVICE</a></li>
            {{--<li><a href="#portfolio">PORTFOLIO</a></li>--}}

            {{--<li><a href="#from-blog">BLOG </a></li>--}}
            <li>
                <a href="#contact">CONTACT</a>
            </li>
              @if (Route::has('login'))
                  @auth
                  <li>
                      <a href="{{ url('/home') }}">Dashboard</a>
                  </li>
                  <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                  </li>

              @else
                  <li >
                    <a href="{{ route('login') }}">Login</a>
                  </li>
                  @if (Route::has('register'))
                      <li>
                          <a href="{{ route('register') }}">Register</a>
                      </li>
                  @endif
                  @endauth
              @endif
          </ul>
        </div><!--/.nav-collapse -->
       <div class="search-area" style="background-image: url('{{asset("public/assets/images/search-icon.png")}}')">
           <span class=""></span>
          <form action="">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>
      </div>
    </nav>
  </section>
  <!-- End menu section -->

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Quick Pay Ads</span></h2>
              <span class="tittle-line"></span>
              <p>We ensure the highest quality traffic through our exclusive publisher network with patented, real-time
                  ClickShield® technology. We also offer IAS verified reporting for qualified advertisers.
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle">PERFORMANCE</h4>
                    <p>You have target metrics, and we’ll help you reach them. We can deliver you a high volume of leads,
                        sales, or site visitors at lower effective costs. </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-thumbs-o-up wc-icon"></span>
                    <h4 class="wc-tittle">QUALITY</h4>
                    <p>We ensure the highest quality traffic through our exclusive publisher network with patented,
                        real-time ClickShield® technology. We also offer IAS verified reporting for qualified advertisers.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">SERVICE</h4>
                    <p>We offer dedicated and effective account managers upon request who can help you through the
                        process from account creation to campaign optimization.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-support wc-icon"></span>
                    <h4 class="wc-tittle">business solution</h4>
                    <p> Communicate in your customer’s language. Dynamically insert ticket content based on their
                        preferred language so that your agents don’t have to do the translation.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
    </div>
  </section>
  <!-- End about section -->
  <!-- Start Pricing Table section -->
  <section id="pricing-table">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="pricing-table-area">
                      <div class="title-area">
                          <h2 class="tittle">Pricing table</h2>
                          <span class="tittle-line"></span>
                          <p>unde omnis iste natus error sit voluptatem accusantium doloremque laudantium  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                      </div>
                      <!-- service content -->
                      <div class="pricing-table-content">
                          <ul class="price-table">
                              <li class="wow slideInUp">
                                  <div class="single-price">
                                      <h4 class="price-header">Bronze</h4>
                                      <span class="price-amount">$50 / 12 mo</span>
                                      <p>Direct Referrs 10%Bouns</p>
                                      <p>20.Direct Referrs 10% Cash Bouns</p>
                                      <p>30 Direct Referrs limit</p>
                                      <p>0.018 per ads view</p>
                                      <p>0.9 Daily earning </p>
                                      <p>23.4 monthy earning </p>
                                      <p>1st,15 withdrew Day</p>
                                      <a data-text="SIGN UP" class="button button-default" href="{{route('register')}}"><span>SIGN UP</span></a>
                                  </div>
                              </li>
                              <li class="wow slideInUp">
                                  <div class="single-price standard-price">
                                      <h4 class="price-header">Silver</h4>
                                      <span class="price-amount">100$ / 12 mo</span>
                                      <p>Direct Referrs 10%Bouns</p>
                                      <p>20 Direct Referrs 10% Cash Bouns</p>
                                      <p>30 Direct Referrs limit</p>
                                      <p>0.038  per ads view</p>
                                      <p>1.9  Daily earning</p>
                                      <p>49.4  monthy earning</p>
                                      <p>1st,15 withdrew Day</p>
                                      <a data-text="SIGN UP" class="button button-default" href="{{route('register')}}"><span>SIGN UP</span></a>
                                  </div>
                              </li>
                              <li class="wow slideInUp">
                                  <div class="single-price">
                                      <h4 class="price-header">      GOLD  </h4>
                                      <span class="price-amount">200$ /12 mo</span>
                                      <p>                              Direct.  Referrs  10%Bouns
                                      </p>
                                      <p> 20.  Direct  Referrs 10% Cash Bouns</p>
                                      <p>    30 Direct Referrs limit</p>
                                      <p>0.07  per ads view</p>
                                      <p>3.5  Daily earning</p>
                                      <p>91  monthy earning</p>
                                      <p>1st,15 withdrew Day/p>
                                      <a data-text="SIGN UP" class="button button-default" href="{{route('register')}}"><span>SIGN UP</span></a>
                                  </div>
                              </li>
                              <li class="wow slideInUp">
                                  <div class="single-price">
                                      <h4 class="price-header">Team income </h4>
                                      <span class="price-amount">bouns</span>
                                      <p>10,000 & 500 Cash</p>
                                      <p>25,000 & 1000 Cash </p>
                                      <p>35000 & 2000 Cash</p>
                                      <p>50,000 $ salry</p>
                                      <p>500 $ salary/ Month </p>
                                      <p>For 5 Years</p>
                                      <p>Win Mobile and Laptop</p>

                                      <a data-text="SIGN UP" class="button button-default" href="{{route('register')}}"><span>SIGN UP</span></a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Pricing Table section -->
  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">ADVERTISERS - Advertise Online</h2>
              <span class="tittle-line"></span>
                <p>Transform Your Business By Advertising Your Web Site</p>
            </div>

            <!-- service content -->
            <div class="service-content">
              <ul class="service-table">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title">Advertise Your Website</h4>
                    <p>Advertise your website to millions of potential customers and visitors</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc  service-icon"></span>
                    <h4 class="service-title">Improve Your Site SEO</h4>
                    <p>One of the greatest ways to improve your site SEO and page ranking</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-hand-pointer-o service-icon"></span>
                    <h4 class="service-title">Pay Only For Clicks</h4>
                    <p>
                        Do not pay for impressions,only for real clicks</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-dollar service-icon"></span>
                    <h4 class="service-title">Minimum Deposit US 5.00$</h4>
                    <p>Start with a small investment and see the amazing results</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start service section -->
  <section id="service">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="service-area">
                      <div class="title-area">
                          <h2 class="tittle">PUBLISHERS - Earn Money Online</h2>
                          <span class="tittle-line"></span>
                          <p>Start Working Now, Earn Money & Get Paid Online</p>
                      </div>

                      <!-- service content -->
                      <div class="service-content">
                          <ul class="service-table">
                              <li class="col-md-3 col-sm-6">
                                  <div class="single-service wow slideInUp">
                                      <span class="fa fa-sign-in service-icon"></span>
                                      <h4 class="service-title">Publish Ads - Get. Paid. Online.</h4>
                                      <p>Sign in to see how much you can earn</p>
                                  </div>
                              </li>
                              <li class="col-md-3 col-sm-6">
                                  <div class="single-service wow slideInUp">
                                      <span class="fa fa-bank service-icon"></span>
                                      <h4 class="service-title">Get Paid Instantly</h4>
                                      <p>Your balance is updated instantly</p>
                                  </div>
                              </li>
                              <li class="col-md-3 col-sm-6">
                                  <div class="single-service wow slideInUp">
                                      <span class="fa fa-money service-icon"></span>
                                      <h4 class="service-title">Withdraw Your Balance</h4>
                                      <p>Withdraw your balance to CashMaal.com</p>
                                  </div>
                              </li>
                              <li class="col-md-3 col-sm-6">
                                  <div class="single-service wow slideInUp">
                                      <span class="fa fa-support service-icon"></span>
                                      <h4 class="service-title">Quick & Free Start</h4>
                                      <p>100% Free to join and start</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End service section -->

  <!-- Start counter section -->
  <section id="counter">
    <img src="{{asset('public/assets/images/counter-bg.jpg')}}" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-users"></span>
                  <div class="counter-count">
                    <span class="counter">30660</span>
                    <p>Registred Client</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter">750</span>
                    <p>Online Members</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-hand-pointer-o"></span>
                  <div class="counter-count">
                    <span class="counter">51505</span>
                    <p>Ads Clicked</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-tasks"></span>
                  <div class="counter-count">
                    <span class="counter">94148</span>
                    <p>Paid To Members</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End counter section -->
  <!-- Start Contact section -->
  <section id="contact" style="background-image: url('{{asset("public/assets/images/contact-bg.jpg")}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact with us</h2>
            <address class="single-address">
              <h4>Postal address:</h4>
              <p>Dummy Data</p>
            </address>
             <address class="single-address">
              <h4>Headquarters:</h4>
              <p>Dummy Data</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Phone Number: (123) 456 7890</p>
              <p>Fax Number: (123) 456 7890</p>
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Support: Support@example.com</p>
              <p>Sales: sales@example.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <form action="" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea class="form-control"></textarea>
              </div>
              <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Footer -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">
                {{--<a class="footer-logo" href="#"><img src="{{asset('public/assets/images/Logo-old.jpg')}}" alt="Logo"></a>--}}
              <div class="footer-social">
                <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>ALL RIGHTS RESERVED © 2018 QuickPayAds| PRIVACY POLICY | TERMS OF SERVICE</p>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- initialize jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="{{asset('public/assets/js/bootstrap.js')}}"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="{{asset('public/assets/js/slick.js')}}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{asset('public/assets/js/waypoints.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/js/jquery.counterup.js')}}"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="{{asset('public/assets/js/jquery.mixitup.js')}}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{asset('public/assets/js/jquery.fancybox.pack.js')}}"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="{{asset('public/assets/js/wow.js')}}"></script>

  <!-- Custom js -->
  <script type="text/javascript" src="{{asset('public/assets/js/custom.js')}}"></script>

  </body>
</html>