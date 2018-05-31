<?php
// define an associative array
$sales = array('Jan'=>1000, 'Feb'=>1225, 'Mar' =>1750);

//display sales for March
// echo "March sales: ".$sales['Mar'];

// display values
foreach ($sales as $month=>$sale){
  echo "Month: ".$month.", Sales: ".$sale."<br/>\n";
  }
?>
