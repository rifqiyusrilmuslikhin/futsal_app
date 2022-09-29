<?php
  include '../koneksi/koneksi.php';
  $query = mysqli_query($kon, "SELECT max(ID_PELANGGAN) as kodeTerbesar FROM pelanggan");
  $data = mysqli_fetch_array($query);
  $kodePelanggan = $data['kodeTerbesar'];
  $urutan = (int) substr($kodePelanggan, 3, 3);
  $urutan++;
  $huruf = "PLG";
  $kodePelanggan = $huruf . sprintf("%03s", $urutan);

?>
 <h3><i class="fas fa-user mr-2"></i>  DATA PELANGGAN </h3><hr>
        <a href="index.php?halaman=pelanggan" class="btn btn-primary mb-3"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        <h5 class="alert alert-warning p-2 rounded text-center">Menambahkan Data Pelanggan</h5>
        <form class="p-2 mt-4" action="proses_tambah_pelanggan.php" method="post">
          <div class="form-group">
            <label for="id">Id Pelanggan</label>
            <input id="id" type="text" name="id" class="form-control" value="<?php echo "$kodePelanggan" ?>" readonly style="background-color: #ccc">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input id="alamat" type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="notelp">Telepon</label>
            <input id="notelp" type="text" name="notelp" class="form-control">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </div>
        </form>
      </div>