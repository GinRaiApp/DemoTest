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


</head>

<body>

	<div class="navbar">
	  <a href="http://localhost/p_inventory/html/first.php "><b>True Inventory</b></a>
	  <a href="http://localhost/p_inventory/html/home.php">Report</a>
	  <a href="http://localhost/p_inventory/html/floor.php">FloorPlan</a>
	  <a href="http://localhost/p_inventory/html/master.php">Rental Building Master</a>
	  <a href="http://eus/cm/inventory/index.php#" target="_blank"> CM Inventory </a>
	</div>



	<div class="frist"  style="padding-top:100px;text-decoration; ">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-area-chart w3-xxlarge"></i> Annual Report </b></h1>
			<div id="LineGraphContainer"></div>
    </header>


    <form class="finp">
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
    <!-- <div id="chartContainer" style="margin: 18px; height: 350px; width: 40%; display: inline-block;  "></div> -->

	<div style="background-color:#ccc; display: inline-block; margin: 18px; height: 350px; width: 55%; ">
		<div id="chartContainer2"></div>
		<div id="chartContainer3"></div>
		<div id="chartContainer4"></div>
	</div>
	</div>
	<!-- home jsvascript -->
	<script type="text/javascript" style="width:100px; color:#4d4d4d;" src="../js/home.js"></script>

	</div>
	</div>
	<!-- <div class="second">
		<h5><b><i class="fa fa-area-chart"></i><a href="http://localhost/p_inventory/html/pai.php " target="_blank"> Overview COM & HS & AM </b></h5></a>
		<div id="chartContainer2" style="height: 300px; width: 48%; margin:20px 50%; padding-top:500px;"></div>
		<script type="text/javascript">
			window.onload = function () {
				var chart = new CanvasJS.Chart("chartContainer",
				{
					title:{
						text: "Top Categories of New Year's Resolution"
					},
					exportFileName: "Pie Chart",
					exportEnabled: true,
							animationEnabled: true,
					legend:{
						verticalAlign: "bottom",
						horizontalAlign: "center"
					},
					data: [
					{
						type: "pie",
						showInLegend: true,
						toolTipContent: "{name}: <strong>{y}%</strong>",
						indexLabel: "{name} {y}%",
						dataPoints: [
							{  y: 35, name: "Health", exploded: true},
							{  y: 20, name: "Finance"},
							{  y: 18, name: "Career"},
							{  y: 15, name: "Education"},
							{  y: 5,  name: "Family"},
							{  y: 7,  name: "Real Estate"}
						]
				}
				]
				});
				chart.render();
			}
		</script>
	</div>

	</div> -->

</body>
</html>
