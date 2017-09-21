<!DOCTYPE html>
<html lang="en">
<head>
	<title>Report</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
  	<link rel="stylesheet" type="text/css" href="../css/report.css">

		<style>
		* {
		    box-sizing: border-box;
		}

		body {
		  margin: 0;
		}

		/* Style the header */
		.header {

		    padding: 20px;
		    text-align: center;
		}

		/* Style the top navigation bar */
		.topnav {
		    overflow: hidden;
		    background-color: #333;
		}



		/* Change color on hover */
		.topnav a:hover {
		    background-color: #ddd;
		    color: black;
		}

		/* Create three unequal columns that floats next to each other */
		.column {
		    float: left;
		    padding: 10px;
		}

		/* Left and right column */
		.column.side {
		    width: 25%;
		    background-color: #fff5f5;
		    height:600px;
		}

			.column.side2 {
		    width: 25%;
		    background-color: #ffffff;
		    height:600px;
		}

		/* Middle column */
		.column.middle {
		    width: 75%;
		    background-color: #fffff3;
		    height:600px;
		}


		/* Middle column2 */
		.column.middle2 {
		    width:100%;
		    background-color: #fff8f3;
		    height:600px;
		}

		/* Sub Header */
		.column.middle3 {
		    width:100%;
		    background-color:pink;
			text-align: center;
		}

		.column.middle4 {
		    width:50%;
		    background-color: #f8f8f3;
			text-align: center;
			height:600px;
		}

		/* Footer */
		.column.Footer {
		    width:100%;
			background-image: url("../photos/cityy.jpg");
		    background-color:pink;
			text-align: center;
		}

		/* Middle columnmini */
		.column.middlemini {
		    width: 100%;
		    background-color: #fffff3;
		    margin-bottom:8px;

		}

		}

		/* Clear floats after the columns */
		.row:after {
		    content: "";
		    display: table;
		    clear: both;
		}

		/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
		@media (max-width: 600px) {
		    .column.side, .column.middle {
		        width: 100%;
		    }
		}

		</style>

		<script type="text/javascript" src="../lib/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
		<!--annual-->
				$(document).ready(function(){
					$.ajax({
						url: "../php/annualData.php",
						dataType: "JSON",
						success: function(result){
							console.log('bak')
							console.log(result)
							google.charts.load('current', {'packages':['corechart']});
							google.charts.setOnLoadCallback(function(){
								drawChart(result);
							});
						},error: function(result){
							console.log('Boom error!! :: '+JSON.stringify(result))
						}
					});
					function drawChart(result) {
						console.log(JSON.stringify(result))

						var header = ['Year', 'Seat', 'Computer','Heatset','Amplifier', 'Expenses']
						var row = new Array();

						$.each(result,function(index,data){
							row.push(result[index]);
						})

						var jdata = [header].concat(row);

						var data = google.visualization.arrayToDataTable(jdata);

						var options = {
							title: 'Company Performance',
							hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
							vAxis: {minValue: 0}
						};

						var chart = new google.visualization.AreaChart(document.getElementById('chart_annual'));
						chart.draw(data, options);
					}
				});
		</script>
		<script type="text/javascript"> <!-- Seat -->

			$(document).ready(function(){
				$.ajax({
					url: "../php/seatData.php",
					dataType: "JSON",
					success: function(res){
						console.log('fuck')
						console.log(res)
						google.charts.load('current', {'packages':['corechart', 'bar']});
						google.charts.setOnLoadCallback(function(){
							drawStuff(res);
						});
					},error: function(res){
						console.log('Boom error!! :: '+JSON.stringify(res))
					}
				});

				function drawStuff(res) {
					var chartDiv = document.getElementById('chart_seat');

					var header = ['Building', 'Seat', 'Seat Null']
					var row = new Array();

					$.each(res,function(index,data){
						row.push(res[index]);
					})

					var jdata = [header].concat(row);

					var data = google.visualization.arrayToDataTable(jdata);

					var materialOptions = {
						width: 900,
						chart: {
							title: 'Nearby galaxies',
							subtitle: 'distance on the left, brightness on the right'
						},
						series: {
							0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
							1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
						},
						axes: {
							y: {
								distance: {label: 'parsecs'}, // Left y-axis.
								brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
							}
						}
					};

				var classicOptions = {
					width: 900,
					series: {
						0: {targetAxisIndex: 0},
						1: {targetAxisIndex: 1}
					},
					title: 'Nearby galaxies - distance on the left, brightness on the right',
					vAxes: {
						// Adds titles to each axis.
						0: {title: 'parsecs'},
						1: {title: 'apparent magnitude'}
					}
				};

					function drawMaterialChart() {
						var materialChart = new google.charts.Bar(chartDiv);
						materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
					}

					drawMaterialChart();
				};
			});
		</script>
		<script type="text/javascript"> <!--donut computer-->
      $(document).ready(function(){
				$.ajax({
					url: "../php/TotalCom.php",
					dataType: "JSON",
					success: function(res){
						console.log('fuck')
						console.log(res)
						google.charts.load("current", {packages:["corechart"]});
						google.charts.setOnLoadCallback(function(){
							drawChart(res);
						});
					},error: function(res){
						console.log('Boom error!! :: '+JSON.stringify(res))
					}
				});

				function drawChart(res) {

					var header = ['Building', 'Computer per Building']
					var row = new Array();

					$.each(res,function(index,data){
						row.push(res[index]);
					})

					var jdata = [header].concat(row);

					var data = google.visualization.arrayToDataTable(jdata);

					var options = {
						title: 'Computer per building',
						pieHole: 0.3,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
					chart.draw(data, options);
				}
    	});
    </script>
		<script type="text/javascript"> <!--donut amplifire-->
			$(document).ready(function(){
				$.ajax({
					url: "../php/TotalAmp.php",
					dataType: "JSON",
					success: function(res){
						console.log('fuck')
						console.log(res)
						google.charts.load("current", {packages:["corechart"]});
						google.charts.setOnLoadCallback(function(){
							drawChart(res);
						});
					},error: function(res){
						console.log('Boom error!! :: '+JSON.stringify(res))
					}
				});

				function drawChart(res) {

					var header = ['Building', 'Amplifire per Building']
					var row = new Array();

					$.each(res,function(index,data){
						row.push(res[index]);
					})

					var jdata = [header].concat(row);

					var data = google.visualization.arrayToDataTable(jdata);

					var options = {
						title: 'Amplifire per building',
						pieHole: 0.3,
					};


					var chart = new google.visualization.PieChart(document.getElementById('donutchart_amplifire'));
					chart.draw(data, options);
				}
			});
    </script>
		<script type="text/javascript"> <!--donut headset-->
      $(document).ready(function(){
				$.ajax({
					url: "../php/TotalHead.php",
					dataType: "JSON",
					success: function(res){
						console.log('fuck')
						console.log(res)
						google.charts.load("current", {packages:["corechart"]});
						google.charts.setOnLoadCallback(function(){
							drawChart(res);
						});
					},error: function(res){
						console.log('Boom error!! :: '+JSON.stringify(res))
					}
				});

	      function drawChart(res) {

					var header = ['Building', 'Headset per Building']
					var row = new Array();

					$.each(res,function(index,data){
						row.push(res[index]);
					})

					var jdata = [header].concat(row);

	        var data = google.visualization.arrayToDataTable(jdata);

	        var options = {
	          title: 'Headset per building',
	          pieHole: 0.3,
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('donutchart_headset'));
	        chart.draw(data, options);
	      }
			});
    </script>
		<script type="text/javascript"> <!--donut telephone-->
      $(document).ready(function(){
				$.ajax({
					url: "../php/TotalHead.php",
					dataType: "JSON",
					success: function(res){
						console.log('fuck')
						console.log(res)
						google.charts.load("current", {packages:["corechart"]});
						google.charts.setOnLoadCallback(function(){
							drawChart(res);
						});
					},error: function(res){
						console.log('Boom error!! :: '+JSON.stringify(res))
					}
				});

	      function drawChart(res) {

					var header = ['Building', 'Headset per Building']
					var row = new Array();

					$.each(res,function(index,data){
						row.push(res[index]);
					})

					var jdata = [header].concat(row);

	        var data = google.visualization.arrayToDataTable(jdata);

	        var options = {
	          title: 'Telephone per building',
	          pieHole: 0.3,
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('donutchart_telephone'));
	        chart.draw(data, options);
	      }
			});
    </script>
</head>
<?php
include "nav.php";
?>


<div class="header" style="background-color:transparent!important;" id="annualre">
    <div  >
		<div class="w3-opacity">
		<header class="w3-center w3-margin-bottom">
			<center><h1 style=" border-bottom: 3px solid lightgray; width:50%; color: maroon; font-weight: bold;"><b>Annual Report </b></h1></center>

		</header>
		</div>
	</div>
</div>


<?php
include "config.php";


$strSQL = "SELECT * FROM annual ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);
?>
 <div class="column middle4">
    <h2>Total Inventory per year</h2>
		<div id="chart_annual" style="width: 100%; height: 500px;"></div>
  </div>

  <div class="column side" style="background-color:#fff5ff;">
    <h2>Annual Detail</h2>

	<!--table bgcolor="#bcbcbc"  style="border-color:lightgray;" class="floating-box" style="width:100%; margin:5px auto;" >
	<tbody>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Year</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Seat</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Computer</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Amplifire</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Headset</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Telephone</strong></p></th>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2017</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2016</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2015</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2014</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2013</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2012</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2011</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2010</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2009</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px">2008</p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
				<td bgcolor="#ffffff" width="20" align="center"><p style="margin:10px"></p></td>
		</tr>

<<<<<<< HEAD:html/Report.html

	</tbody>
=======
	</tbody>
	</table-->

	<p>Please enter annual detail:</p>

	<form action="saveyear.php" method="POST" enctype="multipart/form-data" name="iny" target="iframe_target" id="iny">
	<table bgcolor="#bcbcbc"  style="border-color:lightgray;" class="floating-box" style="width:100%; margin:5px auto;" >
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Year</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Seat</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Computer</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Amplifire</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Headset</strong></p></th>
				<th bgcolor="#cccccc" width="20" align="center"><p style="margin:10px"><strong>Telephone</strong></p><? echo $row ?></th>
		</tr>
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<td><input type="number" name="year" value="0" id="year" style="width:100%; border-style:none;"></td>
				<td><input type="number" name="seat" value="0" id="seat" style="width:100%; border-style:none;"></td>
				<td><input type="number" name="com" value="0" id="com" style="width:100%; border-style:none;"></td>
				<td><input type="number" name="am" value="0" id="am" style="width:100%; border-style:none;"></td>
				<td><input type="number" name="hes" value="0" id="hes" style="width:100%; border-style:none;"></td>
				<td><input type="number" name="tel" value="0" id="tel" style="width:100%; border-style:none;"></td>
		</tr>

	</table>
	<input type="submit" name="submit" value="Update !" />
	</form>



	<table bgcolor="#bcbcbc"  style="border-color:lightgray;" class="floating-box" style="width:100%; margin:5px auto;" >
		<tr bgcolor="#ffffff" style="font-size:5px;">
				<th bgcolor="#cccccc" width="50px;" align="center"><p style="margin:10px"><strong>Year</strong></p></th>
				<th bgcolor="#cccccc" width="55px;" align="center"><p style="margin:10px"><strong>Seat</strong></p></th>
				<th bgcolor="#cccccc" width="80px;" align="center"><p style="margin:10px"><strong>Computer</strong></p></th>
				<th bgcolor="#cccccc" width="75px;" align="center"><p style="margin:10px"><strong>Amplifire</strong></p></th>
				<th bgcolor="#cccccc" width="75px;" align="center"><p style="margin:10px"><strong>Headset</strong></p></th>
				<th bgcolor="#cccccc" width="75px;" align="center"><p style="margin:10px"><strong>Telephone</strong></p><? echo $row ?></th>
		</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
?>
	<tr bgcolor="#ffffff" style="font-size:5px;">
		<td><?php echo $objResult["year"];?></td>
		<td><?php echo $objResult["seat"];?></td>
		<td><?php echo $objResult["com"];?></td>
		<td><?php echo $objResult["am"];?></td>
		<td><?php echo $objResult["hes"];?></td>
		<td><?php echo $objResult["tel"];?></td>
	</tr>

<?php
	}
?>
>>>>>>> b52f44a5c21b063b6201efd717fb20bc5e6bb627:html/Report.php
	</table>

 </div>
</div>


  <div class="column side">
    <h2>Annual data analysis</h2>
    <p>Summary and Average per type:</p>
	<div class="column middlemini">
	<?php
		include 'avg_y.php'
	?>
	</div>


    <div class="column middlemini">
      <p>Description...</p>
  	</div>
    <div class="column middlemini">
      <p>Description..</p>
  	</div>
  </div>
</div>

<!--Report Detail-->
<div class="column middle3" style="background-color:transparent!important;" id="seatre" >
    <div >
		<div class="w3-opacity">
		<header class="w3-center w3-margin-bottom">
			<center><h1 style=" border-bottom: 3px solid lightgray; width:50%; color: maroon; font-weight: bold;"><b>Seat Report</b></h1></center>
		</header>
		</div>
	</div>
</div>

<div class="row">

  <div class="column side">
	<!--h2>Side</h2-->
               <ul  style="list-style-type: none;">
        		<li>
				<div class="w3-quarter" >
                    <div class="w3-padding-16 box" id="icp2" style="background-color:#ff9999;">
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
                    <div class="w3-padding-16 box" id="icp2" style="background-color:#ffe699;">
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
                    <div class="w3-padding-16 box" id="ikkn" style="background-color:#ffccf3;">
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
                    <div class="w3-padding-16 box" id="ikkn" style="background-color:#ccffff;">
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

  </div>
  <div class="column middle">
    <h2>Total Number of Seats & Null Seats Per Building</h2>
		<div id="chart_seat" style="width: 100%; height: 500px;"></div>
  </div>
</div>



<!--Divices Report-->
<div class="column middle3" style="background-color:transparent!important;" id="devicesre" >
        <div >
		<div class="w3-opacity">
		<header class="w3-center w3-margin-bottom">
			<center><h1 style=" border-bottom: 3px solid lightgray; width:50%; color: maroon; font-weight: bold;"><b>Divices Report</b></h1></center>
		</header>
		</div>
	</div>
</div>


<div class="row">
	 <div class="column side2">
		<h2>Total Computer</h2>
		<div id="donutchart" style="width: 100%; height: 200px;"></div>
	 </div>

	  <div class="column side2">
		<h2>Total Amplifire</h2>
		<div id="donutchart_amplifire" style="width: 100%;  height: 200px;"></div>
	 </div>

	  <div class="column side2">
		<h2>Total Headset</h2>
		<div id="donutchart_headset" style="wwidth: 100%;  height: 200px;"></div>
	 </div>

	  <div class="column side2">
		<h2>Total Telephone</h2>
		<div id="donutchart_telephone" style="width: 100%;  height: 200px;"></div>
	 </div>
</div>




<div class="column Footer">
    <h2>Footer</h2>
    <p>Customer Service Support. [ Facility Management ]</p>
	<p>Create by Cholticha Wanichluksamee, Thai-Nuchi Institute of Technology [Create date: 05 June 2017]</p>
</div>



</body>
</html>
