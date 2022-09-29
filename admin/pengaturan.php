<?php 

$result = mysqli_query($kon,"SELECT * FROM about WHERE ID_ABOUT='1'");
$data = mysqli_fetch_array($result);

$result2 = mysqli_query($kon,"SELECT * FROM kontak WHERE ID_KONTAK='1'");
$data2 = mysqli_fetch_array($result2);

$result3 = mysqli_query($kon,"SELECT * FROM gambar WHERE ID_GAMBAR='1'");
$data3 = mysqli_fetch_array($result3);
 ?>
 <h3><i class="fas fa-cog mr-2"></i>  PENGATURAN </h3><hr>
        <div class="container-booking mt-5">
          <div class="kiri-booking">
            <h4 class="text-center">Contact</h4>
            <form action="updatekontak.php" method="post">
               <input id="idkontak" type="hidden" name="idkontak" class="form-control" value="<?php echo $data2['ID_KONTAK']; ?>">
              <div class="form-group">
                <label for="hub">Hubungi Kami</label>
                <textarea name="hub" id="hub" cols="0" rows="5" class="form-control" style="resize: none;"><?php echo $data2['ISI_KONTAK']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="0" rows="5" class="form-control" style="resize: none;"><?php echo $data2['ALAMAT']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" value="<?php echo $data2['EMAIL_KONTAK']; ?>">
              </div>
              <div class="form-group">
                <label for="telepon">No Telepon</label>
                <input id="telepon" type="text" name="telepon" class="form-control" value="<?php echo $data2['TELP_KONTAK']; ?>">
              </div>
              <div class="form-group">
                <label for="fb">Facebook</label>
                <input id="fb" type="text" name="fb" class="form-control" value="<?php echo $data2['FB']; ?>">
              </div>
              <div class="form-group">
                <label for="tw">Twitter</label>
                <input id="tw" type="text" name="tw" class="form-control" value="<?php echo $data2['TW']; ?>">
              </div>
              <div class="form-group">
                <label for="ig">Instagram</label>
                <input id="ig" type="text" name="ig" class="form-control" value="<?php echo $data2['IG']; ?>">
              </div>
              <div class="form-group">
                <label for="map">Maps</label>
                <textarea name="map" id="map" cols="0" rows="5" class="form-control" style="resize: none;"><?php echo $data2['MAP']; ?></textarea>
              </div>
              <button type="submit" name="updatekontak" class="btn btn-primary">UPDATE</button>
            </form>
            <h4 class="text-center pt-5">Home</h4>
            <form action="updatetentang.php" method="post">
              <input id="about" type="hidden" name="about" class="form-control" value="<?php echo $data['ID_ABOUT']; ?>">
              <div class="form-group">
                <label for="tentang">Tentang</label>
                <textarea name="tentang" id="tentang" cols="0" rows="5" class="form-control" style="resize: none;"><?php echo $data['TENTANG']; ?></textarea>
              </div>
              <button type="submit" name="updatetentang" class="btn btn-primary">UPDATE</button>
            </form>
            <h4 class="text-center pt-5">Gambar</h4>
            <form action="uploadgambar.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="header">Header</label>
                <input type="file" class="form-control" id="header" name="header">
              </div>
              <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
              </div>
              <button type="submit" name="uploadgambar" class="btn btn-primary">UPDATE</button>
            </form>
          </div>
          <div class="kanan-booking">
            <p class="alert alert-danger text-justify" style="margin-top: 70px;">Untuk Mengisi Form Facebook, Twitter, dan Instagram cukup buka profil Facebook, Twitter, dan Instagram lalu paste ke dalam form.</p>
            <p class="alert alert-primary text-justify mt-4">Untuk Mengisi Form Maps :<br>
            1. buka google maps <br>
            2. cari lokasi <br>
            3. klik share lalu pilih embed map <br>
            4. copy dan paste link ke dalam form
          </p>
          </div>
        </div>
      </div>
      