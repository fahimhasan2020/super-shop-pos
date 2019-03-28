<?php
if(!isset($_SESSION) )session_start();
include_once('../vendor/autoload.php');
use App\Auth;
use Model\Message;
use Model\Utility;
use App\User;
$auth= new Auth();
$status = $auth->setData($_SESSION)->logged_in();
if(!$status) {
    Utility::redirect('login.php');
    return;
}
$user = new User();
$users = $user->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../resources/assets/images/favicon.ico">
    <!-- App title -->
    <title>Users | Pos system</title>

    <!-- DataTables -->
    <link href="../resources/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <!-- App css -->
    <link href="../resources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../resources/plugins/switchery/switchery.min.css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="../resources/assets/js/modernizr.min.js"></script>

</head>
<body class="fixed-left">
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="spinner-wrapper">
                <div class="rotator">
                    <div class="inner-spin"></div>
                    <div class="inner-spin"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Begin page -->
<div id="wrapper">
    <?php
    include ('inc/topbar.php');
    include ('inc/leftsidebar.php');
    ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard </h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Zircos</a>
                                </li>
                                <li>
                                    <a href="#">Pages </a>
                                </li>
                                <li class="active">
                                    Blank Page
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Users</b></h4>
                            <p class="text-muted font-13 m-b-30">
                               List of registered users.
                            </p>

                            <table id="datatable" class="table table-striped table-colored table-info">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                    foreach ($users as $u) {
                                        ?>
                                        <tr>

                                            <td><?php echo $u->id; ?></td>
                                            <td><?php echo $u->phone_number; ?></td>
                                            <td><?php echo $u->email; ?></td>
                                            <td><a href="#"><i class="fa fa-eye text-info"></i></a>&nbsp;<a href="#"><i class="fa fa-pencil text-warning"></i></a>&nbsp;<a href="#"><i class="fa fa-trash text-danger"></i></a></td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- content -->
      <?php
      include ('inc/footer.php');
      ?>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
 <?php include ('inc/rightsidebad.php');?>
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="../resources/assets/js/jquery.min.js"></script>
<script src="../resources/assets/js/bootstrap.min.js"></script>
<script src="../resources/assets/js/detect.js"></script>
<script src="../resources/assets/js/fastclick.js"></script>
<script src="../resources/assets/js/jquery.blockUI.js"></script>
<script src="../resources/assets/js/waves.js"></script>
<script src="../resources/assets/js/jquery.slimscroll.js"></script>
<script src="../resources/assets/js/jquery.scrollTo.min.js"></script>
<script src="../resources/plugins/switchery/switchery.min.js"></script>

<script src="../resources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="../resources/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../resources/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="../resources/plugins/datatables/jszip.min.js"></script>
<script src="../resources/plugins/datatables/pdfmake.min.js"></script>
<script src="../resources/plugins/datatables/vfs_fonts.js"></script>
<script src="../resources/plugins/datatables/buttons.html5.min.js"></script>
<script src="../resources/plugins/datatables/buttons.print.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../resources/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.colVis.js"></script>
<script src="../resources/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<!-- init -->
<script src="../resources/assets/pages/jquery.datatables.init.js"></script>
<!-- App js -->
<script src="../resources/assets/js/jquery.core.js"></script>
<script src="../resources/assets/js/jquery.app.js"></script>
<script>
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "../plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>
</body>
</html>