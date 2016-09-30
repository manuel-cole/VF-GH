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
    $isdn = mysqli_real_escape_string($conn, $_POST['isdn']);
    $fraudType = mysqli_real_escape_string($conn, $_POST['fraudType']);
    $eventDate = mysqli_real_escape_string($conn, $_POST['eventDate']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $estimatedDamage = mysqli_real_escape_string($conn, $_POST['estimatedDamage']);

    $sql = "INSERT INTO fixed_high(isdn,fraudType,eventDate,company,country,reporter,estimatedDamage) "
        . "VALUE ('$isdn','$fraudType','$eventDate','$company','$country','$fullname','$estimatedDamage')";

    ?>
    <script>
        window.alert("Details Added To Database Successfully");
        window.location.href = "addFixedHigh.php";
    </script>
    <?php
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
?>
