<?php
/*  This script calculates the area of a rectangle
    Input values: length, width
    Output: area of a rectangle
*/

/*  Server uses the special variable $_GET to store
    data sent via get method and $_POST variable to store
    data sent via post method
*/

// define variables
// $length = $_GET['boxlength'];
// $width = $_GET['boxwidth'];

// use isset() method to check if key/value pairs are set
   $length = 0;
   $width = 0;
   if (isset($_POST['boxLength'])){
	$length = $_POST['boxLength'];
   }
   if (isset($_POST['boxWidth'])){
	$width = $_POST['boxWidth'];
   }

// calculate area

$area = $length * $width;

// display output
echo "Length: ".$length."<br/>\n";
echo "Width: ".$width."<br/>\n";
echo "Area: ".$area."<br/>\n";
echo "<p><a href='area.html'>Back</a></p>";

  function displayArea($length, $width, $area){
     echo "Length: ".$length."<br/>\n";
     echo "Width: ".$width."<br/>\n";
     echo "Area: ".$area."<br/>\n";
     echo "<p><a href='area.html'>Back</a></p>";
}


// include user-defined functions

  function displayFooter(){
  echo "</body></html>";
}

  function displayForm(){
    global $length, $width;
}


?>
<!doctype html>
<html>

<html lang="en">

<head>

 <meta charset="utf-8">

 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Bootstrap Responsive Design </title>

 <!-- Include bootstrap CSS -->

 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body>

<h2>Area Calculator</h2>

<p><a href="http://washington.uww.edu/cs382/bitantepd23/area.php?boxlength=30&boxwidth=100">Calculate area of a 10x15 box</a></p>

<form action="area.php" method='post'>
<table class='table table-bordered'>
<tr>

    <td>Length:</td>
    <td><input type='text' name='boxLength' value='<?php echo $length; ?>' /></td>
</tr>
<tr>
    <td>Width: </td>
    <td><input type='text' name='boxWidth' value='<?php echo $width; ?>' /></td>
</tr>
</table>
<p><input type='submit' class='btn btn-primary' value='Calculate Area' />
   <input type='reset' class='btn btn-default' value='Clear' /></p>
</form>

</body>

</html>
