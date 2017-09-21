		
<?php
include "config.php";


$strSQL = "SELECT * FROM annual ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);
?>


	<p><?php echo"Hello Wolod";?></p>
	<table bgcolor="#bcbcbc"  style="border-color:lightgray;" class="floating-box" style="width:100%; margin:5px auto;" >
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Year</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Seat</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Computer</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Amplifire</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Headset</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Telephone</strong></p><? echo $row ?></th>
		</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{	
?>		
	<tr bgcolor="#ffffff" style="font-size:5px;">
		<td><?php echo $objResult["year"];?></td>
		<td><?php echo $objResult["seat"];?></td>
		<td><?php echo $objResult["com"];?></td>
		<td><?php echo $objResult["am"];?></td>
		<td><?php echo $objResult["hes"];?></td>
		<td><?php echo $objResult["tel"];?></td>
	</tr>	

<?php
	}		
?>	
	</table>

 </div>
</div>


 

</body>
</html>
