<?php
ob_start();
session_start();
include_once 'dbConnect.php';

if((!empty($_FILES["idUpload"])) && ($_FILES['idUpload']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb

    $filename = rand(1000,100000).basename($_FILES['idUpload']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
    if (($ext == "jpg" || $ext == "pdf" || $ext == "png" || $ext == "JPG" || $ext == "PDF" || $ext == "PNG" || $ext == "jpeg" || $ext == "JPEG") &&
        ($_FILES["idUpload"]["type"] == "image/jpeg" || $_FILES["idUpload"]["type"] == "application/pdf" || $_FILES["idUpload"]["type"] == "image/png") &&
        ($_FILES["idUpload"]["size"] < 350000)) {
        //Determine the path to which we want to save this file
        $newname = dirname(__FILE__).'/uploads/'.$filename;

        // make file name in lower case
        $new_file_name = strtolower($filename);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);
        $new_final_file = dirname(__FILE__).'/uploads/'.$final_file;
        $_SESSION['idUpload'] = $final_file;

        if ((move_uploaded_file($_FILES['idUpload']['tmp_name'],$new_final_file))) {

            // escape variables for security

            $msisdn = mysqli_real_escape_string($conn, $_POST['msisdn']);
            $alt_msisdn = mysqli_real_escape_string($conn, $_POST['alt_msisdn']);
            $eventDate = mysqli_real_escape_string($conn, $_POST['eventDate']);
            $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
            $institution = mysqli_real_escape_string($conn, $_POST['institution']);
            $id_type = mysqli_real_escape_string($conn, $_POST['id_type']);
            $idUpload = $_SESSION['idUpload'];
            $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

            $sql = "INSERT INTO clir_request(msisdn,alt_msisdn,eventDate,firstname,lastname,institution,id_type,idUpload,remarks) "
                . "VALUE ('$msisdn','$alt_msisdn','$eventDate','$firstname','$lastname','$institution','$id_type','$idUpload','$remarks')";

            ?>
            <script>
                window.alert("Details Added Successfully");
                window.location.href = "addOthers.php";
            </script>
            <?php
            if (!mysqli_query($conn, $sql)) {
                die('Error: ' . mysqli_error($conn));
            }

            mysqli_close($conn);
            //echo "It's done! The file has been saved as: ".$newname;
        } else {
            header('location: addOthers.php?error='.base64_encode('Error: A problem occurred during file upload!'));
            //echo "Error: A problem occurred during file upload!";
        }
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Error: File ".$_FILES["uploaded_file"]["name"]." already exists'));
//                //echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
//            }
    } else {
        header('location: addOthers.php?error='.base64_encode('Error: Only JPG, PNG or PDF images under 350Kb are accepted for upload'));
        //echo "Error: Only .jpg images under 350Kb are accepted for upload";
    }
}else {
    header('location: addOthers.php?error='.base64_encode('Error: No file uploaded'));
    //echo "Error: No file uploaded";
}



