<?php
require_once('bootstrap.php');
session_page();
$empno = $_SESSION["emp_no"];
$reqid = $_GET['id'];
$rs = getRequestDetailsFDS($reqid);
//print_r($rs);exit;
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
                submitFuncApproval($empno, $reqid);
            }
            if (isset($_POST['btnReject'])) {
                submitFuncRejection($empno, $reqid);
            }
            ?>
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Local Travel
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Reason for Rejection</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <input type="hidden" name="id" id="recordid"/>
                                        <textarea name="reason" style="width: 100%;height:120px;"></textarea>
                                        <input type="submit" name="btnReject" value="Submit" class="btn"/>
                                    </form>
                                </div>
                            </div>
                        </div>
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

                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;AskHR Input</h2>
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
                                        <span class="input-group-addon">Sustenance</span>
                                        <input type="text" class="form-control" id="sustenance" name="sustenance"
                                               value="<?php echo $rs[0]['sustenance']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Transportation</span>
                                        <input type="text" class="form-control" id="acc_cost" name="acc_cost"
                                               value="<?php echo $rs[0]['transportation']; ?>" readonly>
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
                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;Finance Input</h2>
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
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <a type="button" class="btn btn-outline btn-danger" data-toggle="modal"
                                           data-target="#myModal" onclick=deleter2(<?php echo $id; ?>)>Reject</a>
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
<script>
    function deleter($id) {
        if (confirm("Are you sure you want to approve this request?") == true) {
            window.location = "lm_approval?id=" + $id;
        } else {
            return false;
        }
    }
    //
    function deleter2($id) {
//            if (confirm("Are you sure you want to reject this request?") == true) {
//                window.location = "lm_rejection?id="+$id;
//            } else {
//                return false;
//            }
        document.getElementById("recordid").value = "" + $id;
    }
</script>
</body>

</html>


