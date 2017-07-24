<!DOCTYPE html>
<html>

<title>Left Menu</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
	<script type="text/javascript" src="../js/home.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">

<body style="background-color:linen!important;">


	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="http://localhost/DemoTest/html/first.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#seatre"> Seat Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#devicesre"> Devices Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.7; filter: alpha(opacity=70);"><a href="#overview"> Overview </a></li>
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

	<div class="frist"  style="width:100%;padding-top:50px;text-decoration; margin:auto;" id="annualre">
	<!-- Header -->
    <header class="w3-container" >
      <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Annual Report </b></h1>
			<div id="LineGraphContainer"></div>
    </header>
	</div>


	<div class="clearfix" style="padding-top:50px;" id="seatre" >

	<form class="finp" >
		<h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Seat Report </b></h1>
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
				<th><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></th>
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
				<th><input type="number" name="fname" value="0" id="ipn3" style="width:100%;"></th>
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
				<th><input type="number" name="fname" value="0" id="ipn4" style="width:100%;"></th>
			  </tr>
			  <tr>
				<th>Input Null: </th>
				<th><input type="number" name="null" value="0" id="nu4" style="width:100%;"></th>
			  </tr>
			  </table>
            </div>
          </div>
		</li>
	</ul>
		<div>
		    <button id="adjust" type="button" style="margin-left:20px"> Adjust </button>
			<input type="reset" value="Reset" id="rs">
      	</div>

    </div>
    </form>
	<div class="grap" style="width:60%; float: right; margin-right:10%;">
		<div id="BarChartContainer" style="height:468px; padding-top:10px;"></div>
    </div>
	</div>

	<div  id="devicesre" style="padding-top:50px;">
	<h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Devices Report </b></h1>
	<div class="graphde">
		<div class="floating-box"><div id="chartContainer2"></div></div>
		<div class="floating-box"><div id="chartContainer3"></div></div>
		<div class="floating-box"><div id="chartContainer4"></div></div>
	</div>
	</div>


	<div id="overview" style="padding-top:50px;">
	<h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Overview </b></h1>
		 <div id="100chartContainer" style="height: 550px; width: 80%; margin:auto;"></div>
	</div>


</body>

</html>
