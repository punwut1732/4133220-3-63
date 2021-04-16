<?php

include "./conDB.php";
$strSQL = "SELECT * FROM tb_member";

try{
    $result = $conn->query($strSQL);
    $rows = $result->fetch_array();
}
catch (Exception $e){
    echo $e->getMessage();
}

echo $rows[0];

?>