
<table  style="width:100%; margin:5px auto; border-color:lightgray;">
           <tr bgcolor="#ffffff" style="font-size:6px;">
				<th bgcolor="#b3b3b3" width="20" align="center"><p style="margin:10px"><span class="hcon"><?php echo " " ?></span></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><span class="convar">SUMMARY </span></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><span class="convar">AVERAGE </span></th>
		   </tr> 
			 
                        
           
  <?php
	$objConnect = mysql_connect("localhost","root","Password*1234");
	$objdatabase = mysql_select_db("p_inventory");
	
	mysql_query("SET NAMES UTF8");
		
	$seat = 0;
	$com = 0;
	$am = 0;
	$hes = 0;
	$tel = 0;
	$sum = 0;
	$manday = 0;
	$SQL = "SELECT * FROM annual ";
	$res = mysql_query($SQL);
	
	$num_rows = mysql_num_rows($res);
	echo "All row: $num_rows Rows\n";
	
	while($row= mysql_fetch_assoc($res)) 
		   {
		  
		   
	$seat = $seat + $row['seat'];
	$com = $com + $row['com'];
	$am = $am + $row['am'];
	$hes = $hes + $row['hes'];
	$tel = $tel + $row['tel'];

	
	$a_seat = $seat/$num_rows;
	$a_com = $com /$num_rows;
	$a_am = $am /$num_rows;
	$a_hes = $hes/$num_rows;
	$a_tel = $tel/$num_rows;
	
			}
   ?>
                 <tr bgcolor="#ffffff" style="font-size:6px;">
					 <th bgcolor="#b3b3b3" width="20" align="center"><p style="margin:10px"><span class="hcon"><?php echo "SEAT" ?></span></th>
					 <td height="25" align="center"><?php echo $seat ;?></td>
					 <td height="25" align="center" ><?php echo $a_seat;?></td>   
                 </tr>
				 
				<tr bgcolor="#f2f2f2" style="font-size:6px;">
					<th bgcolor="#b3b3b3" width="20" align="center"><p style="margin:10px"><span class="hcon"><?php echo "COM" ?></span></th>
					 <td height="25" align="center"><?php echo $com;?></td>
					 <td height="25" align="center" ><?php echo $a_com;?></td>   
                 </tr>
				 
				<tr bgcolor="#ffffff" style="font-size:6px;">
					<th bgcolor="#b3b3b3" width="20" align="center"><p style="margin:10px"><span class="hcon"><?php echo "AM" ?></span></th>
					 <td height="25" align="center"><?php echo $am;?></td>
					 <td height="25" align="center" ><?php echo $a_am;?></td>   
                 </tr>
				 
				<tr bgcolor="#f2f2f2" style="font-size:6px;">
					 <th bgcolor="#b3b3b3" width="20" align="center"><p style="margin:10px"><span class="hcon"><?php echo "HES" ?></span></th>
					 <td height="25" align="center"><?php echo $hes;?></td>
					 <td height="25" align="center" ><?php echo $a_hes;?></td>   
                 </tr>
				 
				<tr bgcolor="#ffffff" style="font-size:6px;">
					 <th bgcolor="#b3b3b3" width="20" align="center"><p style="margin:10px"><span class="hcon"><?php echo "TEL" ?></span></th>
					 <td height="25" align="center"><?php echo $tel;?></td>
					 <td height="25" align="center" ><?php echo $a_tel;?></td>   
                 </tr>
				
				 
				 
            
			 
             
             
				 
				 
				 
				 
</table>






