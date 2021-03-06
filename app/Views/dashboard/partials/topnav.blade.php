
<header class="navbar navbar-header navbar-header-fixed top-navbar">
  <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
  <a href="#" id="Sidebar" class="burger-menu d-md-none"><i data-feather="arrow-left"></i></a>

  <div class="navbar-brand">
      <a href="{{route('app.home')}}" class="df-logo">
          <img src="{{asset('public/images/brand_assets/DZ-Logo Orange-white.png')}}" class="hidden-xs" style="height: 30px;">
      </a>
  </div><!-- navbar-brand -->

  <div id="navbarMenu" class="navbar-menu-wrapper">

      <div class="navbar-menu-header">
        <a href="{{route('app.home')}}" class="df-logo">digi<span>zigs</span></a>
        <a id="mainMenuClose" href="#"><i data-feather="x"></i></a>
      </div><!-- navbar-menu-header -->

      <ul class="nav navbar-menu">
        <!--li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li-->

        <li class="nav-item">
          <a href="{{route('app.home')}}" class="nav-link"><i data-feather="pie-chart"></i> Dashboard</a>
        </li>
        

        <li class="nav-item with-sub ">
            <a href="#" class="nav-link"><i data-feather="layers"></i> Apps</a>
            <div class="navbar-menu-sub">
              <div class="d-lg-flex">
                
                <ul>
                  <li class="nav-label">Applications</li>
                  <li class="nav-sub-item"><a href="{{route('calender.index')}}" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
                  <li class="nav-sub-item"><a href="{{route('app.chat')}}" class="nav-sub-link"><i data-feather="message-square"></i>Chat</a></li>
                  <li class="nav-sub-item"><a href="{{route('app.contact')}}" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li>
                  <li class="nav-sub-item"><a href="{{route('app.file')}}" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li>
                  <li class="nav-sub-item"><a href="{{route('mail.index')}}" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li>

                  <li class="nav-label mg-t-20">Logs</li>
                  <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link"><i data-feather="edit"></i> Change Logs</a></li>
                  <li class="nav-sub-item"><a href="{{route('app.applog')}}" class="nav-sub-link"><i data-feather="zap"></i> Error Logs</a></li>

                </ul>
                <ul>
                  <li class="nav-label">Access Controls</li>
                  <li class="nav-sub-item"><a href="page-profile-view.html" class="nav-sub-link"><i data-feather="users"></i> Users</a></li>
                  <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="shield-off"></i> Roles</a></li>
                  <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="star"></i> Permission </a></li>
                  @can('manage_permission')
                  @endcan

                  <li class="nav-label mg-t-20">Publish</li>
                  <li class="nav-sub-item"><a href="{{route('post.index')}}" class="nav-sub-link"><i data-feather="file-text"></i> Web Blocks</a></li>
                  <li class="nav-sub-item"><a href="{{route('post.index')}}" class="nav-sub-link"><i data-feather="file-text"></i> Posts</a></li>
                  <li class="nav-sub-item"><a href="{{route('post.index')}}" class="nav-sub-link"><i data-feather="file-text"></i> Categories</a></li>

                  
                  

                </ul>

                <ul>
                  <li class="nav-label">Social MAnagement</li>
                  <li class="nav-sub-item"><a href="{{route('facebook.home')}}" class="nav-sub-link"><i data-feather="facebook"></i> Facebook</a></li>
                  <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="globe"></i> Google</a></li>
                  <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="linkedin"></i> Linkedin </a></li>

                </ul>


              </div>
            </div><!-- nav-sub -->
        </li>

        <li class="nav-item with-sub">
            <a href="#" class="nav-link"><i data-feather="layers"></i> Pages</a>
            <div class="navbar-menu-sub">
              <div class="d-lg-flex">
                
                <ul>
                  <li class="nav-label">Authentication</li>
                  <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link"><i data-feather="log-in"></i> Sign In</a></li>
                  <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link"><i data-feather="user-plus"></i> Sign Up</a></li>
                  <li class="nav-sub-item"><a href="page-verify.html" class="nav-sub-link"><i data-feather="user-check"></i> Verify Account</a></li>
                  <li class="nav-sub-item"><a href="page-forgot.html" class="nav-sub-link"><i data-feather="shield-off"></i> Forgot Password</a></li>
                  <li class="nav-label mg-t-20">User Pages</li>
                  <li class="nav-sub-item"><a href="page-profile-view.html" class="nav-sub-link"><i data-feather="user"></i> View Profile</a></li>
                  <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="users"></i> Connections</a></li>
                  <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="users"></i> Groups</a></li>
                  <li class="nav-sub-item"><a href="page-events.html" class="nav-sub-link"><i data-feather="calendar"></i> Events</a></li>
                </ul>
                <ul>
                  <li class="nav-label">Error Pages</li>

                  <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link"><i data-feather="file"></i> 404 Page Not Found</a></li>
                  <li class="nav-sub-item"><a href="page-500.html" class="nav-sub-link"><i data-feather="file"></i> 500 Internal Server</a></li>
                  <li class="nav-sub-item"><a href="page-503.html" class="nav-sub-link"><i data-feather="file"></i> 503 Service Unavailable</a></li>
                  <li class="nav-sub-item"><a href="page-505.html" class="nav-sub-link"><i data-feather="file"></i> 505 Forbidden</a></li>
                  
                  <li class="nav-label mg-t-20">Other Pages</li>
                  
                  <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link"><i data-feather="file-text"></i> Analytics</a></li>
                  <li class="nav-sub-item"><a href="page-help-center.html" class="nav-sub-link"><i data-feather="file-text"></i> Error Logs</a></li>
                  <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link"><i data-feather="file-text"></i> App Logs</a></li>
                </ul>

                <ul>               
                  <li class="nav-label">Access Controls</li>
                  <li class="nav-sub-item"><a href="page-profile-view.html" class="nav-sub-link"><i data-feather="users"></i> Users</a></li>
                  <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="shield-off"></i> Roles</a></li>
                  @can('manage_permission')
                    <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="star"></i> Permission </a></li>
                  @endcan
                  <li class="nav-label mg-t-20">Publish</li>
                  <li><i class="typcn typcn-archive"></i></li>
                </ul>


              </div>
            </div><!-- nav-sub -->
        </li>

      </ul>

  </div><!-- navbar-menu-wrapper -->

  <div class="navbar-right">
      <a id="navbarSearch" href="#" class="search-link"><i data-feather="search"></i></a>

      <div class="dropdown dropdown-message">
        <a href="#" class="dropdown-link new-indicator" data-toggle="dropdown">
          <i data-feather="message-square"></i>
          <span>5</span>
        </a>
          <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header">New Messages</div>
              <a href="#" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img6.jpg')}}" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Socrates Itumay</strong>
                    <p>nam libero tempore cum so...</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="#" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img8.jpg')}}" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Joyce Chua</strong>
                    <p>on the other hand we denounce...</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="#" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img7.jpg')}}" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Althea Cabardo</strong>
                    <p>is there anyone who loves...</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="#" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img9.jpg')}}" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Adrian Monino</strong>
                    <p>duis aute irure dolor in repre...</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <div class="dropdown-footer"><a href="#">View all Messages</a></div>
          </div><!-- dropdown-menu -->
      </div><!-- dropdown -->

      <div class="dropdown dropdown-notification">
        <a href="#" class="dropdown-link new-indicator" data-toggle="dropdown">
          <i data-feather="bell"></i>
          <span>2</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header">Notifications</div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img6.jpg')}}" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                <span>Mar 15 12:32pm</span>
              </div><!-- media-body -->
            </div><!-- media -->
          </a>
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img8.jpg')}}" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <p><strong>Joyce Chua</strong> just created a new blog post</p>
                <span>Mar 13 04:16am</span>
              </div><!-- media-body -->
            </div><!-- media -->
          </a>
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img9.jpg')}}" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                <span>Mar 13 02:56am</span>
              </div><!-- media-body -->
            </div><!-- media -->
          </a>
          <a href="#" class="dropdown-item">
            <div class="media">
              <div class="avatar avatar-sm avatar-online"><img src="{{asset('public/dashboard/assets/img/img7.jpg')}}" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                <span>Mar 12 10:40pm</span>
              </div><!-- media-body -->
            </div><!-- media -->
          </a>
          <div class="dropdown-footer"><a href="#">View all Notifications</a></div>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->

      <div class="dropdown dropdown-profile">
        <a href="#" class="dropdown-link" data-toggle="dropdown" data-display="static">
          <avatar :fullname="'{!! Auth::user()->name !!}'" :image="'{!! Auth::user()->profile->avatar_url !!}'"></avatar>
        </a><!-- dropdown-link -->
        <div class="dropdown-menu dropdown-menu-right tx-13">
          <div class="avatar avatar-lg mg-b-15 text-center" style="margin-top:-20px">
            <avatar :fullname="'{!! Auth::user()->name !!}'" :image="'{!! Auth::user()->profile->avatar_url !!}'" :size="75"></avatar>
          </div>
          
          <h6 class="tx-semibold mg-b-5">{{Auth::user()->name }}</h6>
          <p class="mg-b-25 tx-12 tx-color-03"> Administrator </p>
          <a href="{{route('profile.index')}}" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
          <a href="#" class="dropdown-item"><i data-feather="settings"></i>Privacy Settings</a>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').submit();" ><i data-feather="log-out"></i>Sign Out</a>
          <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>

        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
  </div><!-- navbar-right -->

  <div class="navbar-search">
      <div class="navbar-search-header">
        <input type="search" class="form-control" placeholder="Type and hit enter to search...">
        <button class="btn"><i data-feather="search"></i></button>
        <a id="navbarSearchClose" href="#" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
      </div><!-- navbar-search-header -->
      <div class="navbar-search-body">
        <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
        <ul class="list-unstyled">
          <li><a href="dashboard-one.html">modern dashboard</a></li>
          <li><a href="app-calendar.html">calendar app</a></li>
          <li><a href="">modal examples</a></li>
          <li><a href="">avatar</a></li>
        </ul>

        <hr class="mg-y-30 bd-0">

        <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>

        <ul class="list-unstyled">
          <li><a href="dashboard-one.html">cryptocurrency</a></li>
          <li><a href="app-calendar.html">button groups</a></li>
          <li><a href="">form elements</a></li>
          <li><a href="">contact app</a></li>
        </ul>
      </div><!-- navbar-search-body -->
  </div><!-- navbar-search -->

</header><!-- navbar -->