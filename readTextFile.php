<?php

// open stock data and display information

// define stock symbol
$symbol = "AAPL";

// obtain data
  $stock_data = obtainData($symbol);
// display result
  // create page header
  displayHeader();
  // display resule
  displayResult($stock_data, $symbol);
  // display footer
  displayFooter();
/* end main section */


//this fucntion reads data into a 2-d array
function obtainData($symbol){
// define data file
  $file = 'http://washington.uww.edu/data/cs382/stocks/'.$symbol.'.csv';

  @ $fp = fopen($file, 'r');
  if (!$fp) {
     echo "Could not open the file!";
     exit();
  }
  // read data into an array
  $stockData = array();
  while ($data = fgetcsv($fp, 256, ',')){
    $stockData[] = $data;
    /*
    $stockData is a 2-D array
    each element is an array of data read from the text file
    */
  }
  return $stockData;
}
function displayHeader() {
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Page title </title>
 <!-- Include bootstrap CSS -->
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div class='row'>
  <div class='col-xs-2'>
	<p>Select Stock Symbol:</p>
        <ul>
        <li><a href='stockdata.php?symbol=AAPL'>AAPL</a></li>
	<li><a href='stockdata.php?symbol=DELL'>DELL</a></li>
        </ul> 

  </div>
  <div class='col-xs-10'>
<?php
}  //end function

//process data
function displayResult($data, $symbol){
// process data
// $data is a 2-D array
echo"<h3>Stock Symbol: ".$symbol."</h3>\n";
echo "<table class='table'>";

/* As long as there are lines to read, read each line into an array
   using fgetcsv()  method
*/

for ($i=0; $i<count($data); $i++){
        // read each element into an array
        $stock_data = $data[$i];
        echo "<tr>";
        for ($j=0; $j<3; $j++){
		// display the first three elements in the array
                echo "<td>{$stock_data[$j]}</td>";
        }
        echo "</tr>";
    } // end for
echo "</table>";
} // end function

function displayFooter(){
   echo "</body></html>";
} // end function

?>

