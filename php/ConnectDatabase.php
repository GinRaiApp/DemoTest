<?php

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'demo');
define('DB_PORT', '8889');

//get connection
$connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME,DB_PORT);

if(!$connect){
  die("connect Failed: " . $connect->error);
}

$query = "SELECT bu_name, count(*) as no FROM seat GROUP BY bu_name";

$result = $connect->query($query);

$data= array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();
$connect->close();

print json_encode($data);

?>
