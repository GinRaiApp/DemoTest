<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'TestDB');
define('DB_PORT', '8889');

//get connection
$connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if(!$connect){
  die("connect Failed: " . $connect->error);
}

$query = "SELECT * FROM data_point";

$result = $connect->query($query);

$data= array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();
$connect->close();

print json_encode($data);

?>
