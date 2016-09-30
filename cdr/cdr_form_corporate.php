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
if (!isset($_SESSION['msisdn'])){
    header('location: cdr_form.php');
    exit();
}

$misidn = $_SESSION['msisdn'];
$other_misidn = $_SESSION['other_msisdn'];
$service = $_SESSION['service'];
$idUpload = $_SESSION['idUpload'];
//$docUpload = $_SESSION['docUpload'];
//$orderUpload = $_SESSION['orderUpload'];
$recordType = $_SESSION['recordType'];
$purpose_for_request = $_SESSION['purpose_for_request'];
$request_type = $_SESSION['request_type'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Call Data Records</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >
    <!--    <link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />-->
    <!--    <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>-->
    <link rel="stylesheet" href="css/datepicker.css">
    <!--    <link rel="stylesheet" href="css/bootstrap-date.css">-->
    <script type="text/javascript">
        $(function() {
            $(".btn").click(function(){
                $(this).button('loading').delay(1000).queue(function() {
                    $(this).button('reset');
                    $(this).dequeue();
                });
            });
        });
    </script>
    <style type="text/css">
        body{
            background-image: url("img/back.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .jumb-margin-contol{
            margin: 65px 120px 0 120px;
        }
        .panel-margin-contol{
            margin: 0 120px 0 120px;
        }
        hr{
            background-color: #c9302c;
        }
        /* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
        .form-horizontal .control-label{
            padding-top: 7px;
        }
    </style>
    <style>
        .tooltipp {
            position: relative;
            display: inline-block;
        }

        .tooltipp .tooltipptext {
            visibility: hidden;
            width: 120px;
            background-color: #e8e8e8;
            color: black;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 80%;
            left: 50%;
            margin-left: -20px;
        }

        .tooltipp .tooltipptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #e8e8e8 transparent transparent transparent;
        }

        .tooltipp:hover .tooltipptext {
            visibility: visible;
        }
    </style>
</head>
<body>
<nav style="background-color: #da0000" id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container center-block">

        <div class="">
            <a style="width: 100%;color: #ffffff;text-align: center;font-size:20px;font-weight: bold " class="navbar-brand" href="#">Vodafone Ghana Call Data Records</a>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 70px">

    <div class="row">
        <form class="form-horizontal" action="cdr_form_2.php" method="post" enctype="multipart/form-data">
            <div class="col-xs-12-">
                <div class="bs-example panel-margin-contol">
                    <div style="background-color: #ffffff" class="panel panel-danger">
                        <div class="panel-heading">
                            <b style="color: white">Call Data Records (CDR) REQUEST FORM</b>
                        </div>
                        <div class="panel-body">
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
                                <label class="control-label col-xs-3 tooltipp">Company Name: <span style="color: red; font-size: 8px" class="glyphicon glyphicon-asterisk"></span></label>
                                <div class="col-xs-9">
                                    <input name="company_name" class="form-control" type="text" placeholder="Enter Company Name" required>
                                </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label class="control-label col-xs-3 tooltipp">Contact Number: <span class="tooltipptext">Text</span></label>-->
<!--                                <div class="col-xs-9">-->
<!--                                    <input name="tnumber" class="form-control" type="number" placeholder="Enter Telephone Number" required>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="form-group">-->
<!--                                <label class="control-label col-xs-3 tooltipp">Alternative Number <br>(Voice Sim):<span class="tooltipptext">Text</span></label>-->
<!--                                <div class="col-xs-9">-->
<!--                                    <input name="cnumber" class="form-control" type="text" placeholder="Enter alternative number if number is a data sim">-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group">
                                <label class="control-label col-xs-3">Period of Request: From:<span style="color: red; font-size: 8px" class="glyphicon glyphicon-asterisk"></span></label>
                                <div class="col-xs-4">
                                    <input name="startDate" class="form-control" type="text" placeholder="Start-Date" id="example1" required>
                                </div>
                                <label class="control-label col-xs-1">To:</label>
                                <div class="col-xs-4">
                                    <input name="endDate" class="form-control" type="text" placeholder="End-Date" id="example2" required>
                                </div >
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3 tooltipp">Email Address:<span style="color: red; font-size: 8px" class="glyphicon glyphicon-asterisk"></span></label>
                                <div class="col-xs-9">
                                    <input name="email" class="form-control" type="email" placeholder="Enter your email (Mandatory) " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3 tooltipp">Upload Approved Official Letter: <span style="color: red; font-size: 8px" class="glyphicon glyphicon-asterisk"></span></label>
                                    <div class="col-xs-5">
                                        <input name="doc" class="form-control" type="file" accept=".doc,.docx,.pdf,.jpg,.png" required>
                                    </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label class="control-label col-xs-3">Request Date:</label>-->
<!--                                <div class="col-xs-9">-->
<!--                                    <input name="reduestDate" class="form-control" placeholder="Enter Request date" type="text" id="example3" required>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>
                        <!--                        <div class="panel-footer clearfix">-->
                        <!--                            <div class="pull-right">-->
                        <!--                                <button type="submit" data-loading-text="Loading..." class="btn btn-danger">Submit</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="panel-footer">
                            <div class="bs-example">
                                <ul class="pager">
                                    <li class="previous"><button type="button" onclick="myButton()">&larr; Previous</button></li>
                                    <li class="next"><button name="cmdBtnCorporate" type="submit" >Next &rarr;</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <hr style="color: #c9302c">
    <div class="row">
        <div class="col-xs-12">
            <footer style="text-align: center">
                <p>&copy; Copyright 2016 Vodafone Ghana</p>
            </footer>
        </div>
    </div>
</div>
<script>
    function myButton() {
        window.location='cdr_form.php';
    }
</script>
<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#example1').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#example2').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#example3').datepicker({
            format: "dd/mm/yyyy"
        });

    });
</script>
</body>
</html>