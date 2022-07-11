  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <!-- Title  -->
      <title>World - Blog &amp; Magazine Template</title>

      <!-- Favicon  -->
      <link rel="icon" href="img/core-img/favicon.ico">

      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset("lagi/style.css")}}">
      <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
      <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
      <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
      <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}">
      <link rel="stylesheet" href="{{asset("css/themify-icons.css")}}">
      <link rel="stylesheet" href="{{asset("css/animate.css")}}">



  </head>

  <body>
      <!-- Preloader Start -->
      <div id="preloader">
          <div class="preload-content">
              <div id="world-load"></div>
          </div>
      </div>
      <!-- Preloader End -->

      <!-- ***** Header Area Start ***** -->
      <header class="header-area">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <nav class="navbar navbar-expand-lg">
                          <!-- Logo -->
                          <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>
                          <!-- Navbar Toggler -->
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                          <!-- Navbar -->
                          <div class="collapse navbar-collapse" id="worldNav">
                              <ul class="navbar-nav ml-auto">
                                  <li class="nav-item active">
                                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="index.html">Home</a>
                                          <a class="dropdown-item" href="catagory.html">Catagory</a>
                                          <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                                          <a class="dropdown-item" href="regular-page.html">Regular Page</a>
                                          <a class="dropdown-item" href="contact.html">Contact</a>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Gadgets</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Lifestyle</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Video</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Contact</a>
                                  </li>
                              </ul>
                              <!-- Search Form  -->
                              <div id="search-wrapper">
                                  <form action="#">
                                      <input type="text" id="search" placeholder="Search something...">
                                      <div id="close-icon"></div>
                                      <input class="d-none" type="submit" value="">
                                  </form>
                              </div>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </header>
      <!-- ***** Header Area End ***** -->

      <!-- ********** Hero Area Start ********** -->
      <div class="hero-area">

          <!-- Hero Slides Area -->
          <div class="hero-slides owl-carousel">
              <!-- Single Slide -->
              <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg2.jpg);"></div>
              <!-- Single Slide -->
              <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
          </div>

          <!-- Hero Post Slide -->
          <div class="hero-post-area">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="hero-post-slide">
                              <!-- Single Slide -->
                              <div class="single-slide d-flex align-items-center">
                                  <div class="post-number">
                                      <p>1</p>
                                  </div>
                                  <div class="post-title">
                                      <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                  </div>
                              </div>
                              <!-- Single Slide -->
                              <div class="single-slide d-flex align-items-center">
                                  <div class="post-number">
                                      <p>2</p>
                                  </div>
                                  <div class="post-title">
                                      <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                  </div>
                              </div>
                              <!-- Single Slide -->
                              <div class="single-slide d-flex align-items-center">
                                  <div class="post-number">
                                      <p>3</p>
                                  </div>
                                  <div class="post-title">
                                      <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                  </div>
                              </div>
                              <!-- Single Slide -->
                              <div class="single-slide d-flex align-items-center">
                                  <div class="post-number">
                                      <p>4</p>
                                  </div>
                                  <div class="post-title">
                                      <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- ********** Hero Area End ********** -->

      <div class="main-content-wrapper section-padding-100">
          <div class="container">


              <div class="world-latest-articles">
                  <div class="row">
                      <div class="col-12 col-lg-8">
                          <div class="title">
                              <h5>Latest Articles</h5>
                          </div>

                          @foreach($post as $key)


                          <!-- Single Blog Post -->
                          <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                              <!-- Post Thumbnail -->
                              <div class="post-thumbnail">
                                  <img src="img/blog-img/b18.jpg" alt="">
                              </div>
                              <!-- Post Content -->
                              <div class="post-content">
                                  <a href="#" class="headline">
                                      <h5>{{$key->title}}</h5>
                                  </a>
                                  <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                  <!-- Post Meta -->
                                  <div class="post-meta">
                                      <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">{{$key->created_at}}</a></p>
                                  </div>
                              </div>
                          </div>

                          @endforeach

                      </div>

                      <div class="col-12 col-lg-4">
                          <div class="title">
                              <h5>Most Popular Videos</h5>
                          </div>

                          <!-- Single Blog Post -->
                          <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                              <!-- Post Thumbnail -->
                              <div class="post-thumbnail">
                                  <img src="img/blog-img/b7.jpg" alt="">
                                  <!-- Catagory -->
                                  <div class="post-cta"><a href="#">travel</a></div>
                                  <!-- Video Button -->
                                  <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                              </div>
                              <!-- Post Content -->
                              <div class="post-content">
                                  <a href="#" class="headline">
                                      <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                  </a>
                                  <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                  <!-- Post Meta -->
                                  <div class="post-meta">
                                      <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                  </div>
                              </div>
                          </div>

                          <!-- Single Blog Post -->
                          <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                              <!-- Post Thumbnail -->
                              <div class="post-thumbnail">
                                  <img src="img/blog-img/b8.jpg" alt="">
                                  <!-- Catagory -->
                                  <div class="post-cta"><a href="#">travel</a></div>
                                  <!-- Video Button -->
                                  <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                              </div>
                              <!-- Post Content -->
                              <div class="post-content">
                                  <a href="#" class="headline">
                                      <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                  </a>
                                  <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                  <!-- Post Meta -->
                                  <div class="post-meta">
                                      <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

              <!-- Load More btn -->
              <div class="row">
                  <div class="col-12">
                      <div class="load-more-btn mt-50 text-center">
                          <a href="#" class="btn world-btn">Load More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- ***** Footer Area Start ***** -->
      <footer class="footer-area">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-4">
                      <div class="footer-single-widget">
                          <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                          <div class="copywrite-text mt-30">
                              <p>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>
                                      document.write(new Date().getFullYear());

                                  </script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                  <p>Proudly distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-4">
                      <div class="footer-single-widget">
                          <ul class="footer-menu d-flex justify-content-between">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Fashion</a></li>
                              <li><a href="#">Lifestyle</a></li>
                              <li><a href="#">Contact</a></li>
                              <li><a href="#">Gadgets</a></li>
                              <li><a href="#">Video</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-12 col-md-4">
                      <div class="footer-single-widget">
                          <h5>Subscribe</h5>
                          <form action="#" method="post">
                              <input type="email" name="email" id="email" placeholder="Enter your mail">
                              <button type="button"><i class="fa fa-arrow-right"></i></button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <!-- ***** Footer Area End ***** -->

      <!-- jQuery (Necessary for All JavaScript Plugins) -->
      <script src="{{asset("js/jquery/jquery-2.2.4.min.js")}}"></script>
      <!-- Popper js -->
      <script src="{{asset("js/popper.min.js")}}"></script>
      <!-- Bootstrap js -->
      <script src="{{asset("js/bootstrap.min.js")}}"></script>
      <!-- Plugins js -->
      <script src="{{asset("js/plugins.js")}}"></script>
      <!-- Active js -->
      <script src="{{asset("js/active.js")}}"></script>

  </body>

  </html>
