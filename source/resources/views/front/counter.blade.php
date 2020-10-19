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
            <div class="col-12 pb-4">
                <b class="font-weight-bold font-25">African Sun Limited</b>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-rounded border-2 border-primary font-17 float-left pr-2">
                            <span class="badge rounded-0 px-3 py-2-5 badge-primary">408.02c</span>
                            <i class="fa fa-arrow-right text-primary"></i>
                            <span class="text-primary small font-weight-bold">0.00 %</span>
                        </div>
                        <a href="" class="btn btn-primary my-0 float-right py-2-5 text-capitalize font-weight-bold">View Detailed Chart</a>
                    </div>
                    <div class="col-12">
                        <div class="full-width" id="stock-chart-type-one"></div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-lg-6 border-right border-primary">
                                <div class="badge badge-primary full-width py-2 font-weight-bold font-16">Financials</div>
                                <div class="font-weight-bold text-primary font-16 py-2">Fundamentals</div>
                                <div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">Price-to-Earnings (P/E) Ratio</span>
                                        <span class="font-weight-bold">0.00</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">Earnings Per Share (EPS)</span>
                                        <span class="font-weight-bold">0.00</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">Price-to-Book (P/B) Ratio</span>
                                        <span class="font-weight-bold">0.00</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">Quick Ratio</span>
                                        <span class="font-weight-bold">0.00</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">Current Ratio</span>
                                        <span class="font-weight-bold">0.00</span>
                                    </div>
                                    <div class="border-top border-bottom justify-content-between d-flex">
                                        <span class="text-muted">Debt to Equity Ratio</span>
                                        <span class="font-weight-bold">0.00</span>
                                    </div>
                                </div>
                                <div class="font-weight-bold text-primary font-16 mt-3 py-2">Important Dates</div>
                                <div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">Important Dates</span>
                                        <span class="font-weight-bold">December 31st, 2018</span>
                                    </div>
                                    <div class="border-top border-bottom justify-content-between d-flex">
                                        <span class="text-muted">Most Recent Earnings Date</span>
                                        <span class="font-weight-bold">December 31st, 2018</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="badge badge-primary full-width py-2 font-weight-bold font-16">Analyst Coverage</div>
                                <table class="table table-bordered mt-3">
                                    <thead>
                                        <tr>
                                            <th class="py-0-5 font-weight-bold">Firm</th>
                                            <th class="py-0-5 font-weight-bold">Analyst</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="py-0-5">Equity Axis</th>
                                            <th class="py-0-5 font-weight-bold">Anesu Chimbumu</th>
                                        </tr>
                                        <tr>
                                            <th class="py-0-5">Equity Axis</th>
                                            <th class="py-0-5 font-weight-bold">Respect Gwenzi</th>
                                        </tr>
                                        <tr>
                                            <th class="py-0-5">Equity Axis</th>
                                            <th class="py-0-5 font-weight-bold">Tinashe Kaduwo</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="font-weight-bold text-primary font-16 mt-3 py-2">Closing Prices for the past 5 days</div>
                                <div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted font-weight-bold">Date</span>
                                        <span class="font-weight-bold">Price</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">June 23rd, 2020</span>
                                        <span class="font-weight-bold">2.65</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">June 23rd, 2019</span>
                                        <span class="font-weight-bold">2.65</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">June 23rd, 2018</span>
                                        <span class="font-weight-bold">2.65</span>
                                    </div>
                                    <div class="border-top justify-content-between d-flex">
                                        <span class="text-muted">June 23rd, 2017</span>
                                        <span class="font-weight-bold">2.65</span>
                                    </div>
                                    <div class="border-top border-bottom justify-content-between d-flex">
                                        <span class="text-muted">June 19th, 2016</span>
                                        <span class="font-weight-bold">0.71</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 smaller">
                <div class="badge badge-success full-width py-2 font-weight-bold font-16">Company Profile</div>
                <div class="full-width py-2">
                    <b>ASUN.ZW</b>
                </div>
                <div class="border-top py-1">
                    <span class="text-muted">Industry:</span>
                    <span class="font-weight-strong">Hospitality</span>
                </div>
                <div class="border-top py-1">
                    <span class="text-muted">Sector:</span>
                    <span class="font-weight-strong">Tourism</span>
                </div>
                <div class="border-top py-1">
                    <span class="text-muted">Address:</span>
                    <span class="font-weight-strong">Bally House, Mount Pleasant Business Park Corner Norfolk Road & 870 Endeavor Crescent Harare</span>
                </div>
                <div class="border-top py-1">
                    <span class="text-muted">Website:</span>
                    <span class="font-weight-strong">http://www.africansunhotels.com</span>
                </div>
                <div class="border-top py-1">
                    <span class="text-muted">Trading Status:</span>
                    <span class="badge badge-success badge-pill">Active</span>
                </div>
                <div class="border-top border-bottom py-1">
                    <span class="text-muted">Market Cap:</span>
                    <span class="font-weight-strong">ZWL $(M)1,244</span>
                </div>
                <div class="my-2">
                    <p><b>African Sun Limited</b> is a hospitality management company that is involved in the running of hotels, resorts, casinos and timeshare operations in Zimbabwe and South Africa. It operates through four divisions; Hotels Under Management, Hotels Under Franchise, Owner-managed Hotels and the Victoria Falls Hotel Partnership. Established in 1968 as Zimbabwe Sun Limited, the company has grown in stature to include Legacy Hospitality Management Services Limited which manages five hotels, and the InterContinental Hotels Group. Prestigious hotel brands in African Sun Limited’s expansive portfolio include The Victoria Falls Hotel, Holiday Inn, Great Zimbabwe Hotel and The Caribbea Bay Resort. African Sun Limited is a constituent of the Zimbabwe Industrial Index.</p>
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
 <script>
    Highcharts.getJSON('https://demo-live-data.highcharts.com/aapl-c.json', function(data) {

        // Create the chart
        var chart = Highcharts.stockChart('stock-chart-type-one', {

            chart: {
                height: 500
            },

            rangeSelector: {
                selected: 1
            },

            series: [{
                name: 'AAPL Stock Price',
                data: data,
                type: 'area',
                threshold: null,
                tooltip: {
                    valueDecimals: 2
                }
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        chart: {
                            height: 300
                        },
                        subtitle: {
                            text: null
                        },
                        navigator: {
                            enabled: false
                        }
                    }
                }]
            }
        });
    });
    </script>

@endsection