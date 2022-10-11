<!-- Modal -->
<div class="modal fade" id="insertLavel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">เพิ่มระดับชั้น</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formNewLavel">
                    <input type="hidden" name="action" id="action" value="insertLavel">
                    <div class="mb-3">
                        <label for="">ตัวย่อ</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">ระดับชั้น</label>
                        <input type="text" name="lavel" id="lavel" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <input type="submit" class="btn btn-primary" id="insert" value="บันทึก">
            </div>
            </form>
        </div>
    </div>
</div>