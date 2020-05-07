{{-- resources/views/admin/dashboard.blade.php --}} @extends('admin.layout.admin') @section('app') @section('title', 'Dashboard') @section('content_header')
<h4>Danh sách tin nhắn:</h4> @stop @section('content')
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Object</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach( $list as $lt )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $lt->ho_ten }}</td>
                            <td>{{ $lt->email }}</td>
                            <td>{{ $lt->so_dien_thoai }}</td>
                            <td>{{ $lt->chu_de }}</td>
                            <td>{{ $lt->noi_dung }}</td>
                            <td>
                            @if($lt->trang_thai == 1)
                                <span class="badge badge-info">chưa xử lý</span>
                            @elseif($lt->trang_thai == 2)
                                <span class="badge badge-dark">đang xử lý</span>
                            @else
                                <span class="badge badge-success">đã xử lý</span>
                            @endif
                            </td>
                            <td>
                                <a href="admin/contact/edit/{{$lt->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                <button type="button" class="btn btn-danger" data-id="{{$lt->id}}" id="deleteContact">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $list->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#deleteContact').click(function(){
                var data = $(this).attr('data-id');
                if( confirm('bạn có chắc muốn xóa')){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: `/admin/contact/delete/${data}`,
                        data: data,
                        success: function () {
                            alert('xóa dữ liệu thành công');
                            location.reload();
                        }
                    });
                }
            });
        })
    </script>
    @stop @stop