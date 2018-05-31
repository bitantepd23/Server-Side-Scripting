<div class='container'>

<!-- right column: content section -->

      <div class='col-xs-9'>

         <h3>List of Cell Phones</h3>
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
				$cell_info = $dataList[$i];
				echo "<td>{$cell_info['product_title']}</td><td>{$cell_info['product_description']}</td><td>{$cell_info['unit_price']}</td>";
        echo "</tr>";
			}

		} else {
			echo "Cell phone list is empty";
    }

  ?>
  </table>
     </div>
