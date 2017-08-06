<?php
  include 'connect.php';
  $sql = "SELECT bu_name FROM seat";
  $result = $conn->query($sql);

  $output="";

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($output != ""){ $output .= ","; }
          $output .= ' { "bu_name": " '.$row["bu_name"].' "} ';
      }
      $output = '{"records":['.$output.']}';
      echo($output);
  } else {
      echo "0 results";
  }
  $conn->close();
?>
