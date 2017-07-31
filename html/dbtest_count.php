<html>
<head>
	<title>DB test</title>
</head>
<?php

$link = mysql_connect("localhost", "root", "Password*1234");
mysql_select_db("p_inventory", $link);

$result = mysql_query("SELECT * FROM seat", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";

//$result2 = mysql_query("SELECT * FROM seat GROUP BY bu_name ", $link);
$result_C = mysql_query("SELECT bu_name FROM seat WHERE bu_name LIKE 'C%' ", $link);
$result_I = mysql_query("SELECT bu_name FROM seat WHERE bu_name LIKE 'I%' ", $link);
$result_T = mysql_query("SELECT bu_name FROM seat WHERE bu_name LIKE 'T%' ", $link);
$result_K = mysql_query("SELECT bu_name FROM seat WHERE bu_name LIKE 'K%' ", $link);
//$num_rows_group = mysql_num_rows($result2);
$num_rows_group = mysql_num_rows($result);
$num_rows_group_C = mysql_num_rows($result_C);
$num_rows_group_I = mysql_num_rows($result_I);
$num_rows_group_T = mysql_num_rows($result_T);
$num_rows_group_K = mysql_num_rows($result_K);

/*echo "<br><br>";
echo "Seat total: $num_rows_group Rows <br>
		CP2: $num_rows_group_C Rows <br>
		ITALTHAI: $num_rows_group_I Rows <br>
		TRUE2: $num_rows_group_T Rows <br>
		KKN: $num_rows_group_K Rows <br> ";
*/

?>
<script type="text/javascript">
	var rowsGroupC = <?= $num_rows_group_C ?>;
	var rowsGroupI = <?= $num_rows_group_I ?>;
	var rowsGroupT = <?= $num_rows_group_T ?>;
	var rowsGroupK = <?= $num_rows_group_K ?>;
</script>
<script type="text/javascript" src="../js/home.js"></script>
<body>

	<table width="600" border="1" cellpadding="1" cellspacing="1" align='center' width='500'>
	<tr align='center' bgcolor='#CCCCCC'>
		<th>Name</th>
		<th>Number</th>
	</tr>
	<tr bgcolor='yellow'>
		<td>Seat total</td>
		<td><?php echo $num_rows_group;?></td>
	</tr>
	<tr>
		<td>CP2</td>
		<td><?php echo $num_rows_group_C;?></td>
	</tr>
	<tr>
		<td>ITALTHAI</td>
		<td><?php echo $num_rows_group_I;?></td>
	</tr>
	<tr>
		<td>TRUE2</td>
		<td><?php echo $num_rows_group_T;?></td>
	</tr>
	<tr>
		<td>KKN</td>
		<td><?php echo $num_rows_group_K;?></td>
	</tr>
	</table>

</body>

</html>
