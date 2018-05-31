<div class='container'>
<h2>Favorite Movies: <?php if (isset($genre)) echo $genre; ?> Movies</h2>
  <table class='table table-bordered'>
    <tr class='t-head'>
  <?php
    
    if (!$list) {
      echo "<h2>We are sorry, no {$genre} movies have been rented. Check back soon!</h2>";
  }
    else {
	for ($i=0; $i<count($columnLabels); $i++){
        echo "<td>{$columnLabels[$i]}</td>";
      }
      echo "</tr>";

      for ($i=0; $i<count($list); $i++){
        $row = $list[$i];
        $customerName = $row['last_name'].", ".$row['first_name'];
        echo "<tr>";

          echo "<td>{$customerName}</td><td>{$row['title']}</td><td>{$row['type']}</td><td>{$row['date_out']}</td></tr>";
        }
      }  
      echo "</tr>";

      echo "</table>";
  ?>
