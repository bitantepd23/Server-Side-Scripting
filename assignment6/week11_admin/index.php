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
	$genre = (isset($_REQUEST['genre'])) ? $_REQUEST['genre'] : '';
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
	
	case "addnewmovie" :
		// display a blank form
		include('views/blankmovieform.php');
		break;
	case 'confirmnewmovie' :
		// insert new movie into movies table
		$title = (isset($_POST['title'])) ? $_POST['title'] : -1;
		$type = (isset($_POST['type'])) ? $_POST['type'] : -1;
		$year = (isset($_POST['year'])) ? $_POST['year'] : -1;
		// add new record
		if ($title !==-1 && $type !== -1 && $year !== -1) {
			$result = insertNewMovie($title, $type, $year);
			if ($result){
				// success
				echo "Added new movie";
			} else {
				echo "Could not add a new movie";
			}
		} else {
			// incorrect data
			echo "Invalid data";
		}			

		break;

	case 'selectMovie' :// display a list of movies
		$sql = 'SELECT movie_id, title FROM `movies`';
		// obtain a list of movies
		$data_list = getAll($sql);
		// display movie list
		include('views/movieselectionview.php');
		break;

	case 'displayMovieData' : // display selected movie
		$sql = "SELECT title, type, year FROM `movies` WHERE 
			movie_id = :movie_id";
		$parameters = array(':movie_id'=>$_POST['movie_id']);
		// obtain data
		$dataList = getOne($sql, $parameters);
		// display a form
		include('views/displaymovieformview.php');
		break;
	default : // home page
		include('views/defaultview.php');
		break;
  }



  /************ Display page footer ***************/
  include('pageFooter.php');

/***************** End main ***********************/


?>
  
 
