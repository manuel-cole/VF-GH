<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Date: 11/08/2016
 * Time: 16:18
 */
ob_start();
session_start();
include_once 'dbConnect.php';

$fullname = $_SESSION['fullname'];


//if update button is clicked
if(isset($_POST['cmdUpdateUser'])){


    $result=mysqli_query($conn, "SELECT * from users");
    $count=mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)) {

        $id=$row['id'];

        if (array_key_exists($id, $_POST["check"])) {
            $ischecked=$_POST["check"][$id];
            /* See if this has a value of 1.  If it does, it means it has been checked */
            if ($ischecked==1) {
                $sql = "SELECT * FROM users WHERE id = '$id' ";
                $result=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($result);
                //echo $row['username'];
                //echo $id;
                $userId = $row['id'];
                $userUsername = $row['username'];
                $userFullname = $row['fullname'];
                $userRole = $row['role'];
                $userAccess_level = $row['access_level'];

                if (!mysqli_query($conn,$sql)) {

                    die('Error: ' . mysqli_error($conn));
                }
            }
        }
    }
}

if (isset($_POST['cmdSaveUserDetails'])){
    $Nid = $_GET['id'];
    $Nusername = $_POST['Nusername'];
    $Nfullname = $_POST['Nfullname'];
    $Nrole = $_POST['Nrole'] ;
    $Naccess_level = $_POST['Naccess_level'] ;

    $sql = " UPDATE users 
SET username = '$Nusername',
    fullname = '$Nfullname', 
    role = '$Nrole',
    access_level = '$Naccess_level'
    WHERE id = '$Nid' ";

    ?>
    <script>
        window.alert("User Details Updated Successfully!!!");
        window.location.href = "view-deleteUser.php";
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
                            <form class="form-horizontal" action="update-user-details.php?id=<?php echo $userId;?>" method="POST" name="generalForm">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Username :</label>
                                    <div class="col-xs-9">
                                        <input name="Nusername" type="text" class="form-control"  placeholder="<?php echo $userUsername;?>" value="<?php echo $userUsername;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Fullname :</label>
                                    <div class="col-xs-9">
                                        <input name="Nfullname" type="text" class="form-control" placeholder="<?php echo $userFullname;?>" value="<?php echo $userFullname;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Role :</label>
                                    <div class="col-xs-9">
                                        <input name="Nrole" type="text" class="form-control" placeholder="<?php echo $userRole;?>" value="<?php echo $userRole;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Access Level :</label>
                                    <div class="col-xs-9">
                                        <select name="Naccess_level" class="form-control">
                                            <option value="<?php echo $userRole;?>"><?php echo $userAccess_level;?></option>
                                            <option value="admin">Admin</option>
                                            <option value="member">Member</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-offset-6 col-xs-6">
                                        <button name="cmdSaveUserDetails" type="submit" class="btn btn-success" style="background-color: red;color: white;"><li class="fa fa-fw fa-save"></li>Save</button>
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

