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
                    <h1 class="page-header">CLIR Request</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-md-1"></div>
            <div class="panel panel-danger col-md-10" style="background-color: #dadada;">
                <div class="panel-body" style="">
                    <div class="">
                        <div class="bs-example">
                            <form class="form-horizontal" action="addOthersProcess.php" method="POST" name="generalForm" enctype="multipart/form-data">
                                <div >
                                    <?php
                                    /* handle error */
                                    if (isset($_GET['error'])) : ?>
                                        <div class="alert alert-danger alert-dismissible" role="alert" >
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
                                        </div>
                                    <?php endif;?></div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">CLIR NUMBER :</label>
                                    <div class="col-xs-9">
                                        <input name="msisdn" type="number" class="form-control"  placeholder="Enter Customer's Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">ALTERNATIVE LINE :</label>
                                    <div class="col-xs-9">
                                        <input name="alt_msisdn" type="number" class="form-control" placeholder="Enter alternative Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">DATE :</label>
                                    <div class="col-xs-9">
                                        <input name="eventDate" type="text" id="example1" class="form-control" placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">FIRST NAME :</label>
                                    <div class="col-xs-9">
                                        <input name="firstname" type="text" class="form-control" placeholder="Enter the firstname of customer">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">LAST NAME :</label>
                                    <div class="col-xs-9">
                                        <input name="lastname" type="text" class="form-control" placeholder="Enter the lastname of customer">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">INSTITUTION :</label>
                                    <div class="col-xs-9">
                                        <input name="institution" type="text" class="form-control" placeholder="Enter the customer's institustion">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">ID TYPE :</label>
                                    <div class="col-xs-9">
                                        <input name="id_type" type="text" class="form-control" placeholder="Enter the type of ID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">ID :</label>
                                    <div class="col-xs-9">
                                        <input name="idUpload" class="form-control" type="file" accept=".jpg,.jpeg,.pdf,.png" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">REMARKS : </label>
                                    <div class="col-xs-9">
                                        <select name="remarks" class="form-control">
                                            <option>--Select Option--</option>
                                            <option value="REQUEST DECLINED">REQUEST DECLINED</option>
                                            <option value="REQUEST APPROVED">REQUEST APPROVED</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-offset-6 col-xs-6">
                                        <button type="submit" class="btn btn-success" style="background-color: red;color: white;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-1"></div>
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

<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="./dist/js/jquery-1.9.1.min.js"></script>
<script src="./dist/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#example1').datepicker({
            format: "yyyy/mm/dd"
        });

    });
</script>
</body>

</html>

