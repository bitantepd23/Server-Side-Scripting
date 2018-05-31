<!-- right column: content section -->

      <div class='col-xs-9'>

         <h3>List of Purchases</h3>
	 <?php
	if (isset($data)){
    $totalAmount =0;
    $totalQuantity = 0;
		echo "<table class='table'>";
    echo "<tr>
            <td class='col-xs-4'>Product</td>
            <td class='col-xs-2'>Price</td>
            <td class='col-xs-2'>Quantity</td>
          </tr>";
		// display a list of customers
		for ($i=0; $i<count($data); $i++){
		// each element of $data is an associative array
			$row = $data[$i];
			echo "<tr>
			  <td class='col-xs-2'>{$row['product_title']}</td>
        <td class='col-cs-2'>{$row['unit_price']}</td>
			  <td class='col-xs-4'>{$row['quantity']}</td>
			  </td></tr>";
        $totalAmount += $row['unit_price']*$row['quantity'];
        $totalQuantity += $row['quantity'];
		}
		echo "</table>";
    echo "<table class='col-xs-6>'
    <tr><td>Total Quantity:</td><td>{$totalQuantity}</td>
    <tr><td>Total Amount:</td><td>$".$totalAmount."</td>
    </table>";
	} else
	echo "Transaction list is empty.";
?>
  </div>
