 <?php 
include "../koneksi/koneksi.php";

    $id = $_GET['ID_PELANGGAN'];

$result = mysqli_query($kon, "SELECT * FROM pelanggan WHERE ID_PELANGGAN='$id'");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['ID_PELANGGAN'];
    $nama = $user_data['NAMA_PELANGGAN'];
    $alamat = $user_data['ALAMAT_PELANGGAN'];
    $email = $user_data['EMAIL_PELANGGAN'];
    $notelp = $user_data['TELP_PELANGGAN'];
    $username = $user_data['USERNAME_PELANGGAN'];

}

  ?>

 <h3><i class="fas fa-user mr-2"></i>  DATA PELANGGAN </h3><hr>
        <a href="index.php?halaman=pelanggan" class="btn btn-primary mb-3"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        <h5 class="alert alert-warning p-2 rounded text-center">Edit Data Pelanggan</h5>
        <form class="p-2 mt-4" action="proses_edit_pelanggan.php" method="post">
          <div class="form-group">
            <label for="id">Id Pelanggan</label>
            <input id="id" type="text" name="idz" class="form-control" value="<?php echo $id; ?>" readonly style="background-color: #ccc">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="namaz" class="form-control" value="<?php echo $nama; ?>">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input id="alamat" type="text" name="alamatz" class="form-control" value="<?php echo $alamat; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="emailz" class="form-control" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label for="notelp">Telepon</label>
            <input id="notelp" type="text" name="notelpz" class="form-control" value="<?php echo $notelp; ?>">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" name="usernamez" class="form-control" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <label for="password">Password Baru</label>
            <input id="password" type="password" name="passwordz" class="form-control">
          </div>
          <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
      </div>

   
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../javascript/script.js"></script>
  </body>
</html>
