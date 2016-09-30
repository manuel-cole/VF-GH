<?php
require_once 'sys/config.php';
require_once 'sys/db.class.php';
require_once 'sys/error.php';
require_once 'sys/email.core.php';
require_once 'sys/engine.sys.php';
//initialize timezone
date_default_timezone_set($config['time_zone']);
//mysql connection
$db = new MySql;
$db->connect($config['db_host'], $config['db_name'], $config['db_username'], $config['db_password']);
?>