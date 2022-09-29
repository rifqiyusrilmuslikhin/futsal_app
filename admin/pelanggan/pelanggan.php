
<h3><i class="fas fa-user mr-2"></i>  DATA PELANGGAN </h3><hr>
        <a href="index.php?halaman=tambahpelanggan" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
        <div class="container-cari">
          <form method="post">
            <div class="form-group">
              <label for="">Cari :</label>
              <div style="display: flex;flex-direction: row;">
                <input type="text" class="form-control" name="search">
                <button type="submit" name="cari" class="btn btn-primary ml-2" style="display: inline-block;">Cari</button>&nbsp;<input class="btn btn-warning" type="button" value="Kembali" onclick="history.back(-1)"> 
              </div>
            </div>
          </form>
        </div>
        <table class="table table-striped table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Email</th>
              <th scope="col">Telepon</th>
              <th colspan="2" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(isset($_POST['cari'])){ 
            $no = 1; //buat urutan nomer 
            $cari = $_POST['search']; 
            $result=mysqli_query($kon,"SELECT * FROM pelanggan WHERE ID_PELANGGAN LIKE '%$cari%' OR  NAMA_PELANGGAN LIKE '%$cari%' OR  ALAMAT_PELANGGAN LIKE '%$cari%' OR EMAIL_PELANGGAN LIKE '%$cari%' OR TELP_PELANGGAN LIKE '%$cari%' OR USERNAME_PELANGGAN LIKE '%$cari%' ORDER BY ID_PELANGGAN ASC"); 
            while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_PELANGGAN']."</td>";
                      echo "<td>".$data['USERNAME_PELANGGAN']."</td>";
                      echo "<td>".$data['NAMA_PELANGGAN']."</td>";
                      echo "<td>".$data['ALAMAT_PELANGGAN']."</td>";
                      echo "<td>".$data['EMAIL_PELANGGAN']."</td>";
                      echo "<td>".$data['TELP_PELANGGAN']."</td>";
                      echo "<td><a href='index.php?halaman=editpelanggan&ID_PELANGGAN=".$data['ID_PELANGGAN']."' class='bg-warning' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;''><i class='fas fa-edit text-white' data-toggle='tooltip' title='edit'></i></a></td>";
                      echo "<td><a href='pelanggan/hapus.php?ID_PELANGGAN=".$data['ID_PELANGGAN']."' Onclick=\"return confirm('Anda Yakin Menghapus ?')\" class='bg-danger' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;''><i class='fas fa-trash text-white' data-toggle='tooltip' title='delete'></i></a></td>";
                      echo "</tr>";
                $no++;
              }
            } else{
              $result = mysqli_query($kon, "SELECT * FROM pelanggan ORDER BY ID_PELANGGAN ASC");
              $no = 1;
              while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_PELANGGAN']."</td>";
                      echo "<td>".$data['USERNAME_PELANGGAN']."</td>";
                      echo "<td>".$data['NAMA_PELANGGAN']."</td>";
                      echo "<td>".$data['ALAMAT_PELANGGAN']."</td>";
                      echo "<td>".$data['EMAIL_PELANGGAN']."</td>";
                      echo "<td>".$data['TELP_PELANGGAN']."</td>";
                      echo "<td><a href='index.php?halaman=editpelanggan&ID_PELANGGAN=".$data['ID_PELANGGAN']."' class='bg-warning' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;''><i class='fas fa-edit text-white' data-toggle='tooltip' title='edit'></i></a></td>";
                      echo "<td><a href='pelanggan/hapus.php?ID_PELANGGAN=".$data['ID_PELANGGAN']."' Onclick=\"return confirm('Anda Yakin Menghapus ?')\" class='bg-danger' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;''><i class='fas fa-trash text-white' data-toggle='tooltip' title='delete'></i></a></td>";
                      echo "</tr>";
                $no++;
              }
            }
              
              ?>
          </tbody>
        </table>
        </div>