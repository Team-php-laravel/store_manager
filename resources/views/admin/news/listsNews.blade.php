{{-- resources/views/admin/dashboard.blade.php --}} @extends('admin.layout.admin') @section('app') @section('title', 'Dashboard') @section('content_header')
<div class="d-flex justify-content-between">
    <h4>Danh sách tin tức:</h4> 
    <a href="{{ route('news.show.form.add')}}"><button type="button" class="btn btn-primary mr-3"><i class="fas fa-plus"></i></button></a>
</div> @stop @section('content')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="col-md-12">
        <div class="card">
            <!-- /.card-header -->
            @include('message')
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>tiêu đề</th>
                            <th>hình ảnh</th>
                            <th>mô tả</th>
                            <th>người đăng</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach( $news as $n )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $n->tieu_de }}</td>
                            <td>{{ $n->hinh_anh }}</td>
                            <td>{{ $n->mo_ta }}</td>
                            <td>{{ $n->user->email}}</td>
                            <td>
                                <a href="admin/news/edit/{{$n->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                <button type="button" class="deleteNews btn btn-danger" data-id="{{$n->id}}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $news->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.deleteNews').click(function(){
                var data = $(this).attr('data-id');
                if( confirm('bạn có chắc muốn xóa')){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: `/admin/news/delete/${data}`,
                        data: data,
                        success: function (data) {
                            alert('xóa dữ liệu thành công');
                            location.reload();
                        }
                    });
                }
            });
        })
    </script>
    @stop @stop