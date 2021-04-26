<?php
require "./conDB.php";

$id = $_POST['id'];
$name = $_POST['name'];
$snme = $_POST['sneme'];
$dob = $_POST['dob'];

try{
    $SQL = "INSERT INTO tb_member 
    VALUES('$id','$name','$sname','$dob')";
    $conn->query($SQL);
}
catch(Exception $e){
    $e->getMessage();
}
?>