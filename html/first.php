<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid none;
	width: 20%; 
    border-radius: 5px;  
    padding: 10px 20px 20px 20px;  
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 5px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	border-radius: 4px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	border-radius: 4px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#primary_nav_wrap
{
	margin:15px 15px 15px 15px;
	
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0;
	background-color:#990000;
   	width:100%;  
	position: fixed; 
	top: 0;	
	left: 0;
	border-style: none none solid none; 
	border-width: 5px; 
	border-color: #4CAF50;
	
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
	line-height:32px;
	padding:0 15px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
    text-transform: uppercase;
    color:#ffffff;
    font-size: 100%;
}

#primary_nav_wrap ul li
{
	position:relative;
	float:left;
	margin:0;
	padding:0
}



#primary_nav_wrap ul li:hover
{
	background:#f6f6f6
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#fff;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
}

</style>
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
	
	//function myFunction() {
    //var txt;
    //var username = prompt("Input User Name..", "Cholticha");
    //if (username == null || username == "") {
    //    txt = "User cancelled the prompt.";
    //} else {
    //    txt = "User name : " + username + "  >>  Login complete. ";
    //}
    //document.getElementById("demo").innerHTML = txt;
	//}
	
	//function myFunction() {
    //var txt;
    //if (confirm("Account OK!") == true) {
    //    txt = "Account OK!";
    //} else {
    //    txt = "Account Not OK!";
    //}
    //document.getElementById("demo").innerHTML = txt;
	//}
	
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
    }
}
	
	</script>
		
</head>

<body>
	  		  
	<nav id="primary_nav_wrap" >
	<ul>
	  <li class="current-menu-item "><a href="http://localhost/DemoTest/html/first.php">true inventory</a></li>
	</ul>
	</nav>
	
	


	
	
	<div class="frist"  style="padding-top:100px;text-decoration;">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-area-chart w3-xxlarge"></i> Overview Building</b></h1>
    </header>
	
	<div class="flex-container">
	
	<a href="http://localhost/DemoTest/html/login.php"  target="_blank" class="cycle1" ><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> CP2 </b></h1></a>
	<a href="http://localhost/DemoTest/html/login.php" target="_blank" class="cycle2"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> TRUE2 </b></h1></a>
	<a href="http://localhost/DemoTest/html/login.php" target="_blank" class="cycle3"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> KKN </b></h1></a>
	<a href="http://localhost/DemoTest/html/login.php" target="_blank" class="cycle4"><h1 style="font-family: Times New Roman, Times, serif; font-size: 40px;"><b> ITALTHAI </b></h1></a>
		
		
	</div>
	
	

    
	<!--div class="logina">
		<form name="myForm">
			<label for="username">User ID  </label>
			<input type="text" id="username" name="username" placeholder="Input User Name.." >

			<label for="password">Password  </label>
			<input type="text" id="password" name="password" placeholder="Input User Password..">
			<input type="submit">
		</form>	
		
		<button onclick="myFunction()">LOG IN</button>
		<p id="demo"></p>
	</div>

	<div class="logina">
	<form name="myForm" action="/p_inventory/html/form.php" onsubmit="return validateForm()" method="post">
		<label for="username">User ID  </label>
		<input type="text" id="username" name="username" placeholder="Input User Name.." >

		<label for="password">Password  </label>
		<input type="text" id="password" name="password" placeholder="Input User Password..">
 
		<input type="submit" value="Login">
	 </form>	
    </div-->
   
    
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
	

	
  	
	

	
</body>
</html>
