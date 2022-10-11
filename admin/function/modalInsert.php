<!-- Modal -->
<div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">เพิ่มนักศึกษา</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formNewStudent" enctype="multipart/form-data">
                    <input type="hidden" name="action" id="action" value="register">

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">คำนำ</span>
                            <select class="form-select form-control" aria-label="Default select example">
                                <option value="1">นาย</option>
                                <option value="2">นาง</option>
                                <option value="3">นางสาว</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ชื่อ</span>
                            <input class="form-control" type="text" id="fname" name="fname" placeholder="ชื่อ (ภาษาไทย)" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">นามสกุล</span>
                            <input class="form-control" type="text" id="lname" name="lname" placeholder="นามสกุล (ภาษาไทย)" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">วันเดือนปีเกิด</span>
                            <input class="form-control" type="date" name="date" id="date" placeholder="" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">บัตรประชาชน</span>
                            <input class="form-control" type="text" name="card_number" id="card_number" placeholder="เลขบัตรประจำตัวประชาชน" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ชื่อEng</span>
                            <input class="form-control" type="text" name="fname_eng" id="fname_eng" placeholder="ชื่อ (ภาษาอังกฤษ)" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">นามสกุลEng</span>
                            <input class="form-control" type="text" name="lname_eng" id="lname_eng" placeholder="นามสกุล (ภาษาอังกฤษ)" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">กรุ๊ปเลือด</span>
                            <input class="form-control" type="text" name="group_blood" id="group_blood" placeholder="กรุปเลือด" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">เชื้อชาติ</span>
                            <input class="form-control" type="text" name="ethnicity" id="ethnicity" placeholder="เชื้อชาติ" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">สัญชาติ</span>
                            <input class="form-control" type="text" name="nationality" id="nationality" placeholder="สัญชาติ" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ศาสนา</span>
                            <input class="form-control" type="text" name="cult" id="cult" placeholder="ศาสนา" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">โรคประจำตัว</span>
                            <input class="form-control" type="text" name="disease" id="disease" placeholder="โรคประจำตัว" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">น้ำหนัก</span>
                            <input class="form-control" type="text" name="weight" id="weight" placeholder="น้ำหนัก" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ส่วนสูง</span>
                            <input class="form-control" type="text" name="height" id="height" placeholder="ส่วนสูง" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">เบอร์โทร</span>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" placeholder="เบอร์โทรศัพท์" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">อีเมลล์</span>
                            <input class="form-control" type="email" name="email" id="email" placeholder="อีเมลล์" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ที่อยู่</span>
                            <textarea class="form-control" name="address" id="address" placeholder="ที่อยู่" cols="" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ปีการศึกษา</span>
                            <select class="form-select form-control" name="year" id="year" aria-label="Default select example">
                                <option value="1">2568</option>
                                <option value="2">2567</option>
                                <option value="3">2566</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">ระดับชั้น</span>
                            <?php $lavel = array("ปวช", "ปวส", "ปริญญาตรี", "ปริญญาโท", "ปริญญาเอก"); ?>
                            <select class="form-select form-control" name="lavel" id="lavel" aria-label="Default select example">
                                <?php for ($i = 0; $i < count($lavel); $i++) { ?>
                                    <option value="<?php echo $lavel[$i]; ?>"><?php echo $lavel[$i]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">สาขา</span>
                            <select class="form-select form-control" name="department" id="department" aria-label="Default select example">
                                <option value="1">คอมพิมเตอร์</option>
                                <option value="2">บัญชี</option>
                                <option value="3">สารสนเทศ</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">รูปถ่าย</span>
                            <input class="form-control" type="file" name="photo[]" id="photo" placeholder="..." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">สำเนาบัตรประชาชน</span>
                            <input class="form-control" type="file" name="photo[]" id="photo_card_number" placeholder="..." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">สำเนาทะเบียนบ้าน</span>
                            <input class="form-control" type="file" name="photo[]" id="photo_address" placeholder="..." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">สำเนาทรานสคริป</span>
                            <input class="form-control" type="file" name="photo[]" id="photo_result" placeholder="..." required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" id="insert" value="บันทึก">
            </div>
            </form>
        </div>
    </div>
</div>