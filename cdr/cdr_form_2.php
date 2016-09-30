<?php
/**
 * Created by PhpStorm.
 * User: GAMOR
 * Date: 7/7/2016
 * Time: 1:22 PM
 */
ob_start();
session_start();

include_once 'dbConnect.php';
include_once 'functions.php';
if (!isset($_SESSION['msisdn'])){
    header('location: cdr_form.php');
    exit();
}

//$msisdn = $_SESSION['msisdn'];
//$service = $_SESSION['service'];
//$idUpload = $_SESSION['idUpload'];
//$recordType = $_SESSION['recordType'];
//$purpose_for_request = $_SESSION['purpose_for_request'];
//$request_type = $_SESSION['request_type'];
$msisdn = mysqli_real_escape_string($conn, $_SESSION['msisdn']);
$other_msisdn = mysqli_real_escape_string($conn, $_SESSION['other_msisdn']);
$service = mysqli_real_escape_string($conn, $_SESSION['service']);
$idUpload = $_SESSION['idUpload'];
$recordType = mysqli_real_escape_string($conn, $_SESSION['recordType']);
$purpose_for_request = mysqli_real_escape_string($conn, $_SESSION['purpose_for_request']);
$request_type = mysqli_real_escape_string($conn, $_SESSION['request_type']);

########################## file upload validate ##########################

if((!empty($_FILES["doc"])) && ($_FILES['doc']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb
    $filename = rand(1000, 100000) . basename($_FILES['doc']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
    if (($ext == "docx" || $ext == "DOCX" || $ext == "doc" || $ext == "DOC" || $ext == "pdf" || $ext == "PDF" || $ext == "jpg" || $ext == "JPG" || $ext == "png" || $ext == "PNG") &&
        ($_FILES["doc"]["type"] == "image/jpeg" || $_FILES["doc"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES["doc"]["type"] == "application/msword" || $_FILES["doc"]["type"] == "application/pdf" || $_FILES["doc"]["type"] == "image/png") &&
        ($_FILES["doc"]["size"] < 350000)
    ) {
        //Determine the path to which we want to save this file
        $newname = dirname(__FILE__) . '/uploads/' . $filename;
        //Check if the file with the same name is already exists on the server

        // make file name in lower case
        $new_file_name = strtolower($filename);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);
        $new_final_file = dirname(__FILE__).'/uploads/'.$final_file;
        $_SESSION['doc'] = $final_file;
        //if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['doc']['tmp_name'], $new_final_file))) {
            // header('location: cdr_form_individual.php');

            //echo "It's done! The file has been saved as: ".$newname;
        } else {
            header('location: cdr_form_corporate.php?error=' . base64_encode('Error: A problem occurred during file upload!'));
            //echo "Error: A problem occurred during file upload!";
            exit();
        }
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Error: File ".$_FILES["uploaded_file"]["name"]." already exists'));
//                //echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
//            }
    } else {
        header('location: cdr_form_corporate.php?error=' . base64_encode('Error: Only DOC or PDF documents under 350Kb are accepted for upload'));
        //echo "Error: Only .jpg images under 350Kb are accepted for upload";
        exit();
    }
}elseif((!empty($_FILES["order"])) && ($_FILES['order']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb

    $filename = rand(1000,100000).basename($_FILES['order']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
    if (($ext == "docx" || $ext == "DOCX" || $ext == "doc" || $ext == "DOC" || $ext == "pdf" || $ext == "PDF" || $ext == "jpg" || $ext == "JPG" || $ext == "png" || $ext == "PNG") &&
        ($_FILES["order"]["type"] == "image/jpeg" || $_FILES["order"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES["order"]["type"] == "application/msword" || $_FILES["order"]["type"] == "application/pdf" || $_FILES["order"]["type"] == "image/png") &&
        ($_FILES["order"]["size"] < 350000)
    )
    {
        //Determine the path to which we want to save this file
        $newname = dirname(__FILE__).'/uploads/'.$filename;
        //Check if the file with the same name is already exists on the server

        // make file name in lower case
        $new_file_name = strtolower($filename);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);
        $new_final_file = dirname(__FILE__).'/uploads/'.$final_file;
        $_SESSION['order'] = $final_file;
        //if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['order']['tmp_name'],$new_final_file))) {
            // header('location: cdr_form_individual.php');

            //echo "It's done! The file has been saved as: ".$newname;
        } else {
            header('location: cdr_form_lea.php?error='.base64_encode('Error: A problem occurred during file upload!'));
            //echo "Error: A problem occurred during file upload!";
            exit();
        }
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Error: File ".$_FILES["uploaded_file"]["name"]." already exists'));
//                //echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
//            }
    } else {
        header('location: cdr_form_lea.php?error='.base64_encode('Error: Only DOCX or PDF documents under 350Kb are accepted for upload'));
        //echo "Error: Only .jpg images under 350Kb are accepted for upload";
        exit();
    }
}
else {
    // header('location: cdr_form_lea.php?error='.base64_encode('Error: No file uploaded'));
    //echo "Error: No file uploaded";
}

if (isset($_POST['cmdBtnIndividual'])){
    $timer = 1;
//    $_SESSION['fullname'] = $fullname = $_POST['fullname'];
//    $_SESSION['startDate'] = $startDate = $_POST['startDate'];
//    $_SESSION['endDate'] = $endDate = $_POST['endDate'];
//    $_SESSION['email'] = $email = $_POST['email'];

    $_SESSION['fullname'] = $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $_SESSION['startDate'] = $startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
    $_SESSION['endDate'] = $endDate = mysqli_real_escape_string($conn, $_POST['endDate']);
    $_SESSION['email'] = $email = mysqli_real_escape_string($conn, $_POST['email']);
    //$formated_request = serialize($_SESSION['request_type']);

    $rand_code = rand(100000,1000000);
    $_SESSION['randcode'] = $rand_code;
    $message = $rand_code." is your call data records confirmation code.";

    /** INTEGRATE SMS API TO SEND CODE TO SUBSCRIBER'S MSISDN */
    if ($service == "Fixedline Broadband"){
        sendSMS($other_msisdn, $message);
    }else{
        sendSMS($msisdn, $message);
    }


    $sql = "INSERT INTO cdr_individual_request(msisdn,other_msisdn,service_type,record_type,purpose_for_request,fullname,startDate,endDate,email,code,id_card,request_type) "
        . "VALUE ('$msisdn','$other_msisdn','$service','$recordType','$purpose_for_request','$fullname','$startDate','$endDate','$email','$rand_code','$idUpload','$request_type' )";

    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);

}elseif (isset($_POST['cmdBtnCorporate'])){
    $timer = 1;
    $_SESSION['company_name'] = $company_name = $_POST['company_name'];
    $_SESSION['startDate'] = $startDate = $_POST['startDate'];
    $_SESSION['endDate'] = $endDate = $_POST['endDate'];
    $_SESSION['email'] = $email = $_POST['email'];
    $doc = $_SESSION['doc'];

    $rand_code = rand(100000,1000000);
    $_SESSION['randcode'] = $rand_code;
    $message = $rand_code." is your call data records confirmation code.";

    /** INTEGRATE SMS API TO SEND CODE TO SUBSCRIBER'S MSISDN */

    if ($service == "Fixedline Broadband"){
        sendSMS($other_msisdn, $message);
    }else{
        sendSMS($msisdn, $message);
    }

    $sql = "INSERT INTO cdr_corporate_request(msisdn,other_msisdn,service_type,record_type,purpose_for_request,company_name,startDate,endDate,email,code,id_card,request_type,doc) "
        . "VALUE ('$msisdn','$other_msisdn','$service','$recordType','$purpose_for_request','$company_name','$startDate','$endDate','$email','$rand_code','$idUpload','$request_type','$doc' )";

    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);

}elseif (isset($_POST['cmdBtnLea'])){
    $timer = 1;
    $_SESSION['name_of_security_agency'] = $name_of_security_agency = $_POST['name_of_security_agency'];
    $_SESSION['name_of_investigator'] = $name_of_investigator = $_POST['name_of_investigator'];
    $_SESSION['telephone'] = $telephone = $_POST['telephone_number'];
    $_SESSION['startDate'] = $startDate = $_POST['startDate'];
    $_SESSION['endDate'] = $endDate = $_POST['endDate'];
    $_SESSION['email'] = $email = $_POST['email'];
    $order = $_SESSION['order'];

    $rand_code = rand(100000,1000000);
    $_SESSION['randcode'] = $rand_code;
    $message = $rand_code." is your CDR confirmation code.";

    /** INTEGRATE SMS API TO SEND CODE TO SUBSCRIBER'S MSISDN */

    sendSMS($telephone, $message);

    $sql = "INSERT INTO cdr_lea_request(msisdn,other_msisdn,service_type,record_type,purpose_for_request,request_type,security_agency_name,investigator_name,telephone_number,startDate,endDate,email,code,id_card,court_order) "
        . "VALUE ('$msisdn','$other_msisdn','$service','$recordType','$purpose_for_request','$request_type','$name_of_security_agency','$name_of_investigator','$telephone','$startDate','$endDate','$email','$rand_code','$idUpload','$order' )";

    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);

}elseif (isset($_POST['cmdBtnOthers'])){
    $timer = 1;
    $_SESSION['fullname'] = $fullname = $_POST['fullname'];
    $_SESSION['startDate'] = $startDate = $_POST['startDate'];
    $_SESSION['endDate'] = $endDate = $_POST['endDate'];
    $_SESSION['email'] = $email = $_POST['email'];

    $rand_code = rand(100000,1000000);
    $_SESSION['randcode'] = $rand_code;
    $message = $rand_code." is your call data records confirmation code.";

    /** INTEGRATE SMS API TO SEND CODE TO SUBSCRIBER'S MSISDN */

    if ($service == "Fixedline Broadband"){
        sendSMS($other_msisdn, $message);
    }else{
        sendSMS($msisdn, $message);
    }

    $sql = "INSERT INTO cdr_other_request(msisdn,other_msisdn,service_type,record_type,purpose_for_request,fullname,startDate,endDate,email,code,id_card,request_type) "
        . "VALUE ('$msisdn','$other_msisdn','$service','$recordType','$purpose_for_request','$fullname','$startDate','$endDate','$email','$rand_code','$idUpload','$request_type' )";

    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
}
elseif (isset($_GET['codeResend'])){
    $timer = 0;
    if ($_SESSION['recordType'] == "Law Enforcement Agency(LEA)"){
        codeResend($_SESSION['telephone'],$_SESSION['randcode']);
    }elseif ($_SESSION['service'] == "Fixedline Broadband"){
        codeResend($_SESSION['other_msisdn'],$_SESSION['randcode']);
    }else{
        codeResend($_SESSION['msisdn'],$_SESSION['randcode']);
    }

    //echo $rand_code;exit();
}
else{
    $timer = 0;
    $rand_code = $_SESSION['randcode'];
   // header('location: index.php');
}

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
    <!--    <link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />-->
    <!--    <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>-->
    <link rel="stylesheet" href="css/datepicker.css">
    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >
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
        <form class="form-horizontal" action="cdr_form_finish.php" method="post">
            <div class="col-xs-12-">
                <div class="bs-example panel-margin-contol">
                    <div style="background-color: #ffffff" class="panel panel-danger">
                        <div class="panel-heading">
                            <b style="color: white">Call Data Records (CDR) REQUEST FORM</b>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-xs-1"></div>
                            <label>A confirmation code was sent to your number. Enter it in the field below.</label><br>
                                <div class="col-xs-1"></div>
                                <?php if ($timer == 0){

                                }elseif ($timer == 1){ ?>
                                    <label><div id="display"></div><div id="submitted"></div></label><?php
                                } ?>

                                <p>&nbsp;</p>
                            </div>
                            <div class="form-group" >
                                <div class="col-xs-1"></div>

                                <label class="control-label col-xs-3">Confirmation Code</label>
                                <div class="col-xs-4">
                                    <input name="code" class="form-control" type="text" placeholder="Enter Security Code Sent to your number" required>
                                </div>
                                <div class="col-xs-4"><a href="cdr_form_2.php?codeResend">Click here to resend security code</a></div>
                            </div>

                        </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-right">
                                <button name="checkCode" type="submit" data-loading-text="Loading..." class="btn btn-danger" >Submit</button>
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
        window.location='cdr_.php';
    }
</script>
<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/timer.js"></script>
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
<?php

?>
</body>
</html>
