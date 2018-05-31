<div class='container'>
<div class='col-xs-9'>
<h3>List of Transactions</h3>
<table class='table table-bordered'>
  <tr class='t-head'>
<?php

for ($i=0; $i<count($columnLabels); $i++){
  echo "<td><b>{$columnLabels[$i]}</b></td>";
}
echo "</tr>";


for ($i=0; $i<count($dataList); $i++){
  // display each value from the data row as table data
  $row = $dataList[$i];
  $customerName = $row['last_name'].", ".$row['first_name'];
  $title = $row['product_title'];
  $description = $row['product_description'];
  $cost = $row['unit_price'];
  $quantity = $row['quantity'];
  //
  // $totalCustomerQuantity = 0;
  // while ($dataList[$i]['last_name'] == $dataList[$i+1]['last_name']){
  //
  // }

  echo "<tr>";

  echo "<td>{$customerName}</td><td>{$title}</td><td>{$description}</td><td>{$cost}</td><td>{$quantity}</td>\n";

  echo "</tr>";
}

echo "</table>";

?>
</div>
