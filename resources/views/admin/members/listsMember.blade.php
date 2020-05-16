{{-- resources/views/admin/dashboard.blade.php --}} @extends('admin.layout.admin') @section('app') @section('title', 'Dashboard') @section('content_header')
<div class="d-flex justify-content-between">
    <h4>Danh sách ngươi dùng:</h4> 
    <a href="{{ route('user.show.form.add')}}"><button type="button" class="btn btn-primary mr-3"><i class="fas fa-plus"></i></button></a>
</div>
@stop
@section('content')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="col-md-12">
        <div class="card">
            <!-- /.card-header -->
            @include('message')
            <div class="card-body p-0">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Ảnh</th>
                            <th>email</th>
                            <th>Điện thoại</th>
                            <th>Châm ngôn</th>
                            <th>Vị trí</th>
                            <th>Địa chỉ</th>
                            <th>kỹ năng</th>
                            <th>Ghi chú</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach( $user as $us )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img style="width:40px;height:40px" src ="images/avatars/{{ $us->avatar }}" /></td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->phone }}</td>
                            <td>{{ $us->cham_ngon }}</td>
                            <td>
                                <span class="badge badge-info">
                                    @if($us->trang_thai == 1)
                                        {{$us->position->ten}}
                                    @elseif($us->trang_thai == 2)
                                        {{$us->position->ten}}
                                    @else
                                        {{$us->position->ten}}
                                    @endif
                                </span>
                            </td>
                            <td>{{ $us->dia_chi}}</td>
                            <td>{{ $us->ki_nang }}</td>
                            <td>{{ $us->ghi_chu }}</td>
                            <td class="d-flex">
                                <a href="admin/user/edit/{{$us->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                <button  class="btn btn-danger deleteUser ml-1" data-id="{{$us->id}}" >Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $user->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.deleteUser').click(function(){
            var data = $(this).attr('data-id');
            if( confirm('bạn có chắc muốn xóa')){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: `/admin/user/delete/${data}`,
                    data:'',
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