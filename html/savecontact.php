<!DOCTYPE html>
<html>
<head>
	<title>save contact us</title>
	<meta charset="UTF-8">
</head>	
<body>
	<?
	$objConnect = mysql_connect("localhost","root","Password*1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("p_inventory");
	$strSQL = "INSERT INTO contact ";
	$strSQL .="(date,f_name,l_name,email,phone_num,comment) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["date"]."'";
	$strSQL .=",'".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."' ";
	$strSQL .=",'".$_POST["phone"]."','".$_POST["comment"]."') ";
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
		echo "Error Save [".$strSQL."]";
		echo "</script>";
	}
	mysql_close($objConnect);
	?>

</body>
</html>