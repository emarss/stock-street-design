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
                <b class="font-weight-bold font-20">African Sun Limited Top 10 share holders</b>
            </div>
            <div class="col-lg-12">
                <div class="fin-table shareholding">
                    <table class="table table-sm table-bordered table-striped">
                        <thead class="thead text-white">
                            <tr class="bg-cadetblue border-bottom-0">
                                <th>Name</th>
                                <th>Current Shares</th>
                                <th>Ownership %</th>
                                <th>Change Amount</th>
                                <th>Change %</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
                            </tr>
                            <tr>
                                <td>NATIONAL SOCIAL SECURITY AUTHORITY (W.C.I.F)</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">9,918,128</td>
                                <td class="text-right">---</td>
                                <td class="text-right">---</td>
                                <td class="text-right">7th of October 2020</td>
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



@section('front.scripts')

@endsection