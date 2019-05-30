<div class="col-md-3 left_col ">
  <div class="left_col scroll">


    <div class="navbar nav_title sidebar-brand hidden-xs" style="border: 0;">
      <a href="{{route('admin.home')}}" class="site_title" >
        <img src="{{asset('public/images/brand_assets/DZ-Logo Orange-white.png')}}" class="hidden-xs">
        <!--h3 style="text-align: center;">{{setting('app_name')}}</h3--> 
      </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    
    <!-- /menu profile quick info -->


    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">

      <div class="menu_section">

        <h3>General</h3>
        <ul class="nav side-menu">
          <li class=""><a href="{{route('admin.home')}}"><i class="fa fa-tachometer"></i> Dashboard </a>
          </li>

          <li><a><i class="fa fa-edit"></i> Articles <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('post.index')}}">All Article</a></li>
              <li><a href="{{route('post.create')}}">New Article</a></li>
            </ul>
          </li>

          <!-- <li><a><i class="fa fa-file-text-o"></i> Pages <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('page.index')}}">All Pages</a></li>
              <li><a href="{{route('page.create')}}">Add Page</a></li>
            </ul>
          </li> -->
          
          <li>
            <a href="{{route('category.index')}}"><i class="fa fa-object-group"></i> Category </a>
          </li>

          <li>
            <a href="{{route('menu-index')}}"><i class="fa fa-bars"></i> Menus </a>
          </li>

          <li>
            <a href="{{route('gallery.index')}}"><i class="fa fa-picture-o"></i> Media </a>
          </li>

          <li><a><i class="fa fa-user"></i>Subscriptions & Inquiry<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">            
              <li><a href="{{route('subscription.index')}}"> Subscriptions </a></li>
              <li><a href="{{route('inquiry.index')}}"> Inquiry </a></li>
            </ul>
          </li>

          <li>
            <a href="{{route('chat')}}"><i class="fa fa-comments-o"></i> Chat </a>
          </li>

          <li><a><i class="fa fa-universal-access"></i>User Management<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('users.index')}}">Users</a></li>
              <li><a href="{{route('roles.index')}}">Roles</a></li>
              <li><a href="{{route('permissions.index')}}">Permission</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-users"></i>Client Management<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('service.index')}}">Services</a></li> 
              <li><a href="{{route('client.index')}}">Clients</a></li>
              <li><a href="{{route('quotation.index')}}">Quotations</a></li>        
              <li><a href="{{route('invoice.index')}}">Invoice</a></li>
                                         
            </ul>
          </li>
         
        
          <li>
            <a href="{{route('google.analytics')}}"><i class="fa fa-line-chart"></i> Analytics </a>
          </li>

          <li>
            <a href="{{route('app.logs')}}"><i class="fa fa-exclamation-triangle"></i> Logs </a>
          </li>

       
        </ul>


      </div>
    

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a href="{{route('settings.index')}}" data-toggle="tooltip" data-placement="top" title="Settings">
        <i class="fa fa-cog" aria-hidden="true"></i>
      </a>
      <a href="{{route('apphome')}}" data-toggle="tooltip" data-placement="top" title="Homepage">
        <i class="fa fa-home" aria-hidden="true"></i>
      </a>
      <a href="{{route('profile.index')}}" data-toggle="tooltip" data-placement="top" title="Profile">
        <i class="fa fa-user" aria-hidden="true"></i>
      </a>
      <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off" aria-hidden="true"></i>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </a>
    </div>
    <!-- /menu footer buttons -->
    
    
  </div>
</div>