<?php
/**
 * Created by PhpStorm.
 * User: GAMOR
 * Date: 7/7/2016
 * Time: 1:22 PM
 */
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Investiigations</title>
    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--    <link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />-->
    <script src="investigation/datepicker.css"></script>

    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >
    <!--    <link rel="stylesheet" href="css/bootstrap-date.css">-->
    <style>

    </style>
</head>
<body>
<nav style="background-color: #da0000" id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" ><img src="./img/vodafone-logo.png" alt="vodafone"/></a>
    </div>
    <!-- /.navbar-header -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container center-block">

        <div class="">
            <a style="width: 100%;color: #ffffff;text-align: center;font-size:20px;font-weight: bold " class="navbar-brand" href="#"></a>
        </div>
    </div>
</nav>
<div class="" style="margin-top: 50px">
    <orm action="cdr_form.php" method="post">
        <div class="main-page">
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
                                <li class="active"><a href="#april" data-toggle="tab">APRIL 2016</a>
                                </li>
                                <li><a href="#may" data-toggle="tab">MAY 2016</a>
                                </li>
                                <li><a href="#june" data-toggle="tab">JUNE 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">JULY 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">AUG 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">SEPT 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">OCT 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">NOV 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">DEC 2016</a>
                                </li>
                                <li><a href="#" data-toggle="tab">JAN 2017</a>
                                </li>
                                <li><a href="#" data-toggle="tab">FEB 2017</a>
                                </li>
                                <li><a href="#" data-toggle="tab">MAR 2017</a>
                                </li>
                            </ul>
                        </div>
                        <p>&nbsp;</p>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="april">
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
                                            <td><input id="example1" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            <td><select>
                                                    <option></option>
                                                    <option>Manipulation of Customer Account</option>
                                                    <option>Procurement Fraud</option>
                                                    <option>Theft of Money or Assets</option>
                                                    <option>False Documentation or Reporting (for commission or reward)</option>
                                                    <option>Financial Reporting Fraud (Fraudulent invoicing etc.)</option>
                                                    <option>Revenue Leakage Detection</option>
                                                    <option>Unauthorised Release/Access to Customer or Company data</option>
                                                    <option>Technical Fraud</option>
                                                    <option>Payroll Fraud</option>
                                                    <option>Corruption/Bribery</option>
                                                    <option>Other Fraud or Dishonesty, Misconduct</option>
                                                </select></td>
                                            <td><select>
                                                    <option></option>
                                                    <option>Fraud</option>
                                                    <option>Other Cases</option>
                                                    <option>Incidents</option>
                                                </select> </td>
                                            <td><textarea></textarea></td>
                                            <td><input type="text" name="aprNca" placeholder="" style="width: 80px; text-align: center"> </td>
                                            <td><input id="example2" name="aprNca" placeholder="" style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder="" style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder="" style="width: 80px; text-align: center"> </td>
                                            <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><input id="example3" name="aprNca" placeholder=" " style="width: 80px; text-align: center"> </td>
                                            <td><select>
                                                    <option></option>
                                                    <option>Closed</option>
                                                    <option>Pending</option>
                                                </select>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <center><button name="cmdFraudPrevention-incidents" type="submit" class="btn btn-danger" value="Save"><span class="fa fa-fw fa-save"></span>Save</button></center>
                                </form>
                            </div>


                        <div class="tab-pane fade" id="may">
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
                        <div class="tab-pane fade" id="june"></div>
                        <div class="tab-pane fade" id=""></div>
                        </div>
</div>
</div>
        </div>
    </div>

<hr style="background-color: #c9302c">
<div class="row">
    <div class="col-xs-12">
        <footer style="text-align: center">
            <p>&copy; Copyright 2016 Vodafone Ghana</p>
        </footer>
    </div>
</div>
</div>
<script>
    function myButton() {
        window.location='#';
    }
</script>
<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="investigation/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#example1').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#example2').datepicker({
            format: "dd/mm/yyyy"
        });
        $('#example3').datepicker({
            format: "dd/mm/yyyy"
        });
    });
</script>
<script>
    var x = document.getElementById("myCheck").required;
</script>
</body>
</html>


