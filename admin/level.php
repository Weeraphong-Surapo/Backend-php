<?php 
include('function/navbar.php'); 
include "function/connect.php";
$sql = "SELECT * FROM tb_lavel";
$query = mysqli_query($con,$sql);
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">ระดับชั้น</h4>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#insertLavel">
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

    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th style="font-size: 12px;">ตัวย่อ</th>
                <th style="font-size: 12px;">ระดับชั้น</th>
                <th style="font-size: 12px;">สาขา</th>
                <th style="font-size: 12px;">จัดการ</th>
            </tr>
            <?php while($row = mysqli_fetch_array($query)){?>
            <tr>
                <td style="font-size: 14px;" width="10%"><?php echo $row['name'];?></td>
                <td style="font-size: 14px;"><?php echo $row['lavel'];?></td>
                <td><button class="btn btn-secondary py-0" id="<?php echo $row['id'];?>">สาขา</button></td>
                <td width="15%">
                    <div class="btn-group py-0">
                        <button class="btn btn-warning py-0 editData" id="<?= $row['id'];?>">แก้ไข</button>
                        <button class="btn btn-danger py-0 deleteData" id="<?= $row['id'];?>">ลบ</button>
                    </div>
                </td>
            </tr>
            <?php }?>

        </table>
    </div>
</div>
<?php include "function/modalLavel.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
<script>
    $(function(){
        $('#formNewLavel').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:'function/action.php',
                type:'post',
                data: formData,
                async:false,
                success:function(data){
                    if(data == "success"){
                        Swal('success','เพิ่มข้อมูลสำเร็จ','','level.php');
                        $('#formNewLavel')[0].reset();
                        $('#insertLavel').modal('hide');
                    }else{
                        Swal('error','เพิ่มข้อมูลไม่สำเร็จ','','level.php');
                    }
                },
                cache:false,
                contentType:false,
                processData:false
            });
        });
        
        $('.deleteData').click(function(){
            var id = $(this).attr('id');
            var action = 'deletelavel';
            var status = confirm('คุณต้องการลบใช่ไหม');
            if(status){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{id:id,action:action},
                    success:function(data){
                        Swal('success','ลบข้อมูลเรียบร้อย','','level.php');
                    }
                });
            }
        });
    });
</script>
