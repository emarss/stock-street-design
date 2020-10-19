@extends('front.layouts.app')



@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/fc-3.3.1/fh-3.1.7/datatables.min.css"/>
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
                <b class="font-weight-bold font-20">Operating Performance for African Sun Limited</b>
                <div>
                    <a href="" class="btn btn-blue mx-0 py-1-5">Balance Sheet</a>
                    <a href="" class="btn btn-blue mx-0 py-1-5">Income Statement</a>
                    <a href="" class="btn btn-blue mx-0 py-1-5">Cashflow</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="fin-table">
                    <table class="table table-sm table-bordered">
                        <thead class="thead text-white">
                            <tr class="bg-cadetblue border-bottom-0">
                                <th class="border-0"></th>
                                <th class="border-0"></th>
                                <th class="border-left-0">Description/Financial Year</th>
                                <th>FY 2010</th>
                                <th>FY 2011</th>
                                <th>FY 2012</th>
                                <th>FY 2013</th>
                                <th>FY 2014</th>
                                <th>FY 2015</th>
                                <th>FY 2016</th>
                                <th>FY 2017</th>
                                <th>FY 2018</th>
                                <th>FY 2019</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <th></th>
                                <th></th>
                                <td class="font-weight-strong category-col">EQUITY AND LIABILITIES</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                                <td>12100</td>
                            </tr>
                            <tr>
                                <td class="td-info"><i class="fa fa-bar-chart text-primary"></i></td>
                                <td class="td-info">$</td>
                                <td>Share capital (Th)</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                                <td>13400</td>
                            </tr>
                            <tr>
                                <td class="td-info"><i class="fa fa-bar-chart text-primary"></i></td>
                                <td class="td-info">$</td>
                                <td>Share capital (Th)</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                                <td>13000</td>
                            </tr>
                            <tr>
                                <td class="td-info"><i class="fa fa-bar-chart text-primary"></i></td>
                                <td class="td-info">$</td>
                                <td>Share capital (Th)</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                            </tr>
                            <tr>
                                <td class="td-info"><i class="fa fa-bar-chart text-primary"></i></td>
                                <td class="td-info">$</td>
                                <td>Share capital (Th)</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                                <td>12000</td>
                            </tr>
                            <tr class="total-row">
                                <td class="td-info"><i class="fa fa-bar-chart text-primary"></i></td>
                                <td class="td-info">$</td>
                                <td>Total equity (Th)</td>
                                <td class="text-right">39,630,343,432</td>
                                <td class="text-right">39,630,343,432</td>
                                <td class="text-right">39,630,343,432</td>
                                <td class="text-right">39,630</td>
                                <td class="text-right">39,630,343,432</td>
                                <td class="text-right">39,630,343,432</td>
                                <td class="text-right">39,630</td>
                                <td class="text-right">39,630</td>
                                <td class="text-right">39,630,343,432</td>
                                <td class="text-right">39,630</td>
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
@endsection



@section('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/fc-3.3.1/fh-3.1.7/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                scrollY: "400px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                ordering: false,
                searching: false,
                fixedHeader: true,
                fixedColumns: {
                    leftColumns: 3,
                }
            });
            //fix row misalignment caused by scrollX and scrollY
            $('table').css("margin-top", "1px");
        });
    </script>
@endsection