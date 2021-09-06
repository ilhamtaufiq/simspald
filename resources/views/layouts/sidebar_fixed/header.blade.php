<div class="page-main-header">
   <div class="main-header-right">
      <div class="main-header-left text-center">
         <div class="logo-wrapper"><a href="{{route('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
      </div>
      <div class="mobile-sidebar">
         <div class="media-body text-right switch-sm">
            <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
         </div>
      </div>
      <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"></i></div>
      <div class="nav-right right-menu" style="padding-left: 700px;padding-bottom: 10px;">
         <ul class="nav-menus">
            {{-- <li>
               <form class="form-inline search-form" action="#" method="get">
                  <div class="form-group">
                     <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                           <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="Search Your Product...">
                           <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                           <span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                        </div>
                        <div class="Typeahead-menu"></div>
                     </div>
                  </div>
               </form>
            </li> --}}
            {{-- <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li> --}}
            <li class="onhover-dropdown">
               <img class="img-fluid img-shadow-warning" src="{{asset('assets/images/dashboard/bookmark.png')}}" alt="">
               <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                     <div class="flip-card-inner">
                        <div class="front">
                           <ul class="droplet-dropdown bookmark-dropdown">
                              <li class="gradient-primary text-center">
                                 <h5 class="f-w-700">Manajemen Pengguna</h5>
                                 <span>Users & Roles</span>
                              </li>
                              <li>
                                 <div class="row">
                                    <div class="col-4 text-center"><a href="/users"><i data-feather="users"></i></a></div>
                                    <div class="col-4 text-center"><a href="/roles"><i data-feather="users"></i></a></div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="onhover-dropdown">
               <img class="img-fluid img-shadow-secondary" src="{{asset('assets/images/dashboard/like.png')}}" alt="">
               <ul class="onhover-show-div droplet-dropdown">
                  <li class="gradient-primary text-center">
                     <h5 class="f-w-700">Shortcut</h5>
                  </li>
                  <li>
                     <div class="row">
                        <div class="col-sm-4 col-6 droplet-main"><a href="/spald"><i data-feather="file-text"></i><span class="d-block">SPALD</span></a></div>
                        <div class="col-sm-4 col-6 droplet-main"><a href="/pengelola"><i data-feather="activity"></i><span class="d-block">Pengelola</span><a></div>
                        <div class="col-sm-4 col-6 droplet-main"><a href="/rumah"><i data-feather="users"></i><span class="d-block">Rumah</span></a></div>
                        <div class="col-sm-4 col-6 droplet-main"><a href="/output"><i data-feather="clipboard"></i><span class="d-block">Output</span></a></div>
                        <div class="col-sm-4 col-6 droplet-main"><a href="/outcome"><i data-feather="anchor"></i><span class="d-block">Outcome</span></a></div>
                        <div class="col-sm-4 col-6 droplet-main"><a href="/map"><i data-feather="settings"></i><span class="d-block">Map</span></a></div>
                     </div>
                  </li>
               </ul>
            </li>
            {{-- <li class="onhover-dropdown">
               <img class="img-fluid img-shadow-warning" src="{{asset('assets/images/dashboard/notification.png')}}" alt="">
               <ul class="onhover-show-div notification-dropdown">
                  <li class="gradient-primary">
                     <h5 class="f-w-700">Notifications</h5>
                     <span>You have 6 unread messages</span>
                  </li>
                  <li>
                     <div class="media">
                        <div class="notification-icons bg-success mr-3"><i class="mt-0" data-feather="thumbs-up"></i></div>
                        <div class="media-body">
                           <h6>Someone Likes Your Posts</h6>
                           <p class="mb-0"> 2 Hours Ago</p>
                        </div>
                     </div>
                  </li>
                  <li class="pt-0">
                     <div class="media">
                        <div class="notification-icons bg-info mr-3"><i class="mt-0" data-feather="message-circle"></i></div>
                        <div class="media-body">
                           <h6>3 New Comments</h6>
                           <p class="mb-0"> 1 Hours Ago</p>
                        </div>
                     </div>
                  </li>
                  <li class="bg-light txt-dark"><a href="#">All </a> notification</li>
               </ul>
            </li> --}}
            {{-- <li><a class="right_side_toggle" href="#"><img class="img-fluid img-shadow-success" src="{{asset('assets/images/dashboard/chat.png')}}" alt=""></a></li> --}}
            <li class="onhover-dropdown">
               <span class="media user-header"><img class="img-fluid" src="{{asset('assets/images/dashboard/user.png')}}" alt=""></span>
               <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                     <h5 class="f-w-600 mb-0">{{Auth::user()->name}}</h5>
                     <span>{{ Auth::user()->roles->first()->name }}</span>
                  </li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Keluar') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  </li>
                  {{-- <li><i data-feather="message-square"> </i>Inbox</li>
                  <li><i data-feather="file-text"> </i>Taskboard</li>
                  <li><i data-feather="settings"> </i>Settings            </li> --}}
               </ul>
            </li>
         </ul>
         <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
      </div>
      <script id="result-template" type="text/x-handlebars-template">
         <div class="ProfileCard u-cf">                        
         <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
         <div class="ProfileCard-details">
         <div class="ProfileCard-realName">{{@name}}</div>
         </div>
         </div>
      </script>
      <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
   </div>
</div>