<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Primary</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($mhs as $key => $value) {?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['nim']?></td>
                            <td><?= $value['nama_mahasiswa']?></td>
                            <td><?= $value['tempat_lahir'] ?>, <?= $value['tanggal_lahir'] ?></td>
                            <td><?= $value['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>