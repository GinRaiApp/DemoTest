<!DOCTYPE html>
<html>
<head>
  <title>Inventory Report</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
      html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
  </style>

  <script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
  <script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>

  
</head>



<body >

   <!-- Header -->
    <header class="w3-container" style="padding-top:12px;text-decoration;">
      <h5><b><i class="fa fa-area-chart"></i> Overview</b></h5>
    </head>


    <form>
      <div class="w3-row-padding w3-margin-bottom" id="ipn">

          <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16" style="background-color:#ff66b3;">

              <div class="w3-left"><i class="fa fa-building-o w3-xxlarge" > CP2 </i></div><br><br>

              <div>
                <p>Input Seat Number:</p>
          			<input type="number" name="fname" value="0" id="ipn1">
              </div>
              <div class="w3-clear"></div>

            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16" style="background-color:#ff751a">

              <div class="w3-left"><i class="fa fa-building-o w3-xxlarge"> TRUE2 </i></div><br><br>

              <div>
                <p>Input Seat Number:</p>
          			<input type="number" name="fname" value="0" id="ipn2">
              </div>

            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16" style="background-color:#ace600">

              <div class="w3-left"><i class="fa fa-building-o w3-xxlarge"> KKN </i></div><br><br>

              <div>
                <p>Input Seat Number:</p>
                <input type="number" name="fname" value="0" id="ipn3">
              </div>

            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16" style="background-color:#0080ff">

              <div class="w3-left"><i class="fa fa-building-o w3-xxlarge"> ITALTHAI </i></div><br><br>

              <div>
                <p>Input Seat Number:</p>
                <input type="number" name="fname" value="0" id="ipn4">
              </div>

            </div>
          </div>

      </div>

      <div>
        <button id="update" type="button" style="margin-left:8px"> Submit </button>
    		<input type="reset" value="Reset" id="rs">
      </div>

    </form>

    <div id="chartContainer" style="margin: 18px; height: 500px; width: 97.5%;"></div>

  </div>


  <script type="text/javascript">
	
	
        	window.onload = function () {
        	var chart = new CanvasJS.Chart("chartContainer", {
        		title:{
        			text: "Total Seat"
        		},
        		data: [
        		{
        			// Change type to "doughnut", "line", "splineArea","column", etc.
        			type: "column",
        			dataPoints: [
        				{ label: "CP2",  y: 690  },
        				{ label: "TRUE2", y: 1868 },
        				{ label: "KKN", y: 1327  },
        				{ label: "ITALTHAI",  y: 90  },

        			]
        		}
        		]
        		});
        		chart.render();

            document.getElementById("update").addEventListener("click", function(e) {
              var a = document.getElementById("ipn1").value;
              var b = document.getElementById("ipn2").value;
              var c = document.getElementById("ipn3").value;
              var d = document.getElementById("ipn4").value;
              console.log(typeof a)
              chart.data[0].dataPoints[0].y = parseInt(a);
              chart.data[0].dataPoints[1].y = parseInt(b);
              chart.data[0].dataPoints[2].y = parseInt(c);
              chart.data[0].dataPoints[3].y = parseInt(d);
              chart.render();
            });
        	}
  	</script>

</body>
</html>
