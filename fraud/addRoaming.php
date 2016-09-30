<?php
ob_start();
session_start();
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}

$fullname = $_SESSION['fullname'];


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

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./dist/css/datepicker.css">

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
                    <h1 class="page-header">Roaming Fraud Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="col-md-10-4">
                    <form action="addRoamingUpload.php" method="post" enctype = "multipart/form-data">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Upload roaming file
                            </div>
                            <div class="panel-body">
                                <p><h3>Upload csv File</h3></p>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">CSV file</span>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <h5><a style="color: #0000bf" href="uploads/sample/roaming-sample.csv">Click here to download template</a></h5>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" name="btn-upload" class="btn btn-danger">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-1"></div>

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

<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="./dist/js/jquery-1.9.1.min.js"></script>
<script src="./dist/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#example1').datepicker({
            format: "dd/mm/yyyy"
        });

    });
</script>
</body>

</html>

