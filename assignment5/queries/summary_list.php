<h2>Summary of Rentals</h2>
  <table class='table table-bordered'>
    <tr class='t-head'>

    <?php
      for ($i=0; $i<count($columnLabels); $i++){
        echo "<td>{$columnLabels[$i]}}</td>";
      }
      echo "</tr>";

      for ($i=0; $i<count($list); $i++){
        $row = $list[$i];
        echo "<tr>";
        foreach ($row as $name => $value) {
          echo "<td>{$value}</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>
