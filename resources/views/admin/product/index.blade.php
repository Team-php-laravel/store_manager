{{-- resources/views/admin/dashboard.blade.php --}}

@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Quản lý thức ăn & đồ uống</h1>
@stop

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Thông báo</h4>
            {{ session('message') }}
        </div>
    @endif
    <div class="callout-top callout-top-danger col-md-12">
        <table id="data-table" align="center" width="100%"
               class="table table-hover table-striped table-bordered border text-center">
            <thead>
            <tr class="bg-primary">
                <th>STT</th>
                <th style="width: 100px">Hình ảnh</th>
                <th>Tên món ăn/đồ uống</th>
                <th>Mô tả</th>
                <td>Đơn giá</td>
                <th>
                    <button class="btn btn-sm btn-success" onclick="location.href = 'product/create'">+Thêm</button>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $key=>$val)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                        <img class="w-100" src="/uploads/product/{{$val->hinh_anh}}" alt="Ảnh">
                    </td>
                    <td class="text-left">
                        {{$val->ten_mat_hang}}
                    </td>
                    <td class="text-left">
                        <p class="text-truncate">{{$val->mo_ta}}</p>
                    </td>
                    <td>
                        {{_manny($val->don_gia)}} vnđ
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning"
                                onclick="location.href = 'product/{{$val->id}}'">Cập nhật
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                                onclick="confirm('Xóa tin này?') ? document.getElementById('{{"delete".$val->id}}').submit():''">
                            Xóa
                        </button>
                        <form id="delete{{$val->id}}" action="product/{{$val->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@stop
