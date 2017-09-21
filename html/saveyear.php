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
	$strSQL = "INSERT INTO annual ";
	$strSQL .="(year,seat,com,am,hes,tel) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["year"]."'";
	$strSQL .=",'".$_POST["seat"]."','".$_POST["com"]."','".$_POST["am"]."' ";
	$strSQL .=",'".$_POST["hes"]."','".$_POST["tel"]."') ";

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