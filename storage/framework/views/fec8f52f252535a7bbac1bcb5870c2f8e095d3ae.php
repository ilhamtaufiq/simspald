<?php $__env->startSection('title', 'Premium Admin Template'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
    <!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Default<span>Dashboard </span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
   <li class="breadcrumb-item">Dashboard</li>
	<li class="breadcrumb-item active">Default</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Container-fluid starts-->
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 xl-100">
         <div class="row">
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-primary o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Total Sale<span class="pull-right">70 / 100   </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-secondary o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart-2"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Total Visits<span class="pull-right">70 / 100   </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-warning o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart-3"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Total Stock<span class="pull-right">70 / 100   </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-info o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart-4"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Total Value<span class="pull-right">70 / 100   </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card year-overview">
            <div class="card-header no-border d-flex">
               <h5>Year Overview</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="header-right pull-right text-right">
                  <h5 class="mb-2">70 / 100</h5>
                  <h6 class="f-w-700 mb-0 default-text">Total 71,52,225 $</h6>
               </div>
            </div>
            <div class="card-body row">
               <div class="col-6 p-0 ct-10 default-chartist-container"></div>
               <div class="col-6 p-0 ct-11 default-chartist-container"></div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Sales By Countries</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                     <li><i class="view-html fa fa-code font-primary"></i></li>
                     <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                     <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                     <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                     <li><i class="icofont icofont-error close-card font-primary"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="radial-default">
                  <div id="circlechart"></div>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
&lt;div class="radial-default"&gt;
&lt;div id="circlechart"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 box-col-12">
         <div class="card gradient-secondary o-hidden monthly-overview">
            <div class="card-header no-border bg-transparent">
               <h5>Monthly Overview</h5>
               <h6 class="mb-0">January</h6>
               <span class="pull-right right-badge"><span class="badge badge-pill">70 / 100</span></span>
            </div>
            <div class="card-body p-0">
               <div class="text-bg"><span>0.7</span></div>
               <div class="area-range-apex">
                  <div id="area-range"></div>
               </div>
               <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 box-col-6">
         <div class="card">
            <div class="card-header no-border">
               <h5>Best Sellers Product</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-gear fa fa-spin font-warning"></i></li>
                     <li><i class="view-html fa fa-code font-warning"></i></li>
                     <li><i class="icofont icofont-maximize full-card font-warning"></i></li>
                     <li><i class="icofont icofont-minus minimize-card font-warning"></i></li>
                     <li><i class="icofont icofont-refresh reload-card font-warning"></i></li>
                     <li><i class="icofont icofont-error close-card font-warning"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body pb-0 pt-0">
               <div class="music-layer">
                  <button class="btn btn-pill">View More</button>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="music-layer"&gt;
&lt;button class="btn btn-pill"&gt;
View More&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-6">
         <div class="card gradient-primary o-hidden monthly-overview yearly">
            <div class="card-header no-border bg-transparent">
               <h5>Yearly Overview</h5>
               <h6 class="mb-0">Monday</h6>
               <span class="pull-right right-badge"><span class="badge badge-pill">50 / 100</span></span>
            </div>
            <div class="card-body p-0">
               <div class="text-bg"><span>0.5</span></div>
               <div class="area-range-apex">
                  <div id="area-range-1"></div>
               </div>
               <span class="overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"> </span></span></span>
            </div>
         </div>
      </div>
      <div class="col-xl-6 xl-100 box-col-12">
         <div class="card weather-bg">
            <div class="card-header no-border bg-transparent">
               <h5>Weather Overview</h5>
            </div>
            <div class="card-body weather-bottom-bg p-0">
               <div class="cloud"><img src="<?php echo e(asset('assets/images/cloud.png')); ?>" alt=""></div>
               <div class="cloud-rain"></div>
               <div class="media weather-details">
                  <span class="weather-title"><i class="fa fa-circle-o d-block text-right"></i><span>16</span></span>
                  <div class="media-body">
                     <h5>London</h5>
                     <span class="d-block">01, Dec 2021</span>
                     <h6 class="mb-0">Wind : 50km/h  </h6>
                  </div>
               </div>
               <img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/weather-image.png')); ?>" alt="">
            </div>
         </div>
      </div>
      <div class="col-xl-6 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Today's Activity</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                     <li><i class="view-html fa fa-code font-primary"></i></li>
                     <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                     <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                     <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                     <li><i class="icofont icofont-error close-card font-primary"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body pt-0">
               <div class="activity-table table-responsive">
                  <table class="table table-bordernone">
                     <tbody>
                        <tr>
                           <td>
                              <div class="activity-image"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/clipboard.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <div class="activity-details">
                                 <h4 class="default-text">15 <span class="f-14">November</span></h4>
                                 <h6>New Task Added</h6>
                              </div>
                           </td>
                           <td>
                              <div class="activity-time"><span class="font-primary f-w-700">1 Day Ago</span><span class="d-block light-text">Your Work Deadline 18<sup>th</sup></span></div>
                           </td>
                           <td>
                              <button class="btn btn-shadow-primary">View</button>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="activity-image activity-secondary"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/greeting.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <div class="activity-details">
                                 <h4 class="default-text">01 <span class="f-14">January</span></h4>
                                 <h6>New Task Added</h6>
                              </div>
                           </td>
                           <td>
                              <div class="activity-time"><span class="font-secondary f-w-700">10 Minute Ago</span><span class="d-block light-text">Update Your Work Today</span></div>
                           </td>
                           <td>
                              <button class="btn btn-shadow-secondary">View</button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&nbsp;&lt;div class="card-body pt-0"&gt;| &lt;div class="activity-table table-responsive"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="activity-image"&gt;&lt;img class="img-fluid" src="&#123;&#123;asset('assets/images/dashboard/clipboard.png')&#125;&#125;" alt=""&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-details"&gt;
&lt;h4 class="default-text"&gt;15 &lt;span class="f-14"&gt;November&lt;/span&gt;&lt;/h4&gt;
&lt;h6&gt;New Task Added&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-time"&gt;&lt;span class="font-primary f-w-700"&gt;1 Day Ago&lt;/span&gt;&lt;span class="d-block light-text"&gt;Your Work Deadline 18&lt;sup&gt;th&lt;/sup&gt;&lt;/span&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;button class="btn btn-shadow-primary"&gt;View&lt;/button&gt;| &lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="activity-image activity-secondary"&gt;&lt;img class="img-fluid" src="&#123;&#123;asset('assets/images/dashboard/greeting.png')&#125;&#125;" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-details"&gt;
&lt;h4 class="default-text"&gt;01 &lt;span class="f-14"&gt;January&lt;/span&gt;&lt;/h4&gt;
&lt;h6&gt;New Task Added&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-time"&gt;&lt;span class="font-secondary f-w-700"&gt;10 Minute Ago&lt;/span&gt;&lt;span class="d-block light-text"&gt;Update Your Work Today&lt;/span&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;button class="btn btn-shadow-secondary"&gt;View &lt;/button&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;    </code></pre>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Recent Buyers</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                     <li><i class="view-html fa fa-code font-primary"></i></li>
                     <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                     <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                     <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                     <li><i class="icofont icofont-error close-card font-primary"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body pt-0">
               <div class="activity-table table-responsive recent-table">
                  <table class="table table-bordernone">
                     <tbody>
                        <tr>
                           <td>
                              <div class="recent-images"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/recent-user-1.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="default-text mb-0 f-w-700 f-18">Nick Stone</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">New York</span></td>
                           <td class="f-w-700">458-4594-5451</td>
                           <td>
                              <h6 class="mb-0">15 Jan</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-primary"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/recent-user-2.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-primary mb-0 f-w-700 f-18">Milano Esco</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">Brazil</span></td>
                           <td class="f-w-700">812-4896-9812</td>
                           <td>
                              <h6 class="mb-0">06 Feb</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-secondary"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/recent-user-3.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-secondary mb-0 f-w-700 f-18">Charlie Pol</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">London</span></td>
                           <td class="f-w-700">215-0324-6541</td>
                           <td>
                              <h6 class="mb-0">22 Feb</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-warning"><img class="img-fluid" src="<?php echo e(asset('assets/images/dashboard/recent-user-4.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-warning mb-0 f-w-700 f-18">Jordi Esol</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">U.S.A</span></td>
                           <td class="f-w-700">748-0012-3487</td>
                           <td>
                              <h6 class="mb-0">18 Mar</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head21" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head21">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0"&gt;
&lt;div class="activity-table table-responsive recent-table"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images"&gt;&lt;img class="img-fluid" src="&#123;&#123;asset('assets/images/dashboard/recent-user-1.png')&#125;&#125;" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="default-text mb-0 f-w-700 f-18"&gt;Nick Stone&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;New York&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;458-4594-5451&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;15 Jan&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images-primary"&gt;&lt;img class="img-fluid" src="&#123;&#123;asset('assets/images/dashboard/recent-user-2.png')&#125;&#125;" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="font-primary mb-0 f-w-700 f-18"&gt;Milano Esco&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;Brazil&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;812-4896-9812&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;06 Feb&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images-secondary"&gt;&lt;img class="img-fluid" src="&#123;&#123;asset('assets/images/dashboard/recent-user-3.png')&#125;&#125;" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="font-secondary mb-0 f-w-700 f-18"&gt;Charlie Pol&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;London&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;215-0324-6541&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;22 Feb&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images-warning"&gt;&lt;img class="img-fluid" src="&#123;&#123;asset('assets/images/dashboard/recent-user-4.png')&#125;&#125;" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="font-warning mb-0 f-w-700 f-18"&gt;Jordi Esol&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;U.S.A&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;748-0012-3487&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;18 Mar&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt; &lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card gradient-primary o-hidden">
            <div class="card-body">
               <div class="setting-dot">
                  <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
               </div>
               <div class="default-datepicker">
                  <div class="datepicker-here" data-language="en"></div>
               </div>
               <span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">   </span></span></span>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/chartist/chartist.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dashboard/default.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/index.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.light.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ekta/Documents/GitHub/poco_starter_kit/resources/views/dashboard/index.blade.php ENDPATH**/ ?>