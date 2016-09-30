<div id="header">
    <!-- Navigation navbar-default -->
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#e60000;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home"><img src="img/vodafone-logo.png" alt="vodafone"/></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li style="color:White; font-weight:bold;">
                <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['displayname']; ?>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"> Staff Id: <?php echo $_SESSION['emp_no']; ?></a></li>  <!--  -->
                    <li><a href="#"> Email: <?php echo $_SESSION['mail']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
    </nav>
</div>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a class="active" href="home"><i class="fa fa-dashboard fa-fw"></i> Home </a>
            </li>
            <li>
                <a href="#">User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="local_travel">Local Travel</a></li>
                    <li><a href="int_travel">International Travel</a></li>
                    <li><a href="request_status">Request Status</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Line Managers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="lm_request_status">Pending Request</a></li>
                </ul>
            </li>
            <li>
                <a href="#">CEOs Office<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="manage_request_ceo">Manage Request</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Help & Support<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">User Manual</a></li>
                    <li><a href="report_bug">Report Bug</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->