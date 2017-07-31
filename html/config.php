<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
//Connect database
$host = "localhost";
$user = "root";
$passwd = "Password*1234";
$dbname = "p_inventory";
mysql_connect($host,$user,$passwd) or die("<center><BR><BR><BR><font color=red>Server มีปัญหากรุณารอซักครู่เพื่อเข้าสู่เว็บไซต์<BR>กรุณาเข้า www.test.com อีกครั้ง ขอบคุณที่ใช้บริการ<BR><BR>webmaster@test.com</font></center>");
mysql_select_db($dbname) or die("<center><BR><BR><BR><font color=red>Server มีปัญหากรุณารอซักครู่เพื่อเข้าสู่เว็บไซต์<BR>กรุณาเข้า www.test.com อีกครั้ง ขอบคุณที่ใช้บริการ<BR><BR>webmaster@test.com</font></center>");

?>

<body>
</body>
</html>
