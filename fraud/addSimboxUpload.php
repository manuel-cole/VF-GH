<?php
ob_start();
session_start();

$fullname = $_SESSION['fullname'];
$access_level = $_SESSION['access_level'];
require 'dbConnect.php';

//$level = $_SESSION['level'];
//$id = $_SESSION['sess_id'];
//$name = $_SESSION['name'];
//$function = $_SESSION['function'];

if(isset($_POST['btn-upload']))
{
    //$fileName = $_POST['fileName'];
    //$fileDescription = $_POST['fileDescription'];
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    //$file_type = $_FILES['file']['type'];
    $folder="uploads/";

    // new file size in KB
    $new_size = $file_size/1024;
    // new file size in KB

    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case

    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO uploads(file,fileSize) VALUES('$final_file','$new_size')";
        if (!mysqli_query($conn,$sql)) {
            die('Error: ' . mysqli_error($conn));
        }
        header('location: addSimboxProcess.php?csvfileName='.$final_file);
        // header('location: dashboard.php');
        exit();
        ?>
        <!--        <script>-->
        <!--            alert('File successfully uploaded');-->
        <!--            //window.location.href='addFile.php?success';-->
        <!--        </script>-->
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Error occured while uploading file');
            // window.location.href='addFile.php?fail';
            // </script>
        <?php
    }
}
?>