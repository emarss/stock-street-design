@extends('front.layouts.app')



@section('styles')
    <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/stocktools/gui.css">
    <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/annotations/popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
@endsection



@section('content')
    <div class="container">
        <div class="row mb-2 counter-nav">
            <div class="col-12">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary active" href="#">Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Compare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Financials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Operating Performance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Trailing Returns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Ratios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Leadership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn font-16 btn-primary" href="#">Shareholders</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mb-4 counter">
            <div class="col-12 pb-4">
                <b class="font-weight-bold font-25">African Sun Limited</b>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="full-width" id="stock-chart-type-two"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-9">
            	@include('front.includes.posts.batch')
        		@include('front.includes.posts.batch')
            </div>
            <div class="col-md-3">
                <div class="row related-posts mt-5">
                    @forelse(range(0,4) as $post)
	                    <div class="col-12 line-height-14 mb-3">
	                        <img src="img/ted.jpg" alt="" class="img-fluid mb-2">
	                        <a href="" class="font-weight-bold font-12">NBA boycott: Milwaukee Bucks to strike in playoff protest over Jacob Blake shooting</a>
	                    </div>
	                @empty
	                	<div class="col-12 line-height-14 text-info mb-3">
	                        No results found.
	                    </div>
	                @endforelse
                </div>

                @include('front.includes.sticky-footer')
            </div>
        </div>
    </div>
@endsection



@section('scripts')
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/data.js"></script>

    <script src="https://code.highcharts.com/stock/indicators/indicators-all.js"></script>
    <script src="https://code.highcharts.com/stock/modules/drag-panes.js"></script>

    <script src="https://code.highcharts.com/modules/annotations-advanced.js"></script>
    <script src="https://code.highcharts.com/modules/price-indicator.js"></script>
    <script src="https://code.highcharts.com/modules/full-screen.js"></script>

    <script src="https://code.highcharts.com/modules/stock-tools.js"></script>

    <script>
     Highcharts.getJSON('https://demo-live-data.highcharts.com/aapl-ohlcv.json', function (data) {

        // split the data set into ohlc and volume
        var ohlc = [],
            volume = [],
            dataLength = data.length,
            i = 0;

        for (i; i < dataLength; i += 1) {
            ohlc.push([
                data[i][0], // the date
                data[i][1], // open
                data[i][2], // high
                data[i][3], // low
                data[i][4] // close
            ]);

            volume.push([
                data[i][0], // the date
                data[i][5] // the volume
            ]);
        }

        Highcharts.stockChart('stock-chart-type-two', {
            yAxis: [{
                labels: {
                    align: 'left'
                },
                height: '80%',
                resize: {
                    enabled: true
                }
            }, {
                labels: {
                    align: 'left'
                },
                top: '80%',
                height: '20%',
                offset: 0
            }],
            tooltip: {
                shape: 'square',
                headerShape: 'callout',
                borderWidth: 0,
                shadow: false,
                positioner: function (width, height, point) {
                    var chart = this.chart,
                        position;

                    if (point.isHeader) {
                        position = {
                            x: Math.max(
                                // Left side limit
                                chart.plotLeft,
                                Math.min(
                                    point.plotX + chart.plotLeft - width / 2,
                                    // Right side limit
                                    chart.chartWidth - width - chart.marginRight
                                )
                            ),
                            y: point.plotY
                        };
                    } else {
                        position = {
                            x: point.series.chart.plotLeft,
                            y: point.series.yAxis.top - chart.plotTop
                        };
                    }

                    return position;
                }
            },
            series: [{
                type: 'ohlc',
                id: 'aapl-ohlc',
                name: 'AAPL Stock Price',
                data: ohlc
            }, {
                type: 'column',
                id: 'aapl-volume',
                name: 'AAPL Volume',
                data: volume,
                yAxis: 1
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 800
                    },
                    chartOptions: {
                        rangeSelector: {
                            inputEnabled: false
                        }
                    }
                }]
            }
        });
    });

    </script>
@endsection