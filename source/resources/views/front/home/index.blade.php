@extends('front.layouts.app')



@section('styles')
    <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/stocktools/gui.css">
    <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/annotations/popup.css">
@endsection


@section('content')
    <div class="container mb-4">
    	@include('front.includes.posts.home-top-posts-group')
        
        <hr>

        <div class="row">
        	<div class="col-md-8">
        		<div class="row top-videos">
        			<div class="col-md-6">
						@include('front.includes.videos.simple')       				
        			</div>
        			<div class="col-md-6 mt-2 mt-md-0">
        				<div class="row">
        					<div class="col-6">
        						@include('front.includes.videos.video-with-caption')
        					</div>
        					<div class="col-6">
        						@include('front.includes.videos.video-with-caption')
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="row even-videos mt-md-5">
        			<div class="col-md-4 mt-md-0 mt-2 col-6">
        				<div class="row">
        					@include('front.includes.videos.video-with-caption')
        				</div>
        			</div>
        			<div class="col-md-4 col-6 mt-2 mt-md-0">
        				<div class="row">
        					@include('front.includes.videos.video-with-caption')
        				</div>
        			</div>
        			<div class="col-md-4 col-6 mt-2 mt-md-0">
        				<div class="row">
        					@include('front.includes.videos.video-with-caption')
        				</div>
        			</div>
        		</div>

        		@include('front.includes.posts.batch')

        		@include('front.includes.posts.batch')


        	</div>





        	<div class="col-md-4">
        		<div class="row">
        			@include('front.includes.sidebar-search')
        		</div>

        		<hr>

        		<div class="row currences">
        			<div class="col-12">
        				<a href="#">
        					<b class="font-weight-bold text-dark mr-1">Cryptocurrencies</b>
        					<i class="fa fa-arrow-right text-dark"></i>
        				</a>
        			</div>
        			<div class="headers col-12 mt-2">
        				<div class="row border-bottom mx-0">
	        				<div class="col-3 small text-muted">Symbol</div>
	        				<div class="col-3 small text-muted">Last Price</div>
	        				<div class="col-3 small text-muted">Change</div>
	        				<div class="col-3 small text-muted">% Change</div>
	        			</div>
        			</div>
        			@forelse(range(0,4) as $counter)
        				@include('front.includes.footer-counter-detail')
        			@empty
        				<div class="col-12 mt-2">
						    <span class="text-info">No results found.</span>
						</div>
        			@endforelse
        		</div>

        		<div class="row currences mt-5">
        			<div class="col-12">
        				<a href="#">
        					<b class="font-weight-bold text-dark mr-1">Stocks: Most actives</b>
        					<i class="fa fa-arrow-right text-dark"></i>
        				</a>
        			</div>
        			<div class="headers col-12 mt-2">
        				<div class="row border-bottom mx-0">
	        				<div class="col-3 small text-muted">Symbol</div>
	        				<div class="col-3 small text-muted">Last Price</div>
	        				<div class="col-3 small text-muted">Change</div>
	        				<div class="col-3 small text-muted">% Change</div>
	        			</div>
        			</div>
        			@forelse(range(0,4) as $counter)
        				@include('front.includes.footer-counter-detail')
        			@empty
        				<div class="col-12 mt-2">
						    <span class="text-info">No results found.</span>
						</div>
        			@endforelse
        		</div>

        		<div class="row gainers mt-5">
        			<div class="col-12">
        				<a href="#">
        					<b class="font-weight-bold text-dark mr-1">Stocks: Gainers</b>
        					<i class="fa fa-arrow-right text-dark"></i>
        				</a>
        			</div>
        			<div class="headers col-12 mt-2">
        				<div class="row border-bottom mx-0">
	        				<div class="col-3 small text-muted">Symbol</div>
	        				<div class="col-3 small text-muted">Last Price</div>
	        				<div class="col-3 small text-muted">Change</div>
	        				<div class="col-3 small text-muted">% Change</div>
	        			</div>
        			</div>
        			@forelse(range(0,4) as $counter)
        				@include('front.includes.footer-counter-detail')
        			@empty
        				<div class="col-12 mt-2">
						    <span class="text-info">No results found.</span>
						</div>
        			@endforelse
        		</div>

        		<div class="row losers mt-5">
        			<div class="col-12">
        				<a href="#">
        					<b class="font-weight-bold text-dark mr-1">Stocks: Loses</b>
        					<i class="fa fa-arrow-right text-dark"></i>
        				</a>
        			</div>
        			<div class="headers col-12 mt-2">
        				<div class="row border-bottom mx-0">
	        				<div class="col-3 small text-muted">Symbol</div>
	        				<div class="col-3 small text-muted">Last Price</div>
	        				<div class="col-3 small text-muted">Change</div>
	        				<div class="col-3 small text-muted">% Change</div>
	        			</div>
        			</div>
        			@forelse(range(0,4) as $counter)
        				@include('front.includes.footer-counter-detail')
        			@empty
        				<div class="col-12 mt-2">
						    <span class="text-info">No results found.</span>
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