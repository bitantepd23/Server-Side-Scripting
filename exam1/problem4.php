<?php

$file = 'sales.csv';
$product_info = array(); // array to store player data

@$fp = fopen($file, 'r');
  if(!$fp){
  echo "Could not open the file!";
  exit();
  }

  while ($info = fgetcsv($fp, 255, ',')){
    $product_info[] = $info;
  }

echo "Product Type \t Model \t Price \t Quantity \t Revenue<br/>\n";
  for ($i = 0; $i<count($product_info); $i++){

    $price = $product_info[$i]['2'];
    $quantity = $product_info[$i]['3'];
    $revenue = $price * $quantity;

    echo "\t";
    for ($j=0; $j<count($product_info[$i]); $j++){

      echo $product_info[$i][$j]."\t";
    }
    echo $revenue."<br/>\n";
  }


?>
