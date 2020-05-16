{{-- resources/views/admin/dashboard.blade.php --}} @extends('admin.layout.admin') @section('app') @section('title', 'Dashboard') @section('content_header')
<h4>Thêm tin tức:</h4> @stop @section('content')
<div class="container-fluid">
<div class="col-md-12">

    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <form role="form" method="POST" action="admin/news/edit/{{$news->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="tieu_de" value="{{$news->tieu_de}}" class="form-control">
                    @if ($errors->has('tieu_de'))
                        <p class="text-danger">{{ $errors->first('tieu_de') }}</p>
                    @endif
                </div>
                <label for="">Hình ảnh</label>
                <img src="images/tintuc/{{$news->hinh_anh}}" style="height:40px; width:40px" alt="">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="hinh_anh">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="mo_ta" value="{{$news->mo_ta}}" class="form-control">
                    @if ($errors->has('mo_ta'))
                        <p class="text-danger">{{ $errors->first('mo_ta') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea  id="demo" class="form-control ckeditor" name="noi_dung" placeholder="">
                    {!!$news->noi_dung!!}
                    </textarea>
                    @if ($errors->has('noi_dung'))
                        <p class="text-danger">{{ $errors->first('noi_dung') }}</p>
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