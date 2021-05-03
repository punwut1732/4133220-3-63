<?php
require "../conDB.php";

try{
    $SQL = "SELECT * FROM tb_member";
    $lists = $conn->query($SQL);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME - LASTNAME</th>
            <th>Date of Birth</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = $lists->fetch_assoc()){
        ?>
        <tr>
            <td><?=$row["member_id"]?></td>
            <td><?=$row["member_name"] . " " . $row["member_surname"]?></td>
            <td><?=$row["member_dob"]?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>