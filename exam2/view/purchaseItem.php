<?php
if (isset($_POST['product_id'])){
  $product_id = $_POST['product_id'];
}
if (isset($_POST['client_id'])){
  $client_id = $_POST['client_id'];
}
if (isset($_POST['quantity'])){
  $quantity = $_POST['quantity'];
}
$data=calculateCart($client_id, $product_id, $quantity);

echo "<h3>Thank you for purchasing {$quantity} {$data[0]['product_title']}</h3>";
echo '<p><a href="index.php?mode=displayProducts">Continue Shopping</p>';

?>
