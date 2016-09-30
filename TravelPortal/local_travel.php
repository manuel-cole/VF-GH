<?php
//require_once('bootstrap.php');
//session_page();
//$empno = $_SESSION["emp_no"];
//$empemail = $_SESSION["mail"];
//$unit = $_SESSION["unit"];
//$usergroup = $_SESSION["usergroup"];
//$linemanagerID = $_SESSION["linemanager"];
//$linemanagerName = getEmployeeName($linemanagerID);
//$unitName = getDepartment($unit);

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
                <h1 class="page-header">Local Travel</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <?php
            if (isset($_POST['btnSubmit'])) {
                submitLocalRequest($empno, $unit, $linemanagerID);
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
                                               value="<?php echo $_SESSION["firstname"] . ' ' . $_SESSION["lastname"]; ?>"
                                               required readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Email</span>
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="<?php echo $_SESSION["mail"]; ?>" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Line Manager</span>
                                        <input type="text" class="form-control" id="linemanager" name="linemanager"
                                               value="<?php echo $linemanagerName; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Unit</span>
                                        <input type="text" class="form-control" id="unit" name="unit"
                                               value="<?php echo $unitName; ?>" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Cost Centre</span>
                                        <select id="name" name="costcentre" class="form-control" required>
                                            <option value="">-- Select One --</option>
                                            <?php
                                            $result = listCostCentre();
                                            foreach ($result as $row) {
                                                ?>

                                                <option
                                                    value= <?php echo $row['cc_code'] ?>><?php echo $row['cc_code'] . " - " . $row['cc_name']; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;Travel Details</h2>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Purpose of Trip</span>
                                        <input type="text" class="form-control" id="purpose" name="purpose" value=""
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Destination</span>
                                        <input type="text" class="form-control" id="destination" name="destination"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Departure From</span>
                                        <input type="text" class="form-control" id="departure" name="departure"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="radio">
                                        <span><font size="3">&nbsp;&nbsp;&nbsp;Flight Required ?</font></span>&nbsp;&nbsp;&nbsp;
                                        <label><input type="radio" name="flight" value="yes"><font
                                                size="3">Yes</font></label>
                                        <label><input type="radio" name="flight" value="no"><font
                                                size="3">No</font></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="radio">
                                        <span><font size="3">&nbsp;&nbsp;&nbsp;Accommodation Required ?</font></span>&nbsp;&nbsp;&nbsp;
                                        <label><input type="radio" name="accommodation" value="yes"><font
                                                size="3">Yes</font></label>
                                        <label><input type="radio" name="accommodation" value="no"><font
                                                size="3">No</font></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <label for="dtp_input2" class="col-md-5 control-label">Departure Date</label>
                                        <div class="input-group date form_date col-md-12" data-date=""
                                             data-date-format="dd MM yyyy" data-link-field="dtp_input2"
                                             data-link-format="yyyy-mm-dd">
                                            <input class="form-control" size="20" type="text" value="" readonly>
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input2" name="departure" value=""/><br/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <label for="dtp_input2" class="col-md-5 control-label">Return Date</label>
                                        <div class="input-group date form_date col-md-12" data-date=""
                                             data-date-format="dd MM yyyy" data-link-field="dtp_input1"
                                             data-link-format="yyyy-mm-dd">
                                            <input class="form-control" size="20" type="text" value="" readonly>
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input1" name="arrival" value=""/><br/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <button type="submit" name="btnSubmit" class="btn btn-outline btn-primary">
                                            Submit
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


