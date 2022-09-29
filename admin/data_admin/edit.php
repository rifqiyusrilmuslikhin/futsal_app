<?php 
include "../koneksi/koneksi.php";

    $id = $_GET['ID_ADMIN'];

$result = mysqli_query($kon, "SELECT * FROM admin WHERE ID_ADMIN='$id'");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['ID_ADMIN'];
    $nama = $user_data['NAMA_ADMIN'];
    $email = $user_data['EMAIL_ADMIN'];
    $notelp = $user_data['TELP_ADMIN'];
    $username = $user_data['USERNAME_ADMIN'];

}

  ?>

<h3><i class="fas fa-user-cog mr-2"></i>  DATA ADMIN </h3><hr>
        <a href="index.php?halaman=admin" class="btn btn-primary mb-3"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        <h5 class="alert alert-warning p-2 rounded text-center">Edit Data Admin</h5>
        <form class="p-2 mt-4" action="proses_edit_admin.php" method="post">
          <div class="form-group">
            <label for="id">Id Admin</label>
            <input id="id" type="text" name="id" class="form-control" value="<?php echo $id?>" style="background-color: #ccc;" readonly>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" class="form-control" value="<?php echo $nama ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="<?php echo $email ?>">
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input id="telepon" type="text" name="telepon" class="form-control" value="<?php echo $notelp ?>">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" class="form-control" value="<?php echo $username ?>">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control">
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
