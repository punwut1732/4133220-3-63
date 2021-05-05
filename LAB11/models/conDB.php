<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "sql206.byethost4.com";
$user = "b4_28370871";
$pass = "Pna0960907988";
$db= "b4_28370871_member";

try{
    $conn = new mysqli($host,$user,$pass,$db);
    // echo "Connected !!";
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>