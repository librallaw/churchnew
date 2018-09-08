
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Dashboard - Ceisheri</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
@include("admin.preloader")
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include("inc.header")


    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include("inc.sidebar")
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            {{--<div class="row page-titles">--}}
                {{--<div class="col-md-5 align-self-center">--}}
                    {{--<h4 class="text-themecolor">Dashboard</h4>--}}
                {{--</div>--}}
                {{--<div class="col-md-7 align-self-center text-right">--}}
                    {{--<div class="d-flex justify-content-end align-items-center">--}}
                        {{--<ol class="breadcrumb">--}}
                            {{--<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>--}}
                            {{--<li class="breadcrumb-item active">Dashboard 1</li>--}}
                        {{--</ol>--}}
                        {{--<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">{{count($members)}}</h3>
                                    <h5 class="text-muted m-b-0">Total Members</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">{{count($groups)}}</h3>
                                    <h5 class="text-muted m-b-0">Total Groups</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">{{count($cells)}}</h3>
                                    <h5 class="text-muted m-b-0">Total Cell</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">{{count($lastservice)}}</h3>
                                    <h5 class="text-muted m-b-0">Last Service Attendance</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Over Visitor, Our income , slaes different and  sales prediction -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Attendance for last three services</h5>
                            <div id="morris-donut-charter" class="ecomm-donute" style="height: 317px;"></div>
                            <ul class="list-inline m-t-30 text-center">
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> {{$lastservice[0]->date}}</h5>
                                    <h4 class="m-b-0">{{count($lastservice)}}</h4>
                                </li>
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i> {{$last2service[0]->date}}</h5>
                                    <h4 class="m-b-0">{{count($last2service)}}</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i> {{$last3service[0]->date}}</h5>
                                    <h4 class="m-b-0">{{count($last3service)}}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <?php if($percentage > 1) {$sata = "success";$height="higher"; }else {$sata = "danger";$height="lower";} ?>
                                <h5 class="card-title"><h5 class="pull-right text-{{$sata}}"><i class="fa fa-sort-asc"></i> {{$height}} than last Service</h5> </h5>
                            </div>
                            <div id="sparkline8" class="minus-mar"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Monthly Attendance</h4>
                            <canvas id="myChart" style="height: 317px !important;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Total Leads -->
            <!-- ============================================================== -->
            <!-- .row -->

            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- End Total Leads -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- New Customers List and New Products List -->
            <!-- ============================================================== -->
            <!-- /row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Newly Added Members </h5>
                            <p class="text-muted">A list of newly added members</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(!empty($users))
                                       <?php  $x = 1;?>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$x}}</td>
                                                <td>{{$user->firstname}}</td>
                                                <td>{{$user->lastname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->kingschat}}</td>

                                            </tr>

                                            <?php  $x ++;?>
                                        @endforeach
                                        @else
                                            <div class="alert alert-danger">No User Found</div>
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Attendance</h5>
                            <p class="text-muted">Attendees and absentees from Last 6 services</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service Date</th>
                                        <th>Attendees</th>
                                        <th>Absentees</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($services))

                                        <?php
                                                $attend = new \App\Http\Controllers\Admin\HomeController();
                                                $absent  = new \App\Http\Controllers\Admin\HomeController();

                                        $x = 1;?>
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{$x}}</td>
                                                <td>{{$service->date}}</td>
                                                <td><a href="{{route("showAttendees",['date'=>$service->date])}}">{{$attend->returnAttendeeCount($service->date)}}</a></td>
                                                <td><a href="{{route("showAbsentees",['date'=>$service->date])}}">{{$attend->returnAbsenteeCount($service->date)}}</a></td>

                                            </tr>

                                            <?php  $x ++;?>
                                        @endforeach
                                    @else
                                        <div class="alert alert-danger">No Data Found</div>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
  @include("inc.footer")
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>

<script src="/assets/node_modules/Chart.js/chartjs.init.js"></script>
<script src="/assets/node_modules/Chart.js/Chart.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="/assets/node_modules/popper/popper.min.js"></script>
<script src="/assets/node_modules/bootstrap//dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="/assets/node_modules/raphael/raphael-min.js"></script>
<script src="/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="/dist/js/dashboard1.js"></script>
<script src="/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- jQuery peity -->
<script src="/assets/node_modules/peity/jquery.peity.min.js"></script>
<script src="/assets/node_modules/peity/jquery.peity.init.js"></script>


<!-- Bootstrap tether Core JavaScript -->
<!-- slimscrollbar scrollbar JavaScript -->
<!--stickey kit -->
<script src="/assets/node_modules/sticky-kit-master//dist/sticky-kit.min.js"></script>

<!--Custom JavaScript -->

<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["February", "March", "April", "May", "June","July","August"],
            datasets: [{
                label: '# of Attendees',
                data: [{{count($february)}}, {{count($march)}}, {{count($april)}}, {{count($may)}}, {{count($june)}},{{count($july)}}, {{count($august)}}],
                backgroundColor: [

                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',

                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',

                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<script>
    Morris.Donut({
        element: 'morris-donut-charter',
        data: [{
            label: "{{$lastservice[0]->date}}",
            value: "{{count($lastservice)}}",

        }, {
            label: "{{$last2service[0]->date}}",
            value: "{{count($last2service)}}",
        }, {
            label: "{{$last3service[0]->date}}",
            value: "{{count($last3service)}}",
        }],
        resize: true,
        colors:['#fb9678', '#01c0c8', '#4F5467']
    });


    Morris.Area({
        element: 'morris-area-chart3',
        data: [{
            period: 'Jan',
            iMac: 0,


        }, {
            period: 'Feb',
            iMac: 130,


        }, {
            period: '03',
            iMac: 30,


        }, {
            period: '04',
            iMac: 30,


        }, {
            period: '05',
            iMac: 200,


        }, {
            period: '06',
            iMac: 105,


        },
            {
                period: '07',
                iMac: 250,


            }],
        xkey: 'period',
        ykeys: ['iMac', 'iPhone'],
        labels: ['iMac', 'iPhone'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors:['#b4becb', '#01c0c8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: true,
        hideHover: 'auto',
        lineColors: ['#01c0c8', '#01c0c8'],
        resize: true

    });
</script>
</body>

</html>