<?php
require "./conDB.php";

$member_id = $_POST["id"];
$course_id = $_POST["subject"];
$time = time();

try{
    $SQL = "INSERT INTO tb_course
            VALUE('$time','$member_id','$course_id')
            ";

}
catch (Exception $e){
    $e->getMessage();
}
?>
