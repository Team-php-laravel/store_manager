{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@yield('app')

@section('css')
<<<<<<< HEAD
    <link rel="stylesheet" href="/css/admin_custom.css">
=======
<link rel="stylesheet" href="/css/admin_custom.css">
<base href="{{asset('')}}}">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
>>>>>>> 64cd1a3a06b679df1ad1d7de024df3b2350ea83e
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
