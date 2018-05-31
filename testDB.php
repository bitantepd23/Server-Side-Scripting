<?php
// include database information
include(pdo)

if (+!$db) {
  echo "Could not connect!";
  exit();
}
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Page title </title>
 <!-- Include bootstrap CSS -->
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 <!-- Include jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>
<?php
// obtain list of movies
  // step 1: define sql statement
    $sql = 'SELECT title, year, type FROM `movies`';

  // step 2: prepare PDOStatement object
    $stm = $db->prepare($sql);

  // step 3: execute SQL statement
    $stm->execute();

    /* step 4: fetch all the rows using fetchAll() method
        NOTE: fetchAll() method returns an array of all rows
        ( 2-dimensional array ) */
      $movieInfo = $stm->fetchAll(PDO::FETCH_ASSOC);
      echo "<table class='table">;
      echo "<tr><td>Title</td><td>Year</td><td>Genre</td></tr>";

    /* each element of $movieInfo is an array. use a while loop to go through each element */

    for ($i=0; $i<count($movieInfo); $i++){
    // display data. each row is read into $row variable (array)
      $row => $movieInfo[$i];
/*    echo "<tr><td>Title: {$row['title']}</td>
              <td>Type: {$row['type']}</td>
              <td>Year: {$row['year']}</td></tr>";
              */
    echo "<tr>";
      foreach ($row as $name=>$value) {
          echo "<td>{$value}</td>";
      }
        echo "</tr>";
      }
    echo "</table>";

?>
