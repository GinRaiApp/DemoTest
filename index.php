<!DOCTYPE html>
<html>
  <head>
    <title>First</title>

    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/FirstStyle.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/p_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="lib/angular.min.js"></script>
    <script type="text/javascript" src="lib/jquery-3.2.1.min.js"></script>

  </head>

  <body>
    <div class="container">
      <nav id="primary_nav_wrap" >
        	<ul>
        	  <li class="current-menu-item "><a href="http://localhost:8888/inventory_demo/index.php">true inventory</a></li>
        	</ul>
    	</nav>
      <!-- controller -->
      <div ng-app="myApp" ng-controller="myCtrl" ng-init="displayData()">

          <!-- Header -->
          <header class="w3-container">
            <h1><b><i class="fa fa-area-chart w3-xxlarge"></i> Overview Building</b></h1>
          </header>

          <div class="flex-container">
            	<a href="http://localhost:8888/inventory_demo/page/login.php"  target="_blank" class="cycle1" ><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> CP2 </b></h1></a>
            	<a href="http://localhost:8888/inventory_demo/page/login.php" target="_blank" class="cycle2"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> TRUE2 </b></h1></a>
            	<a href="http://localhost:8888/inventory_demo/page/login.php" target="_blank" class="cycle3"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> KKN </b></h1></a>
            	<a href="http://localhost:8888/inventory_demo/page/login.php" target="_blank" class="cycle4"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> ITALTHAI </b></h1></a>
        	</div>

          <div>
            	<form action="../html/checklogin.php" method="POST">
              	  <div class="container">
                		<label><b>Username</b></label>
                		<input type="text" placeholder="Input User Name.." id="uname" name="uname" required>

                		<label><b>Password</b></label>
                		<input type="password" placeholder="Input User Password.." id="psw" name="psw" required>

                		<button type="submit" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                		<input type="checkbox" checked="checked"> Remember me
              	  </div>
            	</form>
        	</div>

      </div>
    </div>
  </body>
    <script type="text/javascript" src="js/first.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="lib/jquery.canvasjs.min.js"></script>
</html>
