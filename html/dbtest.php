<html>
<head>
	<title>DB test</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","Password*1234") or die("Error Connect to Database");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//select db
$objDB = mysql_select_db("p_inventory");
$strSQL = "SELECT * FROM rbm";
$objQuery = mysql_query("SELECT * FROM rbm WHERE `date`='2017-09-08'");
//$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>
	<table border="1" cellpadding="1" cellspacing="1" align='center' >
	<tr align='center' bgcolor='#CCCCCC'>
		<th>date</th>
		<th>bu_name</th>
		<th>floor_number</th>
		<th>total_area</th>
		<th>seats</th>
		<th>space_rental</th>
		<th>service_charge</th>
		<th>extra_charge</th>
		<th>furniture rental</th>
		<th>IP service charge</th>
		<th>extra_fee</th>
		<th>Gen_UPS_rent</th>
		<th>electricity</th>
		<th>OT</th>
		<th>water</th>
		<th>include service fee	</th>
		<th>AVG rental rates</th>
		<th>average_seat per_sqm</th>
		<th>Cost per Seat</th>
	</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{	
?>		
	<tr>
		<td><?php echo $objResult["date"];?></td>
		<td><?php echo $objResult["bu_name"];?></td>
		<td><?php echo $objResult["floor_number"];?></td>
		<td><?php echo $objResult["total_area"];?></td>
		<td><?php echo $objResult["seats"];?></td>
		<td><?php echo $objResult["space_rental"];?></td>
		<td><?php echo $objResult["service_charge"];?></td>
		<td><?php echo $objResult["extra_charge"];?></td>
		<td><?php echo $objResult["furniture_rental"];?></td>
		<td><?php echo $objResult["IP_service_charge"];?></td>
		<td><?php echo $objResult["extra_fee"];?></td>
		<td><?php echo $objResult["Gen_UPS_rent"];?></td>
		<td><?php echo $objResult["electricity"];?></td>
		<td><?php echo $objResult["OT"];?></td>
		<td><?php echo $objResult["water"];?></td>
		<td><?php echo $objResult["include_service_fee"];?></td>
		<td><?php echo $objResult["AVG_rental_rates"];?></td>
		<td><?php echo $objResult["average_seat_per_sqm"];?></td>
		<td><?php echo $objResult["cost_per_seat"];?></td>
	</tr>		
<?php
	}		
?>	
	</table>
<?php
mysql_close($objConnect);
?>
</body>

</html>