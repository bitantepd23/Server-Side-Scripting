<?php

  $os_price = NULL;
  $proc_price = NULL;
  $mem_price = NULL;
  $hd_price = NULL;
  $dvd_price = NULL;

  $firstName = NULL;
  $lastName = NULL;
  $phoneNumber = NULL;

  $comments = NULL;

$total_cost = 890;


  $ops =  array('0' => '--select operating system--','w7' => 'Windows 7', 'w7p' => 'Windows 7 Pro', 'w8' => 'Windows 8.1', 'u12' => 'Ubuntu 12.04');

function totalCost($os_price, $proc_price, $mem_price, $hd_price, $dvd_price, $total_cost, $firstName, $lastName, $phoneNumber, $comments){

  // associative array for operating systems

    $ops =  array('0' => '--select operating system--','w7' => 'Windows 7', 'w7p' => 'Windows 7 Pro', 'w8' => 'Windows 8.1', 'u12' => 'Ubuntu 12.04');
  // associative array for processors
    $procs = array('0' => 'Intel Core i3', '200' => 'Intel Core i5', '350' => 'Intel Core i7');

  // associative array for memory
    $mem = array('2200' => '128 GB', '1600' => '64 GB', '500' => '32 GB', '295' => '16 GB', '0' => '8 GB');

  // associative array for hard drives
    $hd = array( '0' => '320GB', '100' => '500GB', '200' => '1000GB', '350' => '2000GB');

  //  associative array for CD/DVD drives
    $dvd = array('0' => 'DVD-ROM Drive', '50' => 'DVD+/-RW Drive');
    // read in variables


    if (isset($_POST['os'])){
      $os_price = $_POST['os'];
    }

    if (isset($_POST['processor'])){
      $proc_price = $_POST['processor'];
    }
    if (isset($_POST['memory'])){
    $mem_price = $_POST['memory'];
    }
    if (isset($_POST['hd'])){
    $hd_price = $_POST['hd'];
    }
    if (isset($_POST['cdr'])){
    $dvd_price = $_POST['cdr'];
    }
    if (isset($_POST['First'])){
      $firstName = $_POST['First'];
    }
    if (isset($_POST['Last'])){
      $lastName = $_POST['Last'];
    }
    if (isset($_POST['Phone'])){
      $phoneNumber = $_POST['Phone'];
    }
    if (isset($_POST['comments'])){
      $comments = $_POST['comments'];
    }
  echo "<h1>Thank you ".$firstName." ".$lastName." for using Sam's online store.</h1><br/>\n";

if ($os_price == '0'){
  echo "Please select an operating system and resubmit the form.<br/>\n";
}
else{
    echo "Base system: \t\t $".$total_cost."<br/>\n";

  echo "OS: ".$ops[$os_price]."<br/>\n";

  echo "Processor: ".$procs[$proc_price].", price: $".$proc_price."<br/>\n";

  echo "Memory: ".$mem[$mem_price].", price: $".$mem_price."<br/>\n";

  echo "Hard Drive: ".$hd[$hd_price].", price: $".$hd_price."<br/>\n";

  echo "CD/DVD: ".$dvd[$dvd_price].", price: $".$dvd_price."<br/>\n";

  $total_cost += $proc_price + $mem_price + $hd_price + $dvd_price;
  echo "Total price: \t$".$total_cost."<br/>\n";
  $tax = $total_cost * .05;
  echo "Sales tax (5%): \t$".$tax."<br/>\n";
  echo "<b>Final cost:</b> \t$".$total_cost += $tax."<br/>\n";
}
}

totalCost($os_price, $proc_price, $mem_price, $hd_price, $dvd_price, $total_cost, $firstName, $lastName, $phoneNumber, $comments);

?>
