<!DOCTYPE html>
<html>
<head>
	<title>save rbm</title>
	<meta charset="UTF-8">
	
</head>	
<body>
	<?
	$objConnect = mysql_connect("localhost","root","Password*1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("p_inventory");
	$strSQL = "INSERT INTO rbm ";
	$strSQL .="(date,building,bu_name,floor_number,total_area,seats,space_rental,service_charge,extra_charge,
				furniture_rental,IP_service_charge,extra_fee,Gen_UPS_rent,electricity,OT,water,
				include_service_fee,AVG_rental_rates,average_seat_per_sqm,cost_per_seat) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["date"]."'";
	$strSQL .=",'".$_POST["building"]."','".$_POST["bu_name"]."','".$_POST["floor_number"]."' ";
	$strSQL .=",'".$_POST["total_area"]."','".$_POST["seats"]."','".$_POST["space_rental"]."' ";
	$strSQL .=",'".$_POST["service_charge"]."','".$_POST["extra_charge"]."' ";
	$strSQL .=",'".$_POST["furniture_rental"]."','".$_POST["IP_service_charge"]."','".$_POST["extra_fee"]."' ";
	$strSQL .=",'".$_POST["Gen_UPS_rent"]."','".$_POST["electricity"]."','".$_POST["OT"]."' ";
	$strSQL .=",'".$_POST["water"]."','".$_POST["include_service_fee"]."','".$_POST["AVG_rental_rates"]."' ";
	$strSQL .=",'".$_POST["average_seat_per_sqm"]."','".$_POST["cost_per_seat"]."') ";

	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Done.');";
		echo "</script>";
	}
	else
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Error.');";
		echo "</script>";
	}
	mysql_close($objConnect);
	?>

</body>
</html>