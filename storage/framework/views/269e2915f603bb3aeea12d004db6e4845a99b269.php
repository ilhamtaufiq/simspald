<div class="page-main-header">
   <div class="main-header-right">
      <div class="main-header-left text-center">
         <div class="logo-wrapper"><a href="<?php echo e(route('/')); ?>"><img src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""></a></div>
      </div>
      <div class="mobile-sidebar">
         <div class="media-body text-right switch-sm">
            <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
         </div>
      </div>
      <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"></i></div>
      <div class="nav-right right-menu" style="padding-left: 700px;padding-bottom: 10px;">
         <ul class="nav-menus">
            
            
            <li class="onhover-dropdown">
               <img class="img-fluid img-shadow-warning" src="<?php echo e(asset('assets/images/dashboard/bookmark.png')); ?>" alt="">
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
               <img class="img-fluid img-shadow-secondary" src="<?php echo e(asset('assets/images/dashboard/like.png')); ?>" alt="">
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
            
            
            <li class="onhover-dropdown">
               <span class="media user-header"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/user.png')); ?>" alt=""></span>
               <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                     <h5 class="f-w-600 mb-0"><?php echo e(Auth::user()->name); ?></h5>
                     <span><?php echo e(Auth::user()->roles->first()->name); ?></span>
                  </li>
                  <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <?php echo e(__('Keluar')); ?>

                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                      <?php echo csrf_field(); ?>
                  </form>
                  </li>
                  
               </ul>
            </li>
         </ul>
         <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
      </div>
      <script id="result-template" type="text/x-handlebars-template">
         <div class="ProfileCard u-cf">                        
         <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
         <div class="ProfileCard-details">
         <div class="ProfileCard-realName"><?php echo e(@name); ?></div>
         </div>
         </div>
      </script>
      <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
   </div>
</div><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/sidebar_fixed/header.blade.php ENDPATH**/ ?>