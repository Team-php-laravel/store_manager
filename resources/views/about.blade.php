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
    <!-- SECTION WORKS -->
    <section id="about" class="works">
        <div class="container text-center">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="section__head">
                        <h2 class="heading">
                            Giới thiệu
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="works__item works__item-white">
                        <div class="works__item-img">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="work__item-content">
                            <h4 class="works__item-title title-feature">
                                Đảm bảo giá tốt nhất</h4>
                            <p class="works__item-desc desc">Chúng đôi đảm bảo khách hàng sẽ đặt được dịch vụ với giá
                                tốt nhất, những chương trình khuyến mãi
                                hấp dẫn nhất.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="works__item works__item-green">
                        <div class="works__item-img">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="work__item-content">
                            <h4 class="works__item-title title-feature">
                                Dịch vụ tin cậy - giá trị đích thực</h4>
                            <p class="works__item-desc desc">Đặt lợi ích khác hàng lên trên hết, chúng tôi cam kết hỗ
                                trợ khách hàng nhanh và chính xác với
                                dịch vụ tin cậy, giá trị đích thực.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="works__item works__item-white">
                        <div class="works__item-img">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="work__item-content">
                            <h4 class="works__item-title title-feature">
                                Đảm bảo chất lượng</h4>
                            <p class="works__item-desc desc">Chúng tôi liên kết chặt chẽ với các đối tác, khảo sát và
                                định kỳ mang tới sản phẩm tốt nhất cho
                                khách hàng.</p>
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
@endsection