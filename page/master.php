<!DOCTYPE html>
<html>
  <head>
    <title>Rental Building Master</title>

    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/Master.css">
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
          <h1><b><i class="fa fa-file w3-xxlarge"></i> Create Rental Building Master</b></h1>
        </header>

        <form class="master">
      		<h2>อัตราค่าบริการ : </h2>
      			<table style="width: 100%;">
      			  <tr style="background-color:gray; color:#ffffff;">
          				<th> อาคาร </th>
          				<th> พื้นที่รวม (ตร.ม.) </th>
          				<th> จำนวนที่นั่ง </th>
          				<th> ค่าเช่าพื้นที่ (บาท/ตร.ม.) </th>
          				<th> ค่าบริการ (บาท/ตร.ม.) </th>
          				<th> ค่าบริการส่วนเพิ่ม </th>
          				<th> ค่าเช่าเฟอร์นิเจอร์ (บาท/ตร.ม.) </th>
          				<th> ค่าบริการIP (บาท/ตร.ม.) </th>
          				<th> ค่าบริการพิเศษ (บาท/ตร.ม.) </th>
          				<th> ค่าเช่าGen/UPS(บาท/ตร.ม.) </th>
          				<th> ค่าไฟฟ้า (บาท/unit) </th>
          				<th> ค่าโอที (บาท/Hr) </th>
          				<th> ค่าน้ำ (บาท/unit) </th>
          				<th> รวมอัตราค่าเช่าบริการ (บาท/ตร.ม./เดือน) </th>
          				<th> AVG อัตราค่าเช่าบริการ </th>
          				<th> Average seat per sqm </th>
          				<th> Cost per Seat </th>
      			  </tr>

      			      <th colspan="17" style="background-color:lightgray;">CP2</th>

              <tr>
          				<td style="text-align:center;">14</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

      			  <tr>
          				<td style="text-align:center;">19</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">20</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">21</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">CP Total</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

                  <th colspan="17" style="background-color:lightgray;">TRUE2</th>

              <tr>
          				<td style="text-align:center;">Building1</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">2</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">6</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">7</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">8</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">9</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">10</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">11</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">12</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">14</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">14</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">15</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">Building2</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">5</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">True2 Total</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

                  <th colspan="17" style="background-color:lightgray;">KKN</th>

              <tr>
          				<td style="text-align:center;">G</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">3</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">4</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">5</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">6</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

              <tr>
          				<td style="text-align:center;">KKN Total</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

                  <th colspan="17" style="background-color:lightgray;">ITALTHAI</th>

              <tr>
          				<td style="text-align:center;">14</td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
          				<td><input type="number" name="quantity" min="0" style="width:100%"></td>
      			  </tr>

      			  <tr style="background-color:gray;">
          				<td style="text-align:center;">Grand Total</td>
          				<td>17,282.14</td>
          				<td>4,142.00</td>
      				  <th colspan="14" ></th>
      			  </tr>

      			</table>

      			<div id="savebutton" onclick="myFunction()"  >
      				<a href="#"  style=" background-color: #4CAF50;  color: white; border-radius: 4px;">
      					  <span class="glyphicon glyphicon-save-file" ></span> Save File / Print
      				</a>
      			</div>

      	</form>

      </div> <!--controller close tag-->
    </div> <!--container close tag-->
  </body>

    <script>
      function myFunction() {
        window.print();
      }
    </script>

    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../lib/canvasjs.min.js"></script>
    <script type="text/javascript" src="../lib/jquery.canvasjs.min.js"></script>
</html>
