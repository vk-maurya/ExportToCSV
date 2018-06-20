<?php 

 

 if (isset($_POST['export'])) {
 	$dbhost="localhost";
$dbname="sample";
$dbuser="root";
$dbpassword="";

 	$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
 	header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename=data.csv;');

    $output=fopen("php://output","w");
    fputcsv($output, array('Agent Code','Agent Name','Area','Commision','Phone','Country'));
    $query="SELECT * FROM agents";
    $result=mysqli_query($connection,$query);

    while ($row=mysqli_fetch_assoc($result)) {
    	fputcsv($output, $row);
    }

    fclose($output);


 }


 ?>