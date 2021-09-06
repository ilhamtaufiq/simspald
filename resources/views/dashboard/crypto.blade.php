@extends('layouts.light.master')
@section('title', 'Crypto Widget')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
    <!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tour.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionic-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h2>Crypto<span>Dashboard </span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Crypto</li>
@endsection


@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-3 box-col-6">
         <div class="card o-hidden card-bg">
            <div class="card-header no-border">
               <h5 class="font-secondary">Bitcoin BTC</h5>
               <div class="setting-dot">
                  <div class="setting-bg-secondary position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
               </div>
            </div>
            <div>
               <div id="bitcoinchart-1"></div>
            </div>
            <div class="media">
               <div class="media-left">
                  <div class="btn-rounded-transparent">                           <i class="ion ion-social-bitcoin"> </i></div>
               </div>
               <div class="media-body">
                  <h5>$ 54,210</h5>
               </div>
               <div class="media-right">
                  <div class="badge badge-pill badge-transparent"><i class="ion ion-arrow-up-c"></i>7.8%</div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 box-col-6">
         <div class="card o-hidden card-bg">
            <div class="card-header no-border">
               <h5 class="font-primary">YEN</h5>
               <div class="setting-dot">
                  <div class="setting-bg-primary position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
               </div>
            </div>
            <div id="bitcoinchart-2">  </div>
            <div class="media">
               <div class="media-left">
                  <div class="btn-rounded-transparent">                           <i class="ion ion-social-yen"> </i></div>
               </div>
               <div class="media-body">
                  <h5>$ 84,956</h5>
               </div>
               <div class="media-right">
                  <div class="badge badge-pill badge-transparent"><i class="ion ion-arrow-up-c"></i>5.6%</div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 box-col-6">
         <div class="card o-hidden card-bg">
            <div class="card-header no-border">
               <h5 class="font-warning">Lite LTC</h5>
               <div class="setting-dot">
                  <div class="setting-bg-warning position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
               </div>
            </div>
            <div id="bitcoinchart-3">  </div>
            <div class="media">
               <div class="media-left">
                  <div class="btn-rounded-transparent">                           <i class="ion ion-social-yen"> </i></div>
               </div>
               <div class="media-body">
                  <h5>$ 79,652</h5>
               </div>
               <div class="media-right">
                  <div class="badge badge-pill badge-transparent"><i class="ion ion-arrow-up-c"></i>2.8%</div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 box-col-6">
         <div class="card o-hidden card-g-primary">
            <div class="card-header no-border p-b-20">
               <h5 class="font-warning">Buy & Sell Coin</h5>
            </div>
            <div class="card-body pt-0">
               <div class="media">
                  <div class="media-left mr-3">
                     <div class="btn-rounded-transparent">                           <i data-feather="database"></i></div>
                  </div>
                  <div class="media-right">
                     <p> Coin lorem ipsum dolor sit elit. Perferendis veniam exercitationem ducimus magni distinctio sit explicabo.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-9">
         <div class="owl-carousel owl-theme crypto-slider">
            <div class="item">
               <div class="card o-hidden">
                  <div class="card-body crypto-graph-card coin-card">
                     <div class="media">
                        <div class="media-body d-flex align-items-center">
                           <div class="rounded-icon bg-success"><i class="ion ion-social-euro"></i></div>
                           <div class="bitcoin-graph-content">
                              <h5 class="f-w-700 mb-0">Litecoin </h5>
                           </div>
                        </div>
                        <div class="right-setting d-flex align-items-center">
                           <h5 class="font-success f-w-700 mb-0">43.0465</h5>
                           <i class="f-24 ion ion-arrow-up-c p-l-10 font-success mt-1"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card o-hidden">
                  <div class="card-body crypto-graph-card coin-card">
                     <div class="media">
                        <div class="media-body d-flex align-items-center">
                           <div class="rounded-icon bck-gradient-secondary"><i class="ion ion-social-bitcoin"></i></div>
                           <div class="bitcoin-graph-content">
                              <h5 class="f-w-700 mb-0">Bitcoin</h5>
                           </div>
                        </div>
                        <div class="right-setting d-flex align-items-center">
                           <h5 class="font-secondary f-w-700 mb-0">58.0225</h5>
                           <i class="f-24 ion ion-arrow-up-c p-l-10 font-secondary mt-1"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card o-hidden">
                  <div class="card-body crypto-graph-card coin-card">
                     <div class="media">
                        <div class="media-body d-flex align-items-center">
                           <div class="rounded-icon bck-gradient-primary"><i class="fa fa-try"></i></div>
                           <div class="bitcoin-graph-content">
                              <h5 class="f-w-700 mb-0">Ethereum</h5>
                           </div>
                        </div>
                        <div class="right-setting d-flex align-items-center">
                           <h5 class="font-primary f-w-700 mb-0">60.0499</h5>
                           <i class="f-24 ion ion-arrow-up-c p-l-10 font-primary mt-1"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card o-hidden">
                  <div class="card-body crypto-graph-card coin-card">
                     <div class="media">
                        <div class="media-body d-flex align-items-center">
                           <div class="rounded-icon bck-gradient-secondary"><i class="ion ion-social-bitcoin"></i></div>
                           <div class="bitcoin-graph-content">
                              <h5 class="f-w-700 mb-0">Bitcoin</h5>
                           </div>
                        </div>
                        <div class="right-setting d-flex align-items-center">
                           <h5 class="font-secondary f-w-700 mb-0">58.0225</h5>
                           <i class="f-24 ion ion-arrow-up-c p-l-10 font-secondary mt-1"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3 Add-card">
         <div class="add-arrow">
            <div class="more-btn text-center">
               <button class="btn btn-secondary btn-block f-w-700">Add more </button>
               <button class="btn btn-light"><i class="ion ion-plus font-secondary f-22"></i></button>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Datatable Table Markets</h5>
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
               <div class="sales-product-table crypto-table-market table-responsive">
                  <table class="table table-bordernone">
                     <tbody>
                        <tr>
                           <td class="font-primary f-w-700">Bitcoin</td>
                           <td><span class="f-w-700">$ 50</span></td>
                           <td><span class="f-w-700">4 Jan</span></td>
                           <td><span class="badge badge-pill f-14 font-primary">+ 2.6%</span></td>
                        </tr>
                        <tr>
                           <td class="font-primary f-w-700">Ethereum</td>
                           <td><span class="f-w-700">$ 56</span></td>
                           <td><span class="f-w-700">18 Feb</span></td>
                           <td><span class="badge badge-pill f-14 font-primary">- 3.7%</span></td>
                        </tr>
                        <tr>
                           <td class="font-secondary f-w-700">Ripple</td>
                           <td><span class="f-w-700">$ 80</span></td>
                           <td><span class="f-w-700">26 March</span></td>
                           <td><span class="badge badge-pill f-14 font-secondary">+ 8.3%</span></td>
                        </tr>
                        <tr>
                           <td class="font-success f-w-700">EOS</td>
                           <td><span class="f-w-700">$ 47</span></td>
                           <td><span class="f-w-700">2 May</span></td>
                           <td><span class="badge badge-pill f-14 font-success">- 2.6%</span></td>
                        </tr>
                        <tr>
                           <td class="font-primary f-w-700">Litecoin</td>
                           <td><span class="f-w-700">$ 47</span></td>
                           <td><span class="f-w-700">10 Jun</span></td>
                           <td><span class="badge badge-pill f-14 font-primary">+ 5.6%</span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
&lt;div class="sales-product-table crypto-table-market table-responsive"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td class="font-primary f-w-700"&gt;Bitcoin&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;$ 50&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;4 Jan&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill f-14 font-primary"&gt;+ 2.6%&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="font-primary f-w-700"&gt;Ethereum&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;$ 56&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;18 Feb&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill f-14 font-primary"&gt;- 3.7%&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="font-secondary f-w-700"&gt;Ripple&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;$ 80&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;26 March&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill f-14 font-secondary"&gt;+ 8.3%&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="font-success f-w-700"&gt;EOS&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;$ 47&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;2 May&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill f-14 font-success"&gt;- 2.6%&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td class="font-primary f-w-700"&gt;Litecoin&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;$ 47&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="f-w-700"&gt;10 Jun&lt;/span&gt;&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill f-14 font-primary"&gt;+ 5.6%&lt;/span&gt;&lt;/td&gt;
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
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card year-overview">
            <div class="card-header p-b-0 no-border d-flex">
               <h5>Bitcoin(USD)</h5>
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
            <div class="card-body">
               <div id="candlestick-chart"></div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 box-col-12 xl-100">
         <div class="card gradient-primary o-hidden btc-overview">
            <div class="card-header p-b-0 no-border bg-transparent">
               <div class="crypto-graph-card">
                  <div class="media">
                     <div class="d-flex align-items-center">
                        <div class="btn-rounded-transparent mr-2"><i class="ion ion-social-bitcoin"></i></div>
                        <h5>BTC Monthly Earning</h5>
                     </div>
                     <div class="media-body">
                        <div class="header-right text-right">
                           <h5 class="mb-2">70 / 100</h5>
                           <h6 class="f-w-700 mb-0">Total 71,52,225 $</h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body tag-card p-0">
               <div class="btc-earning"></div>
               <div class="text-bg"><span>0.7</span></div>
               <span class="tag-hover-effect overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
            </div>
         </div>
      </div>
      <div class="col-xl-4 box-col-12 xl-100">
         <div class="card btc-table">
            <div class="card-header no-border text-center">
               <div class="btc-sell text-center">
                  <button class="btn btn-pill btn-secondary font-white f-w-700">Buy</button>
                  <button class="btn btn-pill font-secondary f-w-700">Sell </button>
               </div>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
            </div>
            <div class="card-body pt-0">
               <ul class="btc-buy-sell">
                  <li>
                     <div class="row">
                        <div class="col-sm-5 btc-table-xs">
                           <div class="btc-amount default-text f-w-700 text-center">Amount</div>
                        </div>
                        <div class="col-sm-7 p-l-0 btc-table-xs-l">
                           <div class="btc-amount f-w-700 default-text">0.458954<span class="f-right f-w-700">BTC</span></div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="row">
                        <div class="col-sm-5 btc-table-xs">
                           <div class="btc-amount font-primary f-w-700 text-center">price Per Unit</div>
                        </div>
                        <div class="col-sm-7 p-l-0 btc-table-xs-l">
                           <div class="btc-amount f-w-700 font-primary">6.24451<span class="f-right f-w-700">USD</span></div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="row">
                        <div class="col-sm-5 btc-table-xs">
                           <div class="btc-amount font-warning f-w-700 text-center">Total cost</div>
                        </div>
                        <div class="col-sm-7 p-l-0 btc-table-xs-l">
                           <div class="btc-amount f-w-700 font-warning">6.24451<span class="f-right f-w-700">USD</span></div>
                        </div>
                     </div>
                  </li>
               </ul>
               <div class="btc-buy text-center">
                  <button class="btn btn-pill font-secondary"> <i class="icon-briefcase f-w-700">                      </i></button>
                  <button class="btn btn-pill btn-secondary f-w-700">Buy</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/crypto-custom.js')}}"></script>
<script src="{{asset('assets/js/tour/intro.js')}}"></script>
<script src="{{asset('assets/js/tour/intro-init.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
@endsection

