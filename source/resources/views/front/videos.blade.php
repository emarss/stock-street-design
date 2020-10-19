@extends('front.layouts.app')



@section('styles')

@endsection



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="row sidebar-videos sticky-top">
                    <div class="col-12">
                        <b class="font-weight-bold font-27">Shows</b>
                    </div>
                    <div class="col-12 mt-4">
                        <a href="" class="font-weight-strong font-20">The First Trade</a><br>
                        <i class="text-muted">9:00 AM ET every weekday</i>
                    </div>
                    <div class="col-12 mt-2">
                        <a href="" class="font-weight-strong font-20">On the Move</a><br>
                        <i class="text-muted">9:00 AM ET every weekday</i>
                    </div>
                    <div class="col-12 mt-2">
                        <a href="" class="font-weight-strong font-20">YFi PM</a><br>
                        <i class="text-muted">9:00 AM ET every weekday</i>
                    </div>
                    <div class="col-12 mt-2">
                        <a href="" class="font-weight-strong font-20">The Ticker</a><br>
                        <i class="text-muted">9:00 AM ET every weekday</i>
                    </div>
                    <div class="col-12 mt-2">
                        <a href="" class="font-weight-strong font-20">The Final Round</a><br>
                        <i class="text-muted">9:00 AM ET every weekday</i>
                    </div>
                    <div class="col-12 mt-5">
                        <b class="font-weight-bold font-27">Events</b>
                    </div>
                    <div class="col-12 mt-2">
                        <a href="" class="font-weight-strong font-20">Influencers with Andy Serwer</a><br>
                    </div>
                </div>
            </div>            
            <div class="col-lg-9 mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0BEaN65MbdI" allowfullscreen></iframe>
                        </div>
                        <b class="font-20">Earnings Review : Prospect Resources profile, operations discussion & Covid19 impact on the economy...</b>
                        <p>Harvard Medical School's Professor of medicine and immunology, Dr. Dan Barouch, speaks with Yahoo Finance's Editor-in-Chief Andy Serwer about his experience with the coronavirus and his progress in the search for a vaccine.</p>
                    </div>
                </div>
                <div class="row videos-4by3 mt-2">
                	@forelse(range(0,15) as $video)
                		@include('front.includes.videos.video-with-small-caption')
                	@empty
	                	<div class="col-md-12 text-info">
						    No results found.
						</div>
					@endforelse
                </div>
            </div>
        </div>
    </div>
@endsection



@section('scripts')

@endsection