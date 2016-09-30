<?php
//require_once('bootstrap.php');
//session_page();
//$empno = $_SESSION["emp_no"];
//$unit = $_SESSION["unit"];
//$usergroup = $_SESSION["usergroup"];
//?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Travel Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="wrapper">
    <?php
    include 'ext/menu.php';
    ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Home </h1>
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-dashboard">
                                &nbsp;</i>Today: <?php include('time.php'); ?></div>
                        <div class="muted pull-right"><i class="icon-time"></i>&nbsp; </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div class="span12">
                                <div class="col-lg-3">
                                    <div class="span8">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="container-fluid">
                                                    <div class="row-fluid">
                                                        <div class="span3"><br/>
                                                            <i class="fa fa-car fa-5x"></i>
                                                        </div>
                                                        <div class="span8 text-right"><br/>
                                                            <div class="huge"></div>
                                                            <div>Local Travel</div>
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="local_travel">
                                                <div class="modal-footer">
                                                    <span class="pull-left">Make Request</span>
                                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="span8">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">
                                                <div class="container-fluid">
                                                    <div class="row-fluid">
                                                        <div class="span3"><br/>
                                                            <i class="fa fa-plane fa-5x"></i><br/>
                                                        </div>
                                                        <div class="span8 text-right"><br/>
                                                            <div class="huge"></div>
                                                            <div>International Travel</div>
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="int_travel">
                                                <div class="modal-footer">
                                                    <span class="pull-left">Make Request</span>
                                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="span8">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                <div class="container-fluid">
                                                    <div class="row-fluid">
                                                        <div class="span3"><br/>
                                                            <i class="fa fa-spinner fa-5x"></i><br/>
                                                        </div>
                                                        <div class="span8 text-right"><br/>
                                                            <div class="huge"></div>
                                                            <div>Request Status</div>
                                                            <br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="request_status">
                                                <div class="modal-footer">
                                                    <span class="pull-left">View Status</span>
                                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- block -->
<!-- /block -->
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="js/sb-admin-2.js"></script>

</body>

</html>
