
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
    
    <div class="container">
            <div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="/storage/images/{{$item->art_image}}" alt="">
							</div>

							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="/storage/images/{{$item->art_image}}" alt="">
							</div>	
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$item->name}}</h2>
						
							<div>
								<h3 class="product-price">${{$item->estimated_price}}</h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>{{$item->description}}</p>

							<div class="product-options">
								<label>
									Artist: {{$item->artist}}
                                    
								</label>
                            </div>
                            <div class="product-options">
                                    <label>
                                        Produced Year: {{$item->year_produced}}
                                    </label>
                                    <label>
                                        property: {{$item->property}}
                                    </label>
                            </div>
                            <div class="product-options">
                                    <label>
                                        property: {{$item->property}}
                                    </label>
                            </div>


							
						</div>
					</div>
					
				</div>
    </div>
</div>
 @endsection