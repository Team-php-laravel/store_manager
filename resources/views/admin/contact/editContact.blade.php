{{-- resources/views/admin/dashboard.blade.php --}} @extends('admin.layout.admin') @section('app') @section('title', 'Dashboard') @section('content_header')
<h4>Danh sách tin nhắn:</h4> @stop @section('content')
<div class="container-fluid">
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="admin/contact/edit/{{$lienhe->id}}" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ tên</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"  readonly value={{$lienhe->ho_ten}}>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1"  readonly value={{$lienhe->email}}>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1"  readonly value={{$lienhe->so_dien_thoai}}> 
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">chủ đề</label>
                    <input type="text" name="object" class="form-control" id="exampleInputPassword1"  readonly value={{$lienhe->chu_de}}>
                </div>
                <div class="form-group">
                    <label>trạng thái</label>
                    <select class="form-control" name="status">
                        <option value="1" @if($lienhe->trang_thai == 1) {{"selected"}}  @endif>chưa xử lý</option>
                        <option value="2"  @if($lienhe->trang_thai == 2) {{"selected"}} @endif>đang xử lý</option>
                        <option value="3"  @if($lienhe->trang_thai == 3) {{"selected"}} @endif>đã xử lý</option>
                    </select>
                    </div>
                <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" name="message" rows="3" readonly>{{$lienhe->noi_dung}}</textarea>
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