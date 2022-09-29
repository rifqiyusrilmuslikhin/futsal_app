<?php 
include "../koneksi/koneksi.php";

 ?>
<a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="icon ml-auto">
          <a href="index.php?halaman=pesanbaru" class="text-white"><i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan Masuk"></i><a>
          <a href="index.php?halaman=pengaturan" class="text-white"><i class="fas fa-cog mr-3" data-toggle="tooltip" title="Pengaturan"></i></a>  
          <a href="logout.php" class="text-white"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i></a>
          <a href="index.php?halaman=profil" style="text-decoration: none;" class="text-white"><i class="fas fa-user-circle mr-2"></i><?php echo $_SESSION['loginadmin']?></a>
        </div>
      </div>