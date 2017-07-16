<!DOCTYPE html>
<html>
<head>
	<title>First</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script>
	function validateForm() {
		var x = document.forms["myForm"]["fname"].value;
		if (x == "") {
			alert("Name must be filled out");
			return false;
		}
	}
		
	</script>
		
</head>

<body>
	  		  
	<div class="navbar">
	  <a href="http://localhost/p_inventory/html/first.php "><b>True Inventory</b></a>

	</div>


	
	
	<div class="frist"  style="padding-top:100px;text-decoration;">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-area-chart w3-xxlarge"></i> Overview Building</b></h1>
    </header>
	
	<div class="flex-container">
	
	<a href="http://localhost/p_inventory/html/login.php"  target="_blank" class="cycle1" ><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> CP2 </b></h1></a>
	<a href="http://localhost/p_inventory/html/login.php" target="_blank" class="cycle2"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> TRUE2 </b></h1></a>
	<a href="http://localhost/p_inventory/html/login.php" target="_blank" class="cycle3"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> KKN </b></h1></a>
	<a href="http://localhost/p_inventory/html/login.php" target="_blank" class="cycle4"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> ITALTHAI </b></h1></a>
		
		
	</div>

    <div>
	

	<div class="logina">
	<form name="myForm" action="/p_inventory/html/form.php" onsubmit="return validateForm()" method="post">
		<label for="username">User ID  </label>
		<input type="text" id="username" name="username" placeholder="Input User Name.." >

		<label for="password">Password  </label>
		<input type="text" id="password" name="password" placeholder="Input User Password..">
 
		<input type="submit" value="Login">
		
    </div>
    </form>
    <div id="chartContainer" style="margin: 18px; height: 500px; width: 97.5%;"></div>

	</div>
	

  	
	

	
</body>
</html>
