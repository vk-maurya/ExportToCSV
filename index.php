<?php 
$dbhost="localhost";
$dbname="sample";
$dbuser="root";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if (!$connection) {
	echo "Connection not Working";
}

$query="SELECT * from agents";

$result=mysqli_query($connection,$query);



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Sample Example</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
<br>
<br>
<br>
	<div class="center">

		<form method="POST" action="export.php">
			<input type="submit" name="export" id="export" class="btn btn-success" value="Export">
		</form>
	</div>
   <div class="col-md-8">
   	<table class="table table-striped">

   	<tr>
   		<td>Agent Code</td>
   		<td>Agent Name</td>
   		<td>Area</td>
   		<td>Commision</td>
   		<td>Phone</td>
   		<td>Country</td>
   	</tr>

   	
   	<?php 
   	while ($row=mysqli_fetch_array($result)) {
   		echo "<tr>";
			echo "<td>".$row['AGENT_CODE']."</td>";	
			echo "<td>".$row['AGENT_NAME']."</td>";	
			echo "<td>".$row['WORKING_AREA']."</td>";	
			echo "<td>".$row['COMMISSION']."</td>";	
			echo "<td>".$row['PHONE_NO']."</td>";	
			echo "<td>".$row['COUNTRY']."</td>";	

		echo "</tr>";

   	}

   	 ?>	
   	   </table>


   </div>









</body>
</html>