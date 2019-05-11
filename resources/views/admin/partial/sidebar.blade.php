<aside>
        <div id="sidebar" class="nav-collapse ">
          <ul class="sidebar-menu">
            <li class="active">
            <a class="" href="{{ route('admin.dashboard')}}">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>
            <li class="sub-menu">
              <a href="{{ route('category.index')}}" class="">
                            <i class="fa fa-reorder"></i>
                            <span>Categories</span>
                           
                        </a>
            </li>
    
            <li class="sub-menu">
              <a href="{{ route('item.index')}}" class=" ">
                            <i class="icon_document_alt"></i>
                            <span>Items</span>
              </a>
            </li>
           

            <li class="sub-menu">
                <a href="{{ route('event.index')}}" class="">
                              <i class="fa fa-calendar"></i>
                              <span>Events</span>
                          </a>
              </li>
              <li class="sub-menu">
                  <a href="{{ route('client.index')}}" class="">
                                <i class="fa fa-group"></i>
                                <span>Clients</span>
                    </a>
              </li>

              <li class="sub-menu">
                  <a href="{{ route('requestItem.index')}}" class="">
                                <i class="icon_document_alt"></i>
                                <span>Item Requests</span>
                    </a>
              </li>
              <li>
                <a class="" href="{{Route('item.search')}}">
                                  <i class="icon_search"></i>
                                  <span>Search items</span>
          
                </a>
              </li>
              
          </ul>

        </div>
      </aside>