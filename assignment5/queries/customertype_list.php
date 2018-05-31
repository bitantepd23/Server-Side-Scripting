<div class='container'>
<h2>List of Customers: Type <?php if (isset($mode)) echo substr($mode, 4); ?></h2>
  <table class='table table-bordered'>
      <tr class='t-head'>

  <?php
    for ($i=0; $i<count($columnLabels); $i++){
      echo "<td>{$columnLabels[$i]}</td>";
    }
    echo "</tr>";

    for ($i=0; $i<count($list); $i++){
      $row = $list[$i];
      $customerName = $row['last_name'].", ".$row['first_name'];
      echo "<tr>";
echo "<td>{$customerName}</td><td>{$row['title']}</td><td>{$row['type']}</td><td>{$row['date_out']}</td>";
      }
      echo "</tr>";
    
    echo "</table>";

  ?>
