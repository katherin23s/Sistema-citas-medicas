 @extends('indexDashboard')

 <!-- partial -->
 @section('content')

     <!-- partial -->
     <div class="main-panel">
         <div class="content-wrapper">
             <!-- Page Title Header Starts-->
             <div class="row page-title-header">
                 <div class="col-12">
                     <div class="page-header">
                         <h4 class="page-title">Dashboard</h4>
                         <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                             <ul class="quick-links">
                                 <li><a href="#">ICE Market data</a></li>
                                 <li><a href="#">Own analysis</a></li>
                                 <li><a href="#">Historic market data</a></li>
                             </ul>
                             <ul class="quick-links ml-auto">
                                 <li><a href="#">Settings</a></li>
                                 <li><a href="#">Analytics</a></li>
                                 <li><a href="#">Watchlist</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12">
                     <div class="page-header-toolbar">
                         <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                             <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                             <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                             <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                         </div>
                         <div class="filter-wrapper">
                             <div class="dropdown toolbar-item">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting"
                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                                     <a class="dropdown-item" href="#">Last Day</a>
                                     <a class="dropdown-item" href="#">Last Month</a>
                                     <a class="dropdown-item" href="#">Last Year</a>
                                 </div>
                             </div>
                             <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                         </div>
                         <div class="sort-wrapper">
                             <button type="button" class="btn btn-primary toolbar-item">New</button>
                             <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport"
                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownexport">
                                     <a class="dropdown-item" href="#">Export as PDF</a>
                                     <a class="dropdown-item" href="#">Export as DOCX</a>
                                     <a class="dropdown-item" href="#">Export as CDR</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>



             <!-- Page Title Header Ends-->
             <div class="row">
                 <div class="col-md-12 grid-margin">
                     <div class="card">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-lg-3 col-md-6">
                                     <div class="d-flex">
                                         <div class="wrapper">
                                             <h3 class="mb-0 font-weight-semibold">{{ $citasToday }}</h3>
                                             <h5 class="mb-0 font-weight-medium text-primary">Citas del día</h5>
                                             <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                                         </div>
                                         <div class="wrapper my-auto ml-auto ml-lg-4">
                                             <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                     <div class="d-flex">
                                         <div class="wrapper">
                                             <h3 class="mb-0 font-weight-semibold">{{ $citasPendientes }}</h3>
                                             <h5 class="mb-0 font-weight-medium text-primary">Citas Pendientes</h5>
                                             <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                         </div>
                                         <div class="wrapper my-auto ml-auto ml-lg-4">
                                             <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                     <div class="d-flex">
                                         <div class="wrapper">
                                             <h3 class="mb-0 font-weight-semibold">{{ $citasCanceladas }}</h3>
                                             <h5 class="mb-0 font-weight-medium text-primary">Citas Canceladas</h5>
                                             <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                                         </div>
                                         <div class="wrapper my-auto ml-auto ml-lg-4">
                                             <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                     <div class="d-flex">
                                         <div class="wrapper">
                                             <h3 class="mb-0 font-weight-semibold">{{ $citasProceso }}</h3>
                                             <h5 class="mb-0 font-weight-medium text-primary">Citas Proceso</h5>
                                             <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                         </div>
                                         <div class="wrapper my-auto ml-auto ml-lg-4">
                                             <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- GRAFICAS -->
             <div class="col-md-12 grid-margin">
                 <div class="card">
                     <div class="p-4 border-bottom bg-light">
                         <h4 class="card-title mb-0">Mixed Chart</h4>
                     </div>
                     <div class="card-body">
                         <canvas id="mixed-chart" height="100"></canvas>
                         <div class="mr-5" id="mixed-chart-legend"></div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-lg-6 grid-margin stretch-card">
                     <div class="card">
                         <div class="p-4 border-bottom bg-light">
                             <h4 class="card-title mb-0">Bar Chart</h4>
                         </div>
                         <div class="card-body">
                             <div class="d-flex justify-content-between align-items-center pb-4">
                                 <h4 class="card-title mb-0">Sales Revenue</h4>
                                 <div id="bar-traffic-legend"></div>
                             </div>
                             <p class="mb-4">17% increase in sales than last week</p>
                             <canvas id="barChart" style="height:250px"></canvas>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 grid-margin stretch-card">
                     <div class="card">
                         <div class="p-4 pr-5 border-bottom bg-light d-flex justify-content-between">
                             <h4 class="card-title mb-0">Pie chart</h4>
                             <id id="pie-chart-legend" class="mr-4"></id>
                         </div>
                         <div class="card-body d-flex">
                             <canvas class="my-auto" id="pieChart" height="130"></canvas>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- -->

             <div class="row">
                 <div class="col-md-8">
                     <div class="row">



                         <div class="col-md-12 grid-margin">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="d-flex justify-content-between">
                                         <h4 class="card-title mb-0">Invoice</h4>
                                         <a href="#"><small>Show All</small></a>
                                     </div>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod
                                         cupiditate esse fuga</p>
                                     <div class="table-responsive">
                                         <table class="table table-striped table-hover">
                                             <thead>
                                                 <tr>
                                                     <th>Invoice ID</th>
                                                     <th>Customer</th>
                                                     <th>Status</th>
                                                     <th>Due Date</th>
                                                     <th>Amount</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <tr>
                                                     <td>INV-87239</td>
                                                     <td>Viola Ford</td>
                                                     <td>Paid</td>
                                                     <td>20 Jan 2019</td>
                                                     <td>$755</td>
                                                 </tr>
                                                 <tr>
                                                     <td>INV-87239</td>
                                                     <td>Dylan Waters</td>
                                                     <td>Unpaid</td>
                                                     <td>23 Feb 2019</td>
                                                     <td>$800</td>
                                                 </tr>
                                                 <tr>
                                                     <td>INV-87239</td>
                                                     <td>Louis Poole</td>
                                                     <td>Unpaid</td>
                                                     <td>25 Mar 2019</td>
                                                     <td>$463</td>
                                                 </tr>
                                                 <tr>
                                                     <td>INV-87239</td>
                                                     <td>Vera Howell</td>
                                                     <td>Paid</td>
                                                     <td>27 Mar 2019</td>
                                                     <td>$235</td>
                                                 </tr>
                                                 <tr>
                                                     <td>INV-87239</td>
                                                     <td>Allie Goodman</td>
                                                     <td>Unpaid</td>
                                                     <td>1 Apr 2019</td>
                                                     <td>$657</td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>


                     </div>
                 </div>

             </div>

             <div class="card shadow">
                 <div class="card-header bg-transparent">

                     <div class="row">
                         <div class="col">
                             <h6 class="text-uppercase text-muted ls-1 mb-1">Citas</h6>
                         </div>
                         <div class="col-md-4 text-right">
                             <button id="refresh" type="button" class="btn btn-info" onclick="actualizarDatosCitas()">
                                 Actualizar
                             </button>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="chart">
                         <canvas id="citas-chart" class="chart-canvas"></canvas>
                     </div>
                 </div>
             </div>

         @endsection
         @push('js')
             <script>
                 actualizarDatosCitas(0);
                 CitasFinalizadasCanceladas(3, 0);
                 CitasFinalizadasCanceladas(0, 1);
                 //   CitasCanceladas();
                 'use strict';

                 var chartData = {
                     labels: [], //['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                     datasets: [{
                             type: 'bar',
                             label: 'Standard',
                             data: [], //["53", "28", "19", "29", "30", "51", "55"],
                             backgroundColor: ChartColor[0],
                             borderColor: ChartColor[0],
                             borderWidth: 2
                         },
                         {
                             type: 'bar',
                             label: [],
                             data: [],
                             backgroundColor: ChartColor[1],
                             borderColor: ChartColor[1]
                         }
                     ]
                 };

                 var MixedChartCanvas = document.getElementById('mixed-chart').getContext('2d');
                 lineChart = new Chart(MixedChartCanvas, {
                     type: 'bar',
                     data: chartData,
                     options: {
                         responsive: true,
                         /* title: {
                              display: true,
                              text: 'Revenue and number of lincences sold'
                          },*/
                         scales: {
                             xAxes: [{
                                 display: true,
                                 ticks: {
                                     fontColor: '#212229',
                                     stepSize: 50,
                                     min: 0,
                                     max: 150,
                                     autoSkip: true,
                                     autoSkipPadding: 15,
                                     maxRotation: 0,
                                     maxTicksLimit: 10
                                 },
                                 gridLines: {
                                     display: false,
                                     drawBorder: false,
                                     color: 'transparent',
                                     zeroLineColor: '#eeeeee'
                                 }
                             }],
                             yAxes: [{
                                 display: true,
                                 scaleLabel: {
                                     display: true,
                                     labelString: 'Number of Sales',
                                     fontSize: 12,
                                     lineHeight: 2
                                 },
                                 ticks: {
                                     fontColor: '#212229',
                                     display: true,
                                     autoSkip: false,
                                     maxRotation: 0,
                                     //  stepSize: 20,
                                     min: 0,
                                     /* max: 100*/
                                 },
                                 gridLines: {
                                     drawBorder: false
                                 }
                             }]
                         },
                         legend: {
                             display: false
                         },
                     }
                 });



                 var canvasCitas = document.getElementById('citas-chart').getContext('2d');
                 var chartCitas = new Chart(canvasCitas, {
                     // The type of chart we want to create
                     type: 'bar',
                     // The data for our dataset
                     data: {
                         labels: [],
                         datasets: [{
                             label: '',
                             backgroundColor: ["rgb(54, 162, 235)", "rgb(255, 99, 132)",
                                 "rgb(255, 205, 86)"
                             ],
                             data: [],
                         }]
                     },
                     // Configuration options go here
                     options: {
                         responsive: true,
                         scales: {
                             y: {
                                 beginAtZero: true
                             }
                         },
                         title: {
                             display: true,
                             text: "Citas",
                         },
                         legend: {
                             display: false
                         }
                     }
                 });

                 /********************** citas *********************/
                 function actualizarDatosCitas(dataset) {
                     $.ajax({
                         url: "{{ route('graficas.citas') }}",
                         dataType: 'json',
                         type: "get",
                         data: {
                             "_token": "{{ csrf_token() }}",
                         },
                         success: function(response) {

                             console.log(response);

                             let citasPendientes = response[0];

                             if (citasPendientes.length > 0) {
                                 var meses = [];
                                 var totales = [];
                                 for (var i = 0; i < citasPendientes.length; i++) {
                                     meses.push(citasPendientes[i].mes);
                                     totales.push(citasPendientes[i].total_citas);
                                 }
                                 addData(chartCitas, meses, totales, dataset);
                             }
                         }
                     });
                     return false;
                 }

                 function addData(chart, labels, data, dataset) {
                     removeData(chart, dataset);
                     chart.data.labels = chart.data.labels.concat(labels);
                     chart.data.datasets[dataset].data = chart.data.datasets[dataset].data.concat(data);
                     chart.update();
                 }

                 function removeData(chart, dataset) {
                     chart.data.labels = [];
                     chart.data.datasets[dataset].data = [];
                 }


                 /********************** citas finalizadas y canceladas *********************/
                 function CitasFinalizadasCanceladas(arreglo, dataset) {
                     $.ajax({
                         url: "{{ route('graficas.citas') }}",
                         dataType: 'json',
                         type: "get",
                         data: {
                             "_token": "{{ csrf_token() }}",
                         },
                         success: function(response) {

                             console.log(response + "Esto es un arregloo");

                             let citasFinalizadas = response[arreglo];

                             if (citasFinalizadas.length > 0) {
                                 var meses = [];
                                 var totales = [];
                                 for (var i = 0; i < citasFinalizadas.length; i++) {
                                     meses.push(citasFinalizadas[i].mes);
                                     totales.push(citasFinalizadas[i].total_citas);
                                 }
                                 addData(lineChart, meses, totales, dataset);
                             }
                         }
                     });
                     return false;
                 }

             </script>
         @endpush
