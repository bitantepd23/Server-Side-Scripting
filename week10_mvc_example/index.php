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
  // create page header
	include('pageHeader.php');
  switch ($mode){

     case "movies" : //obtain movie list

 	// step 1: Define SQL Statement
  	$sql = 'SELECT title, year, type FROM `movies`';
	// obtain data
	$dataList = getAll($sql);
	// define column labels
   	$columnlabels = array('Title', 'Year', 'Genre');
	// display data
	include('views/movielistview.php');
	break;

     case "movietype" : //obtain movie list
	// read the movie type
	$genre = (isset($_GET['genre'])) ? $_GET['genre'] : '';
        // step 1: Define SQL Statement
        $sql = "SELECT title, year, type FROM `movies` WHERE 
		type= :genre";
        // obtain data
	// define parameter values
	$parameters = array(':genre'=>$genre);
        $dataList = getAll($sql, $parameters);
        // define column labels
        $columnlabels = array('Title', 'Year', 'Genre');
        // display data
	include('views/movielistview.php');
        break;

     case "customers" :

	 // step 1: Define SQL Statement
        $sql = 'SELECT first_name, last_name, phone FROM `customers`';
        // obtain data
        $dataList = getAll($sql);
        // define column labels
        $columnlabels = array('First name', 'Last name', 'Phone');
        // display data
        include('views/customerlistview.php');
        break;
	
	default : // home page
		include('views/defaultview.php');
		break;
  }



  /************ Display page footer ***************/
  include('pageFooter.php');

/***************** End main ***********************/


?>
  
 
