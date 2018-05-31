<h2>Update Movie Information</h2>

<p>Select a movie:</p>
<table class='table'>
<?php
for ($i=0; $i<count($data_list); $i++){
   // each element is an array
   $movie = $data_list[$i];
   echo "<tr><td>{$movie['title']}</td>";
   echo "<td><form action='index.php?mode=displayMovieData' method='post'>";
   echo "<button type='submit' class='btn btn-primary' >Select</button>";
   echo "<input type='hidden' name='movie_id' value='{$movie['movie_id']}' />";
   echo "</form></td></tr>\n";

}
?>
</table>
