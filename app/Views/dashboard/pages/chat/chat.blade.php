@extends('layouts.dashboard.appchat')

@section('title','Chat')


@section('css')

    <link rel="stylesheet" href="{{asset('public/dashboard/assets/css/dashforge.chat.css')}}">

@endsection


@section('content')

  <div class="chat-wrapper">

    <div class="chat-navleft">
      <nav class="nav flex-column">
        <a href="" class="nav-link" data-toggle="tooltip" title="Contacts" data-placement="right">
          <i data-feather="users"></i>
        </a>
        <a href="" class="nav-link active" data-toggle="tooltip" title="Messages" data-placement="right">
          <i data-feather="message-square"></i>
        </a>
        <a href="" class="nav-link" data-toggle="tooltip" title="Phone Calls" data-placement="right">
          <i data-feather="phone"></i>
        </a>
        <a href="" class="nav-link" data-toggle="tooltip" title="Mentions" data-placement="right">
          <i data-feather="at-sign"></i>
        </a>
        <a href="" class="nav-link" data-toggle="tooltip" title="Help" data-placement="right">
          <i data-feather="help-circle"></i>
        </a>
      </nav>
    </div><!-- chat-navleft -->

    <div class="chat-sidebar">

      <div class="chat-sidebar-header">
        <a href="#" data-toggle="dropdown" class="dropdown-link">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-sm mg-r-8"><span class="avatar-initial rounded-circle">T</span></div>
            <span class="tx-color-01 tx-semibold">TeamName</span>
          </div>
          <span><i data-feather="chevron-down"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="" class="dropdown-item"><i data-feather="user-plus"></i> Invite People</a>
          <a href="" class="dropdown-item"><i data-feather="plus-square"></i> Create Channel</a>
          <a href="" class="dropdown-item"><i data-feather="server"></i> Server Settings</a>
          <a href="" class="dropdown-item"><i data-feather="bell"></i> Notification Settings</a>
          <a href="" class="dropdown-item"><i data-feather="zap"></i> Privacy Settings</a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Team Details</a>
          <a href="" class="dropdown-item"><i data-feather="shield-off"></i> Hide Muted Channels</a>
        </div><!-- dropdown-menu -->
      </div><!-- chat-sidebar-header -->

      <!-- start sidebar body -->

      <div class="chat-sidebar-body">

        <div class="flex-fill pd-y-20 pd-x-10">
          <div class="d-flex align-items-center justify-content-between pd-x-10 mg-b-10">
            <span class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1">All Channels</span>
            <a href="#modalCreateChannel" class="chat-btn-add" data-toggle="modal"><span data-toggle="tooltip" title="Create Channel"><i data-feather="plus-circle"></i></span></a>
          </div>
          <nav id="allChannels" class="nav flex-column nav-chat mg-b-20">
            <a href="#general" class="nav-link active"># general</a>
            <a href="#engineering" class="nav-link"># engineering</a>
            <a href="#products" class="nav-link"># products <span class="badge badge-danger">2</span></a>
          </nav>
        </div>

        <div class="flex-fill pd-y-20 pd-x-10 bd-t">
          <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1 pd-l-10 mg-b-10">Direct Messages</p>
          <div id="chatDirectMsg" class="chat-msg-list">
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-dark rounded-circle">b</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">dfbot</h6>
                <small class="d-block tx-color-04">5 mins ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">situmay</h6>
                <small class="d-block tx-color-04">1 hour ago</small>
              </div><!-- media-body -->
              <span class="badge badge-danger">3</span>
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">acantones</h6>
                <small class="d-block tx-color-04">2 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">rlabares</h6>
                <small class="d-block tx-color-04">2 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">h.owen</h6>
                <small class="d-block tx-color-04">3 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-primary rounded-circle">k</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">k.billie</h6>
                <small class="d-block tx-color-04">3 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">m.audrey</h6>
                <small class="d-block tx-color-04">4 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-indigo rounded-circle">m</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">macasindil</h6>
                <small class="d-block tx-color-04">4 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">e.ocaba</h6>
                <small class="d-block tx-color-04">4 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-info rounded-circle">k</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">avendula</h6>
                <small class="d-block tx-color-04">5 hours ago</small>
              </div><!-- media-body -->
            </a><!-- media -->
          </div><!-- media-list -->
        </div>
      </div><!-- chat-sidebar-body -->

      <div class="chat-sidebar-footer">
        <div class="d-flex align-items-center">
          <div class="avatar avatar-sm avatar-online mg-r-8"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
          <h6 class="tx-semibold mg-b-0">Katherine</h6>
        </div>
        <div class="d-flex align-items-center">
          <a href=""><i data-feather="mic"></i></a>
          <a href=""><i data-feather="settings"></i></a>
        </div>
      </div><!-- chat-sidebar-footer -->

    </div><!-- chat-sidebar -->

    <div class="chat-content">
      <div class="chat-content-header">
        <h6 id="channelTitle" class="mg-b-0">#general</h6>
        <div id="directTitle" class="d-none">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">b</span></div>
            <h6 class="mg-l-10 mg-b-0">@dfbot</h6>
          </div>
        </div>
        <div class="d-flex">
          <nav id="channelNav">
            <a href="#modalInvitePeople" data-toggle="modal"><span data-toggle="tooltip" title="Invite People"><i data-feather="user-plus"></i></span></a>
            <a id="showMemberList" href="" data-toggle="tooltip" title="Member list" class="d-flex align-items-center">
              <i data-feather="users"></i>
              <span class="tx-medium mg-l-5">25</span>
            </a>
          </nav>
          <nav id="directNav" class="d-none">
            <a href="" data-toggle="tooltip" title="Call User"><i data-feather="phone"></i></a>
            <a href="" data-toggle="tooltip" title="User Details"><i data-feather="info"></i></a>
            <a href="" data-toggle="tooltip" title="Add to Favorites"><i data-feather="star"></i></a>
            <a href="" data-toggle="tooltip" title="Flag User"><i data-feather="flag"></i></a>
          </nav>
          <div class="search-form mg-l-15 d-none d-sm-flex">
            <input type="search" class="form-control" placeholder="Search">
            <button class="btn" type="button"><i data-feather="search"></i></button>
          </div>
          <nav class="mg-sm-l-10">
            <a href="" data-toggle="tooltip" title="Channel Settings" data-placement="left"><i data-feather="more-vertical"></i></a>
          </nav>
        </div>
      </div><!-- chat-content-header -->

      <div class="chat-content-body">
        <div class="chat-group">

          <div class="chat-group-divider">February 20, 2019</div>
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
            <div class="media-body">
              <h6>katherine <small>Today at 1:30am</small></h6>

              <p>Hello everyone, this is my first message to this channel</p>
              <p>anybody here?</p>
            </div><!-- media-body -->
          </div><!-- media -->
          <div class="chat-group-divider">February 21, 2019</div>
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
            <div class="media-body">
              <h6>katherine <small>Yesterday at 4:10am</small></h6>

              <p>I'm back once again!!</p>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div><!-- media-body -->
          </div><!-- media -->
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
            <div class="media-body">
              <h6>situmay <small>Yesterday at 4:15am</small></h6>

              <p>Excepteur sint occaecat cupidatat non proident</p>
              <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse...</p>
            </div><!-- media-body -->
          </div><!-- media -->
          <div class="chat-group-divider">February 22, 2019</div>
          <div class="media">
            <div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
            <div class="media-body">
              <h6>rlabares <small>Today at 9:40am</small></h6>

              <p>Nam libero tempore, cum soluta nobis</p>
            </div><!-- media-body -->
          </div><!-- media -->
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
            <div class="media-body">
              <h6>katherine <small>Today at 10:05am</small></h6>

              <p>I'm back once again!!</p>
              <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
            </div><!-- media-body -->
          </div><!-- media -->
        </div>
      </div><!-- chat-content-body -->

      <div class="chat-sidebar-right">
        <div class="pd-y-20 pd-x-10">
          <div class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1 pd-l-10">Members List</div>
          <div class="chat-member-list">
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">b</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">dfbot</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">situmay</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">acantones</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">rlabares</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">h.owen</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-xs avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">k.billie</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">m.audrey</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">m</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">macasindil</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">e.ocaba</h6>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="#" class="media">
              <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
              <div class="media-body mg-l-10">
                <h6 class="mg-b-0">avendula</h6>
              </div><!-- media-body -->
            </a><!-- media -->
          </div><!-- chat-msg-list -->
        </div>
      </div><!-- chat-sidebar-right -->

      <div class="chat-content-footer">
        <a href="" data-toggle="tooltip" title="Add File" class="chat-plus"><i data-feather="plus"></i></a>
        <input type="text" class="form-control align-self-center bd-0" placeholder="Message">
        <nav>
          <a href="" data-toggle="tooltip" title="Add GIF"><i data-feather="image"></i></a>
          <a href="" data-toggle="tooltip" title="Add Gift"><i data-feather="gift"></i></a>
          <a href="" data-toggle="tooltip" title="Add Smiley"><i data-feather="smile"></i></a>
        </nav>
      </div><!-- chat-content-footer -->
    </div><!-- chat-content -->

  </div><!-- chat-wrapper -->
@endsection


@section('javascript')
	 
	<script src="{{asset('public/dashboard/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('public/dashboard/assets/js/dashforge.chat.js')}}"></script>

	<!-- append theme customizer -->
	<!--script src="{{asset('public/dashboard/lib/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('public/dashboard/assets/js/dashforge.settings.js')}}"></script-->

    <script>
      $(function(){
        'use strict'

        if(window.matchMedia('(min-width: 768px)').matches) {
          $('body').addClass('show-sidebar-right');
          $('#showMemberList').addClass('active');
        }
      })
    </script>

@endsection