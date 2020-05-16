<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Store</title>
    <base href="{{asset('')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./common/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./common/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<!-- NAVIGATION  -->
<nav class="nav">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="nav__logo">
            <h3 class="text-light">
                <a href="/" class="text-light text-decoration-none"><i style="color: #c0392b"
                                                                       class="fas fa-cart-arrow-down"></i> The Store</a>
            </h3>
        </div>
        <div class="nav__icon-bar">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <ul class="nav__list d-flex ">
            <li class="nav__item">
                <a href="/" class="nav__link {{ (request()->is('/')) ? 'active' : '' }}">
                    Trang chủ
                </a>
            </li>
            <li class="nav__item">
                <a href="/about" class="nav__link {{ (request()->is('about')) ? 'active' : '' }}">
                    Giới thiệu
                </a>
            </li>
            <li class="nav__item">
                <a href="/news" class="nav__link {{ (request()->is('news')) ? 'active' : '' }}">
                    Tin tức
                </a>
            </li>
        </ul>
    </div>
</nav>

<main>
    @yield('main')
</main>

<!-- FOOTER  -->
<footer class="footer p-0">
    <div class="copyright m-0">
        <p><i class="fas fa-map-marker-alt"></i> Số 100, Đường Nguyễn Văn Cừ, Phường Hưng Phúc, TP.Vinh </p>
        <p><i class="fas fa-phone-volume"></i> 0383979797</p>
        <div class="footer__item m-0">
            <div class="footer__item-head">
                <ul class="footer__list-social d-flex justify-content-around">
                    <li class="footer__social-item">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </li>
                    <li class="footer__social-item">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </li>
                    <li class="footer__social-item">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </li>
                    <li class="footer__social-item">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </li>
                    <li class="footer__social-item">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
        </div>
        <p>Copyright © 2019</p>
    </div>
</footer>
<script src="./common/jquery-3.4.1.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/2db88d342f.js" crossorigin="anonymous"></script>
<script src="./common/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="./js/main.js"></script>
</body>

</html>