<?php

$config = array(
//db settings
    'db_host' => 'localhost'
, 'db_name' => 'fraud'
, 'db_username' => 'fraud'
, 'db_password' => 'fraud'
, 'db_port' => '3306'
, 'time_zone' => 'Africa/Casablanca'
//email settings
, 'smtp' => ''
, 'smtp_port' => ''
, 'email_mime' => 'html/text'
, 'email_username' => ''
//sms settings
, 'sms_host' => ''
, 'sms_username' => ''
, 'sms_password' => ''
, 'sms_sender' => 'Vodafone'
, 'sms_type' => 'Plain Text'
);

//error log
$param = array(
    'appname' => 'Travel Portal',
    'error_file' => 'logs/error-' . date('Ymd') . '.log',
    'log' => 'true',
    'logfile' => 'errors.log',
    'mail' => '',
    'mailFrom' => 'developer.gh@vodafone.com',
    'mailSubject' => 'Travel Portal',
    'redirect' => 'err.php',
    'show' => 'false',
    'path' => 'http://vfweb/TravelPortal',
    'ldap' => 'LDAP://10.74.161.9',//internal.vodafone.com', //'ldap' => "ecghdc991vw", 
    'ldap_auth' => '@vodafone.com',
    'dn' => 'OU=GH,DC=internal,DC=vodafone,DC=com',
    'ceo' => 'kofi.boaitey@vodafone.com',
    'appdeveloper' => 'abdulqadir.ibrahim@vodafone.com',
    'askHR' => 'Telanize.Ashitey@vodafone.com',
    'domain' => 'VF-ROOT',
);
