@extends('layouts.app')
@section('main')
    <!-- HEADER  -->
    <header id="home" class="header d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <div class="header__content">
                        <h2 class="header__heading  heading-hero">
                            <i class="fas fa-thumbs-up"></i> Đảm bảo giá tốt nhất
                        </h2>
                        <p class="header__desc desc desc-white">
                            Chúng đôi đảm bảo khách hàng sẽ đặt được dịch vụ với giá tốt nhất, những chương trình khuyến mãi
                            hấp dẫn nhất.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- SECTION LATEST -->
    <section class="lastest mb-2">
        <div class="container text-center">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="section__head m-0">
                        <h2 class="heading">
                            Món ăn & đồ uống
                        </h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach($store as $val)
                    <div class="item">
                        <div class="lastest__item p-0">
                            <div class="lastest__item-img">
                                <img src="/uploads/product/{{$val->hinh_anh}}"
                                     alt="" class="img-fluid h-100">
                            </div>
                            <div class="lastest__item-content border">
                                <h4 class="lastest__item-title title-article">
                                    {{$val->ten_mat_hang}}
                                </h4>
                                <a class="lastest__item-link">
                                    {{_manny($val->don_gia)}} vnđ <br>
                                    {{$val->mo_ta}}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION FEEDBACK -->
    <section class="feedback">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="feedback__item row">
                                <div class="col-12 col-md-2">
                                    <div class="feeback__item-info">
                                        <div class="feeback__item-img mx-auto">
                                            <img class="img-fluid"
                                                 src="http://cheaphostings.org/html/item-lalvai/lalvai/assets/img/testimonial/img-2.jpg"
                                                 alt="" class="img__fluid">
                                        </div>
                                        <p>
                                            <span class="feedback__item-name">
                                                Msum billah
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-10">
                                    <div class="feedback__item-content">
                                        <p class="desc">Ông có nhiều năm kinh nghiệp trong nghề làm đầu bếp, và
                                            Là một trong những đầu bếp giỏi trong cửa hàng chúng tôi!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION WORK  -->
    <section class="business pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-2">
                    <div class="business__caption mt-5">
                        <h4 class="business__title title-section">
                            Bạn muốn đặt lịch ngay?
                        </h4>
                        <p class="desc">
                            Chúng đôi đảm bảo khách hàng sẽ đặt được dịch vụ với giá tốt nhất, những chương trình khuyến
                            mãi hấp dẫn nhất.
                        </p>
                        <a data-toggle="modal" data-target="#exampleModalCenter"
                           class="business__read button button-green text-light">
                            Đặt ngay
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1">
                    <div class="business__img">
                        <img class="img-fluid"
                             src="http://cheaphostings.org/html/item-lalvai/lalvai/assets/img/feature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Họ & tên:</label>
                        <input type="text" name="nguoi_dat" id="" class="form-control" placeholder=""
                               aria-describedby="helpId" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Số điện thoại:</label>
                            <input type="number"
                                   class="form-control" name="so_dien_thoai" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="title">Số bàn:</label>
                            <input type="number"
                                   class="form-control" name="so_ban_dat" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Thời gian đặt:</label>
                            <input type="datetime-local"
                                   class="form-control" name="thoi_gian_dat" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="title">Loại bàn:</label>
                            <select class="form-control" name="tang_id">
                                @foreach($tang as $val)
                                    <option value="{{$val->id}}">{{$val->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary" onclick="book()">Đặt ngay</button>
                    </div>

                    <script>
                        function book() {
                            const name = $('input[name="nguoi_dat"]').val();
                            const sdt = $('input[name="so_dien_thoai"]').val();
                            const sb = $('input[name="so_ban_dat"]').val();
                            const tg = $('input[name="thoi_gian_dat"]').val();
                            const lb = $('select[name="tang_id"]').val();
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.post('/book', {
                                nguoi_dat: name,
                                so_dien_thoai: sdt,
                                so_ban_dat: sb,
                                thoi_gian_dat: tg,
                                tang_id: lb
                            }, function (data) {
                                if (data == 1) {
                                    alert("Đặt bàn thành công!");
                                    location.reload();
                                } else {
                                    alert("Đặt bàn thất bại, vui lòng thử lại!");
                                }
                            });
                        }
                    </script>
                    <style>
                        .form-group, .btn {
                            font-size: 15px;
                        }

                        .form-control {
                            height: calc(2.25rem + 10px) !important;
                            padding: .5rem .75rem;
                            font-size: 15px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION BLOG  -->
    <section id="blog" class="blog pt-0">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <div class="blog__head">
                        <h2 class="heading">
                            Tin tức
                        </h2>
                        <p class="desc">
                            Những bài viết của, nói về những món ăn tại cửa hàng.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $val)
                    <div class="col-12 col-md-4">
                        <div class="blog__item">
                            <div class="blog__item-img">
                                <a href="/news/detail/{{$val->id}}">
                                    <img src="/uploads/news/{{$val->hinh_anh}}"
                                         alt=""
                                         class="img-fluid">
                                </a>
                                <a href="/news/detail/{{$val->id}}" class="blog-cate button button-green">
                                    Mới
                                </a>
                            </div>
<<<<<<< HEAD
                            <div class="blog__item-content">
                                <div class="blog__item-info d-flex justify-content-between">
                                    <a href="/news/detail/{{$val->id}}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        {{$val->user['name']}}
=======
                            <h4 class="title-article">
                                Team you want to work with mistake runners
                            </h4>
                            <p class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.
                            </p>
                            <div class="blog__item-footer">
                                <a href="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION CONTACT -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <div class="contact__head">
                        <h2 class="heading">
                            Liên hệ
                        </h2>
                        <p class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis
                            dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    
                    <form action="{{ route('contact.add')}}" class="contact__form" method="POST">
                    @include('message')
                    @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="name" name="name" require value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="email" require name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="number" name="number" require value="{{ old('number') }}">
                                @if ($errors->has('number'))
                                    <p class="text-danger">{{ $errors->first('number') }}</p>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="subject" name="subject" require value="{{ old('subject') }}">
                                @if ($errors->has('subject'))
                                    <p class="text-danger">{{ $errors->first('subject') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" require id="" cols="30" rows="3" placeholder="Your Message"></textarea>
                                @if ($errors->has('message'))
                                    <p class="text-danger">{{ $errors->first('message') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form__submit text-center">
                            <button class="button button-green" type="submit">Send Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER  -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <div class="footer__item">
                        <div>
                            <div class="footer__item-head">
                                <h4 class="heading-sub">
                                    Services
                                </h4>
                            </div>
                            <ul class="footer__item-list">
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <div class="footer__item">
                        <div>
                            <div class="footer__item-head">
                                <h4 class="heading-sub">
                                    Services
                                </h4>
                            </div>
                            <ul class="footer__item-list">
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="">
                                        Search Engine Optimization
>>>>>>> 64cd1a3a06b679df1ad1d7de024df3b2350ea83e
                                    </a>
                                    <a href="/news/detail/{{$val->id}}">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{$val->created_at}}
                                    </a>
                                </div>
                                <h4 class="title-article">
                                    {{$val->tieu_de}}
                                </h4>
                                <p class="desc">
                                    {{$val->mo_ta}}
                                </p>
                                <div class="blog__item-footer">
                                    <a href="/news/detail/{{$val->id}}">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection