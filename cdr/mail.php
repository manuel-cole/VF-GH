<?php

function mailer($from, $to, $subject, $message)
    {
        $header = '';
        // Build mail header
        $header = "MIME-Version: 1.0\r\n";
        //$header .= "X-Mailer: Vodafone v2.0" . "\r\n";
        $header .= "Content-Type: text/html" . "\r\n";
        $header .= "From: " . $from . "\r\n";

       // if ($cc <> '') $header .= "Cc: " . $cc;
        mail($to, $subject, $message, $header);
    }
//
//    function sendEmail_registration($fullname, $status, $message)
//    {
//        global $param;
//        $message = '<div>
//<table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;border:solid 1px #f1f1f1" bgcolor="#F1F1F1" width="590"><tbody><tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
//<td><div style="min-height:10px;font-size:10px;line-height:10px">&nbsp;</div></td></tr></tbody></table></td></tr><tr><td width="5%"><table width="10" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">
//&nbsp;</div></td></tr></tbody></table></td><td width="90%" valign="top">
//    <table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial" width="590" bgcolor="#FFFFFF">
//      <tbody>
//      <tr>
//        <td>
//          <div style="font-size:22px;color:#333333">
//<table border="0" cellspacing="0" cellpadding="2" style="font-family:Arial" width="590" bgcolor="white">
//              <tbody>
//                <tr>
//                  <td colspan="3">
//                    <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:8px;font-size:8px;line-height:8px">&nbsp;</div></td></tr></tbody></table>
//                  </td>
//                </tr>
//                <tr>
//                  <td>
//                    <table width="8" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
//                  </td>
//                  <td><a style="display:block;text-decoration:none" href="http://www.vodafone.com.gh" target="_blank"><img border="0" alt="Vodafone Ghana" src="' . $param['path'] . 'images/vodafone.gif" /></a></td>
//                  <td align="right">
//                      <p style="border:0;display:block;font-family:Georgia,arial,sans-serif;font-size:14px;text-decoration:none;color:blue">Stock Tracker</p>
//                  </td>
//                  <td>
//                      <table width="20" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
//                  </td>
//                </tr>
//                <tr>
//                  <td colspan="3">
//                    <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:8px;font-size:8px;line-height:8px">&nbsp;</div></td></tr></tbody></table>
//                  </td>
//                </tr>
//              </tbody>
//            </table>
//            <table border="0" cellspacing="0" cellpadding="5" style="font-family:Arial" width="590">
//              <tbody><tr>
//                <td colspan="4"></td>
//              </tr>
//            </tbody></table>
//            <table border="0" cellspacing="0" cellpadding="8" style="font-family:Arial" width="590">
//              <tbody><tr>
//                <td>
//                  <table width="12" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
//                </td>
//                <td style="color:#666666;font-size:12px;text-decoration:none">
//                              <br>
//                    <br>' . $message . '</td>
//                  <td align="right" valign="top">&nbsp;</td>
//
//                <td>
//                  <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
//                </td>
//              </tr>
//            </tbody></table>
//            <table border="0" cellspacing="0" cellpadding="2" style="font-family:Arial" width="590">
//              <tbody><tr>
//                <td>
//                  <table width="13" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
//                </td>
//
//                <td>
//
//
//                  </span></a>
//                </td>
//
//                <td>
//                  <table width="13" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table>
//                </td>
//              </tr>
//              <tr>
//                <td>
//                  <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:10px;font-size:10px;line-height:10px">&nbsp;</div></td></tr></tbody></table>
//                </td>
//              </tr>
//            </tbody></table>
//            <table border="0" cellspacing="0" cellpadding="4" style="font-family:Arial" width="590">
//            <tbody>
//              <tr>
//                <td width="100%" colspan="2"><div style="color:#333;font-size:14px">
//                  <table border="0" cellspacing="0" cellpadding="4" style="font-family:Arial" width="590">
//                    <tbody>
//                      <tr>
//
//                      </tr>
//                      <tr>
//                        <td>                         </td>
//                        <td width="100%" colspan="2"><div style="color:#333;font-size:14px">
//                          <table style="margin-left:auto;margin-right:auto">
//
//                          </table>
//                        </div></td>
//                        <td>&nbsp;</td>
//                      </tr>
//                    </tbody>
//                  </table>
//                </div></td>
//              </tr>
//              <tr>
//                <td width="100%" colspan="2"><div style="color:#333;font-size:14px">
//                  <table border="0" cellspacing="0" cellpadding="4" style="font-family:Arial" width="590">
//                    <tbody>
//                      <tr>
//
//                      </tr>
//                      <tr>
//                        <td>                         </td>
//                        <td width="100%" colspan="2"></td>
//                        <td>&nbsp;</td>
//                      </tr>
//                    </tbody>
//                  </table>
//                </div></td>
//              </tr>
//            </tbody>
//            </table>
//          </div>
//        </td>
//      </tr>
//      <tr>
//        <td colspan="4">&nbsp;</td>
//      </tr>
//      <tr>
//        <td>
//  <table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial" width="100%">
//    <tbody><tr>
//      <td align="center">
//        <table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial;margin:0 auto" bgcolor="#EE1C25" width="590">
//          <tbody><tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:12px;font-size:12px;line-height:12px">&nbsp;</div></td></tr></tbody></table></td></tr>
//          <tr>
//            <td><table width="65" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td>
//            <td valign="top" width="98%">
//              <span style="color:#ffffff;font-family:Arial;font-size:13px;text-align:center">
//
//              </span>
//            </td>
//            <td><table width="100" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td>
//          </tr>
//          <tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:10px;font-size:10px;line-height:10px">&nbsp;</div></td></tr></tbody></table></td></tr>
//        </tbody></table>
//      </td>
//    </tr>
//  </tbody></table>
//  <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:15px;font-size:15px;line-height:15px">&nbsp;</div></td></tr></tbody></table>
//        </td>
//      </tr>
//      <tr>
//        <td>
//<table border="0" cellspacing="5" cellpadding="0" style="font-family:Arial" width="100%">
//  <tbody>
//    <tr>
//      <td valign="top" align="left">
//        <div style="font-family:arial;font-size:11px;color:#999">
//              This email was intended for' . $fullname . ' &nbsp; &copy; ' . date('Y') . ',
//              <br>
//              Vodafone Ghana. Vodafone Ghana South Liberation Link, Manet Tower A, Airport
//              City, Accra, Ghana.<br>
//               <a href="http://www.vodafone.com.gh" target="_blank"><span style="color:#006699">www.vodafone.com.gh</span></a>
//        </div>
//      </td>
//    </tr>
//  </tbody>
//</table>
//        </td>
//      </tr>
//      <tr>
//        <td>
//          <table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:5px;font-size:5px;line-height:5px">&nbsp;</div></td></tr></tbody></table>
//        </td>
//      </tr>
//      </tbody>
//    </table>
//<table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:20px;font-size:20px;line-height:20px">&nbsp;</div></td></tr></tbody></table><table width="270" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td><td width="5%"><table width="10" border="0" cellspacing="0" cellpadding="0">
//<tbody><tr><td><div style="min-height:0px;font-size:0px;line-height:0px">&nbsp;</div></td></tr></tbody></table></td></tr><tr><td colspan="3"><table width="1" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="min-height:10px;font-size:10px;line-height:10px">
//&nbsp;</div></td></tr></tbody></table></td></tr></tbody></table></div></div><br></div>';
//        return $message;
//    }

function find_filesize($file)
{
    if(substr(PHP_OS, 0, 3) == "WIN")
    {
        exec('for %I in ("'.$file.'") do @echo %~zI', $output);
        $return = $output[0];
    }
    else
    {
        $return = filesize($file);
    }
    return $return;
}
    ?>