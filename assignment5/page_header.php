<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Movie Store</title>

    <!-- Include bootstrap CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel='stylesheet' href="queries/styles.css">

    <script>
    $(document).ready(function() {
      // include statements
      /* whenever we select a different movie type, we want to send
         a request to the server */

         $('#movie-type').on('change', function() {
           $('#movie-type').submit();
         });

         $('.dropdown-toggle').on('click', function() {
            $('.dropdown').toggleClass("open");
         });
    });
    </script>
</head>

<body>
  <div class='container'>
    <div class='page-header'>
      <h2>Online Movie Store <small>CS 382</small></h2>
    </div>
  </div>

  <?php
    // obtain a list of DISTINCT movie types
    $query = 'SELECT DISTINCT type FROM `movies`';
    $movie_types = getAll($query);
  ?>


        <div class='col-xs-12'>
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href='index.php'>Home</a></li>
                <li role="presentation"><a href='index.php?mode=customers'>List of Customers</a></li>
                <li role="presentation"><a href='index.php?mode=movieList&genre=Drama'>Favorite Drama Movies</a></li>
                <li role="presentation"><a href='index.php?mode=movieList&genre=Adventure'>Favorite Adventure Movies</a></li>
                <li role="presentation"><a href='index.php?mode=summary'>Rental Summary</a></li>
                <li role="presentation"><a href='index.php?mode=type1'>Customer Type I</a></li>
                <li role="presentation"><a href='index.php?mode=type2'>Customer Type II</a></li>
                <li role="presentation"><a href='index.php?mode=type3'>Customer Type III</a></li>
                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Popular Movies <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              for ($i=0; $i<count($movie_types); $i++){
                $movie_data = $movie_types[$i];
                echo "<li><a href=index.php?mode=favoriteGenre&genre={$movie_data['type']}#>{$movie_data['type']}  Movies</a></li>\n";
              }
              echo "</ul></li>";
            ?>
      </ul>
    </div>

    <div class='col-xs-12'>
