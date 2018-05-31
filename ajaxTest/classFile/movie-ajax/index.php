<?php
// include datababe information
include('pdo_connect.php');
include('models/model.php');
// check database connection
 if (!$db) {
   echo "Could not connect!";
   exit();
 }

 $mode = -1;
 if (isset($_GET['mode'])){
	$mode = $_GET['mode'];
 }
  switch ($mode){

     case "movies" : //obtain movie list

 	// step 1: Define SQL Statement
  	$sql = 'SELECT title, year, type FROM `movies`';
	// obtain data
	$dataList = getAll($sql);
	// return data using JSON format
	echo json_encode($dataList);
	break;

     case "movietype" : //obtain movie list
	// read the movie type
	$genre = (isset($_REQUEST['genre'])) ? $_REQUEST['genre'] : '';
        // step 1: Define SQL Statement
        $sql = "SELECT title, year, type FROM `movies` WHERE 
		type= :genre";
        // obtain data
	// define parameter values
	$parameters = array(':genre'=>$genre);
        $dataList = getAll($sql, $parameters);
	// return data using JSON format
	echo json_encode($dataList);
        break;

     case "customers" :

	 // step 1: Define SQL Statement
        $sql = 'SELECT first_name, last_name, phone FROM `customers`';
        // obtain data
        $dataList = getAll($sql);
        // define column labels
        $columnlabels = array('First name', 'Last name', 'Phone');
	// return data using JSON format
	echo json_encode($dataList);
        break;
	
	default : // display home page
		// display header
		include('pageHeader.php');
		// include default view
		include('views/defaultview.php');
		// Display page footer 
  		include('pageFooter.php');
		break;
  }






?>
  
 
