<!DOCTYPE html>
<html>
  <head>
    <title>Left Menu</title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
  
	
	
    <script type="text/javascript" src="../js/AllChart.js"></script>
    <script type="text/javascript" src="../lib/angular.min.js"></script>
    <script type="text/javascript" src="../lib/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/test_donut.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Seat', 'Computer','Heatset','Amplifier', 'Expenses'],
		  
          ['2013',  1000,      400, 	500 , 		22, 	333],
          ['2014',  1170,      460, 	100 , 		40, 	554],
          ['2015',  660,       1120,	544, 		34, 	435],
          ['2016',  1030,      540,		543, 		32, 	454],
		  ['2017',  1000,      400,		234,		50,		987]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
	
	 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Effort', 'Amount given'],
          ['My all',     100],
        ]);

        var options = {
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }
    </script>
	
	<script>
	function changeImage() {
		var image = document.getElementById("myImage");
		if (image.src.match("bulbon")) {
			image.src = "http://localhost/DemoTest/photos/og#";
		} else {
			image.src = "http://localhost/DemoTest/photos/or#";
		}
	}
	</script>
	
	<style>
		
	</style>
	

  </head>
   <!--style="background-color:linen!important;"-->
  <body >
    <div class="container">
      <nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="../html/v3.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu2.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#overview"> Report Detail </a></li>
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
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="http://localhost/DemoTest/html/rbm_2_2.php">Add New</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="http://localhost/DemoTest/html/dbtest.php">dbtest</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>

	  <li><a href="http://eus/cm/inventory/index.php#" target="_blank">cm inventory</a></li>
	  <li><a href="../html/contact_2.php#">Contact Us</a></li>
	</ul>
	</nav>

      <!-- controller -->
      <div ng-app="myApp" ng-controller="myCtrl" ng-init="displayData(); fn1()" id="myData">

        <div class="frist"  style="width:100%;padding-top:50px;text-decoration; margin:auto;" id="annualre">
      	<!-- Header -->
          <header class="w3-container" >
            <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Annual Report </b></h1>
      			<div id="chart_div" style="width: 100%; height: 550px;"></div>
          </header>
      	</div>

        <div id="overview" style="padding-top:50px; height:700px;">
        <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Report Detail </b></h1>
		<table style="width:80%; margin:10px auto;" class="RD">
            <tr>
				<th>Seat</th>
				<th>Computer</th>
				<th>Heatset</th>
				<th>Amplifier</th> 
			</tr>	
		    <tr>
				<td><img id="myImage" onclick="changeImage()" src="http://localhost/DemoTest/photos/og#"  style="width:200px;height:200px; display: block;margin: 0 auto;"></td>
				<td><img src="http://localhost/DemoTest/photos/og#"alt="Mountain View" style="width:200px;height:200px; display: block;margin: 0 auto;"></td>
				<td><img src="http://localhost/DemoTest/photos/og#"alt="Mountain View" style="width:200px;height:200px; display: block;margin: 0 auto;"></td>
				<td><img src="http://localhost/DemoTest/photos/or#"alt="Mountain View" style="width:200px;height:200px; display: block;margin: 0 auto;"></td>
			</tr>
		   
		</table>
        </div>

        <div class="clearfix" style="padding-top:50px;" id="seatre" >

        	<form class="finp" >
        		<h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Seat Report </b></h1>
            <div class="column menu">

            <ul>
        		<li>
              <div class="w3-quarter">
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

        		<li>
              <div class="w3-quarter">
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

        		<li>
              <div class="w3-quarter">
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

        		<li>
              <div class="w3-quarter">
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

        </div> <!--column menu close tag-->
      </form>

        	<div class="grap" style="width:60%; float: right; margin-right:10%;">
        		<div id="BarChartContainer" style="height:468px; padding-top:10px;"></div>
          </div>

      </div> <!--clearfix close tag-->

        <div  id="devicesre" style="padding-top:50px;">
        	<h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Devices Report </b></h1>
        	<div class="graphde">
        		<div class="floating-box"><div id="donutchart"></div></div></div>
        		<div class="floating-box"><div id="donut_single"></div></div>
        		<div class="floating-box"><div id="chartContainer4"></div></div>
        	</div>
      	</div>
		<div id="donutchart" style="width: 900px; height: 500px;"></div>

      </div> <!--controller close tag-->
    </div> <!--container close tag-->
  </body>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="../lib/jquery.canvasjs.min.js"></script>
</html>
