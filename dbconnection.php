<?php
$host = "localhost"; // host
$dbname = "hlhst_31218297_ss"; // database name
$user = "hlhst_31218297"; // username
$pass = "alla1993"; // password

try {
  $CNT = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $CNT->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}  
catch(PDOException $e) {  
    echo $e->getMessage();  
}


?>
