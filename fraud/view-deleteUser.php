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

if (isset($_GET['deleteId'])){
    $deletedId = $_GET['deleteId'];
    $sql = "DELETE FROM users WHERE id = $deletedId";


    if (!mysqli_query($conn,$sql)) {

        die('Error: ' . mysqli_error($conn));
    }
    ?>
    <script>
        window.alert("User Successfully Deleted!!!");
        window.location.href = "view-deleteUser.php";
    </script>
    <?php
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" ntent="IE=edge">
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
                    <h1 class="page-header"><i class="fa fa-users fa-fw"></i>Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                        <div class="bs-example">
                            <div class="row">
                                <form id="form1" action="update-user-details.php" method="post" >
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>

                                            <tr>
                                                <th></th>
                                                <th>Username</th>
                                                <td>Full Name</td>
                                                <th>Access Level</th>
                                                <th>Role</th>
                                                <th>View</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                            $result = mysqli_query($conn,"SELECT * FROM users");
                                            $count = mysqli_num_rows($result);
                                            while($row=mysqli_fetch_array($result)){
                                                ?>
                                                <tr>
                                                    <td><center><input type="checkbox" name="check[<?php echo $row['id']; ?>]" value="1" ></center></td>
                                                    <td><?php echo $row['username'];?></td>
                                                    <td><?php echo $row['fullname'];?></td>
                                                    <td><?php echo $row['access_level'];?></td>
                                                    <td><?php echo $row['role'];?></td>
                                                    <td><a class="btn btn-xs btn-danger" href="view-deleteUser.php?deleteId=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user from the system?');">Delete User</a></td>

                                                </tr>

                                            <?php   } //end of while loop ?>

                                            </tbody>
                                        </table>
                                        <div class="form-group">
                                                <button name="cmdUpdateUser" type="submit" class="btn btn-default" style="background-color: red;color: white;"><li class="fa fa-fw fa-refresh"></li>Update User Details</button>
                                        </div>

                                    </div>
                                </form>
                         </div>
                        </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
    function onUserDelete() {
        var x;
        if (confirm("Are you sure you want to delete this user from the system?") == true) {
            document.location.href = 'view-deleteUse.php?confirmed';
        } else {
            window.location.href = 'view-deleteUser.php';
        }
        document.getElementById("demo").innerHTML = x;
    }
</script>
<script>
    function deletePost() {
        var ask = window.confirm("Are you sure you want to delete this post?");
        if (ask) {
            //window.alert("This post was successfully deleted.");

            document.location.href = 'window-location.html';

        }
    }
</script>

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
