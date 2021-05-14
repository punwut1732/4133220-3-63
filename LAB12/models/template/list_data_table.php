<?php
require "../conDB.php";

try {
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
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $lists->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row["member_id"] ?></td>
                <td><?= $row["member_name"] . " " . $row["member_surname"] ?></td>
                <td><?= $row["member_dob"] ?></td>
                <td><button class="btn_del" data="<?= $row["member_id"] ?>">DEL</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    function del_member(b, ID) {
        $.ajax({
            method: "GET",
            url: "./models/del_member/db_del.php",
            data: {
                id: ID
            },
            beforeSend: function() {
                b.prop("disabled", true);
            },
            success: function() {
                $("#div_load").load("./models/template/list_data_table.php");
            }
        })
    }
    $(".btn_del").click(function() {
        let b = $(this);
        let ID = b.attr("data");

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                del_member(b, ID);
            }
        })
    });
</script>