<div class='container'>

<!-- right column: content section -->

      <div class='col-xs-9'>

         <h3>List of TVs</h3>
         <table class='table table-bordered'>
           <tr class='t-head'>


	 <?php

   for ($i=0; $i<count($columnLabels); $i++){
     echo "<td><b>{$columnLabels[$i]}</b></td>";
   }
   echo "</tr>";
		if (isset($dataList) && count($dataList)>0){

		// display the list of TVs
			for ($i=0; $i<count($dataList); $i++){
        echo "<tr>";
				// each element of $dataList is an associative array
				$tv_info = $dataList[$i];
				echo "<td>{$tv_info['product_title']}</td><td>{$tv_info['product_description']}</td><td>{$tv_info['unit_price']}</td>";
        echo "</tr>";
			}

		} else {
			echo "TV list is empty";
    }

  ?>
  </table>
     </div>
