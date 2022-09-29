<?php

$result = mysqli_query($kon, "SELECT * FROM admin WHERE ID_ADMIN != '0' ORDER BY ID_ADMIN ASC");

 ?>
<h3><i class="fas fa-user-cog mr-2"></i>  DATA ADMIN </h3><hr>
        <a href="index.php?halaman=tambahadmin" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
        <table class="table table-striped table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Telepon</th>
              <th colspan="2" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $no = 1;
              while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_ADMIN']."</td>";
                      echo "<td>".$data['USERNAME_ADMIN']."</td>";
                      echo "<td>".$data['NAMA_ADMIN']."</td>";
                      echo "<td>".$data['EMAIL_ADMIN']."</td>";
                      echo "<td>".$data['TELP_ADMIN']."</td>";
                      echo "<td><a href='index.php?halaman=editadmin&ID_ADMIN=".$data['ID_ADMIN']."' class='bg-warning m-auto' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;'><i class='fas fa-edit text-white' data-toggle='tooltip' title='edit'></i></a></td>";
                      echo "<td><a href='data_admin/hapus.php?ID_ADMIN=".$data['ID_ADMIN']."' Onclick=\"return confirm('Anda Yakin Menghapus ?')\" class='bg-danger m-auto' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;'><i class='fas fa-trash text-white' data-toggle='tooltip' title='delete'></i></a></td>";
                      echo "</tr>";
                $no++;
              }
              ?>
          </tbody>
        </table>
        </div>