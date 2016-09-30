<?php
/** error handling *
 * @param $errno
 * @param $str
 * @param $file
 * @param $line
 */
function handle_error($errno, $str, $file, $line)
{
    global $param;
    if (!isset ($param)) return;
    //this is the error that occurred
    $date = date("Y-m-d");
    $time = date("h:i:s a");
    $code = $errno;
    $error = $str;
    $print = "<p>Date: $date<br />Time: $time<br />Code: $code<br />" .
        "Line: $line<br />Error: $error<br />File: $file</p>";
    //log error		
    if (( bool )$param['log'] == true) {
        $log = "Date:$date\r\nTime:$time\r\nCode:$code\r\nLine:$line\r\nFile:$file\r\nError:$error\r\n\r\n";
        $log = "$date\t$time\t$code\t$line\t$file\t$error\r\n";

        $fp = fopen($param['error_file'], "a+");
        fwrite($fp, $log);
        fclose($fp);
    }
    //mail error
    if (!empty ($param['mail'])) {
        $headers = "content-type:text/html\r\nFrom:" . $param['appname'] . "\r\n";
        @mail($param['mail'], "System Error", $print, $headers);
    }
}

set_error_handler('handle_error');