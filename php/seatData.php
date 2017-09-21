<?php

include 'connect.php';

$query = "SELECT seat.bu_name as seat_name, count(*) as seat_no, (building.seat_total - count(*)) as total_seat FROM seat,building WHERE building.bu_name = seat.bu_name GROUP BY building.bu_name";
$result = mysqli_query($connect, $query);

// SELECT seat_total
// FROM building, seat
// WHERE building.bu_name = seat.bu_name
// GROUP BY building.bu_name

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($output != ""){ $output .= ","; }
      $output .= '["'.$row["seat_name"].'",';
      $output .= ''.$row["seat_no"].',';
      $output .= ''.$row["total_seat"].']';
    }
    $output = '['.$output.']';
    echo($output);
} else {
    echo "0 results";
}

mysqli_close($connect);

?>
