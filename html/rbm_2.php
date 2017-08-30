<!DOCTYPE html>
<html>
<head>
	<title>Rental Building Master</title>
	<link rel="stylesheet" type="text/css" href="/DemoTest/css/Leftmenu.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
	<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
	body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
	
	input[type=text],input[type=email],input[type=date] {
		width: 100%;
		padding: 8px 18px;
		margin: 5px 0;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
	}
	
	textarea {
		width: 100%;
		height: 100px;
		padding: 12px 20px;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		background-color: #f8f8f8;
		font-size: 16px;
		resize: none;
	}
	
	#type {
    width: 100%;
    padding: 8px 18px;
    border: 2px solid lightgray;
    border-radius: 4px;
    background-color: #f1f1f1;
	}
	
	input[type=submit]{
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 4px;
	}
	
	
	input[type=submit]:hover{background-color: lightgray;} 
	


	
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
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#">All Floor Plan</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#">Add Floor Plan</a></li>
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/master.php">rb master</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#">Sub Menu 1</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#">Sub Menu 2</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>

	  <li><a href="http://eus/cm/inventory/index.php#" target="_blank">cm inventory</a></li>
	  <li><a href="../html/contact_2.php#">Contact Us</a></li>
	</ul>
	</nav>


	<div class="contactus" style="width:100%; margin:10px auto; border-radius: 12px;">
		<!-- Container (Contact Section) -->
		<div class="w3-content w3-container w3-padding-64" id="contact">
		  <h3 class="w3-center">Rental Building Master</h3>

		  <div class="w3-row w3-padding-32 w3-section">
			<div class="w3-col m4 w3-container">
			 
			  <form action="savecontact.php" name="frmAdd" method="post" target="iframe_target" id="frmAdd">
			  <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="building" required name="building" id="building">
				  </div> 
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="total_area(sq.m.)" required name="total_area" id="total_area">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="seats" required name="seats" id="seats">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="space_rental(baht/sq.m)" required name="space_rental" id="space_rental">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="service_charge(baht/sq.m)" required name="service_charge" id="service_charge">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="extra_charge" required name="extra_charge" id="extra_charge">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="furniture_rental" required name="furniture_rental" id="furniture_rental">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="IP_service_charge(baht/sq.m)" required name="IP_service_charge" id="IP_service_charge">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="extra_fee(baht/sq.m)" required name="extra_fee" id="extra_fee">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="Gen/UPS_rent" required name="Gen_UPS_rent" id="Gen_UPS_rent">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="electricity(baht/unit)" required name="electricity" id="electricity">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="Air_OT(baht/hr.)" required name="OT" id="OT">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="water(baht/unit)" required name="water" id="water">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="include_service_fee(baht/sq.m/month)" required name="include_service_fee" id="include_service_fee">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="AVG_rental_rates" required name="AVG_rental_rates" id="AVG_rental_rates">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="average_seat_per_sqm" required name="average_seat_per_sqm" id="average_seat_per_sqm">
				  </div><br><br>
				  
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="cost_per_seat" required name="cost_per_seat" id="cost_per_seat">
				  </div><br><br>
				</div>
				
				<button class="w3-button w3-black w3-right w3-section" type="submit">
				  <i class="fa fa-paper-plane"></i> SEND MESSAGE
				</button>
			  </form>
			</div>
		  </div>
		</div>

		
	</div>
	

		
	
</body>
</html>
