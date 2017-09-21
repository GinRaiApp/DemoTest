<!DOCTYPE html>
<html>
  <head>
    <title>Left Menu</title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
  	<link rel="stylesheet" type="text/css" href="../css/report.css">
	
	
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
		table {
			border-collapse: collapse;
			margin:80px;
		   
		}

		table, td, th {
			border: 1px solid black;
			padding:8px;
			

		}

		th{
			color:pink;
			background-color:gray;
		}

		input[type=number] {
			 border-style:none;
			 background-color:linen;
		}
		
		/* Footer */
		.column.Footer {
		    width:100%;
			background-image: url("../photos/cityy.jpg");
		    background-color:pink;
			text-align: center;
		}
	</style>
	</head>
	
  </head>
   <!--style="background-color:linen!important;"-->
  <body style="background-color:linen!important;">


	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="../html/v3.php">true inventory</a></li>
	  <li><a href="http://localhost/DemoTest/html/leftmenu2.php" style="border-radius: 4px;">report</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="#annualre"> Annual Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#reportd"> Report Detail </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#seatre"> Seat Report </a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.7; filter: alpha(opacity=70);"><a href="#devicesre"> Devices Report </a></li>
		  
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/floor_2.php">floor plan</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="http://localhost/DemoTest/html/add_fp.php">Add Floor Plan</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="#">All Floor Plan</a></li>
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/master.php">rb master</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="http://localhost/DemoTest/html/rbm_2_2.php">Add New</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="http://localhost/DemoTest/html/dbtest.php">DB test</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>

	  <li><a href="http://eus/cm/inventory/index.php#" target="_blank">cm inventory</a></li>
	  <li><a href="../html/contact_2.php#">Contact Us</a></li>
	</ul>
	</nav>
	
		
      <!-- controller -->
      <div ng-app="myApp" ng-controller="myCtrl" ng-init="displayData(); fn1()" id="myData">

        <div class="frist"  style="width:100%;text-decoration; margin:auto;" >
      	<!-- Header -->
		<div id="annualre" style="padding-top:5px; height:700px;">
		

		<table id="inyear">
			<tr>
				<th><i>Name/Year</i></th>
				<th>Y1</th>
				<th>Y2</th>
				<th>Y3</th>
				<th>Y4</th>
				<th>Y5</th>
				<th>Y6</th>
				<th>Y7</th>
				<th>Y8</th>
				<th>Y9</th>
				<th>Y10</th>
			</tr>
			<tr>
				<th>Computer</th>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>	
			</tr>
            <tr>
				<th>Amplifire</th>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>	
			</tr>
            <tr>
				<th>Headset</th>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
			</tr>
            <tr>
				<th>Telephone</th>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
				<td><input type="number" name="fname" value="0" id="ipn1" style="width:100%;"></td>
			</tr>
		</table>
		</div>
		</div>
		
		
		
		
        

	  </div>
	 
     
   
  </body>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="../lib/jquery.canvasjs.min.js"></script>
</html>
