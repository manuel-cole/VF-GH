<?php

if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is CSV and it's size is less than 350Kb
    $filename = basename($_FILES['uploaded_file']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
    if (($ext == "csv") && ($_FILES["uploaded_file"]["type"] == "image/csv") &&
        ($_FILES["uploaded_file"]["size"] < 350000)
    ) {
        //Determine the path to which we want to save this file
        $newname = dirname(__FILE__) . '/img/' . $filename;
        //Check if the file with the same name is already exists on the server
        if (!file_exists($newname)) {
            //Attempt to move the uploaded file to it's new place
            if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                echo "It's done! The file has been saved as: " . $newname;
            } else {
                echo "Error: A problem occurred during file upload!";
            }
        } else {
            echo "Error: File " . $_FILES["uploaded_file"]["name"] . " already exists";
        }
    } else {
        echo "Error: Only .jpg images under 350Kb are accepted for upload";
    }
} else {
    echo "Error: No file uploaded";
}
?>