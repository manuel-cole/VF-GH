<?php

include "mail.php";

    $from_email = 'CDR Request'; //sender email
    $recipient_email = 'emmanuel.gamor@vodafone.com'; //recipient email
    $subject = "Test mail"; //subject of email
    $message = 'mesage'; //message body

    //get file details we need
    $file_name        = "9933back.png";
    $file_size        = find_filesize($file_name);
    $file_type = pathinfo($file_name,PATHINFO_EXTENSION);

    $file_name2        = "9933back.png";
    $file_size2        = find_filesize($file_name2);
    $file_type2        = pathinfo($file_name2,PATHINFO_EXTENSION);

    //read from the uploaded file & base64_encode content for the mail
    $sPath = "uploads/".$file_name;
    $wPath = "uploads/".$file_name2;
    $attachment = chunk_split(base64_encode(file_get_contents($sPath)));
    $attachment2 = chunk_split(base64_encode(file_get_contents($wPath)));

    //reply email
    $user_email = "disclosures.gh@vodafone.com";

    $boundary = md5("sanwebe");
    //header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: ".$user_email."" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary =".$boundary."\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=".$file_name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment;

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type2; name=".$file_name2."\r\n";
    $body .="Content-Disposition: attachment; filename=".$file_name2."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment2;

    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {
        die('Thank you for your email');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');
    }


?>

