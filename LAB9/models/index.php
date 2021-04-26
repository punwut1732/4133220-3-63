<?php

include "./conDB.php";
$strSQL = "SELECT * FROM tb_member";

try {
    $result = $conn->query($strSQL);
    // $rows = $result->fetch_array();
} catch (Exception $e) {
    echo $e->getMessage();
}

// echo $rows[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>รายชื่อสมาชิก</h1>
    <a href="./form_add.php">+ ADD</a>
    <table>
        <thead>
            <th>ลำดับ</th>
            <th>ชื่อ - สกุล</th>
            <th>ปีเกิด</th>
            <!-- <th>อายุ</th> -->
            <th></th>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($rows = $result->fetch_array()) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $rows[0] . $rows[1] ?></td>
                    <td><?= $rows[2] ?></td>
                    <!-- <td><?= date("Y") - $rows[2] ?></td> -->
                    <td>
                        <a href="form_add_course.php?id=<?= $rows[0] ?>">ADD Course</a>
                        <a href="form_edit.php?id=<?= $rows[0] ?>">
                            edit
                        </a>
                        <a href="./db_del.php?id=<?= $rows[0] ?>">del</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>