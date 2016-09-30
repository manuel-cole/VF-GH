<?php
/* ******************************************************
 * Create Date :	    20/03/2016					    *
 * Last Modified Date:	25/03/2016						*
 * Description:		    Engine File for Travel Portal	*
 * Arthur:			    Abdul Qadir Ibrahim				*
  *******************************************************/
#Parameters

/***************************************AUXILLIARY PROCESSES******************************************************/

function login($user, $password)
{
    global $param;
    global $db;
    $ad = ldap_connect($param['ldap']) or die("<strong>Error!</strong><br/>Please contact administrator on 0202009542");
    $attr = array("displayname", "mail", "sn", "givenname", "samaccountname", "telephonenumber", "employeeID",);
    $dn = $param["dn"];
    $user = trim($user);
    if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
        //email
        $winid = $user;
        $filter = "(mail=" . $winid . ")";
        $seach_by = "LOWER(use_email) = LOWER('" . $winid . "')";
    } else {
        //username
        $winid = "vf-root\\" . $user;
        $filter = "(samaccountname=" . $user . ")";
        $seach_by = " LOWER(use_username) = LOWER('" . $user . "') ";
    }
    trigger_error($winid . ' - ' . $filter . ' - ' . $seach_by);
    ldap_set_option($ad, LDAP_OPT_SIZELIMIT, 1);
    ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
    $bd = ldap_bind($ad, $winid, $password);
    if ($user <> '' and $password <> '' and $bd) {
        $result = ldap_search($ad, $dn, $filter, $attr);
        $row = ldap_get_entries($ad, $result);
        if ($row["count"] > 0) {
            foreach ($row as $as) {
                $mail = $as["mail"][0];
                $displayname = $as["displayname"][0];
                $firstname = $as["givenname"][0];
                $lastname = $as["sn"][0];
                $telephone = $as["telephonenumber"][0];
            }
            $sql = "SELECT * FROM tb_users WHERE " . $seach_by . " and deleted = 0";
            $rs = $db->query($sql);
            $html = '';
            if (sizeof($rs) > 0) {
                session_name();
                session_start();
                $_SESSION['start'] = time();
                $rand = md5(rand(1000, 10000)) . time();
                $_SESSION["sid"] = $rand;
                $_SESSION["uid"] = $rs[0]['use_id'];
                $_SESSION["emp_no"] = $rs[0]['use_empno'];
                $_SESSION["unit"] = $rs[0]['use_unit'];
                $_SESSION["usergroup"] = $rs[0]['use_usergroup'];
                $_SESSION["mail"] = $mail;
                $_SESSION["displayname"] = $displayname;
                $_SESSION["firstname"] = $firstname;
                $_SESSION["lastname"] = $lastname;
                $_SESSION["linemanager"] = $rs[0]['use_line_manager'];
                $_SESSION["usergroup"] = $rs[0]['use_usergroup'];
                $url = "Location: home";
                session_encode();
            } else {
                $url = "Location: index?mode=failed";
            }
        }
    } else {
        $url = "Location: index?mode=failed";
    }
    header($url);
    exit;
}

#put on top of every page you want to protect
function session_page()
{
    session_name();
    session_start();
    #destroy session after 30 minuites of inactivity
    $inactive = 1800;
    if (isset($_SESSION['start'])) {
        $session_life = time() - $_SESSION['start'];
        if ($session_life > $inactive) {
            header("Location: logout");
        }
    }
    $_SESSION['start'] = time();
    //check if user has a session id
    if (!($_SESSION["sid"])) {
        session_unset();
        session_destroy();
        $url = "Location: logout";
        header($url);
        exit;
    }
}

#function to send mail
function mailer($from, $to, $subject, $message, $cc)
{
    $header = '';
    // Build mail header
    $header .= "X-Mailer: Vodafone v2.0" . "\r\n";
    $header .= "Content-Type: text/html" . "\r\n";
    $header .= "From: " . $from . "\r\n";
    if ($cc <> '') $header .= "Cc: " . $cc;
    mail($to, $subject, $message, $header);
}

function logout()
{
    session_name();
    session_start();
    session_unset();
    session_destroy();
    $url = "Location: index";
    header($url);
}


/*********************************************** Generic User Functions*********************************************************************/
function getEmployeeName($empno)
{
    global $db;
    $sql = "SELECT * FROM tb_users WHERE use_empno = '$empno'";
    $rs = $db->query($sql);
    return $rs[0]['use_firstname'] . " " . $rs[0]['use_lastname'];
}

function getDepartment($id)
{
    global $db;
    $sql = "SELECT * FROM tb_units WHERE uni_id = $id and deleted = 0";
    $rs = $db->query($sql);
    return $rs[0]['uni_name'];
}

function listCostCentre()
{
    global $db;
    $sql = "SELECT * FROM cost_centres WHERE deleted = 0 order by cc_code ASC";
    $rs = $db->query($sql);
    return $rs;
}

function getLineManagerEmail($linemanager)
{
    global $db;
    $sql = "SELECT use_email from tb_users where use_empno = '$linemanager'";
    $rs = $db->query($sql);
    return $rs[0]['use_email'];
}

function getTravelType($id)
{
    if ($id == 1) {
        $rs = 'Local Travel';
    } else {
        $rs = 'International Travel';
    }
    return $rs;
}

function getRequestStatus($id)
{
    if ($id == 1) {
        $rs = 'LineManager Approval';
    } elseif ($id == 2) {
        $rs = 'AskHR Approval';
    } elseif ($id == 3) {
        $rs = 'FDS Approval';
    } elseif ($id == 4) {
        $rs = 'AskHR Implementation';
    } elseif ($id == 5) {
        $rs = 'Functional Head Approval';
    } elseif ($id == 6) {
        $rs = 'CEO Approval';
    } elseif ($rs = 7) {
        $rs = 'AskHR Implementation';
    } else {
        $rs = 'Completed';
    }
    return $rs;
}

function getRequestDetails($id)
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE auto_id = '$id'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs;
}

function getRequestDetailsFDS($id)
{
    global $db;
    $sql = "SELECT * FROM travel_report WHERE req_id = '$id'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs;
}

function getCCOwnerEmail($cc_code)
{
    global $db;
    $sql = "SELECT * FROM cost_centres WHERE cc_code = '$cc_code'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs[0]['cc_finance_email'];
}

function getCCOwnerEmpno($cc_code)
{
    global $db;
    $sql = "SELECT * FROM cost_centres WHERE cc_code = '$cc_code'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs[0]['staffid'];
}

function getCCfdsEmail($cc_code)
{
    global $db;
    $sql = "SELECT * FROM cost_centres WHERE cc_code = '$cc_code'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs[0]['cc_owner_email'];
}

function getCCfdsEmpno($cc_code)
{
    global $db;
    $sql = "SELECT * FROM cost_centres WHERE cc_code = '$cc_code'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs[0]['fds_id'];
}

function getEmployeeEmail($empno)
{
    global $db;
    $sql = "SELECT use_email FROM tb_users where use_empno = '$empno'";
    //echo $sql;exit;
    $rs = $db->query($sql);
    return $rs[0]['use_email'];
}

/*********************************************** Non LineManagers*********************************************************************/

//User submits local travel request
function submitLocalRequest($empno, $unitID, $linemanagerID)
{
    global $db;
    global $param;
    extract($_POST);
    $fds_owner = getCCfdsEmpno($_POST[costcentre]);
    $sql = "INSERT into travel_request (emp_id,unit, cost_centre, fds_owner,line_manager,departure,travel_purpose, destination, flight,accommodation, departure_date, arrival, request_status, request_type)
            values ($empno,'$unitID','$_POST[costcentre]','$fds_owner','$linemanagerID', '$_POST[departure]','$_POST[purpose]','$_POST[destination]','$_POST[flight]','$_POST[accommodation]','$_POST[departure]','$_POST[arrival]',1,1)";
    $rs = $db->query($sql);
    if ($rs) {
        #Email notification that goes to line manager for approval
        $to = getLineManagerEmail($linemanagerID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
        <p>Below is a local travel request for your approval</p>
        <p>' . getEmployeeName($empno) . ' has made a Local travel request.
                <p>You are required to login to the Application to approve/reject this request</p>
                <hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration(getEmployeeName($empno), 'Local Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
    }
}

#User submits international travel request
function submitIntRequest($empno, $unitID, $linemanagerID)
{
    global $db;
    global $param;
    extract($_POST);
    $fds_owner = getCCfdsEmpno($_POST[costcentre]);
    $cc_owner = getCCOwnerEmpno($_POST[costcentre]);
    $sql = "INSERT into travel_request (emp_id,unit,line_manager,cost_centre,fds_owner,func_owner, departure,travel_purpose, destination, flight,accommodation, hotel_name,departure_date, arrival, request_status, request_type)
            values ($empno,'$unitID',$linemanagerID,'$_POST[costcentre]','$fds_owner','$cc_owner','$_POST[departure]','$_POST[purpose]','$_POST[destination]','$_POST[flight]','$_POST[accommodation]','$_POST[hotel_name]','$_POST[departure]','$_POST[arrival]',1,2)";
    $rs = $db->query($sql);
    if ($rs) {
        #Email notification that goes to linemanager for approval
        $to = getLineManagerEmail($linemanagerID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Below is an international travel request for your approval</p>
		<p>' . getEmployeeName($empno) . ' has made an International travel request.
				<p>You are required to login to the Application to approve/reject this request</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration(getEmployeeName($empno), 'Local Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
    }
}

#Gets all Users Requests
function getRequestsUser($empno)
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE emp_id = '$empno' and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

function getAllRequests()
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}


function getStatus($type, $status)
{
    if ($type == 1 && $status == 1) {
        echo 'Line Manager Approval';
    } elseif ($type == 1 && $status == 2) {
        echo 'AskHR Approval';
    } elseif ($type == 1 && $status == 3) {
        echo 'FDS Approval';
    } elseif ($type == 1 && $status == 4) {
        echo 'AskHR Implementation';
    } elseif ($type == 2 && $status == 1) {
        echo 'Line Manager Approval';
    } elseif ($type == 2 && $status == 2) {
        echo 'AskHR Approval';
    } elseif ($type == 2 && $status == 3) {
        echo 'FDS Approval';
    } elseif ($type == 2 && $status == 5) {
        echo 'Functional Head Approval';
    } elseif ($type == 2 && $status == 6) {
        echo 'CEO Approval';
    } elseif ($type == 2 && $status == 7) {
        echo 'AskHR Implementation';
    } elseif ($status == 0) {
        echo 'Completed';
    } else {
        echo 'Rejected';
    }

}


#View all completed requests
function viewHistory($empno)
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE emp_id = '$empno' and request_status = 0";
    $rs = $db->query($sql);
    return $rs;
}

/*********************************************** LineManager Processes*********************************************************************/
function getRequestsLM($empno)
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE line_manager = '$empno' and request_status= 1 and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

function lmApproval($id, $empno)
{
    global $db;
    global $param;
    extract($_POST);
    $sql = "UPDATE travel_request set request_status = 2 where auto_id = '$id' and deleted =0";
    $rs = $db->query($sql);
    if ($rs) {
        $to = $param['askHR'];
        $subject = $param['mailSubject'];
        $content = '</p> Hello AskHR,
		<p>There is a travel request that requires your attention. </p>
		<p>You are required to login to the Application to approve/reject this request</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration(getEmployeeName($empno), 'Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
        header("Location: lm_request_status");
    }
    header("Location: lm_request_status");
}

function lmRejection($id, $reason)
{
    global $db;
    global $param;
    extract($_POST);
    $sql = "UPDATE travel_request set deleted = 1 where auto_id = $id";
    $rs = $db->query($sql);
    if ($rs) {
        $rs = getRequestDetails($id);
        $userID = $rs[0]['emp_id'];
        $to = getEmployeeEmail($userID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Travel Request has been declined by line manager.';
        $content .= '<p></p>
            <h4>Reason</h4>
            ' . $reason . '
        ';
        $content .= '<p></p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Application" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Travel Application', $content, '');
        mailer($param['mailFrom'], $to, $subject, $message, 'developer.gh@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
        header("Location: lm_request_status");
    } else {
        header("Location: lm_request_status");
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
    }
}

/*********************************************** AskHR Processes*********************************************************************/
#ASKHR Approves Process
function submitAskHRApproval($empno, $reqID)
{
    global $db;
    global $param;
    extract($_POST);
    $rs = getRequestDetails($reqID);
    if ($rs[0]['request_type'] == 1) {
        $sql = "INSERT into askhr_inputs (req_id,askhr_approver,flight_cost,acc_cost,total_cost)
            values ('$reqID','$empno','$_POST[flight_cost]','$_POST[acc_cost]','$_POST[total_cost]')";
        $rs = $db->query($sql);
    } else {
        $sql = "INSERT into askhr_inputs (req_id,askhr_approver,flight_cost,acc_cost,total_cost,sustenance,transportation)
            values ('$reqID','$empno','$_POST[flight_cost]','$_POST[acc_cost]','$_POST[total_cost]','$_POST[sustenance]','$_POST[transportation]')";
        $rs = $db->query($sql);
    }
    if ($rs) {
        #Email notification that goes to FDS for approval

        $costCentre = $rs[0]['cost_centre'];
        $to = getCCfdsEmail($costCentre);
        $subject = $param['mailSubject'];
        if ($rs[0]['request_type'] == 1) {
            $sql = "UPDATE travel_request set request_status = 7 where auto_id = '$reqID' and deleted = 0";
            $rs = $db->query($sql);
            $content = '</p> Hello,
		<p>A local travel request has been approved by ASKHR.</p>
				<p>You can login to the portal for detailed information on the request.</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        } else {
            $sql = "UPDATE travel_request set request_status = 3 where auto_id = '$reqID' and deleted = 0";
            $rs = $db->query($sql);
            $content = '</p> Hello,
		<p>An international travel request has been approved by ASKHR.</p>
				<p>You are required to login to the portal to approve or reject the request.</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        }
        $message = sendEmail_registration(getEmployeeName($empno), 'Local Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'developer.gh@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
    }
}

function submitAskHRRejection($reqID, $remarks)
{
    global $db;
    global $param;
    $sql = "UPDATE travel_request set deleted = 1 where auto_id = '$reqID'";
    $rs = $db->query($sql);
    if ($rs) {
        $rs = getRequestDetails($reqID);
        $userID = $rs[0]['emp_id'];
        $to = getEmployeeEmail($userID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Travel Request has been declined by AskHR.';
        $content .= '<p></p>
            <h4>Reason</h4>
            ' . $remarks . '
        ';
        $content .= '<p></p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Application" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Travel Application', $content, '');
        mailer($param['mailFrom'], $to, $subject, $message, 'developer.gh@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully rejected.
	    </div>';
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
    }
}

#Get Pending Requests for ASKHR(Approval)
function getRequestsHR()
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE request_status = 2 and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

#Get Pending Requets for ASKHR(Implementation)
function getRequestsHRImp()
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE request_status in (4,7) and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

#HR Request Process
function hrCompleteRequest($id)
{
    global $db;
    global $param;
    $sql = "Update travel_request set request_status = 0 where auto_id = '$id'";
    $rs = $db->query($sql);
    if ($rs) {
        $rs = getRequestDetails($id);
        $userID = $rs[0]['emp_id'];
        $to = getEmployeeEmail($userID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Your travel request has been approved. You will recive an email shortly with your travel details</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Local Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
        header("Location: manage_request_imp");
    }
}

/*********************************************** Finance Processes*********************************************************************/
function submitFDSApproval($empno, $reqID, $requestType)
{
    global $db;
    global $param;
    extract($_POST);
    $yeartodatespend = $_POST['date_spend'];
    $yeartogohead = $_POST['head_room'];
    $sql = "UPDATE askhr_inputs set fds_approver = '$empno', yeartodatespend = '$yeartodatespend', 
yeartogohead = '$yeartogohead' where req_id = '$reqID'";
    $rs = $db->query($sql);
    if ($rs) {
        $sql = "UPDATE travel_request set request_status = 5 where auto_id = '$reqID'";
        $db->query($sql);
        $rs = getRequestDetails($reqID);
        $func_head = $rs[0]['func_owner'];
        $to = getEmployeeEmail($func_head);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Below is an international travel request approved by FDS that requires your approval.</p>
				<p>You are required to login to the Application to approve/reject this request</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Local Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully approved.
	    </div>';
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
    }
}

function submitFDSRejection($empno, $reqid)
{
    global $db;
    global $param;
    extract($_POST);
    $remarks = $_POST['reason'];
    $sql = "UPDATE travel_request set deleted = 1 where auto_id = '$reqid'";
    $rs = $db->query($sql);
    if ($rs) {
        $rs = getRequestDetails($id);
        $userID = $rs[0]['emp_id'];
        $to = getEmployeeEmail($userID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Travel Request has been declined by FDS.';
        $content .= '<p></p>
            <h4>Reason</h4>
            ' . $remarks . '
        ';
        $content .= '<p></p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Application" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Travel Application', $content, '');
        mailer($param['mailFrom'], $to, $subject, $message, 'developer.gh@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully rejected.
	    </div>';
        header("Location: manage_request_fds");
    } else {
        //header("Location: lm_request_status");
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
        header("Location: manage_request_fds");
    }
}

#Gets pending requests for FDS
function getRequestsFDS($empno)
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE request_status = 3 and fds_owner = '$empno' and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

/*********************************************** Functional Head Processes*********************************************************************/
#Get All Pending request for Functional Head(International Travel)
function getRequestsFNC($empno)
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE request_status = 5 and func_owner = '$empno' and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

function submitFuncApproval($empno, $reqID)
{
    global $db;
    global $param;
    extract($_POST);
    $sql = "UPDATE askhr_inputs set fnc_approver = '$empno' where req_id = '$reqID'";
    $rs = $db->query($sql);
    if ($rs) {
        $sql = "UPDATE travel_request set request_status = 6 where auto_id = '$reqID' and deleted =0";
        $db->query($sql);
        $to = $param['ceo'];
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>There is an international travel request that requires your attention. </p>
		<p>You are required to login to the Application to approve/reject this request</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration(getEmployeeName($empno), 'Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully approved.
	    </div>';
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
        header("Location: manage_request_fnc");
    }
}

function submitFuncRejection($id)
{
    global $db;
    global $param;
    extract($_POST);
    $remarks = $_POST['reason'];
    $sql = "UPDATE travel_request set deleted = 1 where auto_id = $id";
    $rs = $db->query($sql);
    if ($rs) {
        $rs = getRequestDetails($id);
        $userID = $rs[0]['emp_id'];
        $to = getEmployeeEmail($userID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Travel Request has been declined by AskHR.';
        $content .= '<p></p>
            <h4>Reason</h4>
            ' . $remarks . '
        ';
        $content .= '<p></p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Application" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Travel Application', $content, '');
        mailer($param['mailFrom'], $to, $subject, $message, 'developer.gh@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
        header("Location: manage_request_fnc");
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
        header("Location: manage_request_fnc");
    }
}

/*********************************************** CEO Processes*********************************************************************/
function getRequestsCEO()
{
    global $db;
    $sql = "SELECT * FROM travel_request WHERE request_status = 6 and deleted = 0";
    $rs = $db->query($sql);
    return $rs;
}

function submitCEOApproval($reqID)
{
    global $db;
    global $param;
    extract($_POST);
    $sql = "UPDATE travel_request set request_status = 7 where auto_id = '$reqID' and deleted =0";
    $rs = $db->query($sql);
    if ($rs) {
        $to = $param['askHR'];
        $subject = $param['mailSubject'];
        $content = '</p> Hello AskHR,
		<p>There is an international travel request that has been approved by the CEOs Office. </p>
		<p>You are required to login to the Application to approve/reject this request</p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Portal" target="_blank">Click here</a>';
        $message = sendEmail_registration(getEmployeeName($rs[0]['emp_id']), 'Travel Request', $content);
        mailer($param['mailFrom'], $to, $subject, $message, 'abdulqadir.ibrahim@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully approved.
	    </div>';
        //header("Location: manage_request_ceo");
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
        header("Location: manage_request_ceo");
    }
}

function submitCEORejection($id)
{
    global $db;
    global $param;
    extract($_POST);
    $remarks = $_POST['reason'];
    $sql = "UPDATE travel_request set deleted = 1 where auto_id = $id";
    $rs = $db->query($sql);
    if ($rs) {
        $rs = getRequestDetails($id);
        $userID = $rs[0]['emp_id'];
        $to = getEmployeeEmail($userID);
        $subject = $param['mailSubject'];
        $content = '</p> Hello,
		<p>Travel Request has been declined by AskHR.';
        $content .= '<p></p>
            <h4>Reason</h4>
            ' . $remarks . '
        ';
        $content .= '<p></p>
				<hr>To login to the application <a href=' . $param['path'] . ' title="Travel Application" target="_blank">Click here</a>';
        $message = sendEmail_registration('Travel Portal', 'Travel Application', $content, '');
        mailer($param['mailFrom'], $to, $subject, $message, 'developer.gh@vodafone.com');
        print ' <div class="alert alert-success alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	         Request Successfully submitted.
	    </div>';
        header("Location: manage_request_ceo");
    } else {
        print ' <div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				There was an error in processing your request. Please try again
			</div>';
        header("Location: manage_request_ceo");
    }
}

/**
 * @param $fullname
 * @param $status
 * @param $message
 * @return string
 */
function sendEmail_registration($fullname, $status, $message)
{
    global $param;
    $message = '<div>
<table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;border:solid 1px #f1f1f1" bgcolor="#F1F1F1" width="590"><tbody><tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
<td><div style="min-height:10px;font-size:10px;line-height:10px">&nbsp;</div></td></tr></tbody></table></td></tr><tr><td width="5%"><table width="10" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">
&nbsp;</div></td></tr></tbody></table></td><td width="90%" valign="top">
    <table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial" width="590" bgcolor="#FFFFFF">
      <tbody>
      <tr>
        <td>
          <div style="font-size:22px;color:#333333">
<table border="0" cellspacing="0" cellpadding="2" style="font-family:Arial" width="590" bgcolor="white">
              <tbody>
                <tr>
                  <td colspan="3">
                    <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:8px;font-size:8px;line-height:8px">&nbsp;</div></td></tr></tbody></table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <table width="8" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
                  </td>
                  <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src="' . $param['path'] . 'images/vodafone.gif" /></a></td>
                  <td align="right">
                      <p style="border:0;display:block;font-family:Georgia,arial,sans-serif;font-size:14px;text-decoration:none;color:blue">Travel Portal</p>
                  </td>
                  <td>
                      <table width="20" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:8px;font-size:8px;line-height:8px">&nbsp;</div></td></tr></tbody></table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table border="0" cellspacing="0" cellpadding="5" style="font-family:Arial" width="590">
              <tbody><tr>
                <td colspan="4"></td>
              </tr>
            </tbody></table>
            <table border="0" cellspacing="0" cellpadding="8" style="font-family:Arial" width="590">
              <tbody><tr>
                <td>
                  <table width="12" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
                </td>
                <td style="color:#666666;font-size:12px;text-decoration:none">
                <br>
                    <br>' . $message . '</td>
                  <td align="right" valign="top">&nbsp;</td>
                <td>
                  <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
                </td>
              </tr>
            </tbody></table>
            <table border="0" cellspacing="0" cellpadding="2" style="font-family:Arial" width="590">
              <tbody><tr>
                <td>
                  <table width="13" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
                </td>
                <td>
                  </span></a>
                </td>
                <td>
                  <table width="13" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
                </td>
              </tr>
              <tr>
                <td>
                  <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:10px;font-size:10px;line-height:10px">&nbsp;</div></td></tr></tbody></table>
                </td>
              </tr>
            </tbody></table>
            <table border="0" cellspacing="0" cellpadding="4" style="font-family:Arial" width="590">
            <tbody>
              <tr>
                <td width="100%" colspan="2"><div style="color:#333;font-size:14px">
                  <table border="0" cellspacing="0" cellpadding="4" style="font-family:Arial" width="590">
                    <tbody>
                      <tr>
                      </tr>
                      <tr>
                        <td>                         </td>
                        <td width="100%" colspan="2"><div style="color:#333;font-size:14px">
                          <table style="margin-left:auto;margin-right:auto">

                          </table>
                        </div></td>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div></td>
              </tr>
              <tr>
                <td width="100%" colspan="2"><div style="color:#333;font-size:14px">
                  <table border="0" cellspacing="0" cellpadding="4" style="font-family:Arial" width="590">
                    <tbody>
                      <tr>

                      </tr>
                      <tr>
                        <td>                         </td>
                        <td width="100%" colspan="2"></td>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div></td>
              </tr>
            </tbody>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>
  <table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial" width="100%">
    <tbody><tr>
      <td align="center">
        <table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;margin:0 auto" bgcolor="#EE1C25" width="590">
          <tbody><tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:12px;font-size:12px;line-height:12px">&nbsp;</div></td></tr></tbody></table></td></tr>
          <tr>
            <td><table width="65" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td>
            <td valign="top" width="98%">
              <span style="color:#ffffff;font-family:Arial;font-size:13px;text-align:center">

              </span>
            </td>
            <td><table width="100" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td>
          </tr>
          <tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:10px;font-size:10px;line-height:10px">&nbsp;</div></td></tr></tbody></table></td></tr>
        </tbody></table>
      </td>
    </tr>
  </tbody></table>
  <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:15px;font-size:15px;line-height:15px">&nbsp;</div></td></tr></tbody></table>
        </td>
      </tr>
      <tr>
        <td>
<table border="0" cellspacing="5" cellpadding="0" style="font-family:Arial" width="100%">
  <tbody>
    <tr>
      <td valign="top" align="left">
        <div style="font-family:arial;font-size:11px;color:#999">
              This email was intended for' . $fullname . ' &nbsp; &copy; ' . date('Y') . ',
              <br>
              Vodafone Ghana. Vodafone Ghana South Liberation Link, Manet Tower A, Airport
              City, Accra, Ghana.<br>
               <a href="http://www.vodafone.com.gh" target="_blank"><span style="color:#006699">www.vodafone.com.gh</span></a>
        </div>
      </td>
    </tr>
  </tbody>
</table>
        </td>
      </tr>
      <tr>
        <td>
          <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:5px;font-size:5px;line-height:5px">&nbsp;</div></td></tr></tbody></table>
        </td>
      </tr>
      </tbody>
    </table>
<table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:20px;font-size:20px;line-height:20px">&nbsp;</div></td></tr></tbody></table><table width="270" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td><td width="5%"><table width="10" border="0" cellspacing="0" cellpadding="0">
<tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td></tr><tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:10px;font-size:10px;line-height:10px">
&nbsp;</div></td></tr></tbody></table></td></tr></tbody></table></div></div><br></div>';
    return $message;
}