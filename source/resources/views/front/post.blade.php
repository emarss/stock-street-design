@extends('front.layouts.app')



@section('styles')

@endsection



@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-3">
                <h4 class="h4 font-weight-bolder">Market strategist: Disney has an 'ESPN problem'</h4>
                <div class="d-block float-left py-3 py-md-0">
                    <div class="float-left pr-2">
                        <img style="height: 50px;" src="img/avatar.jpg" class="rounded-circle img-fluid" alt="Author Name">
                    </div>
                    <div class="float-left line-height-15">
                        <b>Steve Jobs Sithole</b><br>
                        <b class="text-muted">Anchor</b><br>
                        <b class="small  font-weight-bold">Stock Street Finance</b> <b class="text-muted small font-weight-bold">Oct 13, 2020</b>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row report-post">
                    <div class="col-12">
                        <img src="img/post.jpg" alt="" class="img-fluid">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, temporibus, asperiores? Ex necessitatibus, fuga quo voluptatem enim nemo odio, maxime blanditiis, ut quaerat omnis. Aperiam architecto laudantium labore totam, distinctio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel commodi dignissimos nihil rerum quod expedita, laborum nemo quia, unde sequi adipisci ut fugit? Eum, voluptatum laboriosam molestias esse. Modi, temporibus.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel commodi dignissimos nihil rerum quod expedita, laborum nemo quia, unde sequi adipisci ut fugit? Eum, voluptatum laboriosam molestias esse. Modi, temporibus.</p>
                        <img src="img/post.jpg" alt="" class="img-fluid">
                        <p class="small text-muted mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque atque fuga aperiam accusantium reprehenderit iste recusandae perferendis
                        </p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, temporibus, asperiores? Ex necessitatibus, fuga quo voluptatem enim nemo odio, maxime blanditiis, ut quaerat omnis. Aperiam architecto laudantium labore totam, distinctio!</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, temporibus, asperiores? Ex necessitatibus, fuga quo voluptatem enim nemo odio, maxime blanditiis, ut quaerat omnis. Aperiam architecto laudantium labore totam, distinctio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel commodi dignissimos nihil rerum quod expedita, laborum nemo quia, unde sequi adipisci ut fugit? Eum, voluptatum laboriosam molestias esse. Modi, temporibus.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel commodi dignissimos nihil rerum quod expedita, laborum nemo quia, unde sequi adipisci ut fugit? Eum, voluptatum laboriosam molestias esse. Modi, temporibus.</p>
                        <img src="img/post.jpg" alt="" class="img-fluid">
                        <p class="small text-muted mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque atque fuga aperiam accusantium reprehenderit iste recusandae perferendis
                        </p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, temporibus, asperiores? Ex necessitatibus, fuga quo voluptatem enim nemo odio, maxime blanditiis, ut quaerat omnis. Aperiam architecto laudantium labore totam, distinctio!</p>
                    </div>
                </div>
                <hr>

                @include('front.includes.posts.simple-batch')
            </div>

            <div class="col-md-3">
                <div class="row">
                    @include('front.includes.quote-lookup')
                </div>
                <hr>
                <div class="row related-quotes">
                    <div class="col-12">
                        <a href="#">
                            <b class="font-weight-bold text-dark mr-1">Related Quotes</b>
                            <i class="fa fa-arrow-right text-dark"></i>
                        </a>
                    </div>
                    @forelse(range(0,4) as $counter)
        				@include('front.includes.footer-counter-detail')
        			@empty
        				<div class="col-12 mt-2">
						    <span class="text-info">No results found.</span>
						</div>
        			@endforelse
                </div>

                <div class="row related-quotes mt-5">
                    <div class="col-12">
                        <a href="#">
                            <b class="font-weight-bold text-dark mr-1">Recently Viewed</b>
                            <i class="fa fa-arrow-right text-dark"></i>
                        </a>
                    </div>
                    @forelse(range(0,4) as $counter)
        				@include('front.includes.footer-counter-detail')
        			@empty
        				<div class="col-12 mt-2">
						    <span class="text-info">No results found.</span>
						</div>
        			@endforelse
                </div>

                <div class="row related-posts mt-5">
                    <div class="col-12 py-2">
                        <a href="#">
                            <b class="font-weight-bold text-dark mr-1">What To Read Next</b>
                            <i class="fa fa-arrow-right text-dark"></i>
                        </a>
                    </div>
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