<div class='container'>
<h2>List of <?php if (isset($genre)) echo $genre; ?> Movies</h2>
<table class='table table-bordered'>
        <tr class='t-head'>
<?php
        for ($i=0; $i<count($columnLabels); $i++){
                echo "<td>{$columnLabels[$i]}</td>";
        }
        echo "</tr>";

        /* each element of $dataList is an array. Use a for loop
           to go through each element */
        for ($i=0; $i<count($list); $i++){
                // display data. Each row is read into $row variable (array)
                $row = $list[$i];
                echo "<tr>";
                foreach ($row as $name=>$value){
                        echo "<td>{$value}</td>";
                }
                echo "</tr>";
        } // end for
        echo "</table>";
?>
