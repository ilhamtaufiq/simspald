<div class="page-main-header">
   <div class="main-header-right">
      <div class="main-header-left text-center">
         <div class="logo-wrapper"><a href="<?php echo e(route('/')); ?>"><img src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""></a></div>
      </div>
      <div class="mobile-sidebar d-none">
         <div class="media-body text-right switch-sm">
            <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
         </div>
      </div>
      <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar">               </i></div>
      <div class="nav-right col pull-right right-menu">
         <ul class="nav-menus">
            <li>
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
            </li>
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            
            <li class="onhover-dropdown">
               <span class="media user-header"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/user.png')); ?>" alt=""></span>
               <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                     <h5 class="f-w-600 mb-0">Elana Saint</h5>
                     <span>Web Designer</span>
                  </li>
                  <li><i data-feather="user"> </i>Profile</li>
                  <li><i data-feather="message-square"> </i>Inbox</li>
                  <li><i data-feather="file-text"> </i>Taskboard</li>
                  <li><i data-feather="settings"> </i>Settings            </li>
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
</div><?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/layouts/vertical/header.blade.php ENDPATH**/ ?>