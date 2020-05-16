{{-- resources/views/admin/dashboard.blade.php --}} @extends('admin.layout.admin') @section('app') @section('title', 'Dashboard') @section('content_header')
<h4>Danh sách tin nhắn:</h4> @stop @section('content')
<div class="container-fluid">
<div class="col-md-12">

    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <form role="form" method="POST" action="admin/user/edit/{{$user->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <label for="">avatar</label>
                <img src ="images/avatars/{{ $user->avatar }}" alt="" style="width:40px;height:40px">
                <div class="custom-file">
                    
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="text" name="password" value="{{$user->password}}" class="form-control">
                    @if ($errors->has('pasword'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">phone</label>
                    <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
                    @if ($errors->has('phone'))
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">ngày sinh</label>
                    <input type="text" name="ngaysinh" value="{{$user->ngay_sinh}}" class="form-control">
                    @if ($errors->has('ngaysinh'))
                        <p class="text-danger">{{ $errors->first('ngaysinh') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">châm ngôn</label>
                    <input type="text" name="chamngon" value="{{$user->cham_ngon}}" class="form-control">
                    @if ($errors->has('chamngon'))
                        <p class="text-danger">{{ $errors->first('chamngon') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">địa chỉ</label>
                    <input type="text" name="diachi" value="{{$user->dia_chi}}" class="form-control">
                    @if ($errors->has('diachi'))
                        <p class="text-danger">{{ $errors->first('diachi') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">kỹ năng</label>
                    <input type="text" name="kynang" value="{{$user->ki_nang}}" class="form-control">
                    @if ($errors->has('kynang'))
                        <p class="text-danger">{{ $errors->first('kynang') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">ghi chú</label>
                    <input type="text" name="ghichu" value="{{$user->ghi_chu}}" class="form-control">
                    @if ($errors->has('ghichu'))
                        <p class="text-danger">{{ $errors->first('ghichu') }} v</p>
                    @endif
                </div>
                <div class="form-group">
                    <select name="vitriid" selected>
                    <option value="1" @if($user->vi_tri_id == 1) {{"selected"}}@endif />admin</option>
                    <option value="2" @if($user->vi_tri_id == 2) {{"selected"}}@endif/>giám đốc</option>
                    <option value="3" @if($user->vi_tri_id == 3) {{"selected"}}@endif/>nhân viên</option>
                    </select>
                    @if ($errors->has('vitriid'))
                        <p class="text-danger">{{ $errors->first('vitriid') }}</p>
                    @endif
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>
</div>
@stop @stop