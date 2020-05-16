{{-- resources/views/admin/dashboard.blade.php --}}

@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h4>Quản lý bàn ăn
        <button class="btn btn-sm btn-outline-success" onclick="location.href = '/admin/book/create'">+Đặt bàn</button>
    </h4>
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
    @php
        $sum=0;
    @endphp
    @foreach($book as $val)
        @php
            $sum += $val->so_ban_dat;
        @endphp
    @endforeach
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 callout-top callout-top-danger d-flex justify-content-between align-items-center">
                <span>Số bàn trống: {{$tang->so_ban - $sum}}/{{$tang->so_ban}} bàn </span>
                <div class="input-group mb-0 w-auto">
                    <div class="input-group-prepend">
                        <span onclick="document.getElementById('search').submit()" class="input-group-text"
                              id="basic-addon1">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                    </div>
                    <form action="{{route('search', $tang->id)}}" id="search" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Người đặt"
                               aria-label="name" value="{{isset($name)?$name:""}}"
                               aria-describedby="basic-addon1">
                    </form>
                </div>
            </div>
        </div>
        <!-- Info boxes -->
        <div class="row" id="data">
            @foreach($book as $val)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <a href="/admin/book/{{$val->id}}"
                           class="info-box-icon {{$val->trang_thai == 0? 'bg-success':'bg-info'}} elevation-1">
                            <i class="fas fa-table"></i>
                        </a>
                        <div class="info-box-content">
                            <a class="text-dark" href="{{url('admin/book/'.$val->id.'/edit')}}">
                                <span class="info-box-text">Người đặt: {{$val->nguoi_dat}}</span>
                                <small>Số bàn: {{$val->so_ban_dat}}</small>
                                <small> - SĐT: {{$val->so_dien_thoai}}</small>
                                <br>
                                <small>Thời gian:
                                    @php
                                        $date = date_create($val->thoi_gian_dat);
                                        $today = date("Y-m-d");
                                        if ($val->trang_thai == 0){
                                            echo "<span class='text-success'>Đã thanh toán</span>";
                                        }
                                        elseif (strtotime($today) > strtotime(date_format($date,"Y-m-d"))){
                                            echo "<span class='text-danger'>Quá giờ đặt</span>";
                                        }else
                                            echo $val->thoi_gian_dat;
                                    @endphp
                                </small>
                            </a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            @endforeach
        </div>
    </div>
@stop
@stop