@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="#" onclick="window.history.back();">Quản lý tin tức</a> / Cập nhật tin tức</h5>
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <form action="" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text"
                       class="form-control" name="tieu_de" value="{{$post->tieu_de}}" aria-describedby="helpId"
                       placeholder="title" required>
            </div>
            <div class="form-group">
                <label for="title">Hình ảnh</label>
                <input type="file" accept="image/x-png,image/gif,image/jpeg,image/jpg"
                       class="form-control" name="hinh_anh" aria-describedby="helpId" placeholder="hinh_anh">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea class="form-control" name="mo_ta" id="" rows="3" required>{{$post->mo_ta}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea name="noi_dung" type="text" class="form-control ckeditor" rows="10"
                          required>{{$post->noi_dung}}</textarea>
            </div>

            <div class="text-center">
                <button class="btn btn-sm btn-outline-primary" type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
@stop
@stop
