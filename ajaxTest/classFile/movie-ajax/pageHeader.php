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
<script >
$(document).ready(function(){
	$('#movie-genre').on('change', function(){ 
		// do something when the user selects a new option	
		$('#movie-form').submit();
	});
});

</script>
</head>
<body>
<div class='row'>
 <div class='col-xs-12'><h2>Online Movie Store</h2></div>
</div>
<?php
   // obtain a list of distinct movie types
	$sql = 'SELECT DISTINCT type FROM `movies`';
	$movie_types = getAll($sql);
?>
<!-- content -->
<div class='row'>
<!-- left column -->
  <div class='col-xs-2'>
     <h4>Links</h4>
    <ul>
	<li><a href='index.php'>Home</a></li>
	<li><a href='index.php?mode=movies'>List of Movies</a></li>
	<li><a href='index.php?mode=customers'>List of Customers</a></li>
	<li>Movie type: <form method='post' id='movie-form' action='index.php?mode=movietype'><select name='genre' id='movie-genre'>
	<?php 
		for ($i=0; $i<count($movie_types); $i++){
			$movie_data = $movie_types[$i];
			echo "<option value='{$movie_data['type']}'>{$movie_data['type']}</option>\n";
		}
?>   
	</select></li>
 </ul>
  </div>
  <div class='col-xs-10'>

