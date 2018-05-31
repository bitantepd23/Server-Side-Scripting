<div class='container'>
<h2>List of Customers</h2>
<table class='table table-bordered'>
  <tr class='t-head'>
<?php

for ($i=0; $i<count($columnLables); $i++){
  echo "<td>{$columnLables[$i]}</td>";
}
echo "</tr>";


for ($i=0; $i<count($list); $i++){
  // display each value from the data row as table data
  $row = $list[$i];
  $customerName = $row['last_name'].", ".$row['first_name'];
  echo "<tr>";

  echo "<td>{$customerName}</td><td>{$row['phone']}</td>";
  // foreach ($row as $name=>$value){
  //   echo "<td>{$value}</td>";
  // }
  echo "</tr>";
}

echo "</table>";

?>
</div>
