<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('tieude')</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  

  <!-- Css -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="/img/favicon.ico">
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

  <!-- Lazyload -->
  <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light">

  

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
     

        
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->
  <main class="main oh" id="main">

<!-- Navigation -->
<header class="nav">

  <div class="nav__holder nav--sticky">
    <div class="container relative">
      <div class="flex-parent">

        <!-- Side Menu Button -->
        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
          <span class="nav-icon-toggle__box">
            <span class="nav-icon-toggle__inner"></span>
          </span>
        </button> <!-- end Side menu button -->

        <!-- Mobile logo -->
        <a href="index.html" class="logo logo--mobile d-lg-none">
          <img class="logo__img" src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" alt="logo">
        </a>

        <!-- Nav-wrap -->
        <nav class="flex-child nav__wrap d-none d-lg-block">              
          <ul class="nav__menu">

            <li class="active">
              <a href="/">Trang chủ</a>
            </li>

            <li class="nav__dropdown">
              <a href="/admin/loaitin">Danh mục</a>
              
            </li>

            <li class="nav__dropdown">
              <a href="/about">Tin</a>
            </li>

            <li class="nav__dropdown">
              <a href="/lienhe">Thành viên</a>
            </li>

            <li>
              <a href="#">Thoát</a>
            </li>


          </ul> <!-- end menu -->
        </nav> <!-- end nav-wrap -->

        
    
      </div> <!-- end flex-parent -->
    </div> <!-- end container -->

  </div>
</header> <!-- end navigation -->

<!-- Header -->
<div class="header">
  <div class="container">
    <div class="flex-parent align-items-center">
      
      <!-- Logo -->
      <a href="/" class="logo d-none d-lg-block">
        <img class="logo__img" src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x" alt="logo">
      </a>

      <!-- Ad Banner 728 -->
      <div class="text-center">
        <a href="/">
          <img src="/img/blog/placeholder_leaderboard.jpg" alt="">
        </a>
      </div>

    </div>
  </div>
</div> <!-- end header -->
    <main>
        @yield('noidungchinh')
        
    </main>
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="widget">
                <a href="index.html">
                  <img src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" class="logo__img" alt="">
                </a>
                <p class="mt-20">We bring you the best Premium WordPress Themes. Deliver smart websites faster with this amazing theme. We care about our buyers.</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <h4 class="widget-title">Latest Posts</h4>
              <ul class="post-list-small">
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-75">
                        <a href="single-post.html">
                          <img data-src="img/blog/popular_post_1.jpg" src="img/empty.png" alt="" class="lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                      </ul>
                    </div>                  
                  </article>
                </li>
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-75">
                        <a href="single-post.html">
                          <img data-src="img/blog/popular_post_2.jpg" src="img/empty.png" alt="" class="lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">How Meditation Can Transform Your Business</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                      </ul>
                    </div>                  
                  </article>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="widget widget__newsletter">
                <h4 class="widget-title">Follow us</h4>

                <div class="socials mb-20">
                  <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                  <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                  <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                </div>

                <form class="mc4wp-form" method="post">
                  <div class="mc4wp-form-fields">
                    <p>
                      <input type="email" name="EMAIL" placeholder="Your email" required="">
                    </p>
                    <p>
                      <input type="submit" class="btn btn-lg btn-color" value="Subscribe">
                    </p>
                  </div>
                </form>
                
              </div>
            </div>            

            <div class="col-lg-3 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title">Useful Links</h4>
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="categories.html">Categories</a></li>
                  <li><a href="shortcodes.html">Shortcodes</a></li>
                </ul>
              </div>
            </div>            

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 order-lg-2 text-right text-md-center">
              <div class="widget widget_nav_menu">
                <ul>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Advertise</a></li>
                  <li><a href="#">Affiliates</a></li>
                  <li><a href="#">Newsletter</a></li>
                </ul>
              </div>              
            </div>
            <div class="col-lg-5 order-lg-1 text-md-center">
              <span class="copyright">
                &copy; 2023 AhaMag | Made by <a href="http://deothemes.com">Ho Viet Thuan</a>
              </span>
            </div>            
          </div>
          
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>  
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>