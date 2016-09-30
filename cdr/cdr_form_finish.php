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
include_once 'dbConnect.php';
//include_once 'mail.php';
include 'functions.php';
$logo = "http://vodafone.com.gh/templates/vodtpl/images/logo2.png";

if (isset($_POST['checkCode'])){

    $msisdn = $_SESSION['msisdn'];
    $other_msisdn = $_SESSION['other_msisdn'];
    $service = $_SESSION['service'];
    $recordType = $_SESSION['recordType'];
    $purpose_for_request = $_SESSION['purpose_for_request'];
    $request_type = $_SESSION['request_type'];
    $idUpload = $_SESSION['idUpload'];

    $rand_code = $_SESSION['randcode'];
    $code = $_POST['code'];

    if ($code == $rand_code){

        /** INTEGRATE EMAIL PLUGIN TO SEND EMAIL TO DISCLOSURE */
        if ($recordType == "Individual"){

            if (mysqli_query($conn, "CALL GetIndividualCodeExpire")){
                $sql = "SELECT * FROM cdr_individual_request WHERE code = '$rand_code' AND code_status = '0' ";
            }

            $results = mysqli_query($conn,$sql);
            $count=mysqli_num_rows($results);
            if ($count == "0"){
                ?>
                <script>
                    window.alert('Confirmation Code Has Expired\nKindly Restart The Process.\nThank You!!!');
                    window.location.href='index.php';
                </script>

                <?php
                exit();
            }

            $row = mysqli_fetch_assoc($results);
            $dbmsisdn = $row['msisdn'];$dbother_msisdn = $row['other_msisdn'];$dbservice = $row['service_type'];$dbrecordType = $row['record_type'];
            $dbrequest_type = $row['request_type'];$dbpurpose_for_request = $row['purpose_for_request'];$dbfullname = $row['fullname'];
            $dbstartDate = $row['startDate'];$dbendDate = $row['endDate'];$dbemail = $row['email'];$dbidUpload = $row['id_card'];

            include_once 'email_message.php';
            $message = individual_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbfullname,$dbstartDate,$dbendDate,$dbemail);
            //$user_message = user_message($logo,$dbfullname);
            //echo $message;//exit();

            //send email to disclosures with individual details
            send_mail_individual($message,$dbidUpload);

            //store user email in session to send mail
            $_SESSION['name'] = $dbfullname;
            $_SESSION['user_email'] = $dbemail;
            //send_mail_user($user_message,$dbemail);
            //sendDetails($idUpload);exit();

        }elseif($recordType == "Corporate"){

            if (mysqli_query($conn, "CALL GetCorporateCodeExpire")){
                $sql = "SELECT * FROM cdr_corporate_request WHERE code = '$rand_code' AND code_status = '0' ";
            }

//            //corporate details
            $results = mysqli_query($conn,$sql);

            $count=mysqli_num_rows($results);

            if ($count == "0"){
                ?>
                <script>
                    window.alert('Confirmation Code Has Expired.\nKindly Restart The Process.\nThank You!!!');
                    window.location.href='index.php';
                </script>

                <?php
                exit();
            }
            $row = mysqli_fetch_assoc($results);
            $dbmsisdn = $row['msisdn'];$dbother_msisdn = $row['other_msisdn'];$dbservice = $row['service_type'];$dbrecordType = $row['record_type'];
            $dbrequest_type = $row['request_type'];$dbpurpose_for_request = $row['purpose_for_request'];$dbcompany_name = $row['company_name'];
            $dbstartDate = $row['startDate'];$dbendDate = $row['endDate'];$dbemail = $row['email'];$dbidUpload = $row['id_card'];
            $dbdoc = $row['doc'];

            //send email to disclosures with individual details

            include_once 'email_message.php';
            $message = corporate_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbcompany_name,$dbstartDate,$dbendDate,$dbemail);
            //$user_message = user_message($logo,$dbcompany_name);
            //echo $message;exit();

            //send email to disclusures
            send_mail_corporate($message,$dbidUpload,$dbdoc);

            //store user email in session to send mail
            $_SESSION['name'] = $dbcompany_name;
            $_SESSION['user_email'] = $dbemail;
            //send email to user
            //send_mail_user($user_message,$dbemail);

        }elseif($recordType == "Law Enforcement Agency(LEA)"){
            if (mysqli_query($conn, "CALL GetLeaCodeExpire")){
                $sql = "SELECT * FROM cdr_lea_request WHERE code = '$rand_code' AND code_status = '0' ";
            }

            $results = mysqli_query($conn,$sql);

            $count=mysqli_num_rows($results);

            if ($count == "0"){
                ?>
                <script>
                    window.alert('Confirmation Code Has Expired.\nKindly Restart The Process.\nThank You!!!');
                    window.location.href='index.php';
                </script>

                <?php
                exit();
            }
            $row = mysqli_fetch_assoc($results);
            $dbmsisdn = $row['msisdn'];$dbother_msisdn = $row['other_msisdn'];$dbservice = $row['service_type'];$dbrecordType = $row['record_type'];
            $dbrequest_type = $row['request_type'];$dbpurpose_for_request = $row['purpose_for_request'];$name_of_security_agency = $row['security_agency_name'];
            $name_of_investigator = $row['investigator_name'];$telephone = $row['telephone_number'];$dbstartDate = $row['startDate'];
            $dbendDate = $row['endDate'];$dbemail = $row['email'];$dbidUpload = $row['id_card'];$dborder = $row['court_order'];

            //send email to disclosures with individual details

            include_once 'email_message.php';
            $message = lea_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$name_of_security_agency,$name_of_investigator,$telephone,$dbstartDate,$dbendDate,$dbemail);
            //$user_message = user_message($logo,$name_of_investigator);
            //echo $message;exit();

            //send email to disclosures
            send_mail_lea($message,$dbidUpload,$dborder);

            //store user email in session to send mail
            $_SESSION['name'] = $name_of_investigator;
            $_SESSION['user_email'] = $dbemail;
            //send email to user
            //send_mail_user($user_message,$dbemail);

        }elseif($recordType == "Others"){
            if (mysqli_query($conn, "CALL GetOtherCodeExpire")){
                $sql = "SELECT * FROM cdr_other_request WHERE code = '$rand_code' AND code_status = '0' ";

            }

            $results = mysqli_query($conn,$sql);

            $count=mysqli_num_rows($results);

            if ($count == "0"){
                ?>
                <script>
                    window.alert('Confirmation Code Has Expired\nKindly Restart The Process.\nThank You!!!');
                    window.location.href='index.php';
                </script>

                <?php
                exit();
            }
            $row = mysqli_fetch_assoc($results);
            $dbmsisdn = $row['msisdn'];$dbother_msisdn = $row['other_msisdn'];$dbservice = $row['service_type'];$dbrecordType = $row['record_type'];
            $dbrequest_type = $row['request_type'];$dbpurpose_for_request = $row['purpose_for_request'];$dbfullname = $row['fullname'];
            $dbstartDate = $row['startDate'];$dbendDate = $row['endDate'];$dbemail = $row['email'];$dbidUpload = $row['id_card'];

            include_once 'email_message.php';
            $message = others_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbfullname,$dbstartDate,$dbendDate,$dbemail);
            //$user_message = user_message($logo,$dbfullname);
            //echo $message;exit();
            //send email to disclosures with individual details

            //send email to disclosures
            send_mail_others($message,$dbidUpload);

            //store user email in session to send mail
            $_SESSION['name'] = $dbfullname;
            $_SESSION['user_email'] = $dbemail;
            //send email to user
            //send_mail_user($user_message,$dbemail);

        }
        ?>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!--    Favicon-->
        <link rel="shortcut icon" href="favicon.ico" >
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        </script>
        <style>
            /* CSS used here will be applied after bootstrap.css */
            .modal-header-success {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #da0000;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
        </style>
        <!--<script>-->
        <!--    window.alert("Details Added To Database Successfully");-->
        <!--    window.location.href = "addAdvancedFee.php";-->
        <!--</script>-->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header modal-header-success">
                        <!--                <a type="button" href="addAdvancedFee.php" class="close" data-dismiss="modal" aria-hidden="true">×</a>-->
                        <h4 class="modal-title">
                            <h1><i class="glyphicon glyphicon-thumbs-up"></i> Thanks For Your Request</h1>
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form>
                            <p style="font-size: large">We will return your information to you securely by email.</p>
                            <p style="font-size: large">We hope to respond to your request within seven (7) working days from the receipt of request and all relevant documents indicated.&nbsp;</p>
                            <a href="user-sender.php" class="btn btn-default">Close</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            })
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert("Incorrect Confirmation Code");
            window.location.href = "cdr_form_2.php";
            //history.back();
        </script>
        <?php
    }
//    $sql = "INSERT INTO users(username,password,fullname,role,access_level) "
//        . "VALUE ('$username','$hashPassword','$fullname','$role','$access_level')";
// 850147
//    if (!mysqli_query($conn, $sql)) {
//        die('Error: ' . mysqli_error($conn));
//    }
//
//    mysqli_close($conn);


}elseif(isset($_GET['error'])){ ?>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <style>
        /* CSS used here will be applied after bootstrap.css */
        .modal-header-danger {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #000000;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
    </style>
    <!--<script>-->
    <!--    window.alert("Details Added To Database Successfully");-->
    <!--    window.location.href = "addAdvancedFee.php";-->
    <!--</script>-->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header modal-header-danger">
                    <!--                <a type="button" href="addAdvancedFee.php" class="close" data-dismiss="modal" aria-hidden="true">×</a>-->
                    <h4 class="modal-title">
                        <h1><i class="glyphicon glyphicon-thumbs-down"></i> Sorry</h1>
                    </h4>
                </div>
                <div class="modal-body">

                    <form>
                        <p style="font-size: large">Error: System is currently down. Please try again later!!!.</p>
                        <a href="index.php" class="btn btn-default">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
        })
    </script>
<?php
}
?>

