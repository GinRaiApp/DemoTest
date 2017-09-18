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
		.floating-box {
			width: 100%;
			height: 100px;
			border:none;
			margin:10px auto;
			background-color:gray;
		}

</style>
	</style>
	</head>
	
  </head>
   <!--style="background-color:linen!important;"-->
  <body style="background-color:linen!important;">

	<!--header-->
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
		</ul>
	  </li>
	  <li><a href="http://localhost/DemoTest/html/master.php">rb master</a>
		<ul>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:10; filter: alpha(opacity=100);"><a href="http://localhost/DemoTest/html/rbm_2_2.php">Add New</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.9; filter: alpha(opacity=90);"><a href="http://localhost/DemoTest/html/dbtest.php">Show</a></li>
		  <li style="background-color:#ff9999; border-radius: 4px; opacity:0.8; filter: alpha(opacity=80);"><a href="#">Sub Menu 3</a></li>
		</ul>
	  </li>

	  <li><a href="http://eus/cm/inventory/index.php#" target="_blank">cm inventory</a></li>
	  <li><a href="../html/contact_2.php#">Contact Us</a></li>
	</ul>
	</nav>
	
	<!--body-->
	<div style="border:none; width:100%; height:50px; " class="floating-box"> </div>

	<table bgcolor="#bcbcbc" border="1"  cellpadding="0" cellspacing="0" style="border-color:gray;" class="floating-box">
		<tbody>
			<tr bgcolor="#ffffff">
				<td bgcolor="#cccccc" width="30" align="center">
					<p style="margin:10px"><strong>ปี</strong></p>
				</td>
				<td width="60"><div align="center"><a href="/th/market/securities_company_statistics60.html">ปี 2560</a></div></td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics59.html">ปี 2559</a></div>
				</td>
				<td width="60"><div align="center"><a href="/th/market/securities_company_statistics58.html">ปี 2558</a></div></td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics57.html">ปี 2557</a></div>
				</td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics56.html">ปี 2556</a></div>
				</td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics55.html" target="_blank">ปี 2555</a></div>
				</td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics54.html" target="_blank">ปี 2554</a></div>
				</td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics53.html" target="_blank">ปี 2553</a></div>
				</td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics52.html" target="_blank">ปี 2552</a></div>
				</td>
				<td width="60">
					<div align="center"><a href="/th/market/securities_company_statistics51.html" target="_blank">ปี 2551</a></div>
				</td>
			</tr>
		</tbody>		
	</table>
	
     
   
 
   
	<div style="border:none; width:100%; height:50px; " class="floating-box">1</div>
	<div style="border:none; width:100%; height:50px; " class="floating-box">2</div>
	<div style="border:none; width:100%; height:50px; " class="floating-box">3</div>
	<div style="border:none; width:100%; height:50px; " class="floating-box">4</div>
	
 </body>
	<script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="../lib/jquery.canvasjs.min.js"></script>
</html>
