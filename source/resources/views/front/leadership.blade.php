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
                <b class="font-weight-bold font-25">Company Executive for African Sun Limited</b>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/team.jpg" alt="Full Name" class="full-width img-fluid box rounded hoverable">
                    </div>
                    <div class="col-md-8">
                        <b>Dr Shingi Munyeza</b>
                        <b class="px-2">|</b>
                        <b>Group Chief Executive Officer</b>
                        <p>Dr Munyeza is an accomplished business leader and currently holds the reins at African Sun Limited. He is a visionary with global perspective and entrepreneurial drive. Dr Munyeza holds a balanced portfolio of experience that has been recognised in the business arena. He is the 2010 winner of the Hospitality Investment Conference Africa (HICA) Mover and Shaker Award. He was conferred with an hounorary Doctorate in Business Administration and Development by Solusi University in March 2010, in recognition of his contribution to business development in the tourism sector. He is the Zimbabwe 2008 Institute of Directors Award winner, was twice recipient of the Institute of Directors Runner-up Award, crowned CEO of the Year 2008 by the Institute of People Management Zimbabwe and received the Zimbabwe Tourism Authority Personality of the Year Award for four years running. Dr Munyeza played an instrumental part in bringing about a turnaround of tourism in Zimbabwe through various initiatives and works closely with governments in Africa to improve tourism and hotel development. He serves on a number of boards, which include ﬁnancial institutions, tourism and hospitality.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/team.jpg" alt="Full Name" class="full-width img-fluid box rounded hoverable">
                    </div>
                    <div class="col-md-8">
                        <b>Dr Shingi Munyeza</b>
                        <b class="px-2">|</b>
                        <b>Group Chief Executive Officer</b>
                        <p>Dr Munyeza is an accomplished business leader and currently holds the reins at African Sun Limited. He is a visionary with global perspective and entrepreneurial drive. Dr Munyeza holds a balanced portfolio of experience that has been recognised in the business arena. He is the 2010 winner of the Hospitality Investment Conference Africa (HICA) Mover and Shaker Award. He was conferred with an hounorary Doctorate in Business Administration and Development by Solusi University in March 2010, in recognition of his contribution to business development in the tourism sector. He is the Zimbabwe 2008 Institute of Directors Award winner, was twice recipient of the Institute of Directors Runner-up Award, crowned CEO of the Year 2008 by the Institute of People Management Zimbabwe and received the Zimbabwe Tourism Authority Personality of the Year Award for four years running. Dr Munyeza played an instrumental part in bringing about a turnaround of tourism in Zimbabwe through various initiatives and works closely with governments in Africa to improve tourism and hotel development. He serves on a number of boards, which include ﬁnancial institutions, tourism and hospitality.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/team.jpg" alt="Full Name" class="full-width img-fluid box rounded hoverable">
                    </div>
                    <div class="col-md-8">
                        <b>Dr Shingi Munyeza</b>
                        <b class="px-2">|</b>
                        <b>Group Chief Executive Officer</b>
                        <p>Dr Munyeza is an accomplished business leader and currently holds the reins at African Sun Limited. He is a visionary with global perspective and entrepreneurial drive. Dr Munyeza holds a balanced portfolio of experience that has been recognised in the business arena. He is the 2010 winner of the Hospitality Investment Conference Africa (HICA) Mover and Shaker Award. He was conferred with an hounorary Doctorate in Business Administration and Development by Solusi University in March 2010, in recognition of his contribution to business development in the tourism sector. He is the Zimbabwe 2008 Institute of Directors Award winner, was twice recipient of the Institute of Directors Runner-up Award, crowned CEO of the Year 2008 by the Institute of People Management Zimbabwe and received the Zimbabwe Tourism Authority Personality of the Year Award for four years running. Dr Munyeza played an instrumental part in bringing about a turnaround of tourism in Zimbabwe through various initiatives and works closely with governments in Africa to improve tourism and hotel development. He serves on a number of boards, which include ﬁnancial institutions, tourism and hospitality.</p>
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

@endsection