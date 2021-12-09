  <head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <div class="row">
    <div class="col-md-12">
      <?php
      if (empty($_GET['alert'])) {
        echo "";
      } elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
      } elseif ($_GET['alert'] == 2) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data siswa berhasil disimpan.
          </div>";
      } elseif ($_GET['alert'] == 3) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data siswa berhasil diubah.
          </div>";
      } elseif ($_GET['alert'] == 4) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data siswa berhasil dihapus.
          </div>";
      }
      ?>

      <div class="panel panel-default">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
              </tr>
            </thead>

            <tbody>
              <?php
              // memanggil file mahasiswa.php
              require_once 'mahasiswa.php';

              // membuat objek mahasiswa
              $mahasiswa = new mahasiswa();

              // mengambil seluruh data mahasiswa
              $result = $mahasiswa->view();

              $no = 1;

              if (!empty($result)) {
                foreach ($result as $data) {

                  $tanggal        = $data['tanggal_lahir'];
                  $tgl            = explode('-', $tanggal);
                  $tanggal_lahir  = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

                  echo "  <tr>
                      <td width='50' class='center'>$no</td>
                      <td width='60'>$data[nim]</td>
                      <td width='150'>$data[nama]</td>
                      <td width='180'>$data[tempat_lahir], $tanggal_lahir</td>
                      <td width='120'>$data[jenis_kelamin]</td>
                      <td width='120'>$data[agama]</td>
                      <td width='250'>$data[alamat]</td>
                      <td width='80'>$data[no_telepon]</td>

                      
                        <div class=''>
                          ";
              ?>
              <?php
                  echo "
                        </div>
                   
                    </tr>";
                  $no++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->