
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
    <title>Take attendance - CE Isheri</title>
    <link href="/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
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
        {{--<h4 class="text-themecolor">Datatable</h4>--}}
        {{--</div>--}}
        {{--<div class="col-md-7 align-self-center text-right">--}}
        {{--<div class="d-flex justify-content-end align-items-center">--}}
        {{--<ol class="breadcrumb">--}}
        {{--<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>--}}
        {{--<li class="breadcrumb-item active">Datatable</li>--}}
        {{--</ol>--}}
        {{--<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Take attencance</h4>
                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Group</th>
                                        <th>Cell</th>
                                        <th>Activity Department</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Group</th>
                                        <th>Cell</th>
                                        <th>Activity Department</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if(!empty($records) > 0)
                                        @foreach($records as $record)
                                            <tr>
                                                <td><button class="btn btn-info capture_At" id="{{$record->id}}">Take attendance</button></td>
                                                <td><a href="{{route("showUserProfile",['id'=>$record->id,'name'=>preg_replace('/\s+/', '-', $record->full_name())])}}">{{$record->full_name()}}</a></td>
                                                <td>{{$record->group}}</td>
                                                <td>{{$record->cell}}</td>
                                                <td>{{$record->activity_department }}</td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="alert-danger alert">No User found</div>

                                    @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->

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
<!-- Bootstrap tether Core JavaScript -->
<script src="/assets/node_modules/popper/popper.min.js"></script>
<script src="/assets/node_modules/bootstrap//dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/assets/node_modules/sticky-kit-master//dist/sticky-kit.min.js"></script>
<script src="/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="/dist/js/custom.min.js"></script>
<!-- This is data table -->
<script src="/assets/node_modules/datatables/datatables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>

    $(".capture_At").click(function () {
        var username = $(this).attr("id");

        var formData = {
            'username': username,



        };


        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '{{route("attendee_web")}}', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true,
            beforeSend: function() {
                //show preloader while ajax action is running
                //alert("sending...");
                $("#"+username).html("sending");

            },success: function(data) {
                console.log(data)
                if(data['status'] == true){
                    $("#"+username).html("Attendance taken").css("background","green");

                }else{

                    $("#"+username).html("Attendance already taken").css("background","green");
                    //   alert("Attendance already taken");

                }

            },error: function(xhr) { // if error occured

                alert("Sorry an error occurred, check your internet");

            }

        })

    })


    $(function() {
        $('#myTable').DataTable();
        $(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({


    });

</script>
</body>

</html>