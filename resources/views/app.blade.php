<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Store Manager</title>
    <link rel="stylesheet" type="text/css" media="all" href="../public/css/style.css" />
    <link rel="stylesheet" href="../public/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" media="all" type="text/css" href="../public/js/prettyPhoto/css/prettyPhoto.css" />
    <link rel="shortcut icon" href="favicon.png" />
</head>
<body>
    <div id="header-wrapper">
        <div id="header">
            <a href="index.html"><img src="../public/images/logo.png" alt="Food Recipes" class="logo" /></a>
        </div>
        @section('navigationBar')
        <div id="nav-wrap">
            <div class="inn-nav clearfix">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="social-nav">
                    <li class="twitter"><a href="#"></a></li>
                    <li class="facebook"><a href="#"></a></li>
                    <li class="flickr"><a href="#"></a></li>
                    <li class="rss"><a href="#"></a></li>
                </ul>
            </div>
        </div>
        @show

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

        <!-- ============= CONTENT AREA STARTS HERE ============== -->
        <div id="content">

            <!-- SLIDER STARTS HERE -->
            <div id="slider" class="slider2">
                <div class="most-rated">
                    <div class="item">
                        <a href="#" class="img-box"><img src="images/slider/left_1.jpg" alt="Hotest" /></a>
                        <h5><a href="#">The World's Best Sndwich Recipes here</a></h5>
                        <p>For every fine wine, there's the perfect</p>
                        <p class="rate">
                            <span class="on"></span>
                            <span class="on"></span>
                            <span class="on"></span>
                            <span class="off"></span>
                            <span class="off"></span>
                        </p>
                    </div>
                </div>
                <h2 class="slider-head"><img src="images/slider-heading.png" alt="Top3 Recipes of the Day" /></h2>
                <p class="slogan">If food is an experience for you, then you will find it at the Food Recipe</p>
                <div class="slides right-slider">
                    <ul>
                        <li>
                            <a href="#" class="img-box"><img src="images/slider/left_2.jpg" alt="Hotest" /></a>
                            <div class="slide-info">
                                <h2><a href="#">Do You Think You Know Real Shawarma</a></h2>
                                <div class="rating">
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="off"></span>
                                    <span>Average Member Rating: <span>4.0 / 5</span></span>
                                </div>
                                <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. For every fine wine, there’s the...</p>
                                <a href="#" class="readmore">Read more</a>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="img-box"><img src="images/slider/left_3.jpg" alt="Hotest" /></a>
                            <div class="slide-info">
                                <h2><a href="#">Yummy Chocolate Cake You Have Never Eaten</a></h2>
                                <div class="rating">
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="off"></span>
                                    <span>Average Member Rating: <span>4.0 / 5</span></span>
                                </div>
                                <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. For every fine wine, there’s the...</p>
                                <a href="#" class="readmore">Read more</a>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="img-box"><img src="images/slider/left_1.jpg" alt="Slider Image" /></a>
                            <div class="slide-info">
                                <h2><a href="#">Special Pizza Recipe</a></h2>
                                <div class="rating">
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="on"></span>
                                    <span class="off"></span>
                                    <span>Average Member Rating: <span>4.0 / 5</span></span>
                                </div>
                                <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. For every fine wine, there’s the...</p>
                                <a href="#" class="readmore">Read more</a>
                            </div>
                        </li>
                    </ul>
                    <p class="sliderNav"><span></span></p>
                </div><!-- end of slides -->
            </div><!-- end of Slider div -->
            <!-- SLIDER AREA ENDS HERE -->

            <div id="whats-hot">
                <h2 class="w-bot-border">Whats <span>Hot</span></h2>

                <ul class="cat-list clearfix">
                    <li>
                        <h3><a href="#">Indian Special</a></h3>
                        <a href="#" class="img-box"><img src="images/hot-recipes/hot_1.jpg" alt="Recipe Collections" /></a>
                        <h4><a href="#">Some Heading text goes here //</a></h4>
                        <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                    </li>
                    <li>
                        <h3><a href="#">Rice Special</a></h3>
                        <a href="#" class="img-box"><img src="images/hot-recipes/hot_2.jpg" alt="Recipe Collections" /></a>
                        <h4><a href="#">Some Heading text goes here //</a></h4>
                        <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                    </li>
                    <li>
                        <h3><a href="#">Sea Food</a></h3>
                        <a href="#" class="img-box"><img src="images/hot-recipes/hot_3.jpg" alt="Recipe Collections" /></a>
                        <h4><a href="#">Some Heading text goes here //</a></h4>
                        <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                    </li>
                    <li>
                        <h3><a href="#">Sandwiches</a></h3>
                        <a href="#" class="img-box"><img src="images/hot-recipes/hot_4.jpg" alt="Recipe Collections" /></a>
                        <h4><a href="#">Some Heading text goes here //</a></h4>
                        <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                    </li>
                </ul>

            </div><!-- end of whats-hot div -->

            <span class="w-pet-border"></span>

            <div id="home-infos" class="clearfix">

                <div class="wk-special clearfix">
                    <h2 class="w-bot-border">Weekly <span>Special</span></h2>
                    <div class="img-box">
                        <img src="images/hot-recipes/special.jpg" alt="Weekly Special" />
                    </div>
                    <h4><a href="#">Heading text goes here //</a></h4>
                    <p>or every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. Mouth water recipes and <a href="#">...more</a></p>
                    <span class="clearfix"></span><br />
                    <a href="#" class="readmore">Recent Weekly Specials</a>
                </div>

                <div class="newsEvent">
                    <h2 class="w-bot-border">News <span>&amp; Events</span></h2>
                    <ul class="list">

                        <li>
                            <h5><a href="#">Heading will be appear here</a></h5>
                            <p>For every fine wine, there’s the perfect pairing of oli ves and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                        </li>

                        <li>
                            <h5><a href="#">Heading will be appear here</a></h5>
                            <p>For every fine wine, there’s the perfect pairing of oli ves and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                        </li>

                    </ul>
                </div><!-- end of news div -->

                <div class="fav-recipes">
                    <h2 class="w-bot-border">Favourite <span>Recipes</span></h2>
                    <div class="bot-border">&nbsp;</div>
                    <div class="tabed">
                        <ul class="tabs clearfix">
                            <li class="current">Popular</li>
                            <li>Recent</li>
                            <li>Random</li>
                        </ul>
                        <div class="block current">
                            <ul class="highest">
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_1.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Best Indian Green Pepper Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_2.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Contest Winner Chinees Soup</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_3.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Best Vegitable Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div><!-- end of block div -->

                        <div class="block">
                            <ul class="recent">
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_4.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Lorem Ipsum World's Best Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_5.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Dolar It Somit Dolar Li Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_6.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Winning Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div><!-- end of block div -->

                        <div class="block">
                            <ul class="recent">
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_7.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Sndwich Recipes here</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_8.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Bakery Recipes here</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="images/tiny-images/tiny_9.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Sandwich</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div><!-- end of block div -->

                    </div><!-- end of tabed div -->
                </div><!-- end of fav-recipes div -->

                <div class="ads-642x79">
                    <img src="images/adv.jpg" alt="ads" />
                </div>

            </div><!-- end of home-infos div -->

        </div><!-- end of content div -->

        <!-- CONTENT ENDS HERE -->


    </div><!-- end of container div -->
    <div class="w-pet-border"></div>
    <!-- ============= CONTAINER AREA ENDS HERE ============== -->



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
            <p class="copyright">Copyright © 2014, Food Recipes - A Premium HTML Template</p>
            <p class="dnd">Developed by <a href="http://inspirythemes.com/">inspirythemes</a></p>
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
