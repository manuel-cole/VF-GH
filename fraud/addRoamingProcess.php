<?php
ob_start();
session_start();
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}

$csvfileName = $_GET['csvfileName'];
$fullname = $_SESSION['fullname'];

//database connection details
require_once 'dbConnect.php';

// path where your CSV file is located
define('CSV_PATH','uploads/');

// Name of your CSV file
$csv_file = CSV_PATH .$csvfileName;


if (($handle = fopen($csv_file, "r")) !== FALSE) {
    fgetcsv($handle);
    while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
            $col[$c] = $data[$c];
        }

        $col1 = $col[0];
        $col2 = $col[1];
        $col3 = $col[2];
        $col4 = $col[3];
        $col5 = $col[4];

// SQL Query to insert data into DataBase
        $query = "INSERT INTO roaming(eventdate,msisdn,agent_msisdn,service,vpmn,reporter) 
                  VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."','$fullname')";

        $result = mysqli_query($conn,$query);
    }
    fclose($handle);
}

?>
<script>
    window.alert('CSV File Successfully Uploaded to Database!!!');
    window.location.href='addRoaming.php';
</script>
<?php
mysqli_close($conn);
?>
