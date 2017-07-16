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
<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-bar w3-top w3-xlarge" style="background-color:#0092c4">
        <span class=" w3-right"><b>True Inventory</b></span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse  w3-animate-left" style="z-index:3;width:260px; background-color:#ffffff;" id="mySidebar"><br>
    <div class="w3-container w3-row">

      <div class="w3-col s8 w3-bar">
  	  <span>Welcome</span><br>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
  	  <a href="http://localhost/p_inventory/html/home.php"><img src="/p_inventory/photos/Logo-TRUE_svg.png" alt="HTML5 Icon" style="width:150px;height:100px;"></a>
      </div>
    </div>
    <hr>
    <div class="w3-container" class="dashboard" style="background-color:#4fc2f7">
      <h5><b>Dashboard</b></h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
      <a href="http://localhost/p_inventory/html/display.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-area-chart"></i>  Overview</a>
      <a href="http://localhost/p_inventory/html/building.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building fa-fw"></i>  Building</a>
      <a href="http://localhost/p_inventory/html/floor.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Floor</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
      <a href="http://eus/cm/inventory/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gears"></i>  All Inventory</a><br><br>
    </div>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:250px;margin-top:40px;">



    <!-- Header -->
    <header class="w3-container" style="padding-top:12px;text-decoration;">
      <h5><b><i class="fa fa-area-chart"></i> Overview</b></h5>
    </head>

    <!-- <div id="chartContainer" style="height: 360px; width: 100%;"></div>
      <input type="number" id="dataSeries1" value=12><br>
      <input type="number" id="dataSeries2" value=23><br>
      <input type="number" id="dataSeries3" value=18><br>
    <button id="update">Update Chart</button> -->

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

    <div id="chartContainer" style="margin: 18px; height: 500px; width: 45%; display: inline-block;"></div>
    <div id="chartContainer2" style="margin: 18px; height: 500px; width: 45%; display: inline-block;"></div>

  </div>

  <script>


      // Get the Sidebar
      var mySidebar = document.getElementById("mySidebar");

      // Get the DIV with overlay effect
      var overlayBg = document.getElementById("myOverlay");

      // Toggle between showing and hiding the sidebar, and add overlay effect
      function w3_open() {
          if (mySidebar.style.display === 'block') {
              mySidebar.style.display = 'none';
              overlayBg.style.display = "none";
          } else {
              mySidebar.style.display = 'block';
              overlayBg.style.display = "block";
          }
      }

      // Close the sidebar with the close button
      function w3_close() {
          mySidebar.style.display = "none";
          overlayBg.style.display = "none";
      }


  </script>
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

            var chart = new CanvasJS.Chart("chartContainer2",
              {
                title:{
                  text: "Top U.S Smartphone Operating Systems By Market Share, Q3 2012"
                },
                data: [
                {
                 type: "doughnut",
                 dataPoints: [
                 {  y: 53.37, indexLabel: "Android" },
                 {  y: 35.0, indexLabel: "Apple iOS" },
                 {  y: 7, indexLabel: "Blackberry" },
                 {  y: 2, indexLabel: "Windows Phone" },
                 {  y: 5, indexLabel: "Others" }
                 ]
               }
               ]
             });

              chart.render();
        	}
  	</script>

</body>
</html>
