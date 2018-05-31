<?php

include('pdo_connect.php');
include('model.php');

// check database
if (!$db){
  echo "Could not connect!";
  exit();
}

$mode = -1;
if (isset($_GET['mode'])){
  $mode = $_GET['mode'];
}
include('page_header.php');

switch ($mode) {
  case "movieList": //list of movies

  if (isset($_GET['genre'])){
    $genre = $_GET['genre'];
  }

    switch ($genre){
      case "Drama":

        $query = "SELECT `movies`.title, `movies`.year, `rentals`.date_out, `rentals`.returned FROM `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `movies`.type = 'Drama';";

        $columnLabels = array('Title', 'Year', 'Date Out', 'Date Returned');

        $list = getAll($query);
        include('queries/movie_list.php');
        break;

      case "Adventure":
        $query = "SELECT `movies`.title, `movies`.year, `rentals`.date_out, `rentals`.returned FROM `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `movies`.type = 'Adventure';";

        $columnLabels = array('Title', 'Year', 'Date Out', 'Date Returned');

        $list = getAll($query);
        include('queries/movie_list.php');
        break;

    }
  break;

    case "summary":
      $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `rentals`.date_out, `rentals`.returned FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `customers`.member_id = `rentals`.member_id;";

      $columnLabels = array('First Name', 'Last Name', 'Title', 'Date Out', 'Date Returned');

      $list = getAll($query);
      include('queries/summary_list.php');
      break;

    case "type1":
      $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `rentals`.date_out FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.date_out < '2009-12-15';";

      $columnLabels = array('Name', 'Title', 'Type', 'Year');

      $list = getAll($query);
      include('queries/customertype_list.php');
      break;

    case "type2":
      $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `rentals`.date_out FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.date_out < '2009-12-15' AND `movies`.type = 'Sci-Fi';";

      $columnLabels = array('Name', 'Title', 'Type', 'Year');

      $list = getAll($query);
      include('queries/customertype_list.php');
      break;

    case "type3":
      $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND `movies`.type = 'Drama' AND `movies`.year <= 2000 AND `movies`.year >= 1990;";

      $columnLabels = array('Name', 'Title', 'Type', 'Year');

      $list = getAll($query);
      include('queries/customertype_list.php');
      break;

    case "customers":
        // $define column labels for set of data
      $columnLables = array('Customer', 'Phone');
        // // Define SQL query Statement
      $query = 'SELECT first_name, last_name, phone FROM `customers`;';
        // pulls data from $db using the statement defined in $query
      $list = getAll($query);
        // displays data
      include('queries/customer_list.php');
      break;

    case "favoriteGenre":

      if (isset($_GET['genre'])){
        $genre = $_GET['genre'];
      }

      switch($genre){

      case 'Drama':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Drama';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Adventure':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Adventure';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Suspense':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Suspense';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Romance':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Romance';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Comedy':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Comedy';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;


      case 'Musical':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type ='Musical';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Action':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Action';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Sci-Fi':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Sci-Fi';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
        break;

      case 'Animated':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Animated';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
      break;

      case 'Mystery':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Mystery';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
      break;

      case 'Western':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out  FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Western';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
      break;

      case 'Animation':
        $query = "SELECT `customers`.first_name, `customers`.last_name, `movies`.title, `movies`.type, `movies`.year, `rentals`.date_out FROM `customers`, `movies`, `rentals` WHERE `movies`.movie_id = `rentals`.movie_id AND `rentals`.member_id = `customers`.member_id AND`movies`.type = 'Animation';";
        $columnLabels = array('Name', 'Title', 'Type', 'Date Out');

        $list = getAll($query);
        include('queries/favorite_list.php');
      break;
    }
    break;

    default:
      include('default_view.php');
      break;
  }

include('page_footer.php');
?>
