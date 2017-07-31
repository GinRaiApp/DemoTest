<html>
<head>
	<title>DB test</title>
</head>
<body>

<?php
include "config.php";


$strSQL = "SELECT * FROM seat ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);

$sql=mysql_query("select bu_name,count(bu_name) as cmem from seat group by bu_name") or die(mysql_error());
 while($rs=mysql_fetch_array($sql)){
    
      echo "$rs[bu_name] have $rs[cmem].<br/>";    
    
}

//$row=mysql_num_rows($objResult);
//$rown=mysql_fetch_array($objResult);
?>


	<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>seat_id</th>
		<th>bu_name</th>
		<th>floor_id <? echo $row ?></th>
	</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{	
?>		
	<tr>
		<td><?php echo $objResult["seat_id"];?></td>
		<td><?php echo $objResult["bu_name"];?></td>
		<td><?php echo $objResult["floor_id"];?></td>
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