<?php
ob_start();
session_start();
include_once '../dbConnect.php';

$fullname = $_SESSION['fullname'];


    $result = mysqli_query($conn,"SELECT * FROM 2015_2016_april");
    $count = mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)) {
###############################  APRIL DATA  ##############################################
        $aprNCA = $row['aprNCA'];
        $aprSIG = $row['aprSIG'];
        $aprFraudbuster = $row['aprFraudbuster'];
        $aprInternal = $row['aprInternal'];
        /** Calculate April Simbox */
        $aprSimbox = $aprNCA + $aprSIG + $aprFraudbuster + $aprInternal;
        $aprFixed = $row['aprFixed'];
        $aprRoaming = $row['aprRoaming'];
        $aprMobile = $row['aprMobile'];
        $aprPrepaid = $row['aprPrepaid'];
        /** Store Simbox calculation in session*/
        $_SESSION['aprSimbox'] = $aprSimbox;

    }
mysqli_close($conn);

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
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--    Favicon-->
    <link rel="shortcut icon" href="../favicon.ico" >
    <style>

        #main-panel{
            margin-left: -35px;
            margin-right: -35px;
            margin-top: 15px;

        }
        input.placeholder {
            text-align: center;
        }

    </style>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include 'sidebar-cs.php';
    ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Corporate Security Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
                <!-- /.row -->
            </div>
            <div class="">
                <!-- Nav tabs -->
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#Fraud-Prevention" data-toggle="tab">Fraud Prevention</a>
                        </li>
                        <li><a href="#Investigation-Security-Operations" data-toggle="tab">Investigations & Security Operations</a>
                        </li>
                        <li><a href="#Security-Awareness-Transformation" data-toggle="tab">Security Awareness & Transformation</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">System Intelligence & Vender Management</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content ">

                            <div class="tab-pane fade in active" id="Fraud-Prevention">

                            <?php include 'Fraud_Incidents_barred.php'; ?>
                                <hr/>
                            <!-- FRAUD LOSS BY TYPE-->
                            <?php include 'FRAUD_LOSS_BY_TYPE.php'; ?>
                                <hr/>
                            <?php include 'TOTAL_Fraud_loss.php'; ?>    
                                <hr/>
                            <?php include 'Fraud_Loss_Averted_Savings.php'; ?>
                                <hr/>
                                <div class="col-md-6">
                            <?php include 'INAVLID_FRAUDULENT_REGISTRATIONS.php'; ?>
                             </div>       <div class="col-md-6">
                            <?php include 'INFORMATION_DISCLOSURE.php'; ?></div>
                            </div>
                    <!-- /.panel -->

                <div class="tab-pane fade" id="Investigation-Security-Operations">
                    <h4>INVESTIGATIONS & SECURITY OPERATIONS</h4>
                    <p><table class="table table-bordered table-striped table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Single Column</th>
                            <th colspan="2">Double Column</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Column One</td>
                            <td>Column Two</td>
                            <td>Column Three</td>
                        </tr>
                        </tbody>
                    </table></p>
                </div>
                <div class="tab-pane fade" id="Security-Awareness-Transformation">
                    <h4>SECURITY AWARENESS & TRANSFORMATION</h4>
                    <p>Table Here</p>
                </div>
                <div class="tab-pane fade" id="System-Intelligence-Vender-Management">
                    <h4>SYSTEM INTELLIGENCE & VENDOR MANAGEMENT</h4>
                    <p>Table Here</p>
                </div></div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
