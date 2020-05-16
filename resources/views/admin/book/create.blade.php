@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="#" onclick="window.history.back();">Quản lý bàn ăn</a> / Đặt bàn</h5>
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <form action="/admin/book" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Người đăt:</label>
                <input type="text"
                       class="form-control" name="nguoi_dat" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="title">Số điện thoại:</label>
                    <input type="number"
                           class="form-control" name="so_dien_thoai" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="title">Số bàn:</label>
                    <input type="number"
                           class="form-control" name="so_ban_dat" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="title">Thời gian đặt:</label>
                    <input type="datetime-local"
                           class="form-control" name="thoi_gian_dat" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="title">Loại bàn:</label>
                    <select class="form-control" name="tang_id">
                        @foreach($tang as $val)
                            <option value="{{$val->id}}">{{$val->ten}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-sm btn-outline-success" type="submit">+Thêm</button>
            </div>
        </form>
    </div>
@stop
@stop
