@extends('layouts.sidebar_fixed.master')
@section('title', 'Ringkasan Capaian')

@section('css')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/date-picker.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/owlcarousel.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/prism.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/whether-icon.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/ionic-icon.css">
<!-- Plugins css Ends-->
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h2>Ringkasan<span>Capaian </span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item active">Dashboard</li>
  <li class="breadcrumb-item">Ringkasan Capaian</li>
@endsection

@section('content')
  <!-- Container-fluid starts-->
  <div class="container-fluid general-widget">
    <div class="row">
      <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
        <div class="card gradient-primary o-hidden">
          <div class="b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="credit-card"></i></div>
              <div class="media-body"><span class="m-0 text-white">Pagu</span>
               <h4 class="mb-0">
                  {{$pagu}}
               </h4><i class="icon-bg" data-feather="credit-card"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
        <div class="card gradient-secondary o-hidden">
          <div class="b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="database"></i></div>
              <div class="media-body"><span class="m-0">Total SPALD</span>
                <h4 class="mb-0">{{$spald}}</h4><i class="icon-bg" data-feather="database"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
        <div class="card gradient-warning o-hidden">
          <div class="b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center">
                <div class="text-white i" data-feather="home"></div>
              </div>
              <div class="media-body"><span class="m-0 text-white">Output (Rumah)</span>
                <h4 class="mb-0 text-white">{{number_format($jiwa/5)}}</h4><i class="icon-bg" data-feather="home"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
        <div class="card gradient-info o-hidden">
          <div class="b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center">
                <div class="text-white i" data-feather="user-plus"></div>
              </div>
              <div class="media-body"><span class="m-0 text-white">Outcome (Jiwa)</span>
                <h4 class="mb-0 text-white">{{number_format($jiwa)}}</h4><i class="icon-bg" data-feather="user-plus"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-12 box-col-12">
        <div class="card">
           <div class="card-header">
              <h5>Pagu Tahun Anggaran</h5>
           </div>
           <div class="card-body chart-block">
              <canvas id="barChart"></canvas>
           </div>
        </div>
     </div>
     <div class="col-xl-6 col-md-12 box-col-12">
        <div class="card">
          <div class="card-header">
              <h5>SPALD</h5>
          </div>
          <div class="card-body chart-block chart-vertical-center">
              <canvas id="myDoughnutGraph"></canvas>
          </div>
        </div>
      </div>
      <div class="col-xl-12 xl-100 box-col-12">
        <div class="card">
          <div class="card-header">
              <h5>Capaian Realisasi Outcome</h5>
          </div>
          <div class="card-body chart-block chart-vertical-center">
            <div id="area-spaline"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-12 xl-100 box-col-12">
        {{-- <div class="card o-hidden">
          <div class="card-header">
            <h5>PRODUCTS CART</h5>
            <div class="card-header-right">
            </div>
          </div>
          <div class="card-body p-0">
            <div class="user-status cart-table table-responsive">
              <table class="table table-bordernone">
                <thead>
                  <tr>
                    <th scope="col">Details</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="f-w-600">Simply dummy text of the printing</td>
                    <td class="digits">1</td>
                    <td class="font-primary">Pending</td>
                    <td>
                      <div class="span badge badge-pill pill-badge-secondary">6523</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="f-w-600">Long established</td>
                    <td class="digits">5</td>
                    <td class="font-secondary">Cancle</td>
                    <td>
                      <div class="span badge badge-pill pill-badge-success">6523</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="f-w-600">sometimes by accident</td>
                    <td class="digits">10</td>
                    <td class="font-secondary">Cancle</td>
                    <td>
                      <div class="span badge badge-pill pill-badge-warning">6523</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="f-w-600">Classical Latin literature</td>
                    <td class="digits">9</td>
                    <td class="font-primary">Return</td>
                    <td>
                      <div class="span badge badge-pill pill-badge-primary">6523</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="f-w-600">keep the site on the Internet</td>
                    <td class="digits">8</td>
                    <td class="font-primary">Pending</td>
                    <td>
                      <div class="span badge badge-pill pill-badge-danger">6523</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="f-w-600">Molestiae consequatur</td>
                    <td class="digits">3</td>
                    <td class="font-secondary">Cancle</td>
                    <td>
                      <div class="span badge badge-pill pill-badge-info">6523</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
@endsection

@section('script')
<script src="{{asset('assets')}}/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{asset('assets')}}/js/chart/chartjs/chart.min.js"></script>
<script>
  var options1 = {
    chart: {
        height: 350,
        type: 'area',
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    series: [{
        name: 'Target (Jiwa)',
        data: [{{$j2020}},{{$j2021}},0],
    }, {
        name: 'Realisasi (Jiwa)',
        data: [{{$realisasi2020}},{{$realisasi2021}},0],
    }],
    xaxis: {
        type: 'text',
        categories: ["2020","2021","2022"],
    },
    colors:['#7e37d8', '#fd517d']
}

var chart1 = new ApexCharts(
    document.querySelector("#area-spaline"),
    options1
);

chart1.render();
</script>
<script>
  var myLineChart = {
    labels: [
      "2020","2021","2022","2023","2024"
    ],
    datasets: [{
        label: "A",
        data: [{{$j2020}},{{$j2021}},0,0,0],
        fillColor: "rgba(21, 141, 247, 0.2)",
        strokeColor: "#158df7",
        pointColor: "#158df7",
    },{
        label: "B",
        fillColor: "rgba(126,  55, 216, 0.2)",
        strokeColor: "#7e37d8",
        pointColor: "#7e37d8",
        data: [{{$j2020}},{{$j2021}},0,0,0],
    },]
}
var ctx = document.getElementById("lineChart").getContext("2d");
var LineChartDemo = new Chart(ctx).Line(myLineChart, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee",
    scaleShowLabels: true,
    scaleLabel: "<%=value%>",
});
</script>
<script>
var doughnutData = [
    {
        value: {{$total_ipal}},
        color: "#7e37d8",
        highlight: "#7e37d8",
        label: "IPAL Skala Permukiman"
    },
    {
        value: {{$total_ts}},
        color: "#fe80b2",
        highlight: "#fe80b2",
        label: "Tangki Septik Individu"
    },
    {
        value: {{$total_ts_komunal}},
        color: "#00c292",
        highlight: "#00c292",
        label: "Tangki Septik Komunal"
    },
    {
        value: {{$total_ipal_mck}},
        color: "#03a9f3",
        highlight: "#03a9f3",
        label: "Tangki IPAL Kombinasi MCK"
    }
];
var doughnutOptions = {
    segmentShowStroke: true,
    segmentStrokeColor: "#fff",
    segmentStrokeWidth: 2,
    percentageInnerCutout: 50,
    animationSteps: 100,
    animationEasing: "easeOutBounce",
    animateRotate: true,
    animateScale: false,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
};
var doughnutCtx = document.getElementById("myDoughnutGraph").getContext("2d");
var myDoughnutChart = new Chart(doughnutCtx).Doughnut(doughnutData, doughnutOptions);
</script>
<script>
  var barData = {
    labels: ["2020", "2021"],
    datasets: [{
        label: "2020",
        fillColor: "rgba(126,  55, 216, 0.6)",
        strokeColor: "#7e37d8",
        highlightFill: "rgba(6, 181, 221, 1)",
        highlightStroke: "#06b5dd",
        data: [{{$p2020}}, {{$p2021}}]
    }]
};
var barOptions = {
    scaleBeginAtZero: true,
    scaleShowGridLines: true,
    scaleGridLineColor: "rgba(0,0,0,0.1)",
    scaleGridLineWidth: 1,
    scaleShowHorizontalLines: true,
    scaleShowVerticalLines: true,
    barShowStroke: true,
    barStrokeWidth: 2,
    barValueSpacing: 5,
    barDatasetSpacing: 1,
};
var barCtx = document.getElementById("barChart").getContext("2d");
var myBarChart = new Chart(barCtx).Bar(barData, barOptions);
</script>
<script src="{{route('/')}}/assets/js/owlcarousel/owl.carousel.js"></script>
<script src="{{route('/')}}/assets/js/prism/prism.min.js"></script>
<script src="{{route('/')}}/assets/js/clipboard/clipboard.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/jquery.counterup.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/counter-custom.js"></script>
<script src="{{route('/')}}/assets/js/custom-card/custom-card.js"></script>
<script src="{{route('/')}}/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{route('/')}}/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="{{route('/')}}/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="{{route('/')}}/assets/js/general-widget.js"></script>
<script src="{{route('/')}}/assets/js/height-equal.js"></script>
<!-- Plugins JS Ends-->

@endsection

