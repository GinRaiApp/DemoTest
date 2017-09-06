<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>
	<link rel="stylesheet" type="text/css" href="/DemoTest/css/Leftmenu.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
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
		  <h3 class="w3-center">CONTACT US</h3>

		  <div class="w3-row w3-padding-32 w3-section">
			<div class="w3-col m4 w3-container">
			  <!-- Add Google Maps -->
			  <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:500px;"></div>
			</div>
			<div class="w3-col m8 w3-panel">
			  <div class="w3-large w3-margin-bottom">
				<i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> True Corporation Public Company Limited <br>
				<i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
				<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
			  </div>
			  <p>Recommend Please.... <i class="fa fa-building"></i>:</p>
			  
			  <form action="savecontact.php" name="frmAdd" method="post" target="iframe_target" id="frmAdd">
			  <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
				  <div style="padding:8px; display:block; border:none; width:100%;">
					<input class="w3-input w3-border" type="date" placeholder="date" required name="date" id="date">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="First Name" required name="fname" id="fname">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="Last Name" required name="lname" id="lname">
				  </div><br><br>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="Email" required name="email" id="email">
				  </div>
				  <div class="w3-half">
					<input class="w3-input w3-border" type="text" placeholder="Phone Number" required name="phone" id="phone">
				  </div>
				</div>
				<input class="w3-input w3-border" type="text" placeholder="Message" required name="comment" id="comment" 
				style="padding:8px; display:block; border:none; width:100%; height:100px;">
				<button class="w3-button w3-black w3-right w3-section" type="submit">
				  <i class="fa fa-paper-plane"></i> SEND MESSAGE
				</button>
			  </form>
			</div>
		  </div>
		</div>

		 
		<!-- Add Google Maps -->
		<script>
		function myMap()
		{
		  myCenter=new google.maps.LatLng(13.762541, 100.567932);
		  var mapOptions= {
			center:myCenter,
			zoom:18, scrollwheel: false, draggable: true,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

		  var marker = new google.maps.Marker({
			position: myCenter,
		  });
		  marker.setMap(map);
		}


		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwgkYMocsk07fN3pHhqMQIiZMJ9en_kH0&callback=myMap"></script>

	</div>
	

		
	
</body>
</html>
