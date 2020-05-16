@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="#" onclick="window.history.back();">Quản lý bàn ăn</a> / Thêm tầng</h5>
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <form action="/admin/tang" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Tên:</label>
                <input type="text"
                       class="form-control" name="ten" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="title">Số bàn:</label>
                <input type="number"
                       class="form-control" name="so_ban" required>
            </div>
            <div class="text-center">
                <button class="btn btn-sm btn-outline-success" type="submit">+Thêm</button>
            </div>
        </form>
    </div>
@stop
@stop
