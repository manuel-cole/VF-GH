<?php
//$dbmsisdn = "3343";
function individual_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbfullname,$dbstartDate,$dbendDate,$dbemail){

    $individual_msg = '<div>
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
                                        <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src=" '.$logo.' " /></a></td>
                                        <td align="right">
                                            <p style="border:0;font-weight: bold;display:block;font-family:Georgia,arial,sans-serif;font-size:18px;text-decoration:none;color:#da0000">Vodafone Ghana Call Data Records Request</p>
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

                                            <table style="width: 466px; border-color: black;" border="2" cellpadding="6">
                                                <tbody>
                                                <tr style="height: 30px;">
                                                    <td style="width: 464px; height: 30px; text-align: center;color: white;background-color:#da0000" colspan="2">Call Data Records Details</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Number :</td>
                                                    <td style="width: 315px;">' .$dbmsisdn.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Other Numbers :</td>
                                                    <td style="width: 315px;">' .$dbother_msisdn.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Service Type :</td>
                                                    <td style="width: 315px;">' .$dbservice.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Record Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrecordType.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrequest_type.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Purpose :</td>
                                                    <td style="width: 315px;  ">' .$dbpurpose_for_request.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Fullname :</td>
                                                    <td style="width: 315px;  ">' .$dbfullname.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Start Date :</td>
                                                    <td style="width: 315px;  ">' .$dbstartDate.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px; ">End Date :</td>
                                                    <td style="width: 315px; ">' .$dbendDate.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px; ">Email :</td>
                                                    <td style="width: 315px; ">' .$dbemail.  '</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody></table><br/>

                            </div>
                        </td>
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
                                            This email was intended for Vodafone Ghana Disclosures &copy; 2016,
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
    return $individual_msg;
}

function corporate_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbcompany_name,$dbstartDate,$dbendDate,$dbemail)
{
    $corporate_msg = '<div>
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
                                        <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src="'.$logo.'" /></a></td>
                                        <td align="right">
                                            <p style="border:0;font-weight: bold;display:block;font-family:Georgia,arial,sans-serif;font-size:18px;text-decoration:none;color:#da0000">Vodafone Ghana Call Data Records Request</p>
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

                                            <table style="width: 466px; border-color: black;" border="2" cellpadding="6">
                                                <tbody>
                                                <tr style="height: 30px;">
                                                    <td style="width: 464px; height: 30px; text-align: center;color: white;background-color:#da0000" colspan="2">Call Data Records Details</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Number :</td>
                                                    <td style="width: 315px;">' .$dbmsisdn.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Other Numbers :</td>
                                                    <td style="width: 315px;">' .$dbother_msisdn.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Service Type :</td>
                                                    <td style="width: 315px;">' .$dbservice.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Record Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrecordType.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrequest_type.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Purpose :</td>
                                                    <td style="width: 315px;  ">' .$dbpurpose_for_request.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Company Name :</td>
                                                    <td style="width: 315px;  ">' .$dbcompany_name.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Start Date :</td>
                                                    <td style="width: 315px;  ">' .$dbstartDate.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px; ">End Date :</td>
                                                    <td style="width: 315px; ">' .$dbendDate.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px; ">Email :</td>
                                                    <td style="width: 315px; ">' .$dbemail.  '</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody></table><br/>

                            </div>
                        </td>
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
                                            This email was intended for Vodafone Ghana Disclosures &copy; 2016,
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
    return $corporate_msg;
}

function lea_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbname_of_security_agency,$dbname_of_investigator,$dbtelephone,$dbstartDate,$dbendDate,$dbemail)
{
    $lea_msg = '<div>
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
                                        <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src="'.$logo.'" /></a></td>
                                        <td align="right">
                                            <p style="border:0;font-weight: bold;display:block;font-family:Georgia,arial,sans-serif;font-size:18px;text-decoration:none;color:#da0000">Vodafone Ghana Call Data Records Request</p>
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

                                            <table style="width: 466px; border-color: black;" border="2" cellpadding="6">
                                                <tbody>
                                                <tr style="height: 30px;">
                                                    <td style="width: 464px; height: 30px; text-align: center;color: white;background-color:#da0000" colspan="2">Call Data Records Details</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Number :</td>
                                                    <td style="width: 315px;">' .$dbmsisdn.  '</td>
                                                </tr>
                                                 <tr style="">
                                                    <td style="width: 149px;">Other Numbers :</td>
                                                    <td style="width: 315px;">' .$dbother_msisdn.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Service Type :</td>
                                                    <td style="width: 315px;">' .$dbservice.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Record Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrecordType.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrequest_type.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Purpose :</td>
                                                    <td style="width: 315px;  ">' .$dbpurpose_for_request.  '</td>
                                                </tr>
                                                 <tr style="  ">
                                                    <td style="width: 149px;  ">Security Agency Name :</td>
                                                    <td style="width: 315px;  ">' .$dbname_of_security_agency.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Investigator Name :</td>
                                                    <td style="width: 315px;  ">' .$dbname_of_investigator.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Telephone Number :</td>
                                                    <td style="width: 315px;  ">' .$dbtelephone.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Start Date :</td>
                                                    <td style="width: 315px;  ">' .$dbstartDate.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px; ">End Date :</td>
                                                    <td style="width: 315px; ">' .$dbendDate.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px; ">Email :</td>
                                                    <td style="width: 315px; ">' .$dbemail.  '</td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody></table><br/>

                            </div>
                        </td>
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
                                            This email was intended for Vodafone Ghana Disclosures &copy; 2016,
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
    return $lea_msg;
}

function others_message($logo,$dbmsisdn,$dbother_msisdn,$dbservice,$dbrecordType,$dbrequest_type,$dbpurpose_for_request,$dbfullname,$dbstartDate,$dbendDate,$dbemail)
{
    $others_msg = '<div>
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
                                        <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src="'.$logo.'" /></a></td>
                                        <td align="right">
                                            <p style="border:0;font-weight: bold;display:block;font-family:Georgia,arial,sans-serif;font-size:18px;text-decoration:none;color:#da0000">Vodafone Ghana Call Data Records Request</p>
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

                                            <table style="width: 466px; border-color: black;" border="2" cellpadding="6">
                                                <tbody>
                                                <tr style="height: 30px;">
                                                    <td style="width: 464px; height: 30px; text-align: center;color: white;background-color:#da0000" colspan="2">Call Data Records Details</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Number :</td>
                                                    <td style="width: 315px;">' .$dbmsisdn.  '</td>
                                                </tr>
                                                 <tr style="">
                                                    <td style="width: 149px;">Other Numbers :</td>
                                                    <td style="width: 315px;">' .$dbother_msisdn.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px;">Service Type :</td>
                                                    <td style="width: 315px;">' .$dbservice.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Record Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrecordType.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Type :</td>
                                                    <td style="width: 315px;  ">' .$dbrequest_type.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Request Purpose :</td>
                                                    <td style="width: 315px;  ">' .$dbpurpose_for_request.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Fullname :</td>
                                                    <td style="width: 315px;  ">' .$dbfullname.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px;  ">Start Date :</td>
                                                    <td style="width: 315px;  ">' .$dbstartDate.  '</td>
                                                </tr>
                                                <tr style="  ">
                                                    <td style="width: 149px; ">End Date :</td>
                                                    <td style="width: 315px; ">' .$dbendDate.  '</td>
                                                </tr>
                                                <tr style="">
                                                    <td style="width: 149px; ">Email :</td>
                                                    <td style="width: 315px; ">' .$dbemail.  '</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody></table><br/>

                            </div>
                        </td>
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
                                            This email was intended for Vodafone Ghana Disclosures &copy; 2016,
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
    return $others_msg;
}

function user_message($logo,$dbfullname)
{
    $user_msg = '<div>
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
                                        <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src="'.$logo.'" /></a></td>
                                        <td align="right">
                                            <p style="border:0;font-weight: bold;display:block;font-family:Georgia,arial,sans-serif;font-size:18px;text-decoration:none;color:#da0000">Vodafone Ghana Call Data Records Request</p>
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
                                            <p style="font-size: large">Hello '.$dbfullname.' </p>
                                            <p style="font-size: 16px;">We thank you for your vodafone call data record request.</p>
                                            <p style="font-size: 16px;">We will return your information to you securely by email.</p>
                                            <p style="font-size: 16px;">We hope to respond to your request within seven (7) working days from the receipt of request and all relevant documents indicated.&nbsp;</p>
                                            <p style="font-size: 16px;">Best Regards </p>
                                        </td>
                                    </tr>
                                    </tbody></table><br/>

                            </div>
                        </td>
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
                                            This email was intended for Vodafone Ghana Disclosures &copy; 2016,
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
    return $user_msg;
}

?>