<?php


$name = "";
$email = "";


  if (isset($_POST['fullname'])){
    $name = $_POST['fullname'];
  }
  if (isset($_POST['email'])){
    $email = $_POST['email'];
  }
  echo "<h1>Customer Information</h1><br/>\n";
  echo "Name: ".$name."<br/>\n";
  echo "Phone: ".$email."<br/>\n";

?>
