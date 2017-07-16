<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
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
			<div id="LineGraphContainer" style="margin:10px Auto 100px Auto; height: 550px; width: 80%;"></div>
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
		<div id="BarChartContainer" style="margin:10px Auto 100px Auto; height: 350px; width: 40%;"></div>
    <!-- <div id="chartContainer" style="margin: 18px; height: 350px; width: 40%; display: inline-block;  "></div> -->

	<div style="background-color:#ccc; display: inline-block; margin: 18px; height: 350px; width: 55%; ">
		<div id="chartContainer2" style=" float: left; margin:15px; height: 200px; width: 30%; "></div>
		<div id="chartContainer3" style=" float: left; margin:13px; height: 200px; width: 30%; "></div>
		<div id="chartContainer4" style=" float: left; margin:13px; height: 200px; width: 30%; "></div>
	</div>
	</div>

	<script type="text/javascript" style="width:100px; color:#4d4d4d;">
	      	window.onload = function () {
        	var chart = new CanvasJS.Chart("BarChartContainer", {
        		title:{text: "Total Seat"},
						theme: "theme3",
            animationEnabled: true,
						toolTip: {
								shared: true
						},
						axisY: {
								title: "Seat"
						},
						axisX: {
								title: "Building"
						},
						data: [
		        		{
			        	type: "column",
								name: "Seat Total",
								legendText: "Seat Total",
								indexLabel: "{y}",
								showInLegend: true,
								dataPoints:[
									{label: "CP2", y: 690},
									{label: "TRUE2", y: 1868},
									{label: "KKN", y: 1327},
									{label: "ITALTHAI", y: 90},
								]
							},
							{
								type: "column",
								name: "Null",
								legendText: "Null",
								showInLegend: true,
								dataPoints:[
									{label: "CP2", y: 100},
									{label: "TRUE2", y: 250},
									{label: "KKN", y: 180},
									{label: "ITALTHAI", y: 50},
								]
							}
						],


				legend:{
				cursor:"pointer",
				itemclick: function(e){
				  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				  }
				  else {
					e.dataSeries.visible = true;
				  }
					chart.render();
				}
        		}

        		});
				chart.render();

				document.getElementById("adjust").addEventListener("click", function(e) {
				  var a = document.getElementById("ipn1").value;
				  var b = document.getElementById("ipn2").value;
				  var c = document.getElementById("ipn3").value;
				  var d = document.getElementById("ipn4").value;

				  console.log(typeof a)
				  chart.data[0].dataPoints[0].y = parseInt(a);
				  chart.data[0].dataPoints[1].y = parseInt(b);
				  chart.data[0].dataPoints[2].y = parseInt(c);
				  chart.data[0].dataPoints[3].y = parseInt(d);


				});
				chart.render();


				var chart = new CanvasJS.Chart("chartContainer2",
              {
                title:{text: "Computer"},
                data: [
                {
                 type: "doughnut",
                 dataPoints: [
                 {  y: 53.37, indexLabel: "CP2" },
                 {  y: 35.0, indexLabel: "TRUE2" },
                 {  y: 7, indexLabel: "KKN" },
                 {  y: 2, indexLabel: "ITALTHAI" },
                 ]
               }
               ]

             });
			  chart.render();

			 var chart = new CanvasJS.Chart("chartContainer3",
              {
                title:{text: "AM"},
                data: [
                {
                 type: "doughnut",
                 dataPoints: [
                 {  y: 53.37, indexLabel: "CP2" },
                 {  y: 35.0, indexLabel: "TRUE2" },
                 {  y: 7, indexLabel: "KKN" },
                 {  y: 2, indexLabel: "ITALTHAI" },
                 ]
               }
               ]

             });
			  chart.render();

			 var chart = new CanvasJS.Chart("chartContainer4",
              {
                title:{text: "HS"},
                data: [
	                {
	                 type: "doughnut",
	                 dataPoints: [
			                 {  y: 53.37, indexLabel: "CP2" },
			                 {  y: 35.0, indexLabel: "TRUE2" },
			                 {  y: 7, indexLabel: "KKN" },
			                 {  y: 2, indexLabel: "ITALTHAI" },
	                 ]
	               }
               ]
			  });

            chart.render();

			var chart = new CanvasJS.Chart("LineGraphContainer",
			{
			  title:{
				text: "Number of Inventory",
				margin: 15
			  },
			  toolTip:{
				shared: true
			  },
			  axisX: {
				valueFormatString: "YYYY",
				intervalType: "year"
			  },
			  axisY:{

			  },

			  legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			  },
			  data: [
			  {
				type: "stackedArea",
				name: "Awaya",
				showInLegend: "true",
				dataPoints: [
				{ x: new Date(2012, 00, 1), y: 1100 },
				{ x: new Date(2012, 01, 1), y: 1200 },
				{ x: new Date(2012, 02, 1), y: 1000},
				{ x: new Date(2012, 03, 1), y: 1200 },
				{ x: new Date(2012, 04, 1), y: 1600 },

				]
			  },
			  {
				type: "stackedArea",
				name: "Headset",
				showInLegend: "true",
				dataPoints: [
				{ x: new Date(2012, 00, 1), y: 150 },
				{ x: new Date(2012, 01, 1), y: 171 },
				{ x: new Date(2012, 02, 1), y: 155},
				{ x: new Date(2012, 03, 1), y: 150 },
				{ x: new Date(2012, 04, 1), y: 165 },


				]
			  },
			  {
				type: "stackedArea",
				name: "Amplifies",
				showInLegend: "true",
				dataPoints: [
				{ x: new Date(2012, 00, 1), y: 71 },
				{ x: new Date(2012, 01, 1), y: 41 },
				{ x: new Date(2012, 02, 1), y: 55},
				{ x: new Date(2012, 03, 1), y: 50 },
				{ x: new Date(2012, 04, 1), y: 65 },


				]
			  },

			  {
				type: "stackedArea",
				name: "Computer",
				showInLegend: "true",
				dataPoints: [
				{ x: new Date(2012, 00, 1), y: 861 },
				{ x: new Date(2012, 01, 1), y: 761 },
				{ x: new Date(2012, 02, 1), y: 775},
				{ x: new Date(2012, 03, 1), y: 680 },
				{ x: new Date(2012, 04, 1), y: 785 },


				]
			  },
			  {
				type: "stackedArea",
				name: "Seat",
				showInLegend: "true",
				dataPoints: [
				{ x: new Date(2012, 00, 1), y: 220 },
				{ x: new Date(2012, 01, 1), y: 240 },
				{ x: new Date(2012, 02, 1), y: 295},
				{ x: new Date(2012, 03, 1), y: 300 },
				{ x: new Date(2012, 04, 1), y: 265 },


				]
			  }

			  ]
			});
			chart.render();
		}

 	</script>
	</div>
	</div>
	<!--div class="second">
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

	</div>




</body>
</html>
