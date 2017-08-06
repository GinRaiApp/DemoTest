<?php
  include 'connect.php';
  $sql = "SELECT bu_name, count(*) as no FROM seat GROUP BY bu_name";
  $result = $conn->query($sql);

  $output="";

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($output != ""){ $output .= ","; }
          $output .= ' { "label": " '.$row["bu_name"].' ", ';
          $output .= '  "y":  '.$row["no"].' } ';
      }
      $output = '['.$output.']';
      echo($output);
  } else {
      echo "0 results";
  }
  $conn->close();
?>
