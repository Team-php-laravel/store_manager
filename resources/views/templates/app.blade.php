<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Store Manager - @yield('title')</title>
    <link rel="stylesheet" type="text/css" media="all" href="../public/css/style.css" />
    <link rel="stylesheet" href="../public/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" media="all" type="text/css" href="../public/js/prettyPhoto/css/prettyPhoto.css" />
    <link rel="shortcut icon" href="favicon.png" />
</head>

<body>
    <div id="header-wrapper">
        <div id="header">
            <a href="index.php"><img src="../public/images/logo.png" alt="Food Recipes" class="logo" /></a>
        </div>
        <div id="nav-wrap">
            <div class="inn-nav clearfix">
                <ul class="nav">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <!-- <li>
                        <a href="#">Sliders</a>
                        <ul>
                            <li><a href="basic-slider.html">Basic Slider</a></li>
                            <li><a href="index-2.html">Right Info Slider</a></li>
                            <li><a href="nivo-slider.html">Nivo Slider</a></li>
                            <li><a href="accordion-slider.html">Accordion Slider</a></li>
                            <li><a href="thumb-slider.html">Thumbnail Slider</a></li>
                        </ul>
                    </li>
                    <li><a href="recipes.html">Recent Recipes</a></li>
                    <li>
                        <a href="single-sb.html">Recipe Detail</a>
                        <ul>
                            <li><a href="single-sb.html">Variation One</a></li>
                            <li><a href="single-full.html">Variation Two</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li> -->
                    <li><a href="news">Tin Tức</a></li>
                    <!-- <li><a href="single.html">Single Post</a></li>
                    <li>
                        <a href="features.html">Features</a>
                        <ul>
                            <li><a href="page.html">Full Width</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="features.html">Additional Features</a></li>
                        </ul>
                    </li> -->
                    <li><a href="contact">Liên Hệ</a></li>
                </ul><!-- end of nav ul -->
                <!-- MAIN NAVIGATION ENDS HERE -->

                <!-- SOCIAL NAVIGATION -->
                <ul class="social-nav">
                    <li class="twitter"><a href="#"></a></li>
                    <li class="facebook"><a href="#"></a></li>
                    <li class="flickr"><a href="#"></a></li>
                    <li class="rss"><a href="#"></a></li>
                </ul><!-- end of social-nav ul -->
            </div>
        </div>
        <span class="w-pet-border"></span>

    </div>


    <!-- ============= CONTAINER STARTS HERE ============== -->


    <div id="container">
        <div class="top-search clearfix">
            <h3 class="head-pet"><span>Tìm Kiếm</span></h3>
            <form action="#" id="searchform" method="post">
                <p>
                    <input type="text" name="2" id="s" class="field" value="Search for" />
                    <input type="submit" name="s_submit" id="s-submit" value="🔎" />
                </p>
            </form>
                    <p class="statement"><span class="fireRed">Popular searches :</span> <a href="#">meatloaf recipes</a>, <a href="#">banana cake recipes</a>, <a href="#">cheesecake recipes</a>, <a href="#">carbonara recipes</a></p>
        </div>
        <!-- ============= CONTAINER AREA ENDS HERE ============== -->
        @yield('content')
        <!-- ============= BOTTOM AREA STARTS HERE ============== -->
        <div id="bottom-wrap">
            <ul id="bottom" class="clearfix">
                <li>
                    <div class="about">
                        <a href="index-2.html"><img src="images/footer-logo.png" alt="Footer Logo" class="footer-logo" /></a>
                        <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. For every fine wine, there’s the For every fine wine...</p>
                        <a href="#" class="readmore">Read more About Us</a>
                    </div>
                </li>
                <li>
                    <h2>Recent <span>Recipes</span></h2>
                    <ul class="recent-posts">
                        <li>
                            <a href="#" class="img-box"><img src="images/tiny-images/tiny_16.jpg" alt="Image" /></a>
                            <h5><a href="#">The World's Best</a></h5>
                            <p>Sandwich Recipes here once there will be chnace of going to go</p>
                        </li>

                        <li>
                            <a href="#" class="img-box"><img src="images/tiny-images/tiny_17.jpg" alt="Image" /></a>
                            <h5><a href="#">The World's Best</a></h5>
                            <p>Sandwich Recipes here once there will be chnace of going to go</p>
                        </li>
                    </ul>
                </li>

                <li>
                    <h2>Twitter <span>Updates</span></h2>
                    <div id="twitter_update_list" class="twitter">
                    </div>
                </li>

            </ul><!-- end of bottom div -->
        </div><!-- end of bottom-wrap div -->
        <!-- ============= BOTTOM AREA ENDS HERE ============== -->


        <!-- ============= FOOTER STARTS HERE ============== -->

        <div id="footer-wrap">
            <div id="footer">
                <p class="copyright">Copyright © 2020</p>
                <p class="dnd">Developed by <a href="#">Team Laravel</a></p>
            </div><!-- end of footer div -->
        </div><!-- end of footer-wrapper div -->

        <!-- ============= FOOTER STARTS HERE ============== -->


        <!-- Remove it if you do not need jQuery -->
        <script type="text/javascript" src="js/jquery-1.11.0.js"></script>

        <!-- Remove it if you do not need jquery.easing : http://gsgd.co.uk/sandbox/jquery/easing/ -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.js"></script>
        <script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/jquery.backgroundPosition.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/twitterFetcher_v10_min.js"></script>
        <!-- script file to add your own JavaScript -->
        <script type="text/javascript" src="js/script.js"></script>

</body>
<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:03:07 GMT -->

</html>
