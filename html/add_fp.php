<!DOCTYPE html>
<html>
<title>Floor Plan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
	
	
	
  

<style>

</style>
<body style="background-color:linen!important;">


	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="../html/v3.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu2.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#overview"> Report Detail </a></li>
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




<!-- Header -->

	<div class="w3-content w3-container w3-padding-64" id="contact">
	<div class="w3-opacity">
	<header class="w3-center w3-margin-bottom"> 
		<center><h1 style=" border-bottom: 3px solid lightgray; width:80%; color: maroon; font-weight: bold;"><b>ADD FLOOR PLAN</b></h1></center>
	</header>
  
	<form action="upload.php" method="POST" enctype="multipart/form-data" style="width:50%; margin:0 auto;" name="frmAdd" target="iframe_target" id="frmAdd">
		<div style="display:block; border:none; width:100%;">
			<input class="w3-input w3-border" type="date" placeholder="date" required name="date" id="date">
		</div><br/>
		
		Input Detail Please...
		<div class="">
			<input class="w3-input w3-border" type="text" placeholder="floor_id" required name="floor_id" id="floor_id">
		</div> 	
		<div class="">
			<input class="w3-input w3-border" type="text" placeholder="floor_number" required name="floor_number" id="floor_number">
		</div> 	
		<div >
			<input class="w3-input w3-border" type="text" placeholder="floor_area" required name="floor_area" id="floor_area">
		</div> 	<br/>
		<div >
			<label for="file">Choose File Please... 
			<input type="file" name="upload" class="w3-border" style="background-color:#ffffff; padding:5px; border-radius:5px; width:100%;" /></label>
		</div>

		<input type="submit" name="submit" value="Upload !"/>
	</form>
  
  





 


</body>
</html>
