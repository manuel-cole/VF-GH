<?php
require_once('bootstrap.php');
session_page();
$empno = $_SESSION["emp_no"];
$empemail = $_SESSION["mail"];
$unit = $_SESSION["unit"];
$usergroup = $_SESSION["usergroup"]
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
    <title>SML</title>

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
    //Linemanager not systemowner
    if (($usergroup == 3) && (in_array($unit, $systemowners) == false && $unit != 33)) {
        echo 'Linemanager not systemowner';
        include 'ext/menu.php';
        //security and linemanager
    } elseif (($usergroup == 3) && ($unit == 33)) {
        include 'ext/menu_lm_sec.php';
        echo 'security and linemanager';
        //security and not linemanager
    } elseif ($usergroup == 2 && $unit == 33) {
        include 'ext/menu_sec.php';
        //echo 'security and not linemanager';
        //linemanager and systemowner
    } elseif ($usergroup == 3 && in_array($unit, $systemowners) == true) {
        include 'ext/menu_lm_sys.php';
        //echo 'linemanager and systemowner';
        //not linemanager but systemowner
    } elseif ($usergroup == 2 && in_array($unit, $systemowners) == true) {
        include 'ext/menu_sys.php';
        //echo 'not linemanager but systemowner';
    } elseif ($usergroup == 6 && in_array($unit, $systemowners) == true) {
        include 'ext/menu_helpdesk.php';
        //echo 'not linemanager but systemowner';
    } elseif ($usergroup == 5 && in_array($unit, $systemowners) == true) {
        include 'ext/menu_admin.php';
    } elseif ($usergroup == 7 && in_array($unit, $systemowners) == true) {
        include 'ext/menu_huawei.php';
    } elseif ($usergroup == 5 && $unit == 31) {
        include 'ext/menu_askhr.php';
    } else {
        include 'ext/menu.php';
    }

    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Report Bug</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <?php
            if (isset($_POST['btnSubmit'])) {
                submitBug($empemail);
            }
            ?>
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Report Bug to Developer
                    </div>
                    <div class="panel-body">
                        <form role="form" name="createuser" action="" method="post">
                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;Request Details</h2>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Email</span>
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="<?php echo $_SESSION["mail"] ?>" required readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Subject</span>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><h2>&nbsp;&nbsp;&nbsp;Message</h2>
                                <div class="col-lg-4">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon required">Type here&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <textarea id="message" class="form-control" name="message" cols="50"
                                                      rows="3" required>                                                
                                            </textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
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
</body>

</html>


