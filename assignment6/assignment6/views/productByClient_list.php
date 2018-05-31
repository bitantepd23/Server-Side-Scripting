<div class='container'>
<div class='col-xs-9'>
<h2>Products from Specified Client</h2>
<table class='table table-bordered'>
  <tr class='t-head'>
<?php


if (isset($dataList) && count($dataList)>0){

  for ($i=0; $i<count($columnLabels); $i++){
    echo "<td><b>{$columnLabels[$i]}</b></td>";
  }
  echo "</tr>";

for ($i=0; $i<count($dataList); $i++){
  // display each value from the data row as table data
  $row = $dataList[$i];
  $customerName = $row['last_name'].", ".$row['first_name'];
  $title = $row['product_title'];
  $cost = $row['unit_price'];
  $quantity = $row['quantity'];

  echo "<tr>";

  echo "<td>{$customerName}</td><td>{$title}</td><td>{$cost}</td><td>{$quantity}</td>";

  echo "</tr>";
}
} else {
  echo "<h2>This client has not purchased anything.</h2>";
}
echo "</table>";

?>
</div>
