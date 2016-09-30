<?php
//require 'global.php';
session_page();
$msg = '';
$sql = base64_decode($_GET['cond']);
$rs = $db->query($sql);
if ($rs[0] > 0) {
    $exp = $sql;
    $msg .= '<div><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr height="20" style=" background-color:#000000;color:#ffffff;">
    <td width="3%" align="center" ><strong>No.</strong></td>
	<td width="18%" align="left" ><strong>Employee</strong></td>
    <td width="10%" align="center" ><strong>Start Date</strong></td>
    <td width="10%" align="center" ><strong>End Date</strong></td>
    <td width="8%" align="center" ><strong>Days</strong></td>
    <td width="15%" align="left" ><strong>Request Type</strong></td>
    <td width="20%" align="center" >Signed By</td>
	<td width="10%" align="center" >Signed Date</td>
	<td width="10%" align="center" ><strong>Status</strong></td></tr>';
    $i = 1;
    foreach ($rs as $row) {

        if ($i % 2 == 0) {
            $style = 'style="height:20px;width:100%;background-color:#fff;font-size:11px;"';
        } else {
            $style = 'style="background-color:#F2F2F2;height:20px;width:100%;font-size:11px; "';
        }
        if ($row['rstatusid'] == 1) $appdate = '';
        else $appdate = date('j-M-Y', strtotime($row['approvedate']));
        //$get_action = '<td align="left" class="uline">'.getFullname($row['approveby']).'</td>'.'<td class="uline">'.date('j-M-Y', strtotime($row['approvedate'])).'</td>'.'<td align="center" class="uline">'.$row['rstatus'].'</td>';

        $msg .= '<tr ' . $style . '>
    <td height="24" align="center" class="uline">' . $i . '</td>
	<td align="left" class="uline">' . getFullname($row['empid']) . '&nbsp</td>
    <td align="center" class="uline">' . date('j-M-Y', strtotime($row['rstart'])) . '</td>
    <td align="center" class="uline">' . date('j-M-Y', strtotime($row['rend'])) . '</td>
    <td align="center" class="uline">' . $row['rdays'] . ' - <span class="red"><em> ' . $row['rfull'] . '&nbsp</em></span></td>
    <td align="left" class="uline">' . $row['rtype'] . '</td>
	<td align="left" class="uline">' . getFullname($row['approveby']) . '</td>
	<td class="uline">' . $appdate . '</td>
	<td align="center" class="uline">' . $row['rstatus'] . '</td>
    
  </tr>';//'.$get_action.'
        $i++;
    }
    $msg .= '</table></div>';
} else {
    $msg .= 'Your search for leave records from ' . $sh . ' found no matching record.';
}
/*header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=$msg");
header("Pragma: no-cache");
header("Expires: 0");*/

$filename = 'Report ' . date('d M Y') . '.xls';
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Length: " . strlen($msg));
header("Content-type: application/vnd.ms-excel");
header('Content-Description: Export to MS Excel');
header("Content-Disposition: attachment; filename=$filename");
echo $msg;
?>