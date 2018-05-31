<?php

if (isset($_POST['roomLength'])){
  $room_length = $_POST['roomLength'];

}

if (isset($_POST['roomWidth'])){
  $room_width = $_POST['roomWidth'];
}

function displayTotalCost($width, $length){

  if ($width < 0 || $width > 50 || $length < 0 || $length > 50){
    echo "Please enter lengths between 0 and 50.";
  }
  else{
    $area = $width * $length;
    $carpetCost = 5 * $area;
    $installationCost = 2 * $area;
    $totalCost = $carpetCost + $installationCost;

    echo "Cost of Carpet: $".$carpetCost."<br/>\n";
    echo "Cost of Installation: $".$installationCost."<br/>\n";
    echo "Total Cost: $".$totalCost."<br/>\n";
  }
}

displayTotalCost($room_width, $room_length);
?>
