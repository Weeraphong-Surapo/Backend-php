<?php include('function/navbar.php') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">นักเรียนที่สมัคร</h4>

    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#insertModal">
        + เพิ่มข้อมูล
    </button>

</div>


<div class="card">
    <div class="card-body d-flex justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <span>แสดง</span>
            <form>
                <input type="number" name="" min="1" id="" placeholder="100" class="form-control" style="width: 70px;">
            </form>
            <span>แถว</span>
        </div>


        <form action="">
            <div class="d-flex">
                <button type="submit" class="btn btn-light me-1">ค้นหา</button>
                <input type="search" name="" class="form-control" placeholder="ค้นหา" id="">
            </div>
        </form>
    </div>

    <table class="table text-center">
        <tr>
            <th style="font-size: 12px;">ตัวย่อระดับชั้น</th>
            <th style="font-size: 12px;">ระดับชั้น</th>
            <th style="font-size: 12px;">สาขา</th>
            <th style="font-size: 12px;">จัดการ</th>
        </tr>

        <tr>
            <td style="font-size: 14px;">ปวส.</td>
            <td style="font-size: 14px;">ประกาศนียบัตรวิชาชีพชั้นสูง</td>
            <td><button class="btn btn-secondary py-0" style="font-size: 14px; padding: 0 12px;">สาขา</button></td>
            <td>
                <button class="btn btn-warning py-0" style="font-size: 14px; padding: 0 12px;">แก้ไข</button>
                <button class="btn btn-danger py-0" style="font-size: 14px; padding: 0 12px;">ลบ</button>
            </td>
        </tr>

        <tr>
            <td style="font-size: 14px;">ปวส.</td>
            <td style="font-size: 14px;">ประกาศนียบัตรวิชาชีพชั้นสูง</td>
            <td><button class="btn btn-secondary py-0" style="font-size: 14px; padding: 0 12px;">สาขา</button></td>
            <td>
                <button class="btn btn-warning py-0" style="font-size: 14px; padding: 0 12px;">แก้ไข</button>
                <button class="btn btn-danger py-0" style="font-size: 14px; padding: 0 12px;">ลบ</button>
            </td>
        </tr>

        <tr>
            <td style="font-size: 14px;">ปวส.</td>
            <td style="font-size: 14px;">ประกาศนียบัตรวิชาชีพชั้นสูง</td>
            <td><button class="btn btn-secondary py-0" style="font-size: 14px; padding: 0 12px;">สาขา</button></td>
            <td>
                <button class="btn btn-warning py-0" style="font-size: 14px; padding: 0 12px;">แก้ไข</button>
                <button class="btn btn-danger py-0" style="font-size: 14px; padding: 0 12px;">ลบ</button>
            </td>
        </tr>

        <tr>
            <td style="font-size: 14px;">ปวส.</td>
            <td style="font-size: 14px;">ประกาศนียบัตรวิชาชีพชั้นสูง</td>
            <td><button class="btn btn-secondary py-0" style="font-size: 14px; padding: 0 12px;">สาขา</button></td>
            <td>
                <button class="btn btn-warning py-0" style="font-size: 14px; padding: 0 12px;">แก้ไข</button>
                <button class="btn btn-danger py-0" style="font-size: 14px; padding: 0 12px;">ลบ</button>
            </td>
        </tr>

        <tr>
            <td style="font-size: 14px;">ปวส.</td>
            <td style="font-size: 14px;">ประกาศนียบัตรวิชาชีพชั้นสูง</td>
            <td><button class="btn btn-secondary py-0" style="font-size: 14px; padding: 0 12px;">สาขา</button></td>
            <td>
                <button class="btn btn-warning py-0" style="font-size: 14px; padding: 0 12px;">แก้ไข</button>
                <button class="btn btn-danger py-0" style="font-size: 14px; padding: 0 12px;">ลบ</button>
            </td>
        </tr>

        <tr>
            <td style="font-size: 14px;">ปวส.</td>
            <td style="font-size: 14px;">ประกาศนียบัตรวิชาชีพชั้นสูง</td>
            <td><button class="btn btn-secondary py-0" style="font-size: 14px; padding: 0 12px;">สาขา</button></td>
            <td>
                <button class="btn btn-warning py-0" style="font-size: 14px; padding: 0 12px;">แก้ไข</button>
                <button class="btn btn-danger py-0" style="font-size: 14px; padding: 0 12px;">ลบ</button>
            </td>
        </tr>

        

    </table>

</div>
<?php include "function/modalInsert.php";?>
<?php include('function/footer.php') ?>
<script>
    $(function() {
        $('#formNewStudent').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: formData,
                async: false,
                success: function(data) {
                    if (data == "yes") {
                        Swal('success', 'เพิ่มข้อมูลสำเร็จ', '');
                        $('#formNewStudent')[0].reset();
                        $('#insertModal').modal('hide');
                    } else if (data == "error") {
                        Swal('warning', 'กรุณาเลือกรูปประเภทรูปภาพ', '');
                    } else {
                        Swal('error', 'เพิ่มข้อมูลไม่สำเร็จ', '');
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        function Swal(result, title, txt) {
            setTimeout(function() {
                swal({
                    type: result,
                    title: title,
                    text: txt,
                    timer: 5000,
                    showConfirmButton: true
                });
            });
        }
    });
</script>