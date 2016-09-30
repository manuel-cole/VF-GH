<?php
require_once('bootstrap.php');
session_page();
$empno = $_SESSION["emp_no"];
$hr_pending = getRequestsHR();
$employee = getEmployeeName($empno);
$unit = $_SESSION["unit"];
$usergroup = $_SESSION["usergroup"];
$_counter = 0;

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

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

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
                <h1 class="page-header">Manage Request</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Reason for Rejection</h4>
                    </div>
                    <div class="modal-body">
                        <form action="lm_rejection.php" method="post">
                            <input type="hidden" name="id" id="recordid"/>
                            <textarea name="reason" style="width: 100%;height:120px;"></textarea>
                            <input type="submit" name="reject_btn" value="Submit" class="btn"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Today: <?php include('time.php'); ?>
                    </div>
                    <div class="panel-body">
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="user-list">
                                <thead>
                                <tr>
                                    <th width="3%" class="id-cell">No</th>
                                    <th width="10%">Employee Name</th>
                                    <th width="10%">Submitted Date</th>
                                    <th width="10%">Cost Centre</th>
                                    <th width="10%">Destination</th>
                                    <th width="10%">Departure</th>
                                    <th width="10%">Arrival</th>
                                    <th width="10%">Departure</th>
                                    <th width="10%">Request Type</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($hr_pending as $hr_pending) : ?>
                                    <?php if (!empty($hr_pending)) :
                                        $_counter = $_counter + 1;
                                        $id = $hr_pending['auto_id'];
                                        ?>
                                        <tr>
                                            <td class="user-cell" style="width:20px"><?php echo $_counter; ?></td>
                                            <td class="user-cell"
                                                style="width:180px"><?php echo getEmployeeName($hr_pending['emp_id']); ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo $hr_pending['submitted_date']; ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo $hr_pending['cost_centre']; ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo $hr_pending['destination']; ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo $hr_pending['departure_date']; ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo $hr_pending['arrival']; ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo $hr_pending['departure']; ?></td>
                                            <td class="user-cell"
                                                style="width:120px"><?php echo getTravelType($hr_pending['request_type']); ?></td>
                                            <td><a type="button" class="btn btn-primary btn-xs"
                                                   href="process_request?id=<?php echo $id; ?>">Manage</a></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.row (nested) -->
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
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<script src="js/sb-admin-2.js"></script>

<script>
    $(document).ready(function () {
        $('#user-list').dataTable({
            "columnDefs": [{
                "searchable": false,
                "targets": [0]
            }],
            //"order": [[ 1, "desc" ]],
            "deferRender": true
        });
    });
</script>
</body>

</html>


