<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>

    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/Contact.css">
    <link rel="stylesheet" type="text/css" href="../css/ContactUs.css">
    <link rel="stylesheet" type="text/css" href="../css/Leftmenu.css">

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

        <div class="contactus" style="width:50%; margin:50px auto; padding:20px; background-color:#e6e6e6;	border: 2px dashed red; border-radius: 12px;">
      		<h1>CONTACT US</h1>

      		<div class="name">
      		<h2>Information User:</h2>
      		<form action="savecontact.php" name="frmAdd" method="post" target="iframe_target">

        			<label for="fname">Date:</label>
        			   <input type="date" id="date" name="date">
        			<label for="fname">First Name:</label>
        			   <input type="text" id="fname" name="fname">
        			<label for="lname">Last Name:</label>
        			   <input type="text" id="lname" name="lname">
        			<label for="email">Email: (xxx@truecorp.co.th)</label>
        			   <input type="email" id="email" name="email">
        			<label for="phone">Phone Number:</label>
        			   <input type="text" id="phone" name="phone">

              <p>Please select about:

              <select id="type" name="job">
        				<option value="sample"><----Please Choose----></option>
        				<option value="IT">IT</option>
        				<option value="Suppoer">Suppoer</option>
        				<option value="Other">Other</option>
        			</select>

          		<div ="comment">
            		<p><strong>Comment:</strong></p>
            		<textarea name="comment">Some text...</textarea>
          		</div>

          		<div class="3button">
          		<input type="submit" name="submit" value="submit">
          		</div>

      		</form>

          </div> <!--name close tag-->
      	</div> <!--contact us close tag-->

      </div> <!--controller close tag-->
    </div> <!--container close tag-->
  </body>
    <script type="text/javascript" src="../js/app.js"></script>
</html>
