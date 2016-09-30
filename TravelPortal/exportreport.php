<?php
require_once('bootstrap.php');
session_page();
extract($_SESSION);
$sql = base64_decode($_GET['sql']);
//echo $sql;exit;
//$sql = "";
$export = mysql_query($sql) or die ("Sql error : " . mysql_error());
$fields = mysql_num_fields($export);
for ($i = 0; $i < $fields; $i++) {
    $header .= mysql_field_name($export, $i) . ",";
}
while ($row = mysql_fetch_row($export)) {
    $line = '';
    //for each field in the row
    foreach ($row as $value) {
        //if null, create blank field
        if ((!isset($value)) || ($value == "")) {
            $value = ",";
        } else {
            $value = str_replace('"', '""', $value);
            $value = '"' . $value . '"' . ",";
        }
        //add this field value to our row
        $line .= $value;
    }
    //trim whitespace from each row
    $data .= trim($line) . "\n";
}
//remove all carriage returns from the data
$data = str_replace("\r", "", $data);
$file_name = 'Report' . date('d M Y') . '';
header("Content-type: application/vnd.ms-excel");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header("Content-disposition: filename=" . $file_name . ".csv");
print "$header\n$data";
?>
