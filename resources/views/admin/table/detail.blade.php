{{-- resources/views/admin/dashboard.blade.php --}}

@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
<h4>Chi tiết phòng: 001</h4>
@stop

@section('content')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">ID: 001</span>
                    <span class="info-box-number">
                        <small>Nguyễn văn A</small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <ul>
                <li><span style="min-width: 100px; display:inline-block" >Số hóa đơn : </span> <span> 143244 </span> </li>
                <li><span style="min-width: 100px; display:inline-block" >Giờ vào : </span> <span> 21:00 </span> </li>
                <li><span style="min-width: 100px; display:inline-block" >Giờ ra : </span> <span> 21:15 </span> </li>
            </ul>
        </div>
        <div class="col-12 col-md-4">
            <ul>
                <li>Khách hàng :</li>
                <li>Trả trước :</li>
                <li>Số CMND :</li>
                <li>Giá phòng :</li>
                <li>Ghi chú :</li>
            </ul>
        </div>
        <div class="col-12 col-md-4">
            <a href="" class="btn btn-success">Thanh toán</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách dịch vụ</h3>
                <a href="" class="btn btn-sm btn-primary float-right">Thêm</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Sting</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Durex vị dâu</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job  </td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@stop
@stop