<?php
ob_start();
session_start();
if (!isset($_SESSION['fullname'])){
    header('location: index.php');
    exit();
}

$fullname = $_SESSION['fullname'];
$access_level = $_SESSION['access_level'];
$csvfileName = $_GET['csvfileName'];

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
        $col6 = $col[5];
        $col7 = $col[6];
        $col8 = $col[7];

// SQL Query to insert data into DataBase
        $query = "INSERT INTO simreg(eventdate,msisdn,agent_msisdn,customer_name,customer_id_type,customer_id_number,remarks,reporter) 
                  VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."','".$col6."','".$col7."','".$col8."','$fullname')";

        $result = mysqli_query($conn,$query);
    }
    fclose($handle);
}

    ?>
    <script>
        window.alert('CSV File Successfully Uploaded to Database!!!');
        window.location.href='addSimreg.php';
    </script>
<?php
mysqli_close($conn);
?>
