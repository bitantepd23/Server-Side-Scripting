<h2>List of Customers</h2>
<table class='table'>
	<tr>
<?php
        for ($i=0; $i<count($columnlabels); $i++){
                echo "<td>{$columnlabels[$i]}</td>";
        }
        echo "</tr>";

        /* each element of $dataList is an array. Use a for loop
           to go through each element */
        for ($i=0; $i<count($dataList); $i++){
                // display data. Each row is read into $row variable (array)
                $row = $dataList[$i];
                echo "<tr>";
                foreach ($row as $name=>$value){
                        echo "<td>{$value}</td>";
                }
                echo "</tr>";
        } // end for
        echo "</table>";
?>
