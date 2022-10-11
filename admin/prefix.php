<?php
include('function/navbar.php');
include "function/connect.php";
$sql = "SELECT * FROM tb_prefix";
$query = mysqli_query($con, $sql);
?>

<!-- คำนำหน้า -->

<style>
    .prefix {
        background: #872BE4;
    }
</style>


<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">คำนำหน้า</h4>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#insertPrefix">
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
            <th style="font-size: 12px;">คำนำหน้า ไทย</th>
            <th style="font-size: 12px;">คำนำหน้า อังกฤษ</th>
            <th style="font-size: 12px;">จัดการ</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($query)) { ?>
            <tr>
                <td style="font-size: 14px;"><?php echo $row['prefixThai']; ?></td>
                <td style="font-size: 14px;"><?php echo $row['prefixEng']; ?></td>
                <td>
                    <button class="btn btn-warning py-1 editPrefix" id="<?php echo $row['id']; ?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe254;</i>แก้ไข</span></button>
                    <button class="btn btn-danger py-1 deletePrefix" id="<?php echo $row['id']; ?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe872;</i>ลบ</span></button>
                </td>
            </tr>
        <?php } ?>

    </table>

</div>
<?php include "function/modalInsertprefix.php"; ?>
<?php include "function/modalEditprefix.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
<script>
    $(function() {
        $('#formInsertPrefix').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: formData,
                async: false,
                success: function(data) {
                    Swal('success', 'เพิ่มข้อมูลสำเร็จ', '', 'prefix.php');
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        $('#EditPrefix').submit(function(e){
            e.preventDefault();
            var perfixthai = $('#prefixThaiEdit').val();
            var perfixEng = $('#prefixEngEdit').val();
            var action = 'updatePrefix';
            var id = $('#idPrefix').val();
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{
                    prefixThai: perfixthai,
                    perfixEng: perfixEng,
                    action: action,
                    id:id
                },
                success:function(data){
                    Swal('success','อัพเดตสำเร็จ','','prefix.php');
                }
            });
        });

        $('.deletePrefix').click(function() {
            var id = $(this).attr('id');
            var status = confirm('ต้องการลบ');
            var action = 'deletePrefix';
            if (status) {
                $.ajax({
                    url: 'function/action.php',
                    type: 'post',
                    data: {
                        id: id,
                        action: action
                    },
                    success: function(data) {
                        Swal('success', 'ลบข้อมูลสำเร็จ', '', 'prefix.php');
                    }
                });
            }
        });

        $('.editPrefix').click(function() {
            var id = $(this).attr('id');
            var action = 'editPrefix';
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: {
                    id: id,
                    action: action
                },
                dataType: 'json',
                success: function(data) {
                    $('#idPrefix').val(data.id);
                    $('#prefixThaiEdit').val(data.prefixThai);
                    $('#prefixEngEdit').val(data.prefixEng);
                    $('#EditPrefix').modal('show');
                }
            });
        });
    });
</script>