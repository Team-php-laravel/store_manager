@extends('admin.layout.admin')

@section('app')
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="callout-top callout-top-danger col-md-12">
        <div class="card-header bg-info">
            <h3 class="card-title">Biểu đồ thể hiện doanh thu theo tháng - năm(vnđ)</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- AREA CHART -->
                <div class="card-body">
                    <div class="chart">
                        <canvas id="barChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="donutChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>
@stop
@stop
@section('jquery')
    <script>
        $(function () {
            $.get('/admin/thong_ke/create', function (data) {
                var areaChartData = {
                    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                    datasets: [
                        {
                            label: 'Doanh thu',
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.month
                        }
                    ]
                };

                //-------------
                //- BAR CHART -
                //-------------
                var barChartCanvas = $('#barChart').get(0).getContext('2d');
                var barChartData = jQuery.extend(true, {}, areaChartData);
                var temp0 = areaChartData.datasets[0];
                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                    responsive: true,
                    maintainAspectRatio: false,
                    datasetFill: false
                };

                var barChart = new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                });

                //-------------
                //- DONUT CHART -
                //-------------
                // Get context with jQuery - using jQuery's .get() method.
                var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                var donutData = {
                    labels: data.label,
                    datasets: [
                        {
                            data: data.data,
                            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                        }
                    ]
                };
                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                };
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                var donutChart = new Chart(donutChartCanvas, {
                    type: 'doughnut',
                    data: donutData,
                    options: donutOptions
                })
            });
        })
    </script>
@endsection
