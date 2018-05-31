<?php
// This script calculates and displays average exam scores


// Define variables
$data_file = 'examscores.txt';
$exam_info = array(); // associative array to store data
$id = -1;

// read id
if (isset($_POST['id'])){
  $id = $_POST['id'];
}

// read data
@ $fp = fopen($data_file, 'r');
if (!$fp){
  echo "Could not open file!";
  exit();
}

// read each line into an array
while ($info = fgetcsv($fp, 255, ',')){
  // process data
  $average = calculateAverage($info);
  // add an element to the $exam_info array using the 'ID' as the key and average as it's value

  $key = $info[0]; // id of the student
  $exam_info[$key] = round($average,2); //

}

  // display result
// displayScores($exam_info);
    pageHeader();
    displayMenu();
    if ($id != -1){
      // display particular data
      displayIndividualScore($id, $exam_info);
    }else{
      // display all records
    displayScores($exam_info);
  }
    pageFooter();

// end main

function calculateAverage($data){
  // $data = array()
  $total = 0;
  $count = 0;
  for ($i =1; $i<count($data); $i++){
  $total += $data[$i];
  $count++;
}

  return $total/$count;
}

function displayScores($data){
  echo "<div class='col-xs-9'>";
  echo "<table class='table'>";
  foreach ($data as $id => $average){
    echo "<tr><td>{$id}</td><td>{$average}</td></tr>";
  }
  echo "</table></div>";
}

function displayIndividualScore($data, $exam_info){
  
}

function pageFooter(){
  echo "</div></body></html>";
}

function displayMenu(){
  ?>
    <div class='col-xs-3'>
      <p><a href='grades.php?mode=all'>Display Average Scores</a></p>
      <form action='grades.php' method='post'>
        <p>Enter ID:<input type="text" placeholder="Enter ID#" /></p>
        <p><button type="submit" class="btn btn-primary">Find my score</button></p>
      </form>
    </div>
  <?php
}

function pageHeader(){
  /// add page header
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
  <?php
}

?>
