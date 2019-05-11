
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-6">
                    <div id="product-main-view">
                        <div class="product-view">
                        <img src="/storage/images/{{$events->art_image}}" alt="">
                        </div>
                        
                    </div>
                    <div id="product-view">
                        <div class="product-view">
                            <img src="/storage/images/{{$events->art_image}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">
                        {{-- <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div> --}}
                        <h2 class="product-name">{{$events->name}}</h2>
                        <h3 class="product-price">${{$events->estimated_price-$events->estimated_price*0.20}} <del class="product-old-price">${{$events->estimated_price}}</del></h3>
                       
                        <p><strong>Auction date:</strong> {{$events->event}}</p>
                        
                        <p><strong>Starts  at:</strong> {{$events->start_time}}</p>
                        <p><strong>Ends at:</strong> {!! $events->end_time !!}</p>
                        <p><strong>Subject:</strong> {!! $events->subject !!}</p>
                        <p><strong>Location:</strong> {!! $events->location !!}</p>

                        <div class="product-btns">
                           
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Participate</button>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection
