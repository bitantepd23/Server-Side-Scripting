<?php
/* Datrabase connection 
   Include your netid and database password 
*/
$user = 'Your_netid';
$pass = 'DB_password'; // first initial last initial last 4-digits of ID
$db_info='mysql:host=washington.uww.edu; dbname=cs382-2171_Your_netid';
try {
    $db = new PDO($db_info, $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

