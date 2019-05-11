
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
                        <img src="/storage/images/{{$items->art_image}}" alt="">
                        </div>
                        
                    </div>
                    <div id="product-view">
                        <div class="product-view">
                            <img src="/storage/images/{{$items->art_image}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">
                        {{-- <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div> --}}
                        <h2 class="product-name">{{$items->name}}</h2>
                        <h3 class="product-price">${{$items->estimated_price-$items->estimated_price*0.20}} <del class="product-old-price">${{$items->estimated_price}}</del></h3>
                       
                        <p><strong>Artist:</strong> {{$items->artist}}</p>
                        <p><strong>Category:</strong> {{$items->cat_name}}</p>
                        <p><strong>Description:</strong> {{$items->description}}</p>
                        <p><strong>properties:</strong> {!! $items->property !!}</p>
                        <p><strong>Subject:</strong> {!! $items->subject !!}</p>
                        <p><strong>Year Produced:</strong> {!! $items->year_produced !!}</p>

                        <div class="product-btns">
                           @if(auth()->user()->client_status=='buyer')
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Buy</button>
                            @endif
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