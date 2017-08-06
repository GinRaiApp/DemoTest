<!DOCTYPE html>
<html>
  <head>
    <title>Floor</title>

    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/Floor.css">
    <link rel="stylesheet" type="text/css" href="../css/p_style.css">
    <link rel="stylesheet" type="text/css" href="../css/w3.css">

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

        <!-- Header -->
        <header class="w3-container">
          <h1><b><i class="fa fa-building w3-xxlarge"></i> Overview Floor Plan</b></h1>
        </header>

        <div class="flex-container">
            <div class="bgfp1" style="margin:auto;">
        			<img src="http://localhost:8888/inventory_demo/photos/Building2.png" alt="Floor Plan" width="95%" height="60%; padding-top:100px;">
        		</div>

            <div class="bgfp1" style="border-color: #cc3300; background-color:#ff9999;"><i class="fa fa-building w3-xlarge" ></i><span> CP2 </span>
            		<ul>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/CP2/CP2_14FL#" target="_blank" class="FP">CP2_14</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/CP2/CP2_19FL#" target="_blank" class="FP">CP2_19</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/CP2/CP2_20FL#" target="_blank" class="FP">CP2_20</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/CP2/CP2_21FL_L#" target="_blank" class="FP">CP2_LOTUS_21</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/CP2/CP2_21FL_H#" target="_blank" class="FP">CP2_HOTEL_21</a></li>
            		</ul>
        		</div>

            <div class="bgfp1" style="border-color:#ffbf00; background-color:#ffe699;"><i class="fa fa-building w3-xlarge" ></i><span> TRUE2 </span>
            		<ul>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_2#" target="_blank" class="FP">TRUE2_2</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_5#" target="_blank" class="FP">TRUE2_TRANNING_5</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_6#" target="_blank" class="FP">TRUE2_6</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_7#" target="_blank" class="FP">TRUE2_7</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_8#" target="_blank" class="FP">TRUE2_8</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_9#" target="_blank" class="FP">TRUE2_9</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_10#" target="_blank" class="FP">TRUE2_10</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_11#" target="_blank" class="FP">TRUE2_11</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_12#" target="_blank" class="FP">TRUE2_12</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_14#" target="_blank" class="FP">TRUE2_14</a></li>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/True2/t2_15#" target="_blank" class="FP">TRUE2_15</a></li>
            		</ul>
        		</div>

            <div class="bgfp1" style="border-color:#ff99e6; background-color:#ffccf3;"><i class="fa fa-building w3-xlarge" ></i><span> KKN </span>
            		<ul>
            			<li>KKN_G
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_g#"  target="_blank" class="FP">KKN_G_05/08/2016</a></dd>
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_g_1JAN17#"  target="_blank" class="FP">KKN_G_01/01/2017</a></dd></li>
            			<li>KKN_3
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/KKN-3fl#"  target="_blank" class="FP">KKN_3</a></dd>
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_3#"  target="_blank" class="FP">KKN_3_05/08/2016</a></dd>
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_3_20Jun17#"  target="_blank" class="FP">KKN_3_20/01/2017</a></dd></li>
            			<li>KKN_4
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/KKN-4fl#"  target="_blank" class="FP">KKN_4</a></dd>
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_04#"  target="_blank" class="FP">KKN_4_05/08/2016</a></dd>
            			<li>KKN_5
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/KKN-5fl#"  target="_blank" class="FP">KKN_5</a></dd>
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_05#"  target="_blank" class="FP">KKN_5_05/08/2016</a></dd>
            			<li>KKN_6
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/KKN-6fl#"  target="_blank" class="FP">KKN_6</a></dd>
            				<dd><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/kkn_06#"  target="_blank" class="FP">KKN_6_05/08/2016</a></dd>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/KKN/#" target="_blank" class="FP">KKN_TRANNING</a></li>
            		</ul>
        		</div>

            <div class="bgfp1" style="border-color:#99ccff; background-color:#ccffff;"><i class="fa fa-building w3-xlarge" ></i><span> ITALTHAI </span>
            		<ul>
            			<li><a href="http://localhost:8888/inventory_demo/photos/FloorPlan/italthai/#" target="_blank" class="FP">ITALTHAI_14</a></li>
            		</ul>
        		</div>

        </div> <!--flex container close tag-->

      </div> <!--controller close tag-->
    </div> <!--container close tag-->
  </body>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="../lib/jquery.canvasjs.min.js"></script>
</html>
