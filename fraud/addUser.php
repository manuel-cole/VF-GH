<?php
ob_start();
session_start();
include_once 'dbConnect.php';

$fullname = $_SESSION['fullname'];

if (isset($_POST['cmdAddUser'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $access_level = mysqli_real_escape_string($conn, $_POST['access_level']);

    //hash password
    $hashPassword = md5($password);

    $sql = "INSERT INTO users(username,password,fullname,role,access_level) "
        . "VALUE ('$username','$hashPassword','$fullname','$role','$access_level')";

    ?>
    <script>
        window.alert("User Added Successfully");
        window.location.href = "addUser.php";
    </script>
    <?php
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FDS</title>

    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >
    <style>
        .sidebar ul li a.active {
            background-color: #eee;
        }

    </style>

</head>

<body>

<div id="wrapper">

    <?php
    include 'sidebar.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus fa-fw"></i>Add New Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-md-1"></div>
            <div class="panel panel-danger col-md-10">
                <div class="panel-body" style="">
                    <div class="">
                        <div class="bs-example">
                            <form class="form-horizontal" action="addUser.php" method="POST" name="generalForm">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Username :</label>
                                    <div class="col-xs-9">
                                        <input name="username" type="text" class="form-control"  placeholder="Enter Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Password :</label>
                                    <div class="col-xs-9">
                                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Fullname :</label>
                                    <div class="col-xs-9">
                                        <input name="fullname" type="text" class="form-control" placeholder="Enter Fullname of user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Role :</label>
                                    <div class="col-xs-9">
                                        <input name="role" type="text" class="form-control" placeholder="Enter role or position of new user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Access Level :</label>
                                    <div class="col-xs-9">
                                        <select name="access_level" class="form-control">
                                            <option value="">--Select Access Level--</option>
                                            <option value="admin">Admin</option>
                                            <option value="member">Member</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-offset-6 col-xs-6">
                                        <button name="cmdAddUser" type="submit" class="btn btn-success" style="background-color: red;color: white;"><li class="fa fa-fw fa-save"></li>Add User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
