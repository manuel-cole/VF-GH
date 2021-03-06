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

$fullname = $_SESSION['fullname'];
$access_level = $_SESSION['access_level'];

//database connection details
require_once 'dbConnect.php';

$month = $_POST['month'];
$year = $_POST['year'];
?>
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
    <!--        <link href="./dist/css/sb-admin-2.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

</head>
<body>

<div class="container" style="padding:20px;20px;">
    <div class="panel panel-primary col-lg-12">
        <div class="panel-body">
            <div class="">
                <h1>CLIR Request Report</h1>
                <div class="">
                    <table id="employee_grid" class="display table table-hover table-bordered" width="100%" cellspacing="0">
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
                        <tbody>
                        <?php

                        $result = mysqli_query($conn,"SELECT * FROM clir_request WHERE YEAR(eventDate) = '$year' AND MONTH(eventDate) = '$month' ");
                        $count = mysqli_num_rows($result);

                        while($row=mysqli_fetch_array($result)){

                            ?>


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
            </div>
        </div>
    </div>


</div>
<div class="container" style="padding:20px;20px;">
    <div class="panel panel-primary col-lg-6">
        <div class="panel-body">
            <div class="">
                <h1>CLIR Request Report</h1>
                <div class="">
                    <table id="employee_grid3" class="display table table-hover table-bordered" width="40%" cellspacing="0">
                        <thead>
                        <tr>
                            <th colspan="2">CLIR Request Report</th>
                        </tr>
                        </thead>

                        <?php
                        $result = mysqli_query($conn,"SELECT * FROM clir_request WHERE YEAR(eventDate) = '$year' AND MONTH(eventDate) = '$month' ");
                        $count = mysqli_num_rows($result);

                        $result1 = mysqli_query($conn,"SELECT * FROM clir_request WHERE YEAR(eventDate) = '$year' AND MONTH(eventDate) = '$month' AND remarks = 'REQUEST DECLINED' ");
                        $count1 = mysqli_num_rows($result1);
                        //$count = "7493";
                        //$row=mysqli_fetch_array($result);
                        //$value = ($count*0.2)*30;
                        $result2 = mysqli_query($conn,"SELECT * FROM clir_request WHERE YEAR(eventDate) = '$year' AND MONTH(eventDate) = '$month' AND remarks = 'REQUEST APPROVED' ");
                        $count2 = mysqli_num_rows($result2);
                        ?>
                        <tbody>
                        <tr class="">
                            <th>NO. of CLIR Request</th>
                            <td><?php echo $count;?></td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr class="">
                            <th>No. of Approved</th>
                            <td><?php echo $count1;?></td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr class="">
                            <th>No. of Declined</th>
                            <td><?php echo $count2;?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
    $( document ).ready(function() {
        $('#employee_grid3').DataTable({
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
<script type="text/javascript">

</script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>
</html>