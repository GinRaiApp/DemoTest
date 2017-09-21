<?php

include 'connect.php';

$query = "SELECT bu_name,SUM(amp) AS amplifier
          FROM seat
          GROUP BY bu_name";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($output != ""){ $output .= ","; }
      $output .= '["'.$row["bu_name"].'",';
      $output .= ''.$row["amplifier"].']';
    }
    $output = '['.$output.']';
    echo($output);
} else {
    echo "0 results";
}

mysqli_close($connect);

?>
