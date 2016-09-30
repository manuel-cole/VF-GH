<?php
require_once('bootstrap.php');
session_page();
$empno = $_SESSION["emp_no"];
$id = $_GET['id'];
lmApproval($id, $empno);