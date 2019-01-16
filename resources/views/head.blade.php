<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet" />
  <link href="{{ url('/') }}/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="{{ url('/') }}/css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ url('/') }}/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('/') }}/css/cryptoticker.css">


  <!-- Theme skin -->
  <link id="t-colors" href="{{ url('/') }}/color/default.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('/') }}/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('/') }}/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('/') }}/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div class="ticker" id="example"></div>

  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        
      </div>
      <div class="container">
        @include('Centaur::notifications')


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="/"><i class="icon-tint"></i> Cryptvault</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    @if (Sentinel::check() && Sentinel::inRole('administrator'))
                            <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ route('users.index') }}">Users</a></li>
                            <li class="{{ Request::is('roles*') ? 'active' : '' }}"><a href="{{ route('roles.index') }}">Roles</a></li>
                        @endif
                    
                    <li class="dropdown">
                      <a href="#">Beginners <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('steps.home') }}">First Steps</a></li>
                        <li><a href="{{ route('robots.home') }}">Plans</a></li>
                        
      

                      </ul>
                    </li>
                    <li>
                      <a href="{{ route('affiliate.home') }}">Affiliate </a>
                    </li>
                    @if (Sentinel::check())
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            
                            <li><a href="{{ route('auth.logout') }}">Log Out</a></li>
                        @else
                    <li>
                      <a href="{{ route('auth.login.form') }}">Login </a>
                    </li>
                    <li>
                      <a href="{{ route('auth.register.form') }}">Register </a>
                    </li>
                    @endif
                    <li>
                      <a href="{{ route('contact.home') }}">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')



    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="/"><i class="icon-tint"></i> EverGrowth</a></h3>
              </div>
              <address>
                              <strong>EverGrowth company Inc.</strong><br>
                            Somestreet KW 101, Park Village W.01<br>
                            Jakarta 13426 Indonesia
                        </address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> support@evergrowthllc.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="{{ route('about.home') }}">Our company</a></li>
                <li><a href="{{ route('terms.home') }}">Terms and conditions</a></li>
                <li><a href="{{ route('privacy.home') }}">Privacy policy</a></li>
                <li><a href="#">Press release</a></li>
                <li><a href="{{ route('contact.home') }}">Contact Us</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              
              
                <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
              </ul>
              
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Cryptvault Inc.<script>document.write(new Date().getFullYear())</script> All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ url('/') }}/js/jquery.js"></script>
  <script src="{{ url('/') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ url('/') }}/js/bootstrap.js"></script>
  <script src="{{ url('/') }}/js/modernizr.custom.js"></script>
  <script src="{{ url('/') }}/js/toucheffects.js"></script>
  <script src="{{ url('/') }}/js/google-code-prettify/prettify.js"></script>
  <script src="{{ url('/') }}/js/jquery.prettyPhoto.js"></script>
  <script src="{{ url('/') }}/js/portfolio/jquery.quicksand.js"></script>
  <script src="{{ url('/') }}/js/portfolio/setting.js"></script>
  <script src="{{ url('/') }}/js/animate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typeit@5.10.7/dist/typeit.min.js"></script>
  <script src="{{ url('/') }}/js/jquery.cryptoticker.js"></script>


  <!-- Template Custom JavaScript File -->
  <script src="{{ url('/') }}/js/custom.js"></script>

</body>

</html>
