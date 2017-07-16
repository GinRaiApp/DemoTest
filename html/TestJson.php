<!DOCTYPE html>
<html>
<head>
	<title>Rental Building Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">

  <script type="text/javascript" src="../angularjs/angular.min.js"></script>

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


	<div class="frist"  style="padding-top:100px;text-decoration;">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-file w3-xxlarge"></i> Create Rental Building Master</b></h1>
    </header>

  <div ng-app="myApp" ng-controller="RbmCtrl">
	<form role="form" ng-submit="addRow()">
		<h2>อัตราค่าบริการ : </h2>

      <table class="table" ng-repeat="head in HeaderTable">
      	<tr>
      		<th>{{head.build}}</th>
          <th>{{head.ground}}</th>
          <th>{{head.seat}}</th>
          <th>{{head.rent_ground}}</th>
          <th>{{head.service}}</th>
          <th>{{head.service_add}}</th>
          <th>{{head.furniture}}</th>
          <th>{{head.service_ip}}</th>
          <th>{{head.rent_gent}}</th>
          <th>{{head.electric}}</th>
          <th>{{head.ot}}</th>
          <th>{{head.water}}</th>
          <th>{{head.total}}</th>
          <th>{{head.avg_rent}}</th>
          <th>{{head.average_seat}}</th>
          <th>{{head.cost_seat}}</th>
      	</tr>
      	<tr>
      		<td class="form-group">
            <input type="text" class="form-control" name="builds" ng-model="builds"></input>
          </td>
      		<td class="form-group">
      		  <input type="text" class="form-control" name="grounds" ng-model="grounds"></input>
      		</td>
      		<td class="form-group">
      		  <input type="text" class="form-control" name="rent_grounds" ng-model="rent_grounds"></input>
      		</td>
          <td class="form-group">
            <input type="text" class="form-control" name="services" ng-model="services"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="service_adds" ng-model="service_adds"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="furnitures" ng-model="furnitures"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="service_ips" ng-model="service_ips"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="special_services" ng-model="special_services"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="rent_gents" ng-model="rent_gents"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="electrics" ng-model="electrics"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="ots" ng-model="ots"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="water" ng-model="water"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="totals" ng-model="totals"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="avg_rents" ng-model="avg_rents"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="average_seats" ng-model="average_seats"></input>
          </td>
          <td class="form-group">
            <input type="text" class="form-control" name="cost_seats" ng-model="cost_seats"></input>
          </td>
      	</tr>
      </table>
        <div class="form-group">
      		<div style="padding-left:110px">
      			<input type="submit" value="Submit" class="btn btn-primary"/>
      		</div>
  	   </div>
	</form>

  <form>
    <table class="table" ng-repeat="head in HeaderTable">
      <tr>
        <th>{{head.build}}</th>
        <th>{{head.ground}}</th>
        <th>{{head.seat}}</th>
        <th>{{head.rent_ground}}</th>
        <th>{{head.service}}</th>
        <th>{{head.service_add}}</th>
        <th>{{head.furniture}}</th>
        <th>{{head.service_ip}}</th>
        <th>{{head.rent_gent}}</th>
        <th>{{head.electric}}</th>
        <th>{{head.ot}}</th>
        <th>{{head.water}}</th>
        <th>{{head.total}}</th>
        <th>{{head.avg_rent}}</th>
        <th>{{head.average_seat}}</th>
        <th>{{head.cost_seat}}</th>
      </tr>
      <tr ng-repeat="row in addrow">
        <td>{{row.builds}}</td>
        <td>{{row.grounds}}</td>
        <td>{{row.seats}}</td>
        <td>{{row.rent_grounds}}</td>
        <td>{{row.services}}</td>
        <td>{{row.service_adds}}</td>
        <td>{{row.furnitures}}</td>
        <td>{{row.service_ips}}</td>
        <td>{{row.rent_gents}}</td>
        <td>{{row.electrics}}</td>
        <td>{{row.ots}}</td>
        <td>{{row.waters}}</td>
        <td>{{row.totals}}</td>
        <td>{{row.avg_rents}}</td>
        <td>{{row.cost_seats}}</td>
        <td>{{row.average_seats}}</td>
        <td>{{row.cost_seats}}</td>
      </tr>
    </table>
  </form>
  </div>

  <div class="logina " style="border-style:none; background-color:linen; width:100%; margin-left:89%; " onclick="myFunction()"  >
    <a href="#"  style=" background-color: #4CAF50;  color: white; border-radius: 4px;">
        <span class="glyphicon glyphicon-save-file" ></span> Save File / Print
    </a>
  </div>

  <!-- js file for create table -->
  <script type="text/javascript" src="../js/rbm.js"></script>

</body>
</html>
