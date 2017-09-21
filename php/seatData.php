<?php

include 'connect.php';

$query = "SELECT bu_name, count(*) as no FROM seat GROUP BY bu_name";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($output != ""){ $output .= ","; }
      $output .= '{ "bu_name": "'.$row["bu_name"].'",';
      $output .= '"no": "'.$row["no"].'"}';
    }
    $output = '{"records":['.$output.']}';
    echo($output);
} else {
    echo "0 results";
}

mysqli_close($connect);

?>
