<html>
<head>
	<title>test db</title>
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
$strSQL = "SELECT * FROM building";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>id</th>
		<th>name</th>
	</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{	
?>		
	<tr>
		<td><?php echo $objResult["bu_id"];?></td>
		<td><?php echo $objResult["bu_name"];?></td>
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