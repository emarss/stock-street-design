@extends('front.layouts.app')



@section('styles')

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
            <div class="col-12 justify-content-between d-md-flex py-1">
                <b class="font-weight-bold font-20">Trailing returns for African Distillers | (AFDS.ZW)</b>
            </div>
            <div class="col-lg-12">
                <div class="fin-table shareholding">
                    <table class="table table-sm table-bordered table-striped">
                        <thead class="thead text-white">
                            <tr class="bg-cadetblue border-bottom-0">
                                <th colspan="3">Total Returns %</th>
                                <th>1-Day %</th>
                                <th>1-Week %</th>
                                <th>1-Month %</th>
                                <th>3-Month %</th>
                                <th>YTD %</th>
                                <th>1-Year %</th>
                                <th>3-Year %</th>
                                <th>5-Year %</th>
                                <th>10-Year %</th>
                                <th>15-Year %</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">                           
                            <tr>
                                <td colspan="3"></td>
                                <td id="container" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_1" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_2" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_3" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_4" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_5" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_6" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_7" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_8" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                                <td id="container_9" style="width: 70px; height: 95px; margin: 0 auto">
                                    <img class="chart-loading" src="http://stock-street.net/front/assets/images/loader_gif_chart.gif" alt="" style="display: block; width: 50px;">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 26px;">
                                    <span style="width: 15px; height: 15px;" class="bg-primary d-block opacity-3"></span>
                                </td>
                                <td style="width: 26px;">
                                    <span></span>
                                </td>
                                <td>Bindura Nickel Corporation Limited</td>
                                <td class="text-right">0.00</td>
                                <td class="text-right">5.15</td>
                                <td class="text-right">2.00</td>
                                <td class="text-right">163.67</td>
                                <td class="text-right">2,421.63</td>
                                <td class="text-right">6,700.00</td>
                                <td class="text-right">33,900.00</td>
                                <td class="text-right">15,592.31</td>
                                <td class="text-right">716.00</td>
                                <td class="text-right">716.00</td>
                            </tr>
                            <tr>
                                <td style="width: 26px;">
                                    <span style="width: 15px; height: 15px;" class="bg-primary d-block opacity-7"></span>
                                </td>
                                <td style="width: 26px;">
                                    <span></span>
                                </td>
                                <td>Equity Axis Sector Average (Mining)</td>
                                <td class="text-right">0.00</td>
                                <td class="text-right">5.15</td>
                                <td class="text-right">2.00</td>
                                <td class="text-right">163.67</td>
                                <td class="text-right">2,421.63</td>
                                <td class="text-right">6,700.00</td>
                                <td class="text-right">33,900.00</td>
                                <td class="text-right">15,592.31</td>
                                <td class="text-right">716.00</td>
                                <td class="text-right">716.00</td>
                            </tr>
                            <tr>
                                <td style="width: 26px;">
                                    <span style="width: 15px; height: 15px;" class="bg-primary d-block"></span>
                                </td>
                                <td style="width: 26px;">
                                    <span></span>
                                </td>
                                <td>ZSE ASI</td>
                                <td class="text-right">0.00</td>
                                <td class="text-right">5.15</td>
                                <td class="text-right">2.00</td>
                                <td class="text-right">163.67</td>
                                <td class="text-right">2,421.63</td>
                                <td class="text-right">6,700.00</td>
                                <td class="text-right">33,900.00</td>
                                <td class="text-right">15,592.31</td>
                                <td class="text-right">716.00</td>
                                <td class="text-right">716.00</td>
                            </tr>
                        </tbody>
                    </table>
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

    {{--this div holds the company id so that it is dynamic--}}
    <div id="company_id" data-id="1"></div>

    {{--this div holds the API Key--}}
    <div id="api_key" data-key="4a8a295956e7f957c6b7f97e"></div>
@endsection



@section('scripts')
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script>
    $(document).ready(function() {

        var companyId = $("#company_id").attr("data-id");
        var key = $("#api_key").attr("data-key");

        function getMin(a, b, c) {
            var temp;
            if (a > b) {
                temp = b;
            }
            var min = temp > c ? c : temp;
            return (min > 0) ? 0 : min;
        }

        function getMax(a, b, c) {
            var temp;
            if (a > b) {
                temp = a;
            } else {
                temp = b;
            }
            return (temp > c) ? temp : c;

        }

        function getChartAxisMaxMin(a, b) {
            var temp1 = Math.abs(a);
            var temp2 = Math.abs(b);
            return (temp1 > temp2) ? temp1 : temp2;
        }
        data = JSON.parse(JSON.stringify([{ "price": 0, "asi": 1.0079132754643227, "sector_average": 0.04266304347825822 }, { "price": 5.154639175257736, "asi": 11.37757323216617, "sector_average": 1.288659793814434 }, { "price": 2.0000000000000018, "asi": 225.5421642944138, "sector_average": 6.173194695920758 }, { "price": 163.66808840635906, "asi": 244.12098153379068, "sector_average": 36.6773932609211 }, { "price": 2421.6316440049445, "asi": 678.3553546592489, "sector_average": 1966.2843741426993 }, { "price": 6700, "asi": 1158.9384885764498, "sector_average": 1781.4285714285716 }, { "price": 33900, "asi": 1713.5088607594937, "sector_average": 9915.441176470587 }, { "price": 15592.307692307691, "asi": 1713.5088607594937, "sector_average": 4346.427617521367 }, { "price": 716, "asi": 1713.5088607594937, "sector_average": 339.9375 }, { "price": 716, "asi": 1713.5088607594937, "sector_average": 339.9375 }])),

            $(".chart-loading").hide();
        var min = getMin(data[0]['sector_average'], data[0]['price'], data[0]['asi']);
        var max = getMax(data[0]['sector_average'], data[0]['price'], data[0]['asi']);

        Highcharts.chart('container', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            colors: ['#c2c1de', '#6b69ac', '#343191'],
            title: {
                text: '' //removes title of chart
            },

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(min, max),
                max: getChartAxisMaxMin(min, max),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[0]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[0]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[0]['asi']]
            }]
        });

        Highcharts.chart('container_1', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[1]['sector_average'], data[1]['price'], data[1]['asi']), getMax(data[1]['sector_average'], data[1]['price'], data[1]['asi'])),
                max: getChartAxisMaxMin(getMin(data[1]['sector_average'], data[1]['price'], data[1]['asi']), getMax(data[1]['sector_average'], data[1]['price'], data[1]['asi'])),

                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[1]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[1]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[1]['asi']]
            }]
        });

        Highcharts.chart('container_2', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[2]['sector_average'], data[2]['price'], data[2]['asi']), getMax(data[2]['sector_average'], data[2]['price'], data[2]['asi'])),
                max: getChartAxisMaxMin(getMin(data[2]['sector_average'], data[2]['price'], data[2]['asi']), getMax(data[2]['sector_average'], data[2]['price'], data[2]['asi'])),

                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[2]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[2]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[2]['asi']]
            }]
        });

        Highcharts.chart('container_3', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[3]['sector_average'], data[3]['price'], data[3]['asi']), getMax(data[3]['sector_average'], data[3]['price'], data[3]['asi'])),
                max: getChartAxisMaxMin(getMin(data[3]['sector_average'], data[3]['price'], data[3]['asi']), getMax(data[3]['sector_average'], data[3]['price'], data[3]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                }
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[3]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[3]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[3]['asi']]
            }]
        });

        Highcharts.chart('container_4', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[4]['sector_average'], data[4]['price'], data[4]['asi']), getMax(data[4]['sector_average'], data[4]['price'], data[4]['asi'])),
                max: getChartAxisMaxMin(getMin(data[4]['sector_average'], data[4]['price'], data[4]['asi']), getMax(data[4]['sector_average'], data[4]['price'], data[4]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[4]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[4]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[4]['asi']]
            }]
        });

        Highcharts.chart('container_5', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[5]['sector_average'], data[5]['price'], data[5]['asi']), getMax(data[5]['sector_average'], data[5]['price'], data[5]['asi'])),
                max: getChartAxisMaxMin(getMin(data[5]['sector_average'], data[5]['price'], data[5]['asi']), getMax(data[5]['sector_average'], data[5]['price'], data[5]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[5]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[5]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[5]['asi']]
            }]
        });

        Highcharts.chart('container_6', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[6]['sector_average'], data[6]['price'], data[6]['asi']), getMax(data[6]['sector_average'], data[6]['price'], data[6]['asi'])),
                max: getChartAxisMaxMin(getMin(data[6]['sector_average'], data[6]['price'], data[6]['asi']), getMax(data[6]['sector_average'], data[6]['price'], data[6]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[6]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[6]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [
                    [data[6]['asi']]
                ]
            }]
        });

        Highcharts.chart('container_7', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[7]['sector_average'], data[7]['price'], data[7]['asi']), getMax(data[7]['sector_average'], data[7]['price'], data[7]['asi'])),
                max: getChartAxisMaxMin(getMin(data[7]['sector_average'], data[7]['price'], data[7]['asi']), getMax(data[7]['sector_average'], data[7]['price'], data[7]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[7]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[7]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[7]['asi']]
            }]
        });

        Highcharts.chart('container_8', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[8]['sector_average'], data[8]['price'], data[8]['asi']), getMax(data[8]['sector_average'], data[8]['price'], data[8]['asi'])),
                max: getChartAxisMaxMin(getMin(data[8]['sector_average'], data[8]['price'], data[8]['asi']), getMax(data[8]['sector_average'], data[8]['price'], data[8]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[8]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[8]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[8]['asi']]
            }]
        });

        Highcharts.chart('container_9', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255,0.0)', //back ground color
                margin: 0 //removes all margin
            },
            title: {
                text: '' //removes title of chart
            },

            colors: ['#c2c1de', '#6b69ac', '#343191'],

            xAxis: {
                categories: [
                    'Mas',
                    'Equity Axis',
                    'ZSE ASI'
                ],
                crosshair: true, //hover effect of column
                lineWidth: 0, //removes axis line
                gridLineWidth: 0, //removes charts background line
                lineColor: 'transparent',
                minorTickLength: 0, //removes minor axis ticks
                tickLength: 0, //removes  axis ticks
                title: {
                    enabled: false
                },
                labels: {
                    enabled: false
                },
            },

            yAxis: {
                visible: true,
                offset: 5,
                min: (-1) * getChartAxisMaxMin(getMin(data[9]['sector_average'], data[9]['price'], data[9]['asi']), getMax(data[9]['sector_average'], data[9]['price'], data[9]['asi'])),
                max: getChartAxisMaxMin(getMin(data[9]['sector_average'], data[9]['price'], data[9]['asi']), getMax(data[9]['sector_average'], data[9]['price'], data[9]['asi'])),
                title: {
                    text: ''
                },
                lineWidth: 0,
                gridLineWidth: 0,
                lineColor: 'transparent',
                minorTickLength: 0,
                tickLength: 0,
                labels: {
                    enabled: false
                },
            },
            tooltip: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Share Price',
                data: [data[9]['price']]
            }, {
                name: 'Equity Axis Sector Average',
                data: [data[9]['sector_average']]
            }, {
                name: 'ZSE ASI',
                data: [data[9]['asi']]
            }]
        });
    });
    </script>
@endsection