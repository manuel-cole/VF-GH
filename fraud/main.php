<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Contact: 0509617500
 * Date: 18/09/2016
 * Time: 22:24
 */
ob_start();
session_start();
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}

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
                        <h1 class="page-header">Fraud Detection Database</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <!-- /.row -->
                </div>
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: #eaeae1">
                        <p class="row"><div class="col-lg-12">
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addGeneral.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">General Fraud</button></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addSimreg.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Sim Registration Fraud</button></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addSimbox.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Sim Box Fraud</button></a>
                            </div>
                            </div>
                        </p>
                        <p class="row">
                            <div class="col-lg-12">
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addRoaming.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Roaming Fraud</button></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addIrsf.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">IRSF</button></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addAdvancedFee.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Advance Fee Fraud</button></a>
                            </div>
                            </div>
                        </p>
                        <p class="row">
                           <div class="col-lg-12">
                               <div class="col-lg-4 col-md-4 col-xs-4">
                                   <a href="addDataHighUsage.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Data High Usage Fraud</button></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <a href="addFixedHigh.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Fixed High Uses</button></a>
                            </div>
                               <div class="col-lg-4 col-md-4 col-xs-4">
                                   <a href="addOthers.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">CLIR Request</button></a>
                            </div>
                            </div> 
                        </p>
                        <p class="row">
                        <div class="col-lg-12">
<!--                            <div class="col-lg-4 col-md-4">-->
<!--                                <a href="#"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Corporate Security Dashboard</button></a>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <a href="addFixedHigh.php"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Fixed High Uses</button></a>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <a href="#"><button style="height: 100px; background-color: #e60000; color: white;" class="btn btn-block">Others</button></a>-->
<!--                            </div>-->
                        </div>
                        </p>
                        
                    </div>
                </div>
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
