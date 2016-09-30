<?php
ob_start();
session_start();

$fullname = $_SESSION['fullname'];
$access_level = $_SESSION['access_level'];

//database connection details
require_once 'dbConnect.php';


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

    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

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
    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >

</head>

<body>

<div id="wrapper">

    <?php
    include 'sidebar.php';
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-table fa-fw"></i>Fixed High Fraud Table</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Fixed High Fraud
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper ">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Event Date</th>
                                    <th>ISDN</th>
                                    <th>Fraud Type</th>
                                    <th>Company</th>
                                    <th>Country</th>
                                    <th>Extimated Damage</th>
                                    <th>Date Modified</th>
                                    <th>Reporter</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $result = mysqli_query($conn,"SELECT * FROM fixed_high");
                                $count = mysqli_num_rows($result);

                                while($row=mysqli_fetch_array($result)){

                                    ?>


                                    <tr class="">
                                        <td><?php echo $row['eventDate'];?></td>
                                        <td><?php echo $row['isdn'];?></td>
                                        <td><?php echo $row['fraudType'];?></td>
                                        <td class="center"><?php echo $row['company'];?></td>
                                        <td class="center"><?php echo $row['country'];?></td>
                                        <td class="center"><?php echo $row['estimatedDamage'];?></td>
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
