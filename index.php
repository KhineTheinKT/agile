
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="concert-tours.php">Concert &amp; Tours</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="concert-tours.php">Concerts</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                    <!-- <li><input type="text" class="form-control" id="name" placeholder="Search"></li>
                                    <li><a href="#" class="btn musica-btn m-2">search</a></li> -->
                                </ul>
                                <form action="search.php" method="get" id="form">
                                    <input type="text" class="form" name="search" placeholder="search..">
                                    <input type="submit" class="btn musica-btn m-2" value="Search">
                                </form>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/?hl=en"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Musica <span>Musica</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">E-tickets service</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Musica</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/zouk-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Club life <span>Club life</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">feel it</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Club life</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/ultrabg.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Festivals <span>Festivals</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Waiting you</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Festivals</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class="bg-gradients"></div>

        <!-- Slide Down -->
        <div class="slide-down" id="scrollDown">
            <h6>Please Slide Down Me 😉</h6> 
            <div class="line"></div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Ultra singapore ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/ultrabg.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Ultra Singapore</h2>
                        <h6>is waiting you!</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <!-- You Tube link -->
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/es9m6LFK6DI" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- You Tube link end -->
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4>Hello, Brothers/Sisters</h4>
                        <p>we are waiting you. we are waiting you. we are waiting youwe are waiting you. we are waiting you. we are waiting youwe are waiting you. we are waiting you. we are waiting you
                            (testing)(testing)(testing)(testing)
                        </p>
                        <img src="img/core-img/signature.png" alt="">N
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Ultra singapore ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Upcoming shows</h2>
                        <h6>All festivals are more than you imagine and take it easy to you!</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>17 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s1.png" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>ULTRA Singapore</h6>
                                    <p>Ultra park, Singapore</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Ultra Park</p>
                            </div>
                            <div class="shows-time">
                                <p>15:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="buyultra.php" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>23 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s2.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Black Pink</h6>
                                    <p>Bangkok, Thailand</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p> At Impact Arena/ <br> Munag Thong Thani</p>
                            </div>
                            <div class="shows-time">
                                <p>20:00</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="buyblackpink.php" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>
                       
                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s4.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>ULTRA Seoul World</h6>
                                    <p>Seoulland, Korea</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Seoulland</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="buykorea.php" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s3.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Twice</h6>
                                    <p>Singapore</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>TBA</p>
                            </div>
                            <div class="shows-time">
                                <p>TBA</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="buytwice.php" class="btn musica-btn">Register</a>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->
    <!--<div class="music-player-area section-padding-100"> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div class="featured-shows-slides owl-carousel">


                        <!-- Single Music Player -->
                        
                        <div class="single-music-player">
                            <img  width="800" height="574" src="img/bg-img/mp1.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Hello</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img  width="800" height="574" src="img/bg-img/mp3.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Hardwell</h5>
                                    <p>All that we living for</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/hardwell.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img  width="800" height="574" src="img/bg-img/mp4.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>KSHMR</h5>
                                    <p>Carry me home</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/kshmr.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!--</div> -->
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Featured album</h6>
                                    <h4>Love is all Around</h4>
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music active">
                                        <h6>Hardwell</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/hardwell.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>KSHMR</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/kshmr.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Message to my future self</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ##### Featured Album Area End ##### -->

    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h6>Original products of the events!</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/t-shirt.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>ULTRA T-shirt</h6>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>$30</p>
                            </div>
                            <div class="shows-time">
                            </div>
                            <div class="buy-tickets">
                                <a href="buyultrashirt.php" class="btn musica-btn">Buy</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/light-stick.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Black Pink light stick</h6>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>$20.99</p>
                            </div>
                            <div class="shows-time">
                            </div>
                            <div class="buy-tickets">
                                <a href="buylightstick.php" class="btn musica-btn">Buy</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/candy.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Twice candy bound</h6>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>$25.99</p>
                            </div>
                            <div class="shows-time">
                            </div>
                            <div class="buy-tickets">
                                <a href="buycandy.php" class="btn musica-btn">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>