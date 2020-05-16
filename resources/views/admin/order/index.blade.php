{{-- resources/views/admin/dashboard.blade.php --}}

@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Quản lý đơn hàng</h1>
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
                <th>Mã hóa đơn</th>
                <th>Thông tin</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>
                    <button class="btn btn-sm btn-success" onclick="location.href = '/admin/tang'">+Thêm</button>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($order as $val)
                <tr>
                    <td>HD00{{$val->id}}</td>
                    <td class="text-left">
                        <p><b>Người đặt: </b>{{$val->book['nguoi_dat']}}</p>
                        <p><b>Số bàn: </b>{{$val->book['so_ban_dat']}}</p>
                        <p><b>số điện thoại: </b>{{$val->book['so_dien_thoai']}}</p>
                        <p><b>Thời gian đặt: </b>{{$val->book['thoi_gian_dat']}}</p>
                    </td>
                    <td>
                        {{_manny($val->tong_tien)}} vnđ
                    </td>
                    <td>
                        @php
                            $date = date_create($val->book['thoi_gian_dat']);
                            $today = date("Y-m-d");
                            if ($val->trang_thai == 0){
                                echo "<span class='text-success'>Đã thanh toán</span>";
                            }
                            elseif (strtotime($today) > strtotime(date_format($date,"Y-m-d"))){
                                echo "<span class='text-danger'>Quá giờ đặt</span>";
                            }else
                                echo $val->book['thoi_gian_dat'];
                        @endphp
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning"
                                onclick="location.href = 'order/{{$val->book['id']}}/edit'">Cập nhật
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                        onclick="confirm('Xóa tin này?') ? document.getElementById('{{"delete".$val->id}}').submit():''">
                            Xóa
                        </button>
                        <form id="delete{{$val->id}}" action="order/{{$val->id}}" method="POST">
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
