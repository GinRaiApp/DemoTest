<!DOCTYPE html>
<html>
<head>
<style> 
 body, a
 {
	 padding-top:50px;
	 width:50%;
	 margin:auto;
	 font-size:1.5em;
	 background-color: lightgray;
 }
</style>
</head>
<body>
<?php
	$username = $_POST['uname'];
	$password = $_POST['psw'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost","root","Password*1234");
	mysql_select_db("p_inventory");
	
	
	$result = mysql_query("select * from employee where username = '$username' and password = '$password'")
				or die("Failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password){
		echo "<script> 
		alert('Login Successfully !!!!!!! '); 
		window.location.href='../html/leftmenu.php'; 
		</script>";
		
		
		
	} else {
		echo "<script> 
		alert('Login Failed'); 
		window.location.href='../html/first.php'; 
		</script>";
	}

?>

	
	
</body>
</html>