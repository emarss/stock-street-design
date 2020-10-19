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
        <div class="row mb-3 counter">
            <div class="col-12">
                <b class="font-weight-bold font-25">Financial Results & Reports for African Sun Limited</b>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row px-2 reports mb-5 mt-2" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="col-12 px-o default-text report-collapse btn btn-outline-primary text-left rounded collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#reportOne" aria-expanded="false" aria-controls="reportOne">
                        <a>Annual Report | 2019 (PDF)<i class="float-right fa fa-plus mt-1"></i></a>
                        <div class="collapse mt-2 text-dark" id="reportOne" role="tabpanel">
                            <div class="justify-content-between d-flex">
                                <span>The Annual Report For The Year 2019</span>
                                <span><a href="" class="font-weight-bolder" target="_blank">(PDF)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 default-text report-collapse btn btn-outline-primary text-left rounded collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#reportTwo" aria-expanded="false" aria-controls="reportTwo">
                        <a>Annual Report | 2019 (PDF)<i class="float-right fa fa-plus mt-1"></i></a>
                        <div class="collapse mt-2 text-dark" id="reportTwo" role="tabpanel">
                            <div class="justify-content-between d-flex">
                                <span>The Annual Report For The Year 2019</span>
                                <span><a href="" class="font-weight-bolder" target="_blank">(PDF)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 default-text report-collapse btn btn-outline-primary text-left rounded collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#reportThree" aria-expanded="false" aria-controls="reportThree">
                        <a>Annual Report | 2019 (PDF)<i class="float-right fa fa-plus mt-1"></i></a>
                        <div class="collapse mt-2 text-dark" id="reportThree" role="tabpanel">
                            <div class="justify-content-between d-flex">
                                <span>The Annual Report For The Year 2019</span>
                                <span><a href="" class="font-weight-bolder" target="_blank">(PDF)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 default-text report-collapse btn btn-outline-primary text-left rounded collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#reportFour" aria-expanded="false" aria-controls="reportFour">
                        <a>Annual Report | 2019 (PDF)<i class="float-right fa fa-plus mt-1"></i></a>
                        <div class="collapse mt-2 text-dark" id="reportFour" role="tabpanel">
                            <div class="justify-content-between d-flex">
                                <span>The Annual Report For The Year 2019</span>
                                <span><a href="" class="font-weight-bolder" target="_blank">(PDF)</a></span>
                            </div>
                        </div>
                    </div>
                </div>            	
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
    </div>
@endsection



@section('scripts')

@endsection