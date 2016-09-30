<?php
ob_start();
session_start();
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}
include_once 'dbConnect.php';

$fullname = $_SESSION['fullname'];
// escape variables for security

$msisdn = mysqli_real_escape_string($conn, $_POST['msisdn']);
$agent_msisdn = mysqli_real_escape_string($conn, $_POST['agent_msisdn']);
$eventDate = mysqli_real_escape_string($conn, $_POST['eventDate']);
$remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

$sql = "INSERT INTO irsf(msisdn,agent_msisdn,eventDate,remarks,reporter) "
    . "VALUE ('$msisdn','$agent_msisdn','$eventDate','$remarks','$fullname')";


if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
}

mysqli_close($conn);
?>
    <script>
        window.alert("Details Added Successfully");
        window.location.href = "addIrsf.php";
    </script>
<?php
