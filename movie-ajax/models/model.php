<?php
 function getAll($sql, $parameter_values = null){
  global $db;
 // Step 1: prepare PDOStatement object
  $stm = $db->prepare($sql);
  // Step 2:  bind values to named parameters
  //  $stm->bindValue(':genre', $parameters);

  // Step 3: execute SQL statement
  $stm->execute($parameter_values);

  /* Step 4: fetch all the rows using fetchAll() method
       NOTE: fetchAll() method returns an array of rows
      ( 2-dimensional array ) */
   $results = $stm->fetchAll(PDO::FETCH_ASSOC);
   return $results;
} // end function




?>
