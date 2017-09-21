<?php
include 'connect.php';

$query = "SELECT * FROM annual GROUP BY year";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($output != ""){ $output .= ","; }
      $output .= '["'.$row["year"].'",';
      $output .= ''.$row["seat"].',';
      $output .= ''.$row["com"].',';
      $output .= ''.$row["am"].',';
      $output .= ''.$row["hes"].',';
      $output .= ''.$row["tel"].']';
    }
    $output = '['.$output.']';
    echo($output);
} else {
    echo "0 results";
}

mysqli_close($connect);

?>
