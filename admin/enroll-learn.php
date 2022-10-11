<?php 
include('function/navbar.php'); 
include "function/connect.php";
$sql = "SELECT * FROM student";
$query = mysqli_query($con,$sql);
?>

<!-- สมัครเรียน -->

<style>
    .enroll-learn {
        background: #872BE4;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">สมัครเรียน</h4>

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
            <th>ชื่อ-นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>อีเมลล์</th>
            <th style="font-size: 12px;">ปีการศึกษา</th>
            <th style="font-size: 12px;">ระดับชั้น</th>
            <th style="font-size: 12px;">สาขา</th>
            <th style="font-size: 12px;">จัดการ</th>
        </tr>
            <?php while($row = mysqli_fetch_array($query)){?>
            <tr>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['number_phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td style="font-size: 14px;"><?php echo $row['year'];?></td>
                <td style="font-size: 14px;"><?php echo $row['lavel'];?></td>
                <td><?php echo $row['department'];?></td>
                <td>
                    <a href="show.php"><button class="btn btn-info text-light py-1" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe8f4;</i>แสดง</span></button></a>
                    <button class="btn btn-warning py-1" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe254;</i>แก้ไข</span></button>
                    <button class="btn btn-danger py-1 deleteStudent" style="font-size: 14px; padding: 0 12px;" id="<?php echo $row['id'];?>"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe872;</i>ลบ</span></button>
                </td>
            </tr>
            <?php }?>

    </table>

</div>


<?php include('function/footer.php') ?>
<?php include "function/modalInsert.php";?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
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
                        Swal('success', 'เพิ่มข้อมูลสำเร็จ', '','enroll-learn.php');
                        $('#formNewStudent')[0].reset();
                        $('#insertModal').modal('hide');
                    } else if (data == "error") {
                        Swal('warning', 'กรุณาเลือกรูปประเภทรูปภาพ', '','enroll-learn.php');
                    } else {
                        Swal('error', 'เพิ่มข้อมูลไม่สำเร็จ', '','enroll-learn.php');
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
        
        $('.deleteStudent').click(function(){
            var id = $(this).attr('id');
            var action = 'deleteStudent';
            var status = confirm('ต้องการลบใช่ไหม');
            if(status){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{id:id,action:action},
                    success:function(data){
                        Swal('success','ลบข้อมูลสำเร็จ','','enroll-learn.php')
                    }
                })
            }
        })
    });
</script>