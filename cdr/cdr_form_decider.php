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
if (!isset($_POST['cmdBtnSecond'])){
    header('location: cdr_form.php');
    exit();
}

$_SESSION['msisdn'] = $msisdn = $_POST['msisdn'];
$_SESSION['other_msisdn'] = $other_msisdn = $_POST['other_msisdn'];
$_SESSION['service'] = $service = $_POST['service'];
$recordType = $_POST['column_select'];
$purpose_for_request = $_POST['layout_select'];
if ($purpose_for_request == "col1_ms"){
    $_SESSION['purpose_for_request'] = "Embassy";
}elseif ($purpose_for_request == "col1_sm"){
    $_SESSION['purpose_for_request'] = "Personal";
}elseif ($purpose_for_request == "col2_mss"){
    $_SESSION['purpose_for_request'] = "Official";
}elseif ($purpose_for_request == "col2_ssm"){
    $_SESSION['purpose_for_request'] = "Personal";
}elseif ($purpose_for_request == "col3_mss"){
    $_SESSION['purpose_for_request'] = "Investigations";
}elseif($purpose_for_request == "col4_mss"){
    $_SESSION['purpose_for_request'] = "Investigations";
}
if ($recordType == "col1"){
    $_SESSION['recordType'] = "Individual";
}elseif ($recordType == "col2"){
    $_SESSION['recordType'] = "Corporate";
}elseif ($recordType == "col3"){
    $_SESSION['recordType'] = "Law Enforcement Agency(LEA)";
}elseif ($recordType == "col4"){
    $_SESSION['recordType'] = "Others";
}
//$_SESSION['request_type'] = $request_type = $_POST['request_type1']." ,".$_POST['request_type2']." ,".$_POST['request_type3']." ,"
//    .$_POST['request_type4']." ,".$_POST['request_type5'] ;

$request_type = $_POST['request_type'];
//echo $_SESSION['request_type'];exit();
if(isset($_POST['request_type'])) {
$req = "";
    foreach ($request_type as $request){
       // echo $request."<br />";
        $req .= $request."<br />";
    }
    $_SESSION['request_type'] = $req;
//echo $req;
} // end brace for if(isset

else {
    header('location: cdr_form.php?error='.base64_encode('No request type chosen!!!'));
    exit();
}
//$_SESSION['idUpload'] = $idUpload = $_FILES['idUpload'];


if (isset($_SESSION['msisdn'])){

    //$msisdn = $_SESSION['msisdn'];
    //$service = $_SESSION['service'];

    ########################## file upload validate ##########################

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
            //if (!file_exists($newname)) {
                //Attempt to move the uploaded file to it's new place
                if ((move_uploaded_file($_FILES['idUpload']['tmp_name'],$new_final_file))) {
                    $recordType = $_POST['column_select'];
                    $requestType = $_POST['layout_select'];
                    //$recordType = $_POST['column_select'];
                    //$recordType = $_POST['column_select'];

                if ($recordType == "col1"){
                    header('location: cdr_form_individual.php');
                    exit();
                }elseif ($recordType == "col2"){
                    header('location: cdr_form_corporate.php');
                    exit();
                }elseif ($recordType == "col3"){
                    header('location: cdr_form_lea.php');
                    exit();
                }elseif ($recordType == "col4"){
                    header('location: cdr_form_others.php');
                    exit();
                }else{
                    header('location: cdr_form.php?error='.base64_encode('Please enter your number!!!'));
                    exit();
                }
                    //echo "It's done! The file has been saved as: ".$newname;
                } else {
                    header('location: cdr_form.php?error='.base64_encode('Error: A problem occurred during file upload!'));
                    //echo "Error: A problem occurred during file upload!";
                }
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Error: File ".$_FILES["uploaded_file"]["name"]." already exists'));
//                //echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
//            }
        } else {
            header('location: cdr_form.php?error='.base64_encode('Error: Only JPG, PNG or PDF images under 350Kb are accepted for upload!'));
            //echo "Error: Only .jpg images under 350Kb are accepted for upload";
        }
    }else {
        header('location: cdr_form.php?error='.base64_encode('Error: Only JPG, PNG or PDF images under 350Kb are accepted for upload!'));
//        echo file_err;
    }

//    $error = 0;
//    if (isset($_FILES["indId"])) {
//        $target_dir = "uploads/";
//        $target_file = $target_dir . basename($_FILES["indId"]["name"]);
//
//        $allowedExts = array("doc", "docx","jpg","jpeg","gif", "pdf", "odt","png");
//        $temp = explode(".", $_FILES["indId"]["name"]);
//        $extension = end($temp);
//
//        if ($_FILES["indId"]["error"] > 0) {
//            header('location: cdr_form_1.php?error='.base64_encode('Please upload your ID or Document!!!'));
//            $error = 1;
//            exit();
//        }
//        if (!in_array($extension, $allowedExts)) {
//            header('location: cdr_form_1.php?error='.base64_encode('Sorry, file extension not allowed.!!!'));
//            $error = 1;
//            exit();
//        }
//        if ($_FILES["indId"]["size"] > 512400) {
//            header('location: cdr_form_1.php?error='.base64_encode('File size shoud be less than 500 kB.!!!'));
//            $error = 1;
//        }
//
//        if ($error == 0) {
//            if (move_uploaded_file($_FILES["indId"]["tmp_name"], $target_file)) {
//                $recordType = $_POST['column_select'];
//                $requestType = $_POST['layout_select'];
//                //$recordType = $_POST['column_select'];
//                //$recordType = $_POST['column_select'];
//
//                if ($recordType == "col1"){
//                    header('location: cdr_form_individual.php');
//                    exit();
//                }elseif ($recordType == "col2"){
//                    header('location: cdr_form_corporate.php');
//                    exit();
//                }elseif ($recordType == "col3"){
//                    header('location: cdr_form_lea.php');
//                    exit();
//                }elseif ($recordType == "col4"){
//                    header('location: cdr_form_others.php');
//                    exit();
//                }else{
//                    header('location: cdr_form.php?error='.base64_encode('Please enter your number!!!'));
//                    exit();
//                }
//
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Sorry, your file was not uploaded'));
//            }
//        } else {
//            header('location: cdr_form_1.php?error='.base64_encode('Unable to upload your file!!!'));
//        }
//    }else { }
//    if (isset($_POST['cmdBtnThird'])) {
//
//        $target_dir = "uploads/";
//        $target_file = $target_dir . basename($_FILES["indId"]["name"]);
//        $uploadOk = 1;
//        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//
//        $allowedExts = array("doc", "docx", "pdf", "odt");
//        $temp = explode(".", $_FILES["indId"]["name"]);
//        $extension = end($temp);
//        //check file uploaded
//        if($_FILES["indId"]["error"] != 0) {
//            header('location: cdr_form_1.php?error='.base64_encode('Please upload your ID or Document!!!'));
//        }
//
//        // Check file size
//        if ($_FILES["indId"]["size"] > 500000) {
//            header('location: cdr_form_1.php?error='.base64_encode('Sorry, your file is too large.!!!'));
//            exit();
//        }
//        if (!in_array($extension, $allowedExts)) {
//            header('location: cdr_form_1.php?error='.base64_encode('Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.!!!'));
//        }
//        // Allow certain file formats
////        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
////            && $imageFileType != "gif" && $imageFileType != "pdf"
////        ) {
////            header('location: cdr_form_1.php?error='.base64_encode('Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.!!!'));
////            //header('location:javascript://history.go(-1)?error='.base64_encode('Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.!!!'));
////           // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
////            exit();
////        }
//        // Check if $uploadOk is set to 0 by an error
//            if (move_uploaded_file($_FILES["indId"]["tmp_name"], $target_file)) {
//                $recordType = $_POST['column_select'];
//                $requestType = $_POST['layout_select'];
//                //$recordType = $_POST['column_select'];
//                //$recordType = $_POST['column_select'];
//
//                if ($recordType == "col1"){
//                    header('location: cdr_form_individual.php');
//                    exit();
//                }elseif ($recordType == "col2"){
//                    header('location: cdr_form_corporate.php');
//                    exit();
//                }elseif ($recordType == "col3"){
//                    header('location: cdr_form_lea.php');
//                    exit();
//                }elseif ($recordType == "col4"){
//                    header('location: cdr_form_others.php');
//                    exit();
//                }else{
//                    header('location: cdr_form.php?error='.base64_encode('Please enter your number!!!'));
//                    exit();
//                }
//
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Sorry, your file was not uploaded'));
//            }
//        }
//    if (isset($_POST['doc'])){
//        $target_dir = "uploads/";
//        $target_file = $target_dir . basename($_FILES["doc"]["name"]);
//        $uploadOk = 1;
//        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//        // Check file size
//        if ($_FILES["doc"]["size"] > 500000) {
//            header('location: cdr_form_1.php?error='.base64_encode('Sorry, your file is too large.!!!'));
//            exit();
//        }
//        // Allow certain file formats
//        if ($imageFileType != "docx" && $imageFileType != "docm" && $imageFileType != "dotx"
//            && $imageFileType != "dotm" && $imageFileType != "pdf"
//        ) {
//            header('location: cdr_form_1.php?error='.base64_encode('Sorry, only DOCX, DOTX, DOCM, PDF & DOTM files are allowed.!!!'));
//            //header('location:javascript://history.go(-1)?error='.base64_encode('Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.!!!'));
//            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//            exit();
//        }
//        // Check if $uploadOk is set to 0 by an error
//        if ($uploadOk == 0) {
//            header('location: cdr_form_1.php?error='.base64_encode('Sorry, your file was not uploaded'));
//            //echo "Sorry, your file was not uploaded.";
//            // if everything is ok, try to upload file
//        } else {
//            if (move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file)) {
//                $recordType = $_POST['column_select'];
//                $requestType = $_POST['layout_select'];
//                //$recordType = $_POST['column_select'];
//                //$recordType = $_POST['column_select'];
//
//                if ($recordType == "col1"){
//                    header('location: cdr_form_individual.php');
//                    exit();
//                }elseif ($recordType == "col2"){
//                    header('location: cdr_form_corporate.php');
//                    exit();
//                }elseif ($recordType == "col3"){
//                    header('location: cdr_form_lea.php');
//                    exit();
//                }elseif ($recordType == "col4"){
//                    header('location: cdr_form_others.php');
//                    exit();
//                }else{
//                    header('location: cdr_form.php?error='.base64_encode('Please enter your number!!!'));
//                    exit();
//                }
//
//            } else {
//                header('location: cdr_form_1.php?error='.base64_encode('Sorry, your file was not uploaded'));
//            }
//        }
//    }


}else{
    header('location: cdr_form.php?error='.base64_encode('Please enter your number!!!'));
    exit();
}


?>