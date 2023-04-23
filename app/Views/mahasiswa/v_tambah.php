<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"><?= $judul ?></h3>
    </div>
        <div class="card-body">
            <?php
            session();
            $validation = \Config\Services::validation();
            ?>

            <?php echo form_open('Mahasiswa/InsertData') ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIM</label>
                        <input name="nim" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('nim')) ? $validation->getError('nim') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('nama_mahasiswa')) ? $validation->getError('nama_mahasiswa') : '' ?></p>
                    </div>
                </div>
            </div>
     
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input name="nim" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select type="jenis_kelamin" class="form-control">
                            <option value=''>--Pilih Jenis Kelamin</option>
                            <option value='L'>Laki-laki</option>
                            <option value='P'>Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col sm-6">
                    <button type='submit' class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-success"> Kembali</a>
                </div>
            </div>           
                <?php echo form_close()?> 
        </div>
  </div>
</div