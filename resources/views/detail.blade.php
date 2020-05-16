@extends('layouts.app')
@section('main')
    <style>
        nav {
            position: relative !important;
            background: #111213d1;
        }

        .content p {
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--gray-color);
            margin-bottom: 3rem;
        }
    </style>
    <section class="blog pt-2">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <div class="blog__head m-0">
                        <img class="w-100" src="/uploads/news/{{$post->hinh_anh}}" alt="">
                    </div>
                </div>
                <div class="col-10 mx-auto">
                    <h1>{{$post->tieu_de}}</h1>
                    <small class="d-flex justify-content-between align-items-center">
                        <p class="desc">Tác giả: {{$post->user['name']}}</p>
                        <p class="desc">Thời gian: {{$post->created_at}}</p>
                    </small>
                    <div class="content">
                        {!! $post->noi_dung !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <div class="blog__item-content">
                                <div class="blog__item-info d-flex justify-content-between">
                                    <a href="/news/detail/{{$val->id}}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        {{$val->user['name']}}
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