<?php
ob_start();
session_start();

$fullname = $_SESSION['fullname'];
$access_level = $_SESSION['access_level'];

//database connection details
require_once 'dbConnect.php';
$month = "09"
;?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Invalid Sim Registration Report</title>
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.css">



    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="./bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="./bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
<!--    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>


    <div class="container" style="padding:20px;20px;">
        <div class="">
            <h1>Invalid Sim Registration Report</h1>
            <div class="">
                <table id="employee_grid" class=" table table-hover table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Event Date</th>
                        <th>Msisdn</th>
                        <th>Agent Msisdn</th>
                        <th>Agent Name</th>
                        <th>Remarks</th>
                        <th>Reporter</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $result = mysqli_query($conn,"SELECT * FROM simreg WHERE YEAR(dateCreated) = YEAR(CURRENT_DATE()) AND MONTH(dateCreated) = '$month' ");
                    $count = mysqli_num_rows($result);

                    while($row=mysqli_fetch_array($result)){

                        ?>


                        <tr class="">
                            <td><?php echo $row['eventDate'];?></td>
                            <td><?php echo $row['msisdn'];?></td>
                            <td><?php echo $row['agent_msisdn'];?></td>
                            <td class="center"><?php echo $row['customer_firstname']." ".$row['customer_surname'];?></td>
                            <td class="center"><?php echo $row['remarks'];?></td>
                            <td class="center"><?php echo $row['reporter'];?></td>
                        </tr>
                    <?php   } //end of while loop ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $( document ).ready(function() {
            $('#employee_grid').DataTable({
                "processing": true,

                "dom": 'lBfrtip',
                "buttons": [
                    {
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            'copy',
                            'excel',
                            'csv',
                            'pdf',
                            'print'
                        ]
                    }
                ]
            });
        });
    </script>
