
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
               
                <!-- /section title -->
                <div class="row">
                    <div class="col-sm-4">
                            <div class="section-title">
                                    <h4>Advanced Search</h4>
                            </div>
                            <div class="section-title">
                                    <form action="">
                                        {{ csrf_field() }}
                                            <input type="text" name="name"><br>
                                            <input type="submit" value="Search By Name">
                                        </form>
                            </div>
                            <div class="section-title">
                                    <form action="">
                                        {{ csrf_field() }}
                                            <input type="text" name="artist"><br>
                                            <input type="submit" value="Search By Artist">
                                    </form>
                            </div>
                            <div class="section-title">
                                  <h5>Categories</h5> 
                                  <ul>
                                      <li><a href="/searchedDrawings">Drawings</a></li>
                                      <li><a href="/searchedPaintings">Paintings</a></li>
                                      <li><a href="/searchedPhotographs">Photographs</a></li>
                                      <li><a href="/searchedSculptures">Sculptures</a></li>
                                      <li><a href="/searchedCarvings">Carvings</a></li>
                                     

                                  </ul>

                            </div>

                            <div class="section-title">
                                    <h5>Price</h5> 
                                   <form action="">
                                    {{ csrf_field() }}
                                       <input type="text" name="min_price" placeholder="min price"><br>to <br>
                                       
                                       <input type="text" name="max_price" placeholder="max price"><br><br>

                                       <select name="order">
                                        <option value="">Sort By</option>
                                        <option value="asc">Lowest to Highest</option>
                                        <option value="dsc">Highest to Lowest</option>
                                       </select> <br><br>
                                       <input type="submit" value='Sort'>
                                   </form>
  
                              </div>
                    </div>
                        <div class="col-sm-8">
                             
                                <div class="row">
                                        <div class="section-title">
                                                    <h4>Searched Items</h4>
                                            </div>
                                    <div class="products-tabs">
                                        <!-- tab -->
                                        <div id="tab" class="tab-pane active">
                                            <div class="products-slick" data-nav="#slick-nav-1">
                                                @if(count($items)>0)
                                                @foreach ($items as $item)
                                               
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <img src="/storage/images/{{$item->art_image}}" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">{{$item->cat_name}}</p>
                                                                <h5 class="product-name"><a href="#">{{$item->name}}</a></h5>
                                                                <h4 class="product-price">${{$item->estimated_price}}</del></h4>
                                                                <div class="product-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-btns">
                                                                    
                                                            <a href="/items/{{$item->id}}"><button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button></a>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                @endforeach
                                                @else
                                                    <h5>No Data Found</h5>
            
                                                @endif
                                            </div>
                                            <div id="slick-nav-1" class="products-slick-nav"></div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                </div>
              
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
    </div>

@endsection