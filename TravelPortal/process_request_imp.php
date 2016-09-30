<?php
require_once('bootstrap.php');
session_page();
$empno = $_SESSION["emp_no"];
$reqid = $_GET['id'];
$rs = getRequestDetails($reqid);
$unit = $_SESSION["unit"];
$usergroup = $_SESSION["usergroup"];
?>
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

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="css/html5shiv.js"></script>
    <script src="css/respond.min.js"></script>

    <![endif]-->


</head>

<body>

<div id="wrapper">
    <?php
    include 'ext/menu.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Travel Request</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <?php
            if (isset($_POST['btnSubmit'])) {
                submitAskHRApproval($empno, $reqid);
            }
            ?>
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Local Travel
                    </div>
                    <div class="panel-body">
                        <form role="form" name="createuser" action="" method="post">
                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;User Details</h2>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Full Name</span>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                               value="<?php echo getEmployeeName($rs[0]['emp_id']); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Email</span>
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="<?php echo getEmployeeEmail($rs[0]['emp_id']); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Line Manager</span>
                                        <input type="text" class="form-control" id="linemanager" name="linemanager"
                                               value="<?php echo getEmployeeName($rs[0]['emp_id']); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Unit</span>
                                        <input type="text" class="form-control" id="unit" name="unit"
                                               value="<?php echo getDepartment($rs[0]['unit']); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Cost Centre</span>
                                        <input type="text" class="form-control" id="cost_centre" name="cost_centre"
                                               value="<?php echo $rs[0]['cost_centre']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;Travel Details</h2>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Purpose of Trip</span>
                                        <input type="text" class="form-control" id="purpose" name="purpose"
                                               value="<?php echo $rs[0]['travel_purpose']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Destination</span>
                                        <input type="text" class="form-control" id="destination" name="destination"
                                               value="<?php echo $rs[0]['destination']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Hotel Name</span>
                                        <input type="text" class="form-control" id="hotel_name" name="hotel_name"
                                               value="<?php echo $rs[0]['hotel_name']; ?>" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Flight Required</span>
                                        <input type="text" class="form-control" id="flight" name="flight"
                                               value="<?php echo $rs[0]['flight']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Accommodation Required</span>
                                        <input type="text" class="form-control" id="accommodation" name="accommodation"
                                               value="<?php echo $rs[0]['accommodation']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Departure Date</span>
                                        <input type="text" class="form-control" id="departure" name="departure"
                                               value="<?php echo $rs[0]['departure_date']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Arrival Date</span>
                                        <input type="text" class="form-control" id="arrival" name="arrival"
                                               value="<?php echo $rs[0]['arrival']; ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;AskHR</h2>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Cost of flight</span>
                                        <input type="text" class="form-control" id="flight_cost" name="flight_cost"
                                               value="<?php echo $rs[0]['flight_cost']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Cost of Accommodation</span>
                                        <input type="text" class="form-control" id="acc_cost" name="acc_cost"
                                               value="<?php echo $rs[0]['acc_cost']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Total Cost</span>
                                        <input type="text" class="form-control" id="total_cost" name="total_cost"
                                               value="<?php echo $rs[0]['total_cost']; ?>" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Year to Date Spend</span>
                                        <input type="text" class="form-control" id="date_spend" name="date_spend"
                                               value="<?php echo $rs[0]['yeartodatespend']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Year to go Head-Room</span>
                                        <input type="text" class="form-control" id="head_room" name="head_room"
                                               value="<?php echo $rs[0]['yeartogohead']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Function Head Approval</span>
                                        <input type="file" class="form-control" id="functional_head"
                                               name="functional_head" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">AskHR Approval</span>
                                        <input type="text" class="form-control" id="date_spend" name="date_spend"
                                               value="<?php echo getEmployeeName($rs[0]['askhr_approver']); ?>"
                                               readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">FDS Approval</span>
                                        <input type="text" class="form-control" id="date_spend" name="date_spend"
                                               value="<?php echo getEmployeeName($rs[0]['fds_approver']); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <button type="submit" name="btnSubmit" class="btn btn-outline btn-primary">
                                            Approve
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row (nested) -->

        <!-- /.row (nested) -->
    </div>
    <!-- /#page-wrapper -->


</div>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="js/sb-admin-2.js"></script>
<script src="js/bootstrap-datetimepicker.js"</script>
<
script;
type = "text/javascript";
src = "js/bootstrap-datetimepicker.js";
charset = "UTF-8" ></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language: 'en',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language: 'en',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language: 'en',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
</body>

</html>


