<?php
// first question
$wheat = 0;
for ($counter = 0; $counter < 64; $counter++){
    $wheat += pow(2, $counter);
    
} 
    echo "Total grains of wheat: ".$wheat."<br/>\n";
  
// second question
$weight = $wheat * .05;

  echo "Weight of ".$wheat." grains of wheat = ".$weight." mg.<br/>\n";

// code block for pool size calculations
  $length =NULL;
  $width =NULL;
  $height =NULL;
  $test =0; 
  if (isset($_POST['poolLength'])){
    $test = $_POST['poolLength'];
    if ($test > 50 || $test < 20){
	echo "Please enter a length between 20 and 30 meters.<br/>\n";
    	$test =0;
    } 
    if ($test >= 20 && $test <= 50){
 	$length = $test;
    }
  }
  if (isset($_POST['poolWidth'])){
  // data validation
    $test = $_POST['poolWidth'];
   
    if ($test < 5 || $test > 15){
	echo "Please enter a width between 5 and 15 meters.<br/>\n";
	$test =0;    
    }
    if ($test >= 5 && $test <= 15){
	$width = $test;	
    }
  }
  if (isset($_POST['poolHeight'])){
    $test = $_POST['poolHeight'];
    if ($test > 6 || $test < 3){
	echo "Please enter a height between 3 and 6 meters.<br/>\n";
   	$test = 0;
    }
    if ($test <= 6 && $test >= 3){
	$height = $test;
    }
  }

 function displayNumPools($length, $width, $height, $wheat){
  // .02 = 20mm^3 / 1000
  $grainVolume = (1 / pow(1000, 3 )) * $wheat;
  $poolVolume = $length * $width * $height;
  $numPools = $grainVolume / $poolVolume;
  echo "  The volume of the pool is ".$poolVolume." meters.<br/><br/>\n";
  echo "You would need ".$numPools." pools ".$length." meters long, ".$width." meters wide, and ".$height." meters deep to hold all of the wheat.<br/>\n";
}
if ($length != NULL && $width != NULL && $height != NULL){
    displayNumPools($length, $width, $height, $wheat);
}
echo "<p><a href='output.html'>Back</a></p>\n";
?>
