

    <header>
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="/images/logo.jpg" alt="">
						</a>
					</div>
                    <!-- /Logo -->
                    

					<!-- Search -->
					<div class="header-search">
						<form action="{{route('search.items')}}" method="GET">
                            {{ csrf_field() }}
							<input class="input search-input" name="name" type="text" placeholder="Enter your keyword">
							<select name="cat_id" class="input search-categories">
								<option value="">All Categories</option>
                                    <option value="1">Drawings</option>
                                    <option value="2">Paintings</option>
                                    <option value="3">Photographs</option>
                                    <option value="4">Sculptures</option>
                                    <option value="5">Carvings</option>
							</select>
							<input type="submit" value="GO" class="search-btn">
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                @if(!Auth::guest())
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
                                </div>
                               
                                <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                                @endif
                            </div>
                            @if(Auth::guest())
							<a href="{{ route('login') }}" class="text-uppercase">Login</a> / <a href="{{ route('register') }}" class="text-uppercase">Join</a>
                            @else
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Logout</a></li>
                            </ul>
                            @endif
						</li>
						
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>