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
                <b class="font-weight-bold font-25">ZSE Indices</b>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Financials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Consumer Discretionary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Consumers Staples</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Industrials </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ICT </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Materials </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Real Estate</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-striped table-sm matching-stocks">
                                    <thead>
                                        <tr>
                                            <th scope="col small text-muted border-right">Symbol</th>
                                            <th scope="col small text-muted">Name</th>
                                            <th scope="col small text-muted">Price</th>
                                            <th scope="col small text-muted">Change</th>
                                            <th scope="col small text-muted">% Change</th>
                                            <th scope="col small text-muted">Volume</th>
                                            <th scope="col small text-muted">Avg Vol (3 month)</th>
                                            <th scope="col small text-muted">Market Cap </th>
                                            <th scope="col small text-muted">PE Ratio (TTM)</th>
                                            <th scope="col small text-muted">52 Week Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">LIN</td>
                                            <td>Wheaton Precious Metals Corp.</td>
                                            <td>55.12</td>
                                            <td>0.00</td>
                                            <td>0.00%</td>
                                            <td>414.915k</td>
                                            <td>2.2002M</td>
                                            <td>142.43B</td>
                                            <td>17.45</td>
                                            <td>
                                                <div class="current-price-locator">
                                                    <i class="fa fa-map-marker text-primary" style="padding-left: calc(70% - 6px)"></i>
                                                </div>
                                                <div class="price-bar"></div>
                                                <div class="d-flex prices justify-content-between">
                                                    <b>20.00</b>
                                                    <b>50.00</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">LIN</td>
                                            <td>E. I. du Pont de Nemours and Company.</td>
                                            <td>55.12</td>
                                            <td>0.00</td>
                                            <td>0.00%</td>
                                            <td>414.915k</td>
                                            <td>2.2002M</td>
                                            <td>142.43B</td>
                                            <td>17.45</td>
                                            <td>17.45</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            </div>
                        </div>
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