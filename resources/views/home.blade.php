@extends('templates.app')

@section('title', 'Home')

@section('content')
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
@endsection
