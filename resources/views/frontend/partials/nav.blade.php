
	<div id="navigation">
            <!-- container -->
            <div class="container">
                <div id="responsive-nav">
                    <!-- category nav -->
                    <div class="category-nav show-on-click">
                        <span class="category-header">Categories <i class="fa fa-list"></i></span>
                        <ul class="category-list">
                            <li><a href="/drawings">Drawings</a></li>
                            <li><a href="/paintings">Paintings</a></li>
                            <li><a href="/photographs">Photography Images</a></li>
                            <li><a href="/sculptures">Sculptures</a></li>
                            <li><a href="/Carvings">Carvings</a></li>
                        </ul>
                    </div>
                    <!-- /category nav -->
    
                    <!-- menu nav -->
                    <div class="menu-nav">
                        <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                        <ul class="menu-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="/items">Items</a></li>
                            <li><a href="/events">Auction</a></li>
                            @if(!Auth::guest() && auth()->user()->client_status == 'seller')
                                <li><a href="/auction/index">My Auction</a></li>
                            @endif
                            
                        </ul>
                    </div>
                    <!-- menu nav -->
                </div>
            </div>
            <!-- /container -->
        </div>
   
