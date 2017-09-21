<!DOCTYPE html>
<html> 
<head>
	<title>Rental Building Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
	
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
<style>

table, td, tr, th
{
	border-collapse: collapse; 
	border: 1px solid lightgray; 
	font-size:2px;
}

#savebutton {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	text-align:center;
	font-size:23px;
}

#primary_nav_wrap
{
	margin:15px 15px 15px 15px;
	
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0;
	background-color:#990000;
   	width:100%;  
	position: fixed; 
	top: 0;	
	left: 0;
	border-style: none none solid none; 
	border-width: 5px; 
	border-color: #4CAF50;
	
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
	line-height:32px;
	padding:0 15px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
    text-transform: uppercase;
    color:#ffffff;
    font-size: 100%;
}

#primary_nav_wrap ul li
{
	position:relative;
	float:left;
	margin:0;
	padding:0
}



#primary_nav_wrap ul li:hover
{
	background:#f6f6f6
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#fff;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
}


</style>	
	
	
</head>

<body style="background-color:linen!important;">

<?php
include "nav.php";
?>	
	
	<div class="frist"  style="padding-top:20px;text-decoration;">
	<!-- Header -->
	<div class="w3-opacity">
	<header class="w3-center w3-margin-bottom"> 
		<center><h1 style="margin-top:50px; border-bottom: 3px solid lightgray; width:50%;  text-transform: uppercase;" ><b>Create Rental Building Master</b></h1></center>
	</header>
	</div>

	<form class="master">
		<h2 style="color:gray;">Service Rate: </h2>
			<table style="width: 100%;">
			  <tr style="background-color:gray; color:#ffffff;">
				
				<th> building name </th>
				<th> floor number (Sq.m.) </th>
				<th> total area </th>
				<th> seats (Baht / sq.m.) </th>
				<th> space rental (Baht / sq.m.)) </th>
				<th> service charge </th>
				<th> furniture rental (Baht / sq.m.)</th>
				<th> IP service charge (Baht / sq.m.) </th>
				<th> extra fee (Baht / sq.m.) </th>
				<th> Gen/UPS rent(Baht / sq.m.) </th>
				<th> electricity (Baht / unit)</th>
				<th> OT (Bath / Hr) </th>
				<th> water (Bath / unit) </th>
				<th> include service fee (Baht / sq.m. / month) </th>
				<th> AVG rental rates </th>
				<th> Average seat per sqm </th>
				<th> Cost per Seat </th>
			  </tr>
			  <th colspan="17" style="background-color:lightgray;">CP2</th>
			  <tr>
				<td style="text-align:center;">14</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  
			  <tr>
				<td style="text-align:center;">19</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">20</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">21</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>	
			  <tr>
				<td style="text-align:center;">CP Total</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <th colspan="17" style="background-color:lightgray;">TRUE2</th>
			  <tr>
				<td style="text-align:center;">Building1</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">2</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">6</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">7</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">8</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">9</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">10</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">11</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">12</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">14</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">14</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">15</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">Building2</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">5</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">True2 Total</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			<th colspan="17" style="background-color:lightgray;">KKN</th>
			<tr>
				<td style="text-align:center;">G</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">3</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">4</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">5</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">6</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			  <tr>
				<td style="text-align:center;">KKN Total</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>
			<th colspan="17" style="background-color:lightgray;">ITALTHAI</th>		
				<tr>
				<td style="text-align:center;">14</td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
			  </tr>

			 
			  <tr style="background-color:gray;">
				<td style="text-align:center;">Grand Total</td>
				<td><input type="number" name="quantity" min="0" style="width:100%; background-color:gray; border:none;"></td>
				<td><input type="number" name="quantity" min="0" style="width:100%; background-color:gray; border:none;"></td>
				<th colspan="14" ></th>
			  </tr>
			 			  
			</table>
			
			<div id="savebutton" onclick="myFunction()"  >
				<a href="#"  style=" background-color: #4CAF50;  color: white; border-radius: 4px;">
					  <span class="glyphicon glyphicon-save-file" ></span> Save File / Print
				</a>
				
			</div>

			
	</form>
	
	<script>
		function myFunction() {
			window.print();
		}
	</script>
	
</body>

</html>