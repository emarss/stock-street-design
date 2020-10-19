@extends('front.layouts.app')



@section('styles')

@endsection



@section('content')
    <div class="container mb-4">
        <div class="row">
        	<div class="col-md-9">
                <div class="row main-post">
                    <div class="col-md-12 mt-2 mt-md-0">
                        <div class="post-style-two">
                            <div class="view overlay">
                                <a href=""><img src="img/xlong.jpg" class="img-fluid full-width" alt=""></a>
                                <a href="#"> <div class="mask post-mask"></div> </a>
                            </div>
                            <div class="post-details col-ld-6">
                                <h4 class="post-title"><a href="">Mortgage delinquencies moderate after hitting nine-year high in the second quarter</a></h4>
                                <p class="post-except d-none d-sm-block mb-1"><a class="text-white font-weight-strong font-italic" href="">The share of homeowners behind on their mortgages is starting to abate after reaching a nine-year high in the second quarter when delinquencies increased at a historic pace.</a></p>
                                <p class="mt-3 d-none d-md-block"><a href="" class="font-weight-bold text-white underline-hover">Some delinquencies are loans in forbearance »</a></p>
                                <div class="style-bars d-none d-xl-block">
                                    <div class="bg-primary float-left" style="width: 30%; height: 6px"></div>
                                    <div class="bg-success float-left" style="width: 20%; margin-right: 2x; height: 6px"></div>
                                    <div class="bg-white float-left" style="width: 10%; height: 6px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row even-videos mt-md-5">
                    <div class="col-md-3 mt-md-0 mt-2 col-6">
                        <div class="row">
                            @include('front.includes.posts.post-with-caption')
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-2 mt-md-0">
                        <div class="row">
                            @include('front.includes.videos.video-with-caption')
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-2 mt-md-0">
                        <div class="row">
                            @include('front.includes.posts.post-with-caption')
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-2 mt-md-0">
                        <div class="row">
                            @include('front.includes.posts.post-with-caption')
                        </div>
                    </div>
                </div>
                <hr>

        		@include('front.includes.posts.batch')

        		@include('front.includes.posts.batch')


        	</div>





        	<div class="col-md-3">
        		<div class="row">
        			@include('front.includes.sidebar-search')
        		</div>

        		@include('front.includes.sticky-footer')
        	</div>
        </div>	
    </div>
@endsection



@section('scripts')

@endsection