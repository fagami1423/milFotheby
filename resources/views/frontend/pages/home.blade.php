
@extends('frontend.layouts.layout')
@section('content')
    <div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					@foreach ($items as $item)
                    <div class="banner banner-1">
                            <img src="/storage/images/{{$item->art_image}}" alt="">
                    </div> 
                    @endforeach
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
    </div>
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section-title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Items Of the Day</h2>
                            <div class="pull-right">
                                <div class="product-slick-dots-1 custom-dots"></div>
                            </div>
                        </div>
                    </div>
                  
    
                    <!-- Product Slick -->
                    <div class="col-md-9 col-sm-6 col-xs-6">
                        <div class="row">
                            <div id="product-slick-1" class="product-slick">
                              @foreach ($items as $item)
                              <div class="product product-single">
                                    <div class="product-thumb">
                                        {{-- <ul class="product-countdown">
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul> --}}
                                        <a href="{{route('items.show',[$item->id])}}"> <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
                                    <img src="/storage/images/{{$item->art_image}}" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">${{$item->estimated_price}}</h3>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o empty"></i>
                                        </div>
                                    
                                    <h2 class="product-name"><a href="#">{{$item->name}} by {{$item->artist}}</a></h2>
                                    </div>
                                </div>
                              @endforeach   
                            </div>
                        </div>
                    </div>
                    <!-- /Product Slick -->
                </div>
                <
          
            </div>
            <!-- /container -->
        @endsection