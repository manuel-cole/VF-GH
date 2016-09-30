<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Contact: 0509617500
 * Date: 18/09/2016
 * Time: 22:24
 */
ob_start();
session_start();

//if (isset($_POST['cmdBtnSecond'])){
//    $_SESSION['msisdn'] = $misidn = $_POST['msisdn'];
//    $_SESSION['service'] = $service = $_POST['service'];
//}elseif (isset($_GET['error'])){
//    $misidn = $_SESSION['msisdn'];
//    $service = $_SESSION['service'];
//
//}else{
//    header('location: index.php');
//}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Call Data Records</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <!--    <link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />-->
    <!--    <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>-->
    <link rel="stylesheet" href="css/datepicker.css">
    <!--    <link rel="stylesheet" href="css/bootstrap-date.css">-->
    <script type="text/javascript">
        $(function() {
            $(".btn").click(function(){
                $(this).button('loading').delay(1000).queue(function() {
                    $(this).button('reset');
                    $(this).dequeue();
                });
            });
        });
    </script>
    <style type="text/css">
        body{
            background-image: url("img/back.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .jumb-margin-contol{
            margin: 65px 120px 0 120px;
        }
        .panel-margin-contol{
            margin: 0 120px 0 120px;
        }
        hr{
            background-color: #c9302c;
        }
        /* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
        .form-horizontal .control-label{
            padding-top: 7px;
        }
        .hidden {
            display: none;
        }
    </style>
    <style>
        .tooltipp {
            position: relative;
            display: inline-block;
        }

        .tooltipp .tooltipptext {
            visibility: hidden;
            width: 120px;
            background-color: #e8e8e8;
            color: black;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 80%;
            left: 50%;
            margin-left: -20px;
        }

        .tooltipp .tooltipptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #e8e8e8 transparent transparent transparent;
        }

        .tooltipp:hover .tooltipptext {
            visibility: visible;
        }
    </style>
</head>
<body>
<nav style="background-color: #da0000" id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container center-block">

        <div class="">
            <a style="width: 100%;color: #ffffff;text-align: center;font-size:20px;font-weight: bold " class="navbar-brand" href="#">Vodafone Ghana Call Data Records</a>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 70px">

    <div class="row">
        <form class="form-horizontal" action="cdr_form_decider.php" method="post" enctype="multipart/form-data">
            <div class="col-xs-12-">
                <div class="bs-example panel-margin-contol">
                    <div style="background-color: #ffffff" class="panel panel-danger">
                        <div class="panel-heading">
                            <b style="color: white">Call Data Records (CDR) REQUEST FORM</b>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3 tooltipp" >Type of Records: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                <div class=" col-xs-6">
                                    <select class="form-control" name="column_select" id="column_select">
                                        <option value="col0">--Select Record Type--</option>
                                        <option value="col1">Individual</option>
                                        <option value="col2">Corporate</option>
                                        <option value="col3">Law Enforcement Agency(LEA)</option>
                                        <option value="col4">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3 tooltipp" >Purpose for request: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                <div class=" col-xs-6">
                                    <select class="form-control" name="layout_select" id="layout_select" >
                                        <!--Below shows when '0 column' is selected is hidden otherwise-->
                                        <option value="col0">--Select request purpose--</option>

                                        <!--Below shows when '1 column' is selected is hidden otherwise-->
                                        <option value="col1_ms">Embassy</option>
                                        <option value="col1_sm">Personal</option>

                                        <!--Below shows when '2 column' is selected is hidden otherwise-->
                                        <option value="col2_mss">Official</option>
                                        <option value="col2_ssm">Personal</option>

                                        <!--Below shows when '3 column' is selected is hidden otherwise-->
                                        <option value="col3_mss">Investigations</option>

                                        <!--Below shows when '4 column' is selected is hidden otherwise-->
                                        <option value="col4_mss">Investigations</option>
                                        <option value="col4_ssm">Disputes</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="answer hidden" id="answercol1_ms">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp" >Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Outgoing & Incoming Calls  &nbsp;&nbsp;&nbsp;  </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile SMS History </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="answer hidden" id="answercol1_sm">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp">Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Outgoing & Incoming Calls  &nbsp;&nbsp;&nbsp;  </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile SMS History </label></div>
                                            <div class="checkbox"><label ><input name="request_type[]" class="" type="checkbox" value=""> Mobile Data Usage Details </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="answer hidden" id="answercol2_mss">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp">Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label ><input name="request_type[]" class="" type="checkbox" value=""> Mobile Data Usage Details With Site Visited </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Fixed Broadband(Data Usage Details) </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="answer hidden" id="answercol2_ssm">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp">Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Outgoing & Incoming Calls  &nbsp;&nbsp;&nbsp;  </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile SMS History </label></div>
                                            <div class="checkbox"><label ><input name="request_type[]" class="" type="checkbox" value=""> Mobile Data Usage Details </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="answer hidden" id="answercol3_mss">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp">Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Outgoing & Incoming Calls  &nbsp;&nbsp;&nbsp;  </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile SMS History With Site Location </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="answer hidden" id="answercol4_mss">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp">Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Outgoing, Incoming Calls & SMS History With Site Location &nbsp;&nbsp;&nbsp;  </label></div>
                                            <!--                                            <div class="checkbox"><label><input name="" class="" type="checkbox" value=""> Mobile SMS History With Site With Location </label></div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="answer hidden" id="answercol4_ssm">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 tooltipp">Request type: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                        <div class="col-xs-9 radio">
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Reload History  &nbsp;&nbsp;&nbsp;  </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile SMS History </label></div>
                                            <div class="checkbox"><label><input name="request_type[]" class="" type="checkbox" value=""> Mobile Data Usage Details </label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <?php
                                /* handle error */
                                if (isset($_GET['error'])) : ?>
                                    <div class="alert alert-danger alert-dismissible" role="alert" >
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
                                    </div>
                                <?php endif;?></div>

                            <!--                            <div class="form-group">-->
                            <!--                                <label class="control-label col-xs-3">Request type: </label>-->
                            <!--                                <div class="col-xs-9 radio">-->
                            <!--                                    <div class="checkbox"><label><input name="" class="" type="checkbox" value="Mobile Outgoing Calls" checked> Mobile Outgoing Calls  &nbsp;&nbsp;&nbsp;  </label></div>-->
                            <!--                                    <div class="checkbox"><label><input name="" class="" type="checkbox" value="Mobile Incoming Calls"> Mobile Incoming Calls </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Mobile SMS History"> Mobile SMS History </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Mobile Reload History"> Mobile Reload History </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Mobile Data usage details"> Mobile Data Usage Details </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Mobile Data site visited"> Mobile Data Site Visited </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Fixed Broadband(Data usage details)"> Fixed Broadband(Data Usage Details) </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Postpaid voice calls"> Postpaid Voice Calls </label></div>-->
                            <!--                                    <div class="checkbox"><label ><input name="" class="" type="checkbox" value="Postpaid data usage"> Postpaid Data Usage Details </label></div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="form-group">-->
                            <!--                                <label class="control-label col-xs-3">Upload National ID:</label>-->
                            <!--                                <div class="col-xs-6">-->
                            <!--                                    <input name="id" class="form-control" type="file" required>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="form-group">-->
                            <!--                                <label class="control-label col-xs-3">Upload Approved Official Letter:</label>-->
                            <!--                                <div class="col-xs-6">-->
                            <!--                                    <input name="doc" class="form-control" type="file">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="upload hidden" id="uploadcol1">
                                <div class="form-group">
                                    <label class="control-label col-xs-3 tooltipp">Upload National ID: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                    <div class="col-xs-6">
                                        <input name="uploaded_file" class="form-control" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="upload hidden" id="uploadcol2">
                                <div class="form-group">
                                    <label class="control-label col-xs-3 tooltipp">Upload National ID: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                    <div class="col-xs-6">
                                        <input name="corpId" class="form-control" type="file" id="corpId">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3 tooltipp">Upload Approved Official Letter: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                    <div class="col-xs-6">
                                        <input name="doc" class="form-control" type="file" id="doc">
                                    </div>
                                </div>
                            </div>
                            <div class="upload hidden" id="uploadcol3">
                                <div class="form-group">
                                    <label class="control-label col-xs-3 tooltipp">Upload Court Order: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                    <div class="col-xs-6">
                                        <input name="order" class="form-control" type="file" id="order">
                                    </div>
                                </div>
                            </div>
                            <div class="upload hidden" id="uploadcol4">
                                <div class="form-group">
                                    <label class="control-label col-xs-3 tooltipp">Upload National ID: <span style="color: red; font-size: 15px" class="glyphicon glyphicon-asterisk"></span><span class="tooltipptext">Text</span></label>
                                    <div class="col-xs-6">
                                        <input name="otherId" class="form-control" type="file" id="otherId">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="panel-footer clearfix">-->
                        <!--                            <div class="pull-right">-->
                        <!--                                <button type="submit" data-loading-text="Loading..." class="btn btn-danger">Submit</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="panel-footer">
                            <div class="bs-example">
                                <ul class="pager">
                                    <li class="previous"><button type="button" onclick="myButton()">&larr; Previous</button></li>
                                    <li class="next"><button name="cmdBtnThird" type="submit" >Next &rarr;</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <hr style="color: #c9302c">
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
        window.location='index.php';
    }
</script>


<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
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
    $(document).ready(function() {
        $("#layout_select").children('option:gt(0)').hide();
        $("#column_select").change(function() {
            $("#layout_select").children('option').hide();
            $("#layout_select").children("option[value^=" + $(this).val() + "]").show()
        })
    })
</script>
<script>
    $(document).ready(function(){
        $('#layout_select').on('change', function(){
            var theVal = $(this).val();
            $('.answer').addClass('hidden');
            $('.answer#answer' + theVal).removeClass('hidden');
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#column_select').on('change', function(){
            var theVal = $(this).val();
            $('.upload').addClass('hidden');
            $('.upload#upload' + theVal).removeClass('hidden');
        });
    });
</script>

</body>
</html>

