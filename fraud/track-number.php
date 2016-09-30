<?php
ob_start();
session_start();

$fullname = $_SESSION['fullname'];
$access_level = $_SESSION['access_level'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FDS</title>

    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >


</head>

<body>

<div id="wrapper">

    <?php
    include 'sidebar.php';
    ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-eye fa-fw"></i> Number Tracker</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="col-md-10-4">
                    <form action="track-number-process.php" method="post" enctype = "multipart/form-data">
                        <div class="panel panel-red">
                            <div class="panel-heading" style="color: white">
                                Enter agent number to track history from other frauds
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3"><div>Agent number </div><div>(Agent Msisdn):</div></label>
                                    <div class="col-xs-6">
                                        <input name="msisdn" type="number" class="form-control"  placeholder="Enter Number">
                                    </div>
                                    <div class="col-xs-3">
                                        <button class="btn btn-danger" name="btn-track" style="color: white" type="submit"><i class="fa fa-eye fa-fw"></i>Track</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-1"></div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
