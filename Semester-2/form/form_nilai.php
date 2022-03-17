<?php include_once '../template/atas.php'; ?>
<div class="container py-5">
    <div class="card">
        <div class="card-header">
            <h6>Sistem Penilaian</h6>
        </div>
        <div class="card-body">
            
            <form method="POST" action="./nilai_siswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
                    <div class="col-8">
                    <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <small>Develop By @razan &copy;2022</small>
        </div>
    </div>
</div>

<?php include_once '../template/bawah.php'; ?>