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
	
	<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
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



* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 50px;
    text-align: center;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}

#date { color: #929292;}

select {
    color: #929292;
}
	
	</style>
</head>
<body style="background-color:linen!important;">


	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="../html/v3.php">true inventory</a></li>
	  <li><a href="../html/Report.#" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#overview"> Report Detail </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#seatre"> Seat Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.7; filter: alpha(opacity=70);"><a href="#devicesre"> Devices Report </a></li>

		</ul>
	  </li>
	  <li><a href="../html/floor_2.php">floor plan</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="../html/add_fp.php">Add Floor Plan</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#">All Floor Plan</a></li>
		</ul>
	  </li>
	  <li><a href="../html/master.php">rb master</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="../html/rbm_2_2.php">Add New</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="../html/dbtest.php">DB test</a></li>
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
	<div class="w3-opacity">
	<header class="w3-center w3-margin-bottom"> 
		<center><h1 style=" border-bottom: 3px solid lightgray; width:50%; color: maroon; font-weight: bold;  text-transform: uppercase;">
			<b>Rental Building Master</b></h1></center>
	</header>
	</div>
		  <div class="w3-row w3-padding-32 w3-section">
			<div class="">
			 
			<form action="saverbm.php" name="frmrAdd" method="post" target="iframe_target" id="frmrAdd">
			<div class="row">
			  <div class="column" style="background-color:#aaa;">
				<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
							<!-- input date -->
							<div style="padding:8px; display:block; border:none; width:100%;">
								<input class="w3-input w3-border" type="date" placeholder="date" required name="date" id="date">
							</div>
							  
							<!-- input abount building -->
							<div style="padding:8px ; display:block; border:none; width:100%;"> 
							  <!--div class="w3-half">
							  <form class="w3-input" type="text" placeholder="building" required name="building" id="building">
								  <input type="radio" name="building" value="bu_01" checked> bu_01<br>
								  <input type="radio" name="building" value="bu_02"> bu_02<br>
								  <input type="radio" name="building" value="bu_03"> bu_03 <br> 
								  <input type="radio" name="building" value="bu_04"> bu_04 
						      </form> 
							  </div>
					
							  <div class="w3-half">
							  <form class="w3-input " type="text" placeholder="building" required name="bu_name" id="building">
								  <input type="radio" name="bu_name" value="CP2" checked> CP2<br>
								  <input type="radio" name="bu_name" value="KKN"> KKN<br>
								  <input type="radio" name="bu_name" value="ITALTHAI"> ITALTHAI <br> 
								  <input type="radio" name="bu_name" value="TRUE2"> TRUE2 <br>
						      </form> 
							  </div-->
							  
							  <select class="w3-input w3-border" type="text" placeholder="building" required name="building" id="building">
								  <option value="">Select building id</option>
								  <option value="bu_01">bu_01</option>
								  <option value="bu_02">bu_02</option>
								  <option value="bu_03">bu_03</option>
								  <option value="bu_04">bu_04</option>
							  </select>
							  <select class="w3-input w3-border" type="text" placeholder="bu_name" required name="bu_name" id="bu_name">
								  <option value="">Select building name</option>
								  <option value="CP2">CP2</option>
								  <option value="KKN">KKN</option>
								  <option value="ITALTHAI">ITALTHAI</option>
								  <option value="TRUE">TRUE</option>
							  </select>							  
							  <div class="">
								<input class="w3-input " type="text" placeholder="floor_number" required name="floor_number" id="floor_number">
							  </div> 
							</div>
						</div>
			  </div>
			  <div class="column" style="background-color:#bbb;">
			  <div class="w3-row-padding" style="margin:10px -16px 8px -16px">
						  						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="total_area(sq.m.)" required name="total_area" id="total_area">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="seats" required name="seats" id="seats">
						  </div><br><br>
						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="space_rental(baht/sq.m)" required name="space_rental" id="space_rental">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="service_charge(baht/sq.m)" required name="service_charge" id="service_charge">
						  </div><br><br>
						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="extra_charge" required name="extra_charge" id="extra_charge">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="furniture_rental" required name="furniture_rental" id="furniture_rental">
						  </div><br><br>
						  
						   <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="IP_service_charge(baht/sq.m)" required name="IP_service_charge" id="IP_service_charge">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="extra_fee(baht/sq.m)" required name="extra_fee" id="extra_fee">
						  </div><br><br>
						</div>
			  </div>
			  <div class="column" style="background-color:#ccc;">
			  <div class="w3-row-padding" style="margin:10px -16px 8px -16px">
						 
						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="Gen/UPS_rent" required name="Gen_UPS_rent" id="Gen_UPS_rent">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="electricity(baht/unit)" required name="electricity" id="electricity">
						  </div><br><br>
						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="Air_OT(baht/hr.)" required name="OT" id="OT">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="water(baht/unit)" required name="water" id="water">
						  </div><br><br>
						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="include_service_fee(baht/sq.m/month)" required name="include_service_fee" id="include_service_fee">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="AVG_rental_rates" required name="AVG_rental_rates" id="AVG_rental_rates">
						  </div><br><br>
						  
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="average_seat_per_sqm" required name="average_seat_per_sqm" id="average_seat_per_sqm">
						  </div>
						  <div class="w3-half">
							<input class="w3-input w3-border" type="text" placeholder="cost_per_seat" required name="cost_per_seat" id="cost_per_seat">
						  </div><br><br>
						 </div>
						</div>
			  </div>
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
