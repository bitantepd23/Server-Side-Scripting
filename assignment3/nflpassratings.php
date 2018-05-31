<?php
function pageHeader(){
  ?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Include bootstrap CSS -->
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<title>NFL Ratings</title>
  <style>
   .topbox { border-bottom: 1px solid #333;}
   .footer { text-align: center; font-size: 10px; border-top: 1px solid #333;}
  </style>
  </head>
  <body>
  <div class='row topbox'>
   <div class='col-xs-2'><img src='http://static.nfl.com/static/content//public/static/img/navigation/shields/header-shield.png' alt='NFL' /></div>
   <div class='col-xs-10'><h2>2016 NFL Player Ratings</h2></div>
  </div>
  <div class='row'>
    <div class='col-xs-2'>
	<h4>QB Ratings</h4>
	<ul>
	  <li><a href='nflpassratings.php?action=all'>Player Ratings</a></li>
	  <li><a href='nflpassratings.php?action=great'>Great Players</a></li>
	  <li><a href='nflpassratings.php?action=good'>Good Players</a></li>
	  <li><a href='nflpassratings.php?action=mediocre'>Mediocre Players</a></li>
	  <li><a href='nflpassratings.php?action=poor'>Poor Players</a></li>
	</ul>
    </div>
<h2>NFL Statistics Page</h2>
    <?php
  }

  function pageFooter(){
    ?>
  </body>
</div></div><div class='col-xs-12 footer'>&#169; 2016 NFL</div>
</html>
<?php
} // end of function


// Define variables

$file = 'nflstats.csv';
$player_info = array(); // array to store player data
$rating = -1; //search key for player stats

if (isset($_GET['action'])){
  $rating = $_GET['action'];
}

@$fp = fopen($file, 'r');
  if(!$fp){
  echo "Could not open the file!";
  exit();
  }

while ($info = fgetcsv($fp, 255, ',')){

  $pass_rate = calculatePR($info);
  $key = $info[0];

  $player_info[$key] = $pass_rate;
}

        function calculatePR($info){

          $playerName = $info[0];
          $team = $info[1];
          $completions = $info[2];
          $passAttempts = $info[3];
          $passYards = $info[4];
          $touchdowns = $info[5];
          $interceptions = $info[6];


          $c = (($completions/$passAttempts)*100 - 30)/20;
          $y = (($passYards/$passAttempts)-3)/4;
          $t = ($touchdowns/$passAttempts)*20;
          $i = 2.375 - ($interceptions/$passAttempts)*35;

          $passerRating = round(((($c+$y+$t+$i)/6)*100),2);
          $overallRating = calculateOverallRating($passerRating);


          // echo $playerName."\t".$team."\t".$completions."\t".$passAttempts."\t".$passYards."\t".$touchdowns."\t".$interceptions."\t".$passerRating."\t".$overallRating."<br/>\n";

          return $passerRating;
        }

        function calculateOverallRating($pr){

          if ($pr <= 85){
            $pr = "poor";
          }
          else if ($pr >85 && $pr <= 90){
            $pr = "mediocre";
          }
          else if ($pr >90 && $pr <= 95){
            $pr = "good";
          }
          else if ($pr >95){
            $pr = "great";
          }
          return $pr;
        }

        function filterPoor($pr){
          return ($pr <= 85);
        }

        function filterMediocre($pr){
          return ($pr > 85 && $pr <=90);
        }

        function filterGood($pr){
          return ($pr > 90 && $pr <= 95);
        }

        function filterGreat($pr){
          return ($pr > 95);
        }

        function displayPlayers($data){
          echo "<div class='col-xs-9'>";
          echo "<table class='table'>";
          arsort($data);
            foreach ($data as $player => $pr){
              echo "<tr><td>{$player}</td><td>{$pr}</td></tr>";
            }
            echo "</table></div>";
        }

        function displayPlayersByRating($rating, $data){

          echo "<div class='col-xs-9'>";
          echo "<table class='table'>";
          $filtered_data = array();

          if ($_GET['action'] == "great"){
            $filtered_data = array_filter($data, 'filterGreat');
            arsort($filtered_data);
                foreach ($filtered_data as $player => $pr){

                  echo "<tr><td>{$player}</td><td>{$pr}</td></tr>";
                  // print_r($filtered_data);
                }
          }

          else if ($_GET['action'] == "good"){
            $filtered_data = array_filter($data, 'filterGood');
            arsort($filtered_data);
                foreach ($filtered_data as $player => $pr){

                  echo "<tr><td>{$player}</td><td>{$pr}</td></tr>";
                  // print_r($filtered_data);
                }

          }

          else if ($_GET['action'] == "mediocre"){
            $filtered_data = array_filter($data, 'filterMediocre');
            arsort($filtered_data);
                foreach ($filtered_data as $player => $pr){

                  echo "<tr><td>{$player}</td><td>{$pr}</td></tr>";
                  // print_r($filtered_data);
                }
          }

          else if ($_GET['action'] == "poor"){
            $filtered_data = array_filter($data, 'filterPoor');
            arsort($filtered_data);
                foreach ($filtered_data as $player => $pr){

                  echo "<tr><td>{$player}</td><td>{$pr}</td></tr>";
                  // print_r($filtered_data);
                }
          }


              echo "</table></div>";
        }




pageHeader();
if ($rating != "all"){
  displayPlayersByRating($rating, $player_info);
} else {
displayPlayers($player_info);
}
pageFooter();

?>
