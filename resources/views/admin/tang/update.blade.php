@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="#" onclick="window.history.back();">Quản lý bàn ăn</a> / Thêm tầng</h5>
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <form id="update" action="/admin/tang/{{$tang->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Tên:</label>
                <input type="text"
                       class="form-control" name="ten" value="{{$tang->ten}}" aria-describedby="helpId" placeholder=""
                       required>
            </div>
            <div class="form-group">
                <label for="title">Số bàn:</label>
                <input type="number"
                       class="form-control" value="{{$tang->so_ban}}" name="so_ban" required>
            </div>
        </form>
        <form id="delete" action="/admin/tang/{{$tang->id}}" method="POST">
            @method('DELETE')
            @csrf
        </form>
        <div class="text-center">
            <button class="btn btn-sm btn-outline-danger"
                    onclick="confirm('Bạn muốn xóa?') ? document.getElementById('delete').submit(): ''">Xóa
            </button>
            <button class="btn btn-sm btn-outline-success" onclick="document.getElementById('update').submit()">Cập
                nhật
            </button>
        </div>
    </div>
@stop
@stop
