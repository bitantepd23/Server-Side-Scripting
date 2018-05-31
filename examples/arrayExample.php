<?php

// declare a variable and assign a value
  $length = 10;
  $width = 15;

// calculate the area
  $area = $length*$width;

// display result
  echo "<p>Area of the rectangle: ".$area."</p>\n";
  echo "<p>Have a nice day</p>\n";

// define an array
$scores = array(45, 56, 78, 89);

// display the first element with index 0
echo "<p>This the score are index 0: ".$scores[0]."</p>\n";



// iterate through array
for ($i=0; $i<count($scores); $i++){
  echo "This is the score at index ".$i." : ".$scores[$i]."<br/>\n";
}
?>
