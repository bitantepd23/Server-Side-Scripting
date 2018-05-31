<?php
/* This scripts calculates and displays average exam scores
   Input : data from a text file
   File format: id,exam1,exam2,exam3
*/

// define variables
$playerName =NULL;
$completions = NULL;
$passAttempts = NULL;
$passYards = NULL;
$touchdowns = NULL;
$interceptions = NULL;

$passerRating =0;


        function calculatePR(){

          if (isset($_POST['playerName'])){
            $playerName = $_POST['playerName'];
          }

          if (isset($_POST['passComplete'])){
            $completions = $_POST['passComplete'];
          }
          if (!is_numeric($completions) || $completions < 0){
              echo "Invalid completions <br/>";
            }

          if (isset($_POST['passAttempts'])){
            $passAttempts = $_POST['passAttempts'];
          }
          if (!is_numeric($passAttempts) || $passAttempts < 0){
              echo "Invalid pass attempts <br/>";
          }

          if (isset($_POST['passYards'])){
            $passYards = $_POST['passYards'];
          }
          if (!is_numeric($passYards) || $passYards < 0){
              echo "Invalid passing yards <br/>";
            }
          if (isset($_POST['touchdown'])){
          $touchdowns = $_POST['touchdown'];
          }
          if (!is_numeric($touchdowns) || $touchdowns < 0){
              echo "Invalid touchdowns <br/>";
          }

          if (isset($_POST['interceptions'])){
            $interceptions = $_POST['interceptions'];
          }
          if (!is_numeric($interceptions) || $interceptions < 0){
              echo "Invalid interceptions <br/>";
          }

              $c = (($completions/$passAttempts)*100 - 30)/20;
              $y = (($passYards/$passAttempts)-3)/4;
              $t = ($touchdowns/$passAttempts)*20;
              $i = 2.375 - ($interceptions/$passAttempts)*35;



          $passerRating = round(((($c+$y+$t+$i)/6)*100),2);

          return $passerRating;
        }



        function calculateOverallRating($pr){
          echo "Overall Rating: ";
          if ($pr <= 85){
            echo "Poor";
          }
          else if ($pr >85 && $pr <= 90){
            echo "Mediocre";
          }
          else if ($pr >90 && $pr <= 95){
            echo "Good";
          }
          else if ($pr >95){
            echo "Great";
          }
        }

function displayPR(){
        $passerRating = calculatePR();
        echo "Player name: ".$_POST['playerName']."<br/>\n";
        echo "Passer Rating: ".$passerRating."<br/>\n";
        calculateOverallRating($passerRating);


      }

      displayPR();
?>
