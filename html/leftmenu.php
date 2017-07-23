<!DOCTYPE html>
<html>

<title>Left Menu</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
	<script type="text/javascript" style="color:#4d4d4d;" src="../js/home.js"></script>
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

.clearfix
{
	margin-top:500px;
}


* {
    box-sizing: border-box;
}
.header, .footer {
    background-color: grey;
    color: white;
    padding: 15px;
}
.column {
    float: left;
    padding: 15px;
	padding-left:30px;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.menu {
    width: 25%;
}
.content {
    width: 75%;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 8px;
    color: #ffffff;
}

#icp2, #itrue2, #ikkn, #iital
{
	 color:#4d4d4d; height:50%; width:100%; border-radius: 5px; padding:9px 9px 9px 9px;
}




.floating-box {
    display: inline-block;
    width: 32%;
	height: 410px;
    margin: 7px;
    border: 2px solid #73AD21;  
}

.graphde{
	width: 100%;
    background-color:lightgray;
	height: 470px;
	padding:25px;
	margin-bottom: 100px;
	
}


</style>

<body>
	
	<div class="frist"  style="width: 100%;padding-top:50px;text-decoration; margin:auto;" id="annualre">
	<!-- Header -->
    <header class="w3-container" >
      <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Annual Report </b></h1>
			<div id="LineGraphContainer"></div>
    </header>
	</div>
	
	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="http://localhost/DemoTest/html/first.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#detailre"> Detail Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/floor.php">floor plan</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#">Sub Menu 1</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#">Sub Menu 2</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
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
	  <li><a href="#">Contact Us</a></li>
	</ul>
	</nav>
	
	
	<div class="clearfix">
    <div class="column menu">
    <ul>
		<li><div class="w3-quarter">
            <div class="w3-container  w3-padding-16 box" id="icp2" style="background-color:#ff9999;">
              <table style="width:100%">
			  <tr>
				<th colspan="2">CP2 </th>
			  </tr>
			  <tr>
				<th>Input Seat Number: </th>
				<th><input type="number" name="fname" value="0" id="ipn2" style="width:100%;"></th>
			  </tr>
			  <tr>
				<th>Input Null: </th>
				<th><input type="number" name="null" value="0" id="nu1" style="width:100%;"></th>
			  </tr>
			  </table>
            </div>
			
          </div>
		</li>
		
		<li><div class="w3-quarter">
            <div class="w3-container  w3-padding-16 box" id="icp2" style="background-color:#ffe699;">
              <table style="width:100%">
			  <tr>
				<th colspan="2">TRUE2 </th>
			  </tr>
			  <tr>
				<th>Input Seat Number: </th>
				<th><input type="number" name="fname" value="0" id="ipn2" style="width:100%;" ></th>
			  </tr>
			  <tr>
				<th>Input Null: </th>
				<th><input type="number" name="null" value="0" id="nu2" style="width:100%;"></th>
			  </tr>
			  </table>
            </div>
			
          </div>
		</li>
		
		<li><div class="w3-quarter">
            <div class="w3-container w3-padding-16 box" id="ikkn" style="background-color:#ffccf3;">
              <table style="width:100%">
			  <tr>
				<th colspan="2">ITALTHAI </th>
			  </tr>
			  <tr>
				<th>Input Seat Number: </th>
				<th><input type="number" name="fname" value="0" id="ipn2" style="width:100%;"></th>
			  </tr>
			  <tr>
				<th>Input Null: </th>
				<th><input type="number" name="null" value="0" id="nu3" style="width:100%;"></th>
			  </tr>
			  </table>
            </div>
          </div>
		</li>
		
		
		<li><div class="w3-quarter">
            <div class="w3-container w3-padding-16 box" id="ikkn" style="background-color:#ccffff;">
              <table style="width:100%">
			  <tr>
				<th colspan="2">KKN </th>
			  </tr>
			  <tr>
				<th>Input Seat Number: </th>
				<th><input type="number" name="fname" value="0" id="ipn2" style="width:100%;"></th>
			  </tr>
			  <tr>
				<th>Input Null: </th>
				<th><input type="number" name="null" value="0" id="nu4" style="width:100%;"></th>
			  </tr>
			  </table>
            </div>
          </div>
		</li>
		
		<li>
		    <button id="adjust" type="button" style="margin-left:20px"> Adjust </button>
			<input type="reset" value="Reset" id="rs">
      	</li>
		
    </ul>
    </div>
    
	<div class="grap" style="width:60%; float: right; margin-right:10%;">
		<div id="BarChartContainer" style="height:468px; padding-top:10px;"></div>
    </div>
	</div>
	
	<div class="graphde">
		<div class="floating-box"><div id="chartContainer2"></div></div>
		<div class="floating-box"><div id="chartContainer3"></div></div>
		<div class="floating-box"><div id="chartContainer4"></div></div>
	</div>
	
	
  
  
</body>

</html>