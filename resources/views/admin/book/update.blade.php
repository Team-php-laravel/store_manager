@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="#" onclick="window.history.back();">Quản lý bàn ăn</a> / Cập nhật thông tin đặt bàn</h5>
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <form id="update" action="/admin/book/{{$book->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Người đăt:</label>
                <input type="text"
                       class="form-control" value="{{$book->nguoi_dat}}" name="nguoi_dat" aria-describedby="helpId"
                       placeholder="" required>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="title">Số điện thoại:</label>
                    <input type="number"
                           class="form-control" value="{{$book->so_dien_thoai}}" name="so_dien_thoai" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="title">Số bàn:</label>
                    <input type="number"
                           class="form-control" value="{{$book->so_ban_dat}}" name="so_ban_dat" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="title">Thời gian đặt:</label>
                    @php
                        $date = new DateTime($book->thoi_gian_dat);

                    @endphp
                    <input type="datetime-local"
                           class="form-control" value="{{date_format($date, 'yy-m-d').'T'.date_format($date, 'h:i')}}"
                           name="thoi_gian_dat" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="title">Loại bàn:</label>
                    <select class="form-control" name="tang_id">
                        @foreach($tang as $val)
                            <option @if($book->tang_id == $val->id) selected
                                    @endif value="{{$val->id}}">{{$val->ten}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
        <form id="delete" action="/admin/book/{{$book->id}}" method="POST">
            @method('DELETE')
            @csrf
        </form>
        <div class="text-center">
            <button class="btn btn-sm btn-outline-danger"
                    onclick="confirm('Bạn muốn xóa?') ? document.getElementById('delete').submit():''">Xóa
            </button>
            <button class="btn btn-sm btn-outline-success" onclick="document.getElementById('update').submit()">Cập
                nhật
            </button>
        </div>
    </div>
@stop
@stop
