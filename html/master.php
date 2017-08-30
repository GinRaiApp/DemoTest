<!DOCTYPE html>
<html> 
<head>
	<title>Rental Building Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
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
	
	
	
	<div class="frist"  style="padding-top:50px;text-decoration;">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-file w3-xxlarge"></i> Create Rental Building Master</b></h1>
    </header>
	
	<form class="master">
		<h2>อัตราค่าบริการ : </h2>
			<table style="width: 100%;">
			  <tr style="background-color:gray; color:#ffffff;">
				<th> อาคาร </th>
				<th> พื้นที่รวม (ตร.ม.) </th>
				<th> จำนวนที่นั่ง </th>
				<th> ค่าเช่าพื้นที่ (บาท/ตร.ม.) </th>
				<th> ค่าบริการ (บาท/ตร.ม.) </th>
				<th> ค่าบริการส่วนเพิ่ม </th>
				<th> ค่าเช่าเฟอร์นิเจอร์ (บาท/ตร.ม.) </th>
				<th> ค่าบริการIP (บาท/ตร.ม.) </th>
				<th> ค่าบริการพิเศษ (บาท/ตร.ม.) </th>
				<th> ค่าเช่าGen/UPS(บาท/ตร.ม.) </th>
				<th> ค่าไฟฟ้า (บาท/unit) </th>
				<th> ค่าโอที (บาท/Hr) </th>
				<th> ค่าน้ำ (บาท/unit) </th>
				<th> รวมอัตราค่าเช่าบริการ (บาท/ตร.ม./เดือน) </th>
				<th> AVG อัตราค่าเช่าบริการ </th>
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
				<td>17,282.14</td>
				<td>4,142.00</td>
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