<?php
 function insertNewMovie($title, $type, $year){
	global $db;
	// Define SQL statement
       $sql = "INSERT INTO `movies` (title, type, year)
		VALUES (:title, :type, :year)";
 	// define values for parameters
	$parameters = array(':title'=>$title, ':type'=>$type, ':year'=>$year);
	// prepare SQL statement
	$stm = $db->prepare($sql);
	// excute stm
	$stm->execute($parameters);
	return true;

 }

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

 function getOne($sql, $parameter_values = null){
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
   $results = $stm->fetch(PDO::FETCH_ASSOC);
   return $results;
} // end function



?>
