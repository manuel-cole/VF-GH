<?php
ob_start();
session_start();
include_once '../dbConnect.php';

$fullname = $_SESSION['fullname'];


$result = mysqli_query($conn,"SELECT * FROM 2015_2016_april");
$count = mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
###############################  APRIL DATA  ##############################################
    $aprNCA = $row['aprNCA'];
    $aprSIG = $row['aprSIG'];
    $aprFraudbuster = $row['aprFraudbuster'];
    $aprInternal = $row['aprInternal'];
    /** Calculate April Simbox */
    $aprSimbox = $aprNCA + $aprSIG + $aprFraudbuster + $aprInternal;
    $aprFixed = $row['aprFixed'];
    $aprRoaming = $row['aprRoaming'];
    $aprMobile = $row['aprMobile'];
    $aprPrepaid = $row['aprPrepaid'];
    /** Store Simbox calculation in session*/
    $_SESSION['aprSimbox'] = $aprSimbox;

}
mysqli_close($conn);

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
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--    Favicon-->
    <link rel="shortcut icon" href="../favicon.ico" >
    <style>
        .sidebar ul li a.active {
            background-color: #eee;
        }
        #main-panel{
            margin-left: -35px;
            margin-right: -35px;
            margin-top: 15px;

        }
        input.placeholder {
            text-align: center;
        }

    </style>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top"  role="navigation" style="margin-bottom: 0;background-color: #e60000;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ><img src="../img/vodafone-logo.png" alt="vodafone"/></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <div class="dropdown-toggle" data-toggle="dropdown" style="color: white" >
                    <i class="fa fa-user fa-fw"></i><?php echo $fullname;?>, Vodafone Ghana
                </div>

                <!-- /.dropdown-user -->
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="../main.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i>Tables<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Roaming</a>
                            </li>
                            <li>
                                <a href="#">Sim Box</a>
                            </li>
                            <li>
                                <a href="#">Sim Registration</a>
                            </li>
                            <li>
                                <a href="#">General</a>
                            </li>
                            <li>
                                <a href="#">IRSF</a>
                            </li>
                            <li>
                                <a href="#">Advance Free Fraud</a>
                            </li>
                            <li>
                                <a href="#">Data High Usage</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="../track-number.php"><i class="fa fa-eye fa-fw"></i></i>Track Number</a>
                    </li>
                    <li>
                        <a href="corporate_home.php"><i class="fa fa-database fa-fw"></i>Corporate Security Dashboard</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Investigation Tracker</h1>
                </div>
                <!-- /.col-lg-12 -->
                <!-- /.row -->
            </div>
            <div class="">
                <!-- Nav tabs -->
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#Fraud-Prevention" data-toggle="tab">APRIL 2016</a>
                        </li>
                        <li><a href="#Investigation-Security-Operations" data-toggle="tab">MAY 2016</a>
                        </li>
                        <li><a href="#Security-Awareness-Transformation" data-toggle="tab">JUNE 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">JULY 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">AUGUST 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">SEPTEMBER 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">OCTOBER 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">NOVEMBER 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">DECEMBER 2016</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">JANUARY 2017</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">FEBRUARY 2017</a>
                        </li>
                        <li><a href="#System-Intelligence-Vender-Management" data-toggle="tab">MARCH 2017</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content ">
                    <div class="tab-pane fade in active" id="Fraud-Prevention">

                                <form action="corporate_save_data.php" method="post">
                                    <table class="table table-bordered table-striped table-hover table-responsive">
                                        <thead>
                                        <tr>
                                            <th colspan="12" style="text-align: center; background-color: #cacaca; color: black">
                                                Internal Investigations Tracker
                                            </th>
                                        </tr>
                                        </thead>
                                        <thead>
                                        <tr>
                                            <td>Received Date</td>
                                            <td>Case No.</td>
                                            <td>Case Type</td>
                                            <td>Case Category</td>
                                            <td>Summary of Allegation</td>
                                            <td>Investigator(s) Assigned</td>
                                            <td>Date of Closure</td>
                                            <td>Recommendation(s)</td>
                                            <td>Owner / Department</td>
                                            <td>Commercial Value</td>
                                            <td>Due date</td>
                                            <td>Status</td>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                        </tr>

                                        </tbody>
                                    </table>

                            </div>

                                <center><button name="cmdFraudPrevention-incidents" type="submit" class="btn btn-danger" value="Save"><span class="fa fa-fw fa-save"></span>Save</button></center>
                        </form>
                    </div>
                    <!-- /.panel -->

                    <div class="tab-pane fade" id="Investigation-Security-Operations">
                        <h4>INVESTIGATIONS & SECURITY OPERATIONS</h4>
                        <p><table class="table table-bordered table-striped table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Single Column</th>
                                <th colspan="2">Double Column</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Column One</td>
                                <td>Column Two</td>
                                <td>Column Three</td>
                            </tr>
                            </tbody>
                        </table></p>
                    </div>
                    <div class="tab-pane fade" id="Security-Awareness-Transformation">

                         </div>
                    <div class="tab-pane fade" id="System-Intelligence-Vender-Management">

                    </div></div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
