<?php


$file = 'sales.csv';
$product_info = array(); // array to store player data

@$fp = fopen($file, 'r');
  if(!$fp){
  echo "Could not open the file!";
  exit();
  }

  while ($info = fgetcsv($fp, 255, ',')){
    $model = $info[1];
    $product_info[$model] = $info;
  }

if (isset($_POST['month'])){
  $selected_product = $_POST['month'];
}


echo "Product Type \t Model \t Price \t Quantity \t Revenue</br>\n";
$revenue = calculateRevenue($product_info[$selected_product]);
  for ($i = 0; $i<count($product_info[$selected_product]); $i++){
    echo $product_info[$selected_product][$i]."\t";

  }
echo $revenue;

function calculateRevenue($data){
  $price = $data[2];
  $quantity = $data[3];
  $revenue = $price * $quantity;
  return $revenue;
}

?>
