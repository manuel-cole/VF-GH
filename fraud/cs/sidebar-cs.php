
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
                        <a href="../view_roaming.php">Roaming</a>
                    </li>
                    <li>
                        <a href="../view_simbox.php">Sim Box</a>
                    </li>
                    <li>
                        <a href="../view_simreg.php">Sim Registration</a>
                    </li>
                    <li>
                        <a href="../view_general.php">General</a>
                    </li>
                    <li>
                        <a href="../view_irsf.php">IRSF</a>
                    </li>
                    <li>
                        <a href="../view_advancefree.php">Advance Fee Fraud</a>
                    </li>
                    <li>
                        <a href="../view_fixedhigh.php">Fixed High Fraud</a>
                    </li>
                    <li>
                        <a href="../view_datahigh.php">Data High Usage</a>
                    </li>
                    <li>
                        <a href="../view_clir.php">CLIR Request</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="../track-number.php"><i class="fa fa-eye fa-fw"></i></i>Track Number</a>
            </li>
            <li>
                <a href="../cs/corporate_home.php"><i class="fa fa-database fa-fw"></i>Corporate Security Dashboard</a>
            </li>
            <?php if ($_SESSION['access_level'] == "admin"){ ?>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i>Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../addUser.php"><i class="fa fa-plus fa-fw"></i>Add Users</a>
                        </li>
                        <li>
                            <a href="../view-deleteUser.php"><i class="fa fa-eye-slash fa-fw"></i>View / Delete Users</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>