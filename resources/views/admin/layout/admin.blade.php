{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@yield('app')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://adminlte.io/themes/v3/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script>
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        });
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        });
        //Money Euro
        $('[data-mask]').inputmask();
    </script>
    <script>
        $(document).ready(function () {
            $('#data-table').DataTable(
                {
                    "oLanguage": {
                        "sProcessing": "Đang xử lý...",
                        "sLengthMenu": "Xem _MENU_ mục",
                        "sZeroRecords": "không có dữ liệu",
                        "sInfo": "_TOTAL_ mục",
                        "sInfoEmpty": "0 mục",
                        "sInfoFiltered": "",
                        "sInfoPostFix": "",
                        "sSearch": "Tìm:",
                        "sUrl": "",
                        "oPaginate": {
                            "sPrevious": "<",
                            "sNext": ">",
                        }
                    }
                }
            );
        });
    </script>
    <script src="/ckeditor/ckeditor.js"></script>
    @yield('jquery')
@stop
