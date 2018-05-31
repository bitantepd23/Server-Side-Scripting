<?php
// include database information
include(pdo)

if (+!$db) {
  echo "Could not connect!";
  exit();
}
?>
<!doctype html>
<html lang>

<?php
// obtain list of movies
  // step 1: define sql statement
    $sql = 'SELECT title, year, type FROM `movies`';

  // step 2: prepare PDOStatement object
    $stm = $db->prepare($sql);

  // step 3: execute SQL statement
    $stm->execute();

    // step 4: fetch database
      echo "<table class='table">;
      echo "<tr><td>Title</td><td>Genre</td><td>Year</td></tr>";
    //$movie = $stm->fetch(PDO::FETCH_ASSOC);
    while ($row = $stm->fetch(PDO::FETCH_ASSOC)){
    // display data. each row is read into $row variable (array)

    echo "<tr><td>Title: {$row['title']}</td>
              <td>Type: {$row['type']}</td>
              <td>Year: {$row['year']}</td></tr>";
    }
?>
