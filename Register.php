<?php include "fuction/connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="function/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="card card-body">

        <form enctype="multipart/form-data" id="formRegister">
            <input type="hidden" name="action" id="action" value="register">
            <div class="row mt-3 px-3">
                <div class="col-sm-12 col-lg-3 mb-4">    
                    <label for="prefix">คำนำหน้า</label>          
                    <select class="form-select form-control" aria-label="Default select example">
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="namethai">ชื่อ (ภาษาไทย)</label>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="ชื่อ (ภาษาไทย)" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="lastnamethai">นามสกุล (ภาษาไทย)</label>
                    <input class="form-control" type="text" id="lname" name="lname" placeholder="นามสกุล (ภาษาไทย)" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="birthday">วัน/เดือน/ปี เกิด</label>
                    <input class="form-control" type="date" name="date" id="date" placeholder="" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="">เลขบัตรประจำตัวประชาชน</label>
                    <input class="form-control" type="text" name="card_number" id="card_number" placeholder="เลขบัตรประจำตัวประชาชน" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="nameeng">ชื่อ (ภาษาอังกฤษ)</label>
                    <input class="form-control" type="text" name="fname_eng" id="fname_eng" placeholder="ชื่อ (ภาษาอังกฤษ)" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="lastnameeng">นามสกุล (ภาษาอังกฤษ)</label>
                    <input class="form-control" type="text" name="lname_eng" id="lname_eng" placeholder="นามสกุล (ภาษาอังกฤษ)" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="bloodtype">กรุ๊ปเลือด</label>
                    <input class="form-control" type="text" name="group_blood" id="group_blood" placeholder="กรุปเลือด" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="ethnicity">เชื้อชาติ</label>
                    <input class="form-control" type="text" name="ethnicity" id="ethnicity" placeholder="เชื้อชาติ" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="nationality">สัญชาติ</label>
                    <input class="form-control" type="text" name="nationality" id="nationality" placeholder="สัญชาติ" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">ศาสนา</label>
                    <input class="form-control" type="text" name="cult" id="cult" placeholder="ศาสนา" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="congenitaldisease">โรคประจำตัว</label>
                    <input class="form-control" type="text" name="disease" id="disease" placeholder="โรคประจำตัว" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">น้ำหนัก</label>
                    <input class="form-control" type="text" name="weight" id="weight" placeholder="น้ำหนัก" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">ส่วนสูง</label>
                    <input class="form-control" type="text" name="height" id="height" placeholder="ส่วนสูง" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">เบอร์โทรศัพท์</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number" placeholder="เบอร์โทรศัพท์" required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">อีเมลล์</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="อีเมลล์" required>
                </div>

                <div class="col-12 mb-4">
                    <label for="...">ที่อยู่</label>
                    <textarea class="form-control" name="address" id="address" placeholder="ที่อยู่" cols="" rows="3"></textarea>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">    
                    <label for="prefix">ปีการศึกษา</label>          
                    <select class="form-select form-control" name="year" id="year" aria-label="Default select example">
                        <option value="1">2568</option>
                        <option value="2">2567</option>
                        <option value="3">2566</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">    
                    <label for="prefix">ระดับชั้น</label>
                    <?php $lavel = array("ปวช","ปวส","ปริญญาตรี","ปริญญาโท","ปริญญาเอก");?>          
                    <select class="form-select form-control" name="lavel" id="lavel" aria-label="Default select example">
                        <?php for($i=0;$i<count($lavel);$i++){?>    
                    <option value="<?php echo $lavel[$i];?>"><?php echo $lavel[$i];?></option>
                    <?php }?>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">    
                    <label for="prefix">สาขา</label>        
                    <select class="form-select form-control" name="department" id="department" aria-label="Default select example">
                        <option value="1">คอมพิมเตอร์</option>
                        <option value="2">บัญชี</option>
                        <option value="3">สารสนเทศ</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">หมายเหตุ</label>
                    <textarea name="" class="form-control" placeholder="หมายเหตุ" cols="" rows="1"></textarea>
                </div>


                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">รูปถ่าย</label>
                    <input class="form-control" type="file" name="photo[]" id="photo" placeholder="..." required>
                </div>
                
                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">สำเนาบัตรประชาชน</label>
                    <input class="form-control" type="file" name="photo[]" id="photo_card_number" placeholder="..." required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">สำเนาทะเบียนบ้าน</label>
                    <input class="form-control" type="file" name="photo[]" id="photo_address" placeholder="..." required>
                </div>

                <div class="col-sm-12 col-lg-3 mb-4">
                    <label for="...">สำเนาทรานสคริป</label>
                    <input class="form-control" type="file" name="photo[]" id="photo_result" placeholder="..." required>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" name="register" id="register" class="btn btn-primary px-3 me-1">บันทึก</button>
                    <button type="reset" name="" class="btn btn-secondary px-3 ms-1">ยกเลิก</button>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
<script>
    $(function(){
        $('#formRegister').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:'function/action.php',
                type:'post',
                data: formData,
                async: false,
                success: function(data) {
                alert(data);
                },
                cache: false,
                contentType: false,
                processData: false
                });
        });
    });
</script>
</html>