@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="#" onclick="window.history.back();">Quản lý món ăn & đồ uống</a> / Thêm món ăn & đồ uống</h5>
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <form action="/admin/product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Tên món ăn & đồ uống:</label>
                <input type="text"
                       class="form-control" name="ten_mat_hang" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Mô tả:</label>
                <textarea class="form-control" name="mo_ta" id="" rows="3" required></textarea>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="title">Hình ảnh:</label>
                    <input type="file" accept="image/x-png,image/gif,image/jpeg,image/jpg"
                           class="form-control" name="hinh_anh" aria-describedby="helpId" placeholder="hinh_anh"
                           required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Đơn giá:</label>
                    <input type="number" name="don_gia" class="form-control" aria-describedby="helpId" placeholder=""
                           required>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-sm btn-outline-success" type="submit">+Thêm</button>
            </div>
        </form>
    </div>
@stop
@stop
