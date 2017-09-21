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

<?php
include "nav.php";
?>


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
