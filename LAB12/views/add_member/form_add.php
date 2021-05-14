<form action="#" method="post" id="form_add_member">
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="sname">Surname</label>
        <input type="text" id="sname" name="sname" class="form-control">
    </div>
    <div class="form-group">
        <label for="dob">Date of Brith</label>
        <input type="date" id="dob" name="dob" class="form-control">
    </div>
    <button type="submit" class="btn btn-success"> สมัครสมาชิก </button>
    <button type="reset" class="btn btn-danger"> ยกเลิก </button>
</form>


<script>
    $("#form_add_member").submit(function(e) {
        e.preventDefault();
        let form = $(this);
        $.ajax({
            method: "POST",
            url: "./models/add_member/db_add.php",
            data: form.serialize(),
            beforeSend: function() {
                form.find(":submit").prop("disabled","true")
            },
            success: function(msg) {
                console.log(msg);
                form.find(":reset").trigger("click");
                Swal.fire(
                    'เพิ่มข้อมูล',
                    'ดำเนินการสมบูรณ์',
                    'success'
                )
            },
        });
    });
</script>