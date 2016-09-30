<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Date: 18/08/2016
 * Time: 10:56
 */
ob_start();
session_start();

include_once '../dbConnect.php';
if (isset($_POST['cmdFraudPrevention-incidents'])){
//    $aprNCA = $_POST['aprNCA'];
//    $aprSIG = $_POST['aprSIG'];
//    $aprFraudbuster = $_POST['aprFraudbuster'];
//    $aprInternal = $_POST['aprInternal'];
//    $aprSimbox = $_POST['aprSimbox'];
//    $aprFixed = $_POST['aprFixed'];
//    $aprRoaming = $_POST['aprRoaming'];
//    $aprMobile = $_POST['aprMobile'];
//    $aprPrepaid = $_POST['aprPrepaid'];

    $aprNCA = mysqli_real_escape_string($conn, $_POST['aprNCA']);
    $aprSIG = mysqli_real_escape_string($conn, $_POST['aprSIG']);
    $aprFraudbuster = mysqli_real_escape_string($conn, $_POST['aprFraudbuster']);
    $aprInternal = mysqli_real_escape_string($conn, $_POST['aprInternal']);
    $aprSimbox = $_SESSION['aprSimbox'];
    $aprFixed = mysqli_real_escape_string($conn, $_POST['aprFixed']);
    $aprRoaming = mysqli_real_escape_string($conn, $_POST['aprRoaming']);
    $aprMobile = mysqli_real_escape_string($conn, $_POST['aprMobile']);
    $aprPrepaid = mysqli_real_escape_string($conn, $_POST['aprPrepaid']);


    $sql = "UPDATE 2015_2016_april
            SET aprNCA = '$aprNCA',
                aprSIG = '$aprSIG',
                aprFraudbuster = '$aprFraudbuster',
                aprInternal = '$aprInternal',
                aprSimbox = '$aprSimbox',
                aprFixed = '$aprFixed',
                aprRoaming = '$aprRoaming',
                aprMobile = '$aprMobile',
                aprPrepaid = '$aprPrepaid'
            WHERE financialYear = 1516 ";

    ?>
    <script>
        window.alert("Data Saved Successfully");
        window.location.href = "corporate_home.php";
    </script>
    <?php
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
}