{{-- resources/views/admin/dashboard.blade.php --}}

@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h4>Quản lý bàn ăn
        <button onclick="location.href = 'tang/create'" class="btn btn-sm btn-outline-success">+Thêm</button>
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
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            @foreach($tang as $val)
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <a href="tang/{{$val->id}}" class="info-box-icon bg-info elevation-1">
                            <i class="fas fa-cog"></i>
                        </a>
                        <a href="{{url('admin/tang/'.$val->id.'/edit')}}">
                            <div class="info-box-content">

                                <span class="info-box-text">{{$val->ten}}</span>
                                <small>Số bàn: {{$val->so_ban}}</small>
                            </div>
                        </a>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            @endforeach
        </div>
    </div>
@stop
@stop