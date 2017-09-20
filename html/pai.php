<!DOCTYPE HTML>
<html>

<head>

<title>Pai</title>
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
<div id="chartContainer" style="margin: 100px  auto; height: 800px; width: 50%; color:#4d4d4d;">
<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			title:{
				text: "Overview COM & HS & AM"
			},
                        animationEnabled: true,
			theme: "theme2",
			data: [
			{        
				type: "doughnut",
				indexLabelFontFamily: "Garamond",       
				indexLabelFontSize: 20,
				startAngle:0,
				indexLabelFontColor: "dimgrey",       
				indexLabelLineColor: "darkgrey", 
				toolTipContent: "{y} %", 					

				dataPoints: [
				{  y: 67.34, indexLabel: "iOS {y}%" },
				{  y: 28.6, indexLabel: "Android {y}%" },
				{  y: 1.78, indexLabel: "Kindle {y}%" },
				{  y: 0.84,  indexLabel: "Symbian {y}%"},
				{  y: 0.74, indexLabel: "BlackBerry {y}%" },
				{  y: 2.06,  indexLabel: "Others {y}%"}

				]
			}
			]
		});

		chart.render();
	}
	</script>
</body>

</html>