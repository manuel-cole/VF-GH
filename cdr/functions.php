<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Date: 30/08/2016
 * Time: 09:46
 */
function sendSMS($msisdn, $message){
    $xml = "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ser=\"http://service.sms.vodafone.com.gh/\">
   <soapenv:Header/>
   <soapenv:Body>
      <ser:sendSMS>
         <source>Vodafone</source>
         <destination>$msisdn</destination>
         <message>$message</message>
      </ser:sendSMS>
   </soapenv:Body>
</soapenv:Envelope>";
    $url = 'http://10.233.203.105:7001/SMSService/SMSSOAPService';
//        trigger_error($xml);
    $response = processService($url, $xml);
    trigger_error($response);
    $xml = new DOMDocument();
    $xml->loadXML( $response );
    if($xml instanceof DOMDocument){
        $status = $xml->getElementsByTagName('sendSMSResponse')->item(0);
    }
}

function processService($url, $xml){
//        trigger_error( $xml );
    $curl = curl_init();
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, $url);
    curl_setopt($curl,     CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl,     CURLOPT_TIMEOUT,120);
    curl_setopt($curl,     CURLOPT_HTTPHEADER,array ('SOAP-Response:""','Content-Type: text/xml; charset=utf-8',"Expect: "));
    curl_setopt ($curl, CURLOPT_POST, 1);
    curl_setopt ($curl, CURLOPT_POSTFIELDS, $xml);
    $output = curl_exec($curl);
    curl_close ($curl);
//        trigger_error($output);
    return $output;
}

function send_mail_individual($msg,$idUpload){
    include "mail.php";

    $from_email = 'developer.gh@vodafone.com'; //sender email
    //$from_email = 'CDR';
    $recipient_email = 'disclosures.gh@vodafone.com';
    //$recipient_email = 'emmanuel.gamor@vodafone.com';
    $subject = "Call Data Record Request"; //subject of email
    $message = $msg; //message body
    $cc = 'emmanuel.gamor@vodafone.com';

    //get file details we need
    $file_size        = find_filesize($idUpload);
    $file_type = pathinfo($idUpload,PATHINFO_EXTENSION);


    //read from the uploaded file & base64_encode content for the mail
    $sPath = "uploads/".$idUpload;
    $attachment = chunk_split(base64_encode(file_get_contents($sPath)));

    //reply email
    $user_email = "disclosures.gh@vodafone.com";


    $boundary = md5("sanwebe");
    //header
    $headers = '';
    // Build mail header
    $headers .= "X-Mailer: Vodafone v2.0" . "\r\n";
    //$headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: ".$user_email."" . "\r\n";
    $headers .= "Cc: " . $cc."\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary =".$boundary."\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    //$body .= '';
    $body .="Content-Type: $file_type; name=".$idUpload."\r\n";
    $body .="Content-Disposition: attachment; filename=".$idUpload."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment;

    //$sentMail = mail($recipient_email, $subject, $body, $headers);
    //mail($recipient_email, $subject, $body, $headers);
    //mail($to, $subject, $message, $header);
    //mailer($from_email,$recipient_email,$subject,$body,$cc);
    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {

    }else{
        header('location: cdr_form_finish.php?error='.base64_encode('Error: System is currently down. Please try again later!!'));
    }
}

function send_mail_corporate($msg,$idUpload,$letter){
    include "mail.php";

    $from_email = 'developer.gh@vodafone.com'; //sender email
    $recipient_email = 'disclosures.gh@vodafone.com'; //recipient email
    $subject = "Call Data Record Request"; //subject of email
    $message = $msg; //message body
    $cc = 'emmanuel.gamor@vodafone.com';

    //get file details we need
    //$file_name        = "9933back.png";
    $file_size        = find_filesize($idUpload);
    $file_type = pathinfo($idUpload,PATHINFO_EXTENSION);

    //$file_name2        = "3000monogrammed_4.doc";
    $file_size2        = find_filesize($letter);
    $file_type2        = pathinfo($letter,PATHINFO_EXTENSION);

    //read from the uploaded file & base64_encode content for the mail
    $sPath = "uploads/".$idUpload;
    $wPath = "uploads/".$letter;
    $attachment = chunk_split(base64_encode(file_get_contents($sPath)));
    $attachment2 = chunk_split(base64_encode(file_get_contents($wPath)));

    //reply email
    $user_email = "disclosures.gh@vodafone.com";

    $boundary = md5("sanwebe");
    //header
    $headers = '';
    // Build mail header
    $headers .= "X-Mailer: Vodafone v2.0" . "\r\n";
    //$headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: ".$user_email."" . "\r\n";
    $headers .= "Cc: " . $cc."\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary =".$boundary."\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=".$idUpload."\r\n";
    $body .="Content-Disposition: attachment; filename=".$idUpload."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment;

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type2; name=".$letter."\r\n";
    $body .="Content-Disposition: attachment; filename=".$letter."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment2;

    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {

    }else{
        header('location: cdr_form_finish.php?error='.base64_encode('Error: System is currently down. Please try again later!!'));
    }
}

function send_mail_lea($msg,$idUpload,$letter){
    include "mail.php";

    $from_email = 'developer.gh@vodafone.com'; //sender email
    $recipient_email = 'disclosures.gh@vodafone.com'; //recipient email
    $subject = "Call Data Record Request"; //subject of email
    $message = $msg; //message body
    $cc = 'emmanuel.gamor@vodafone.com';

    //get file details we need
    //$file_name        = "9933back.png";
    $file_size        = find_filesize($idUpload);
    $file_type = pathinfo($idUpload,PATHINFO_EXTENSION);

    //$file_name2        = "3000monogrammed_4.doc";
    $file_size2        = find_filesize($letter);
    $file_type2        = pathinfo($letter,PATHINFO_EXTENSION);

    //read from the uploaded file & base64_encode content for the mail
    $sPath = "uploads/".$idUpload;
    $wPath = "uploads/".$letter;
    $attachment = chunk_split(base64_encode(file_get_contents($sPath)));
    $attachment2 = chunk_split(base64_encode(file_get_contents($wPath)));

    //reply email
    $user_email = "disclosures.gh@vodafone.com";

    $boundary = md5("sanwebe");
    //header
    $headers = '';
    // Build mail header
    $headers .= "X-Mailer: Vodafone v2.0" . "\r\n";
    //$headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: ".$user_email."" . "\r\n";
    $headers .= "Cc: " . $cc."\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary =".$boundary."\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=".$idUpload."\r\n";
    $body .="Content-Disposition: attachment; filename=".$idUpload."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment;

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type2; name=".$letter."\r\n";
    $body .="Content-Disposition: attachment; filename=".$letter."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $attachment2;

    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {

    }else{
        header('location: cdr_form_finish.php?error='.base64_encode('Error: System is currently down. Please try again later!!'));
    }
}

function send_mail_others($msg,$idUpload)
{
    include "mail.php";

    $from_email = 'developer.gh@vodafone.com'; //sender email
    $recipient_email = 'disclosures.gh@vodafone.com'; //recipient email
    $subject = "Call Data Record Request"; //subject of email
    $message = $msg; //message body
    $cc = 'emmanuel.gamor@vodafone.com';

    //get file details we need
    //$file_name        = "9933back.png";
    $file_size = find_filesize($idUpload);
    $file_type = pathinfo($idUpload, PATHINFO_EXTENSION);


    //read from the uploaded file & base64_encode content for the mail
    $sPath = "uploads/" . $idUpload;
    $attachment = chunk_split(base64_encode(file_get_contents($sPath)));

    //reply email
    $user_email = "disclosures.gh@vodafone.com";

    $boundary = md5("sanwebe");
    //header
    $headers = '';
    // Build mail header
    $headers .= "X-Mailer: Vodafone v2.0" . "\r\n";
    //$headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:" . $from_email . "\r\n";
    $headers .= "Reply-To: " . $user_email . "" . "\r\n";
    $headers .= "Cc: " . $cc . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary =" . $boundary . "\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $file_type; name=" . $idUpload . "\r\n";
    $body .= "Content-Disposition: attachment; filename=" . $idUpload . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $attachment;

    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if ($sentMail) //output success or failure messages
    {

    } else {
        header('location: cdr_form_finish.php?error=' . base64_encode('Error: System is currently down. Please try again later!!'));
    }
}
    function send_mail_user($msg,$dbemail){
        //include "mail.php";

        $from_email = 'developer.gh@vodafone.com'; //sender email
        //$from_email = 'CDR';
        $recipient_email = $dbemail; //recipient email
        $subject = "Vodafone Call Data Record Request"; //subject of email
        $message = $msg; //message body

        //reply email
        $user_email = "disclosures.gh@vodafone.com";

        $boundary = md5("sanwebe");
        //header
        // Build mail header
        //$headers .= "X-Mailer: Vodafone v2.0" . "\r\n";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From:".$from_email."\r\n";
        $headers .= "Reply-To: ".$user_email."" . "\r\n";
        //$headers .= "Cc: " . $cc."\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary =".$boundary."\r\n\r\n";

        //plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));

        $sentMail = mail($recipient_email, $subject, $body, $headers);
        if($sentMail) //output success or failure messages
        {

        }else{
            header('location: cdr_form_finish.php?error='.base64_encode('Error: System is currently down. Please try again later!!'));
        }
}

    function codeResend($msisdn,$code){
        $rand_code = $code;
        $message = $rand_code." is your call data records confirmation code.";
        sendSMS($msisdn,$message);
        //echo $rand_code;exit();

    }
?>