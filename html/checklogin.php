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
		echo "Login success!!!  Welcome ".$row['name']." ".$row['surname'].", You is: ".$row['agent_level'];
	} else {
		echo "Failed to login!!";
	}

?>