<?php
require_once('bootstrap.php');
session_page();
$id = $_GET['id'];
hrCompleteRequest($id);