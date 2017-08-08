<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

<body>

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
	
	

	
	
	<div class="frist"  style="padding-top:50px;text-decoration;">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-building w3-xxlarge"></i> Overview Floor Plan</b></h1>
    </header>
	
	<form name="form1" method="post" action="PageUploadToMySQL2.php" enctype="multipart/form-data">
	<input type="file" name="filUpload"><br><br>
	<input name="btnSubmit" type="submit" value="Submit">
	</form>
		
	
	
	<div class="flex-container">
	
		<div class="bgfp1" style="margin:auto;"> 
			<img src="http://localhost/p_inventory/photos/Building2#" alt="Floor Plan" width="95%" height="60%; padding-top:100px;">
		</div>
	
		<div class="bgfp1" style="border-color: #cc3300; background-color:#ff9999;"><i class="fa fa-building w3-xlarge" ></i><span> CP2 </span>
		<ul>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/CP2/CP2_14FL#" target="_blank" class="FP">CP2_14</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/CP2/CP2_19FL#" target="_blank" class="FP">CP2_19</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/CP2/CP2_20FL#" target="_blank" class="FP">CP2_20</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/CP2/CP2_21FL_L#" target="_blank" class="FP">CP2_LOTUS_21</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/CP2/CP2_21FL_H#" target="_blank" class="FP">CP2_HOTEL_21</a></li>
		</ul>
		</div>
		
		<div class="bgfp1" style="border-color:#ffbf00; background-color:#ffe699;"><i class="fa fa-building w3-xlarge" ></i><span> TRUE2 </span>
		<ul>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_2#" target="_blank" class="FP">TRUE2_2</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_5#" target="_blank" class="FP">TRUE2_TRANNING_5</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_6#" target="_blank" class="FP">TRUE2_6</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_7#" target="_blank" class="FP">TRUE2_7</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_8#" target="_blank" class="FP">TRUE2_8</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_9#" target="_blank" class="FP">TRUE2_9</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_10#" target="_blank" class="FP">TRUE2_10</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_11#" target="_blank" class="FP">TRUE2_11</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_12#" target="_blank" class="FP">TRUE2_12</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_14#" target="_blank" class="FP">TRUE2_14</a></li>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/True2/t2_15#" target="_blank" class="FP">TRUE2_15</a></li>
			
		</ul>
		</div>
		
		<div class="bgfp1" style="border-color:#ff99e6; background-color:#ffccf3;"><i class="fa fa-building w3-xlarge" ></i><span> KKN </span>
		<ul>
			<li>KKN_G
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_g#"  target="_blank" class="FP">KKN_G_05/08/2016</a></dd>
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_g_1JAN17#"  target="_blank" class="FP">KKN_G_01/01/2017</a></dd></li>
			<li>KKN_3
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/KKN-3fl#"  target="_blank" class="FP">KKN_3</a></dd>
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_3#"  target="_blank" class="FP">KKN_3_05/08/2016</a></dd>
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_3_20Jun17#"  target="_blank" class="FP">KKN_3_20/01/2017</a></dd></li>
			<li>KKN_4
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/KKN-4fl#"  target="_blank" class="FP">KKN_4</a></dd>
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_04#"  target="_blank" class="FP">KKN_4_05/08/2016</a></dd>
			<li>KKN_5
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/KKN-5fl#"  target="_blank" class="FP">KKN_5</a></dd>
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_05#"  target="_blank" class="FP">KKN_5_05/08/2016</a></dd>
			<li>KKN_6
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/KKN-6fl#"  target="_blank" class="FP">KKN_6</a></dd>
				<dd><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/kkn_06#"  target="_blank" class="FP">KKN_6_05/08/2016</a></dd>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/KKN/#" target="_blank" class="FP">KKN_TRANNING</a></li>
		</ul>
		
		</div>
		
		<div class="bgfp1" style="border-color:#99ccff; background-color:#ccffff;"><i class="fa fa-building w3-xlarge" ></i><span> ITALTHAI </span>
		<ul>
			<li><a href="http://localhost/p_inventory/photos/FloorPlan/italthai/#" target="_blank" class="FP">ITALTHAI_14</a></li>
		</ul>
		</div>
	</div>

	
	
</body>

</html>
