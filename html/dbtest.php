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
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>
	<table width="600" border="1" cellpadding="1" cellspacing="1" align='center' width='500'>
	<tr align='center' bgcolor='#CCCCCC'>
		<th>อาคาร</th>
		<th>พื้นที่รวม (ตร.ม.)</th>
		<th>จำนวนที่นั่ง</th>
		<th>ค่าเช่าพื้นที่ (บาท/ตร.ม.)</th>
		<th>ค่าบริการ (บาท/ตร.ม.)</th>
		<th>ค่าบริการส่วนเพิ่ม</th>
		<th>ค่าเช่าเฟอร์นิเจอร์ (บาท/ตร.ม.)	</th>
		<th>ค่าบริการIP (บาท/ตร.ม.)	</th>
		<th>ค่าบริการพิเศษ (บาท/ตร.ม.)</th>
		<th>ค่าเช่าGen/UPS(บาท/ตร.ม.)</th>
		<th>ค่าไฟฟ้า (บาท/unit)</th>
		<th>ค่าโอที (บาท/Hr)</th>
		<th>ค่าน้ำ (บาท/unit)</th>
		<th>รวมอัตราค่าเช่าบริการ (บาท/ตร.ม./เดือน)</th>
		<th>AVG อัตราค่าเช่าบริการ	</th>
		<th>Average seat per sqm</th>
		<th>Cost per Seat</th>
	</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{	
?>		
	<tr>
		<td><?php echo $objResult["building"];?></td>
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