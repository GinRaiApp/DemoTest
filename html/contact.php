<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>
	<link rel="stylesheet" type="text/css" href="/DemoTest/css/Leftmenu.css">
	<style>
	input[type=text],input[type=email], input[type=date] {
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
	  <li class="current-menu-item "><a href="../html/first.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#overview"> Overview </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#seatre"> Seat Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.7; filter: alpha(opacity=70);"><a href="#devicesre"> Devices Report </a></li>
		  
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/floor.php">floor plan</a>
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
	  <li><a href="../html/contact.php#">Contact Us</a></li>
	</ul>
	</nav>



	<div class="contactus" style="width:50%; margin:50px auto; padding:20px; background-color:#e6e6e6;	border: 2px dashed red; border-radius: 12px;">
		<h1>CONTACT US</h1>
		
		<div class="name">
		<h2>Information User:</h2>
		<form action="savecontact.php" name="frmAdd" method="post" target="iframe_target">
		
			<label for="fname">Date:</label>
			<input type="date" id="date" name="date">
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="fname">
			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lname"> 
			<label for="email">Email: (xxx@truecorp.co.th)</label>
			<input type="email" id="email" name="email"> 
			<label for="phone">Phone Number:</label>
			<input type="text" id="phone" name="phone"> 
			<p>Please select about:
			<select id="type" name="job">
				<option value="sample"><----Please Choose----></option>
				<option value="IT">IT</option>
				<option value="Suppoer">Suppoer</option>
				<option value="Other">Other</option>
			</select>
	
				
		<div ="comment">
		<p><strong>Comment:</strong></p>
		<textarea name="comment">Some text...</textarea>
		</div>

		
		<div class="3button">
		<input type="submit" name="submit" value="submit">
		</div>
		
		</form>
		
		</div>
	</div>
	

	
	









	
	
	
	
</body>
</html>
