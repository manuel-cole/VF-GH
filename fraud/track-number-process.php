<?php
ob_start();
session_start();
//database connection details
require_once 'dbConnect.php';
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}

$fullname = $_SESSION['fullname'];

if (isset($_POST['msisdn'])) {
    $trackMsisdn = $_POST['msisdn'];
}else{
    header('location: track-number.php');
}

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
<!--    <link href="./bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">-->

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- DataTables CSS -->
    <link href="./bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="./bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
    include 'sidebar.php';
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sim Box Fraud
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive ">
                            <table class="table table-bordered table-hover table-striped" >
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Agent Name</th>
                                    <th>Agent Location</th>
                                    <th>Remarks</th>
                                    <th>Date Modified</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM simbox WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn' ");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>

                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td class="center"><?php echo $row['agent_name'];?></td>
                                    <td class="center"><?php echo $row['agent_location'];?></td>
                                    <td class="center"><?php echo $row['remarks'];?></td>
                                    <td class="center"><?php echo $row['dateCreated'];?></td>
                                    <td class="center"><?php echo $row['reporter'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Sim Registration Fraud
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive ">
                            <table class="table table-striped table-bordered table-hover" >
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Agent Name</th>
                                    <th>Customer ID Type</th>
                                    <th>Customer ID Number</th>
                                    <th>Remarks</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM simreg WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn'");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>

                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td class="center"><?php echo $row['customer_name'];?></td>
                                    <td class="center"><?php echo $row['customer_id_type'];?></td>
                                    <td class="center"><?php echo $row['customer_id_number'];?></td>
                                    <td class="center"><?php echo $row['remarks'];?></td>
                                    <td class="center"><?php echo $row['reporter'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Roaming Fraud
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Service</th>
                                    <th>VPMN</th>
                                    <th>Date Modified</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM roaming WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn' ");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>
                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td class="center"><?php echo $row['service'];?></td>
                                    <td class="center"><?php echo $row['vpmn'];?></td>
                                    <td class="center"><?php echo $row['dateCreated'];?></td>
                                    <td class="center"><?php echo $row['reporter'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        Advanced Fee Fraud
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Fraud Type</th>
                                    <th>Remarks</th>
                                    <th>Date Reported</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM aff WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn' ");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td><?php echo $row['fraudType'];?></td>
                                    <td ><?php echo $row['remarks'];?>
                                    <td ><?php echo $row['dateCreated'];?></td>
                                    <td ><?php echo $row['reporter'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            </div>
            <!-- /.col-lg-6 -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Fixed High Fraud
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Event Date</th>
                                        <th>Isdn</th>
                                        <th>Fraud Type</th>
                                        <th>Company</th>
                                        <th>Country</th>
                                        <th>Extimated Damage</th>
                                        <th>Date Reported</th>
                                        <th>Reporter</th>
                                    </tr>
                                    </thead>
                                    <?php

                                    $result = mysqli_query($conn,"SELECT * FROM fixed_high WHERE isdn = '$trackMsisdn' ");
                                    $count = mysqli_num_rows($result);
                                    while($row=mysqli_fetch_array($result)){

                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $row['eventDate'];?></td>
                                        <td><?php echo $row['isdn'];?></td>
                                        <td><?php echo $row['fraudType'];?></td>
                                        <td><?php echo $row['company'];?></td>
                                        <td><?php echo $row['country'];?></td>
                                        <td><?php echo $row['estimatedDamage'];?></td>
                                        <td><?php echo $row['dateCreated'];?></td>
                                        <td><?php echo $row['reporter'];?></td>
                                    </tr>
                                    <?php   } //end of while loop ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.col-lg-6 -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Data High Usage
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Remarks</th>
                                    <th>Reporter</th>
                                    <th>Date Modified</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM dhu WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn' ");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>
                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td class="center"><?php echo $row['remarks'];?></td>
                                    <td class="center"><?php echo $row['reporter'];?></td>
                                    <td class="center"><?php echo $row['dateCreated'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-orange">
                    <div class="panel-heading">
                        General Fraud
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Remarks</th>
                                    <th>Date Modified</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM general_fraud WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn' ");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>
                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td class="center"><?php echo $row['remarks'];?></td>
                                    <td class="center"><?php echo $row['dateCreated'];?></td>
                                    <td class="center"><?php echo $row['reporter'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        IRSF
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Msisdn</th>
                                    <th>Agent Msisdn</th>
                                    <th>Remarks</th>
                                    <th>Date Modified</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM irsf WHERE msisdn = '$trackMsisdn' OR agent_msisdn = '$trackMsisdn'");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>
                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['agent_msisdn'];?></td>
                                    <td class="center"><?php echo $row['remarks'];?></td>
                                    <td class="center"><?php echo $row['dateCreated'];?></td>
                                    <td class="center"><?php echo $row['reporter'];?></td>
                                </tr>
                                <?php   } //end of while loop ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-deep-tellow">
                    <div class="panel-heading">
                        CLIR Request
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>Number</th>
                                    <th>Alternative Number</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Institution</th>
                                    <th>ID Type</th>
                                    <th>Remarks</th>
                                    <th>ID</th>
                                </tr>
                                </thead>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM clir_request WHERE msisdn = '$trackMsisdn' ");
                                $count = mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result)){

                                ?>
                                <tbody>
                                <tr class="">
                                    <td><?php echo $row['eventDate'];?></td>
                                    <td><?php echo $row['msisdn'];?></td>
                                    <td><?php echo $row['alt_msisdn'];?></td>
                                    <td class="center"><?php echo $row['firstname'];?></td>
                                    <td class="center"><?php echo $row['lastname'];?></td>
                                    <td class="center"><?php echo $row['institution'];?></td>
                                    <td class="center"><?php echo $row['id_type'];?></td>
                                    <td class="center"><?php echo $row['remarks'];?></td>
                                    <td class="center"><a href="uploads/<?php echo $row['idUpload'];?>">View ID</a></td>
                                </tr>
                                <?php   } //end of while loop ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.col-lg-6 -->

    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="./bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="./bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>

