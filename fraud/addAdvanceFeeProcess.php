<?php
ob_start();
session_start();
include_once 'dbConnect.php';
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}

$fullname = $_SESSION['fullname'];

// escape variables for security
$msisdn = mysqli_real_escape_string($conn, $_POST['msisdn']);
$fraudType = mysqli_real_escape_string($conn, $_POST['fraudType']);
$eventDate = mysqli_real_escape_string($conn, $_POST['eventDate']);
$agentMsisdn = mysqli_real_escape_string($conn, $_POST['agentMsisdn']);
$remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
//$estimatedDamage = mysqli_real_escape_string($conn, $_POST['estimatedDamage']);

$sql = "INSERT INTO aff(msisdn,fraudType,eventDate,remarks,reporter,agent_msisdn) "
    . "VALUE ('$msisdn','$fraudType','$eventDate','$remarks','$fullname','$agentMsisdn')";

?>
<link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
<!--    Favicon-->
<link rel="shortcut icon" href="favicon.ico" >
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
<script>
    function close() {
        window.location='addAdvancedFee.php';
    }
</script>
<style>
    /* CSS used here will be applied after bootstrap.css */
    .modal-header-success {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #5cb85c;
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
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Success</h1>
                </h4>
            </div>
            <div class="modal-body">
                <form>
                    <p style="font-size: large">Details Added To Database Successfully!!!.</p>
                    <a href="addAdvancedFee.php" class="btn btn-default">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
}

mysqli_close($conn);
?>
