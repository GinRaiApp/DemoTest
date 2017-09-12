<html>
<head>
	<title>DB test</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/DemoTest/css/Leftmenu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">

	<style>
		table {
			border-collapse: collapse;
			margin-top:20px;
			
		}

		table, th, td {
			border: 1px solid black;
		}
		
		th, td{
			font-size:12px;
			padding:2px;
			
		}
	</style>
	
</head>
<body style="background-color:linen!important;">


	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="../html/v3.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu2.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#overview"> Overview </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#seatre"> Seat Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.7; filter: alpha(opacity=70);"><a href="#devicesre"> Devices Report </a></li>
		  
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/floor_2.php">floor plan</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="http://localhost/DemoTest/html/add_fp.php">Add Floor Plan</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#">All Floor Plan</a></li>
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/master.php">rb master</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="http://localhost/DemoTest/html/rbm_2_2.php">Add New</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="http://localhost/DemoTest/html/dbtest.php">DB test</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>

	  <li><a href="http://eus/cm/inventory/index.php#" target="_blank">cm inventory</a></li>
	  <li><a href="../html/contact_2.php#">Contact Us</a></li>
	</ul>
	</nav>
	
<div class="w3-opacity">
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom"> 
	<center><h1 style="margin-top:50px; border-bottom: 3px solid lightgray; width:50%; color: maroon; font-weight: bold;  text-transform: uppercase;">
		<b>Show Information in DB</b></h1></center>  
</header>	
</div>
<?php
$objConnect = mysql_connect("localhost","root","Password*1234") or die("Error Connect to Database");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

//select db
$objDB = mysql_select_db("p_inventory");
$strSQL = "SELECT * FROM rbm";
//$objQuery = mysql_query("SELECT * FROM rbm WHERE `date`='2017-09-08'");
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>
	<table align='center'  >
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