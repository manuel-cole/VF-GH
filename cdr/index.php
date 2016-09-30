<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Contact: 0509617500
 * Date: 18/09/2016
 * Time: 22:24
 */
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <!--    Favicon-->
    <link rel="shortcut icon" href="favicon.ico" >
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
        .panel-body{
            padding: 15px 35px 35px 35px;
        }
        .list{
            margin-left: 35px;
        }
        li.str {
            list-style: none;
        }

        li.str:before {
            content: "*";
            position: relative;
            font-size: 20px;
            left: -15px;
            bottom: -3px;
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
<div class="container" style="margin-top: 30px">
    <form action="cdr_form.php" method="post">
    <div class="bs-example jumb-margin-contol">
        <div class="panel panel-default">
            <div class="panel-heading">
                Disclosures Information
            </div>
            <div class="panel-body">
                <p>All Vodafone Ghana Call Data Records (CDR) Disclosures are made in accordance with <strong>Electronic Transactions Act 2008</strong> <strong>(Act 772)</strong> as stated below:</p>
                <ul>
                    <li class="list">No information pertaining to a customer or subscriber shall be disclosed without the customer&rsquo;s consent (section 102 (1)</li>
                    <li class="list">A record can only be disclosed to a law enforcement agency with the customer&rsquo;s consent or on receipt of a court order (section 102(2)</li>
                    <li class="list">Law enforcement agency is defined as the police, CEPS and any other law enforcement agency authorized to exercise the powers of the police.</li>
                </ul>
                <p><strong>REQUIREMENTS </strong></p>
                <p>The following requirements shall be met in full without exception for the undermentioned categories of Call data Records (CDR) requests.</p>
                <ol>
                    <li><strong>Individual/Private Requests </strong></li>
                </ol>
                <p>All requests received in respect of individual/private subscribers shall be accompanied with the following documents</p>
                <ul>
                    <li class="list">Recognized national identification documents (Passport, Driver&rsquo;s License or Voters ID).</li>
                </ul>
                <ol start="2">
                    <li><strong>Corporate Requests </strong></li>
                </ol>
                <p>All requests received in respect of corporate subscribers shall be accompanied with the following document(s).</p>
                <ul>
                    <li class="list">An official letter of request duly signed by the head of the requesting organization or appointed designate on an official letterhead.</li>
                </ul>
                <ol start="3">
                    <li><strong>Security Agency Request</strong></li>
                </ol>
                <p>All requests received from a Law Enforcement Agency shall be accompanied by the following document(s).</p>
                <ul>
                    <li class="list">A court order specifying the category information and the period of time over which the information is required.</li>
                    <li class="list">A recognized national identification document of the requesting officer.</li>
                </ul>
                <ul>
                    <li class="str">The above stated documents shall be uploaded and attached electronically to all requests.</li>
                    <li class="str">All requestors must have access to the following applications winzip, winrar or 7zip using the link below.</li>
                    <li class="str">All requests shall be delivered over a secure email mode.</li>
                    <li class="str">Call Data records shall be limited to the following categories only Voice Calls, Out-Going SMS &amp; Data Usage Details.</li>
                    <li class="str">Vodafone Ghana does not store and cannot therefore provide content of voice calls.</li>
                    <li class="str">Vodafone Ghana does not store and cannot therefore provide content of call made over any Internet Protocol.</li>
                    <li class="str">We hope to respond to your request within seven (7) working days from the receipt of request and all relevant documents indicated above.&nbsp;</li>
                </ul>
                <br>
                <label style="color: #da0000"><input name="agree" value="1" class="checkbox-inline" type="checkbox" id="myCheck" required/> I agree to the terms of service</label>
            </div>
            <div class="panel-footer">
                <div class="bs-example">
                    <ul class="pager">
                        <li class="next"><button type="submit" name="cmdBtnFirst">Next &rarr;</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        </form>
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
    var x = document.getElementById("myCheck").required;
</script>
</body>
</html>
