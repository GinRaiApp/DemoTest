<!DOCTYPE html>
<html>
  <head>
    <title>Left Menu</title>

    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="../lib/angular.min.js"></script>
    <script type="text/javascript" src="../lib/jquery-3.2.1.min.js"></script>

  </head>

  <body>
    <div class="container">
      <nav id="primary_nav_wrap" >
        	<ul>
        	  <li class="current-menu-item "><a href="../index.php">true inventory</a></li>
        	  <li><a href="http://localhost:8888/inventory_demo/page/leftmenu.php" style="border-radius: 4px;">report</a>
        		<ul>
        		  <li class="linkstyle1"><a href="#annualre"> Annual Report </a></li>
        		  <li class="linkstyle2"><a href="#overview"> Overview </a></li>
        		  <li class="linkstyle3"><a href="#seatre"> Seat Report </a></li>
        		  <li class="linkstyle4"><a href="#devicesre"> Devices Report </a></li>
        		</ul>
        	  </li>
        	  <li><a href="http://localhost:8888/inventory_demo/page/floor.php">floor plan</a>
        		<ul>
        		  <li class="linkstyle1"><a href="#">All Floor Plan</a></li>
        		  <li class="linkstyle2"><a href="#">Add Floor Plan</a></li>
        		</ul>
        	  </li>
        	  <li><a href="http://localhost:8888/inventory_demo/page/master.php">rb master</a>
        		<ul>
        		  <li class="linkstyle1"><a href="#">Sub Menu 1</a></li>
        		  <li class="linkstyle2"><a href="#">Sub Menu 2</a></li>
        		  <li class="linkstyle3"><a href="#">Sub Menu 3</a></li>
        		</ul>
        	  </li>

        	  <li><a href="http://localhost:8888/inventory_demo/index.php#" target="_blank">cm inventory</a></li>
        	  <li><a href="../page/contact.php#">Contact Us</a></li>
        	</ul>
    	</nav>

      <!-- controller -->
      <div ng-app="myApp" ng-controller="myCtrl" ng-init="displayData()">

        <div class="frist"  style="width:100%;padding-top:50px;text-decoration; margin:auto;" id="annualre">
      	<!-- Header -->
          <header class="w3-container" >
            <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Annual Report </b></h1>
      			<div id="LineGraphContainer"></div>
          </header>
      	</div>

        <div id="overview" style="padding-top:50px;">
        <h1><b><i class="fa fa-area-chart w3-xxlarge" ></i> Overview </b></h1>
           <div id="100chartContainer" style="height: 550px; width: 80%; margin:auto;"></div>
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
        		<div class="floating-box"><div id="chartContainer2"></div></div>
        		<div class="floating-box"><div id="chartContainer3"></div></div>
        		<div class="floating-box"><div id="chartContainer4"></div></div>
        	</div>
      	</div>

      </div> <!--controller close tag-->
    </div> <!--container close tag-->
  </body>
    <script type="text/javascript" src="../js/AllChart.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="../lib/jquery.canvasjs.min.js"></script>
</html>
