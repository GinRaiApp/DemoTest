<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<!-- edit style graph -->
	<link rel="stylesheet" type="text/css" href="../css/graph.css">

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
	  <li class="current-menu-item "><a href="http://localhost/DemoTest/html/first.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/home.php" style="border-radius: 4px;">report</a>
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
	
	
	
	<div class="frist"  style="padding-top:50px;text-decoration; " id="annualre">
	<!-- Header -->
    <header class="w3-container" >
      <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Annual Report </b></h1>
			<div id="LineGraphContainer" ></div>
    </header>


    <form class="finp" id="detailre">
	<h1><b><i class="fa fa-area-chart w3-xxlarge"></i> Overview Seat </b></h1>
      <div class="w3-row-padding w3-margin-bottom" id="ipn">
          <div class="w3-quarter">
            <div class="w3-container  w3-padding-16 box" style="background-color:#ff9999; color:#4d4d4d; height:50% ;">
              <div class="w3-left"><i class="fa fa-building-o w3-xlarge" > CP2 </i></div><br>
              <div>
                <p>Input Seat Number: <input type="number" name="fname" value="0" id="ipn1"></p>
				<p>Input Null: <input type="number" name="null" value="0" id="nu1"></p>
              </div>
              <div class="w3-clear"></div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container  w3-padding-16 box" style="background-color:#ffe699; color:#4d4d4d; ">
              <div class="w3-left"><i class="fa fa-building-o w3-xlarge"> TRUE2 </i></div><br>
              <div>
                <p>Input Seat Number: <input type="number" name="fname" value="0" id="ipn2"></p>
				<p>Input Null: <input type="number" name="null" value="0" id="nu2"></p>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container w3-padding-16 box" style="background-color:#ffccf3; color:#4d4d4d;">
              <div class="w3-left"><i class="fa fa-building-o w3-xlarge"> KKN </i></div><br>
              <div>
                <p>Input Seat Number: <input type="number" name="fname" value="0" id="ipn3"></p>
				<p>Input Null: <input type="number" name="null" value="0" id="nu3"></p>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container  w3-padding-16 box" style="background-color:#ccffff; color:#4d4d4d;">
              <div class="w3-left"><i class="fa fa-building-o w3-xlarge"> ITALTHAI </i></div><br>
              <div>
                <p>Input Seat Number: <input type="number" name="fname" value="0" id="ipn4"></p>
				<p>Input Null: <input type="number" name="null" value="0" id="nu4"></p>
              </div>
            </div>
          </div>
      </div>

      <div>
        <button id="adjust" type="button" style="margin-left:20px"> Adjust </button>
    	<input type="reset" value="Reset" id="rs">
      </div>

    </form>

	<div class="grap" >

			<div id="BarChartContainer"></div>

			<div style="background-color:#ccc; display: inline-block; margin: 18px; height: 350px; width: 55%; ">
				<div id="chartContainer2"></div>
				<div id="chartContainer3"></div>
				<div id="chartContainer4"></div>
			</div>

	</div>
	<!-- home jsvascript -->
	<script type="text/javascript" style="width:100px; color:#4d4d4d;" src="../js/home.js"></script>

	</div>

</body>
</html>
