<?php
//Normal User and AskHR
if (($usergroup == 2) && ($unit == 31)) {
    //echo 'normal hr user';
    include 'menu_usr_hr.php';
} //Line Manager anD askHR
elseif (($usergroup == 3) && ($unit == 31)) {
    //echo 'linemanager hr';
    include 'menu_lm_hr.php';
} //Normal User and FDS
elseif (($usergroup == 2) && ($unit == 25)) {
    //echo 'normal fds';
    include 'menu_fds.php';
} //Line Manager and FDS
elseif (($usergroup == 3) && ($unit == 25)) {
    //echo 'linemanager fds';
    include 'menu_lm_fds.php';
} //Functional Head
elseif (($usergroup == 4)) {
    //echo 'func head';
    include 'menu_fnc.php';
} //CEO
elseif (($usergroup == 5)) {
    //echo 'ceo';exit;
    include 'menu_ceo.php';
} //Normal User Not Line Manager
elseif (($usergroup == 2) && ($unit != 25) && ($unit != 31)) {
    //echo 'normal user';
    include 'menu_usr.php';
} //Line Manager
else {
    //echo 'linemanager';
    include 'menu_lm.php';
}