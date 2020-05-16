{{-- resources/views/admin/dashboard.blade.php --}}

@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
    <h5><a href="/admin/tang/{{$book->tang->id}}/edit">Quản lý bàn ăn</a> / Tạo hóa đơn</h5>
@stop

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <div class="container-fluid">
        <table align="center" class="text-right">
            <tbody id="data1">
            <tr>
                <td><b>Người đặt:</b></td>
                <td style="width: 300px">{{$book->nguoi_dat}}</td>
            </tr>
            <tr>
                <td><b>Số bàn:</b></td>
                <td>{{$book->so_ban_dat}} Bàn - {{$book->tang->ten}}</td>
            </tr>
            <tr>
                <td><b>Thời gian đặt:</b></td>
                <td>{{$book->thoi_gian_dat}}</td>
            </tr>
            <tr>
                <td><b>Tổng tiền:</b></td>
                <td id="tong_tien">0 vnđ</td>
            </tr>
            <tr class="border-danger border-top">
                <td><b>Thành tiền:</b></td>
                <td id="thanh_tien">0 vnđ</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="button" onclick="pay({{$book->order['id']}})" class="btn btn-sm btn-danger">Thanh toán
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="table-responsive" style="height: 300px">
            <table align="center" width="100%"
                   class="table table-head-fixed table-hover table-striped border-danger text-center">
                <thead>
                <tr>
                    <th class="bg-danger">STT</th>
                    <th class="bg-danger">Tên món ăn/đồ uống</th>
                    <th class="bg-danger">Số lượng</th>
                    <th class="bg-danger">Đơn giá</th>
                    <th class="bg-danger">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal">
                            +Thêm
                        </button>
                    </th>
                </tr>
                </thead>
                <tbody id="san_pham" detail="{{$book->order['id']}}">
                @foreach($order as $key=>$val)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td class="text-left">{{$val->store->ten_mat_hang}}</td>
                        <td>
                            <input style="width: 50px" onchange="sl()" id='sl-{{$val->store['id']}}' type="number"
                                   value="{{$val->so_luong}}">
                        </td>
                        <td>{{_manny("".$val->store['don_gia'])}} vnđ</td>
                        <td>
                            <button type="button" onclick="del()" id='del-{{$val->store['id']}}'
                                    class="btn btn-sm btn-danger">Xóa
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-1">
                    <h6 class="modal-title">Chi tiết đơn hàng:</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <table id="data-table" class="table table-hover table-striped table-bordered text-center">
                        <thead>
                        <tr class="bg-danger">
                            <th>Tên món ăn/đồ uống</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($store as $val)
                            <tr>
                                <td class="text-left">{{$val->ten_mat_hang}}</td>
                                <td>{{$val->so_luong}}</td>
                                <td>{{_manny($val->don_gia)}} vnđ</td>
                                <td>
                                    <button type="button" id="sp-{{$val->id}}" class="btn btn-sm btn-success"
                                            onclick="book({{$val}})">
                                        +Thêm
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        var san_pham = [];
                        var manny = 0;

                        function _manny(str) {
                            str = str.split('').reverse().join('');
                            var tg = "";
                            var i = 0;
                            for (i; i < str.length; i++) {
                                tg += str[i];
                                if (i !== str.length - 1 && (i + 1) % 3 === 0) {
                                    tg += '.';
                                }
                            }
                            return tg.split('').reverse().join('');
                        }

                        function printf() {
                            var str = "";
                            var i;
                            for (i = 0; i < san_pham.length; i++) {
                                manny += san_pham[i].don_gia * san_pham[i].sl_mua;
                                str += "<tr>\n" +
                                    "<td>" + (i + 1) + "</td>\n" +
                                    "<td class=\"text-left\">" + san_pham[i].ten_mat_hang + "</td>\n" +
                                    "<td><input style=\"width: 50px;\" onchange=\"sl(" + san_pham[i].id + ")\" id='sl-" + san_pham[i].id + "' type=\"number\" value=\"" + san_pham[i].sl_mua + "\"></td>\n" +
                                    "<td>" + _manny("" + san_pham[i].don_gia * san_pham[i].sl_mua) + " vnđ</td>\n" +
                                    "<td>\n" +
                                    "    <button type=\"button\" onclick=\"del(" + san_pham[i].id + ")\" id='del-" + san_pham[i].id + "' class=\"btn btn-sm btn-danger\">Xóa</button>\n" +
                                    "</td>\n" +
                                    "</tr>";
                            }
                            $('#san_pham').html(str);
                            $('#tong_tien').html(_manny("" + manny) + " vnđ");
                            $('#thanh_tien').html(_manny("" + manny) + " vnđ");
                        }

                        function book(obj) {
                            $('#sp-' + obj.id).hide();

                            if (san_pham.findIndex(v => (v.id === obj.id)) === -1) {
                                san_pham.push({...obj, sl_mua: 1});
                                manny = 0;
                                sale = 0;
                                printf();
                            }
                        }

                        function pay(id) {
                            if (san_pham.length === 0) {
                                alert("Vui lòng chọn sản phẩm?")
                            }
                            else {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    url: '/admin/order/' + id,
                                    type: 'PUT',
                                    data: {san_pham: san_pham, many: manny},
                                    success: function (response) {
                                        if (response == 1) {
                                            alert('Thanh toán thành công!');
                                            window.history.back();
                                            setTimeout('location.reload();', 1000);
                                        } else {
                                            alert('Thanh toán thất bại!');
                                            location.reload();
                                        }
                                    }
                                });
                            }
                        }

                        function controlSl(oldNum, newNum) {
                            if (newNum < 0)
                                return 1;
                            return newNum;
                        }

                        function sl(id) {
                            san_pham = san_pham.map(v => (v.id === id ? {
                                ...v, sl_mua: controlSl(v.so_luong, $('#sl-' + id).val())
                            } : v));
                            manny = 0;
                            printf();
                        }

                        function del(id) {
                            $('#sp-' + id).show();
                            manny = 0;
                            san_pham = san_pham.filter(v => v.id !== id);
                            printf();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@stop
@stop
@section('jquery')
    <script>
        $(document).ready(function () {
            var id = $('#san_pham').attr('detail');
            $.get('/admin/order/' + id, function (data) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    san_pham.push({
                        ...data[i].store,
                        sl_mua: data[i].so_luong
                    });
                }
                printf();
            })
        });
    </script>
@endsection