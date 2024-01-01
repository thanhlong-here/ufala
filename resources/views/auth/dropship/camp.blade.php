@push('js')

<script src="{{asset('theme/js/charts/chart.min.js')}}"></script>
@endpush
@push('script')
<script>
    $(window).on("load", function() {

        //Get the context of the Chart canvas element we want to select
        var ctx = $("#line-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'top',
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: true,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Ngày'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: true,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Lượt'
                    }
                }]
            },
            title: {
                display: true,
                text: '7 Ngày gần nhất'
            }
        };

        // Chart Data
        var chartData = {
            labels: ['Click', 'Đơn hàng', 'Hủy'],
            datasets: [{
                    label: "Click",
                    data: [15, 16, 20, 25, 16, 20, 25],
                    fill: true,
                    borderDash: [5, 5],
                    borderColor: "#9C27B0",
                    pointBorderColor: "#9C27B0",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                }, {
                    label: "Đơn hàng",
                    data: [5, 6, 2, 5, 6, 2, 5],
                    fill: true,
                    borderDash: [5, 5],
                    borderColor: "#00A5A8",
                    pointBorderColor: "#00A5A8",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                },
                {
                    label: "Hủy",
                    data: [1, 1, 2, 5, 10, 8, 6],
                    fill: true,
                    borderDash: [5, 5],
                    borderColor: "#00A5A8",
                    pointBorderColor: "#00A5A8",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                }

            ]
        };

        var config = {
            type: 'line',

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var lineChart = new Chart(ctx, config);
    });
</script>

@endpush

@section('content')
<div class="content-wrapper">

    <x-block class="content-body">
        <div class="card shadow">
            <div class="card-header">

                <div class="row">

                    <div class="col-md-8">
                        <h4 class="card-title mb-2">{{__('Dữ liệu chiến dịch')}}</h4>


                    </div>


                    <div class="col-md-4">

                        <div class="block">
                            <input style="width:50%;" name="start_at" class="form-control pull-left" type="date" />
                            <input style="width:50%;" name="start_end" class="form-control pull-right" type="date" />
                        </div>


                    </div>

                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6 skin skin-square">

                        <fieldset>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" checked value="all" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">{{__('Tất cả')}}</span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="click" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">{{__('Click')}}</span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="order" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">{{__('Đơn hàng')}}</span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="filter[]" value="cancel" class="custom-control-input">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">{{__('Hủy')}}</span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6 text-xs-right">

                    </div>
                </div>
                <div class="chartjs">
                    <canvas id="line-chart" height="420"></canvas>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-4">

                        <fieldset class="form-group position-relative has-icon-left">
                            <input name="product_name" type="text" class="form-control round" placeholder="{{__('Tên sản phẩm')}}">
                            <div class="form-control-position">
                                <i class="ft-search"></i>
                            </div>
                        </fieldset>

                    </div>
                </div>

            </div>
            <div class="card-block">

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>

                            <th>{{__('Tên sản phẩm')}}</th>
                            <th>
                                {{__('Lượt click')}}
                            </th>
                            <th>
                                {{__('Lượt đặt hàng')}}
                            </th>

                            <th>
                                {{__('Tỉ lệ chuyển đổi')}}
                            </th>



                            <th>
                                {{__('Đơn thành công')}}
                            </th>
                            <th>
                                {{__('Doanh thu chờ nhận')}}
                            </th>
                            <th>
                                {{__('Thực nhận')}}
                            </th>


                        </thead>
                        <tbody>

                            @foreach ($collect as $row)

                            <tr>

                                <td>
                                    <p class="text-bold-600">
                                        {{ $row->productName   }}
                                    </p>

                                </td>

                                <td>
                                    {{ $row->totalClick }}
                                </td>
                                <td>
                                    {{ $row->totalOrder }}
                                </td>

                                <td>
                                    {{ $row->percent }} %
                                </td>

                                <td>
                                    {{ $row->totalOrderFinish }}
                                </td>
                                <td>
                                    {{ $row->revenuePending }}
                                </td>
                                <td>
                                    {{ $row->revenue}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div class="pull-right">
                        {{$list->render()}}

                    </div>
                </div>
            </div>
        </div>
    </x-block>
</div>
@endsection


<x-layout.drop />