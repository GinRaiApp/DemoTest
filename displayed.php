

<!DOCTYPE html>
<html>
<title>Report Detail</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-light-grey">


<!-- Top container -->
<div class="w3-bar w3-top w3-large" style="background-color:#990000">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    
    <div class="w3-col s8 w3-bar">
	  <span>Welcome</span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
	  <a href="http://localhost/p_inventory/html/home.php"><img src="/p_inventory/photos/Logo-TRUE_svg.png" alt="HTML5 Icon" style="width:168px;height:128px;"></a>
    </div>
  </div>
  <hr>
  <div class="w3-container" class="dashboard" style="background-color:#00ace6">
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
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-area-chart"></i> Overview</b></h5>
	
	<div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
	}
	</script>
	</div>
  </header>
 
  <form> 
  <div class="w3-row-padding w3-margin-bottom" id="ipn">
  
    <div class="w3-quarter" >
       <div class="w3-container w3-text-white w3-padding-16" style="background-color:#ff66b3">
       	<div class="w3-left"><i class="fa fa-building-o w3-xxxlarge"> CP2 </i></div><br><br>
        <div >
			<p>Input Seat Number:</p>
			<input type="number" name="fname" value="0" id="ipn1">
		</div>
        <div class="w3-clear"></div>
	  </div>
	</div>
	 
    <div class="w3-quarter">
       <div class="w3-container w3-text-white w3-padding-16" style="background-color:#ff751a">
        <div class="w3-left"><i class="fa fa-building-o w3-xxxlarge"> TRUE2 </i> </div><br><br>
        <div >
			<p>Input Seat Number:</p>
			<input type="number" name="fname" value="0" id="ipn2">
		</div>
    </div>
	</div>
	
    <div class="w3-quarter">
        <div class="w3-container w3-text-white w3-padding-16" style="background-color:#ace600">
        <div class="w3-left"><i class="fa fa-building-o w3-xxxlarge"> KKN </i> </div><br><br>
        <div >
			<p>Input Seat Number:</p>
			<input type="number" name="fname" value="0" id="ipn3">
		</div>
    </div>
	</div>
	
    <div class="w3-quarter">
       <div class="w3-container w3-text-white w3-padding-16" style="background-color:#0080ff">
        <div class="w3-left"><i class="fa fa-building-o w3-xxxlarge"> ITALTHAI </i> </div><br><br>
        <div >
			<p>Input Seat Number:</p>
			<input type="number" name="fname" value="0" id="ipn4">
		</div>
    </div>
	</div>
	<br><br><br><br><br><br><br><br>
	<div> 
		<button id="ip" type="button" onclick="myFunction()" style="margin-left:8px"> Submit </button>
		<input type="reset" value="Reset" id="rs">
		<p id="demo"style="margin-left:8px"></p>
	</div>
  </div>
  </form>
  <div id="chartContainer" style="margin: 18px; height: 500px; width: 97.5%;"></div>

 

  <!-- End page content -->


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

function myFunction() {
    var w, x, y, z;
	w = document.getElementById("ipn1").value;
	x = document.getElementById("ipn2").value;
	y = document.getElementById("ipn3").value;
	z = document.getElementById("ipn4").value;
	
    alert(document.getElementById("demo").innerHTML= "Number of Seat You Input: "+"\n\nCP2 = "+w+"\nTAYAN = "+x+"\nKKN = "+y+"\nITALTHAI = "+z); 
	
} 

    
</script>

</body>
</html>
