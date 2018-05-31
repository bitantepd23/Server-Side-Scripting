<!-- right column: content section -->

      <div class='col-xs-9'>

         <h3>List of Customers</h3>
	 <?php
		if (isset($dataList) && count($dataList)>0){

		// display a list of customers
			for ($i=0; $i<count($dataList); $i++){
				// each element of $dataList is an associative array
				$customer_info = $dataList[$i];
				echo "<p>{$customer_info['last_name']}, {$customer_info['first_name']}</p>";
			}
		} else
			echo "Customer list is empty";
	?>
     </div>
