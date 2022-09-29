<?php 
include "../koneksi/koneksi.php";

        $result =mysqli_query($kon, "SELECT * FROM admin WHERE  USERNAME_ADMIN='$_SESSION[loginadmin]'");
        $data   =mysqli_fetch_array($result);
 ?>
<h3><i class="fas fa-user-cog mr-2"></i>  PROFIL ADMIN </h3><hr>
        <table class="mt-5">
          <tr>
            <td class="p-2">Username</td>
            <td class="p-2">:</td>
            <td class="p-2"><?php echo $_SESSION['loginadmin']?></td>
          </tr>
          <tr>
            <td class="p-2">Nama</td>
            <td class="p-2">:</td>
            <td class="p-2"><?php echo $data['NAMA_ADMIN']; ?></td>
          </tr>
          <tr>
            <td class="p-2">Email</td>
            <td class="p-2">:</td>
            <td class="p-2"><?php echo $data['EMAIL_ADMIN']; ?></td>
          </tr><tr>
            <td class="p-2">No Telepon</td>
            <td class="p-2">:</td>
            <td class="p-2"><?php echo $data['TELP_ADMIN'] ?></td>
          </tr>
        </table>
        </div>