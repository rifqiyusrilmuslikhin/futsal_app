<?php 
$result = mysqli_query($kon,"SELECT * FROM lapangan ORDER BY ID_LAPANGAN ASC");
$result2 = mysqli_query($kon,"SELECT * FROM harga WHERE ID_HARGA BETWEEN '1' AND '2'");
$result3 = mysqli_query($kon,"SELECT * FROM harga WHERE ID_HARGA BETWEEN '3' AND '4'");
 ?>
<h3><i class="fas fa-home mr-2"></i> DATA LAPANGAN </h3><hr>
<div class="col-md-12">
  <div class="row">
    <div class="col-md-6">
      <h4 class="text-center">Daftar Lapangan</h4>
      <table class="table table-striped table-bordered text-center mt-5">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Lapangan</th>
              <th scope="col">Jenis</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_LAPANGAN']."</td>";
                      echo "<td>".$data['NAMA_LAPANGAN']."</td>";
                      echo "<td>".$data['JENIS_LAPANGAN']."</td>";
                      echo "</tr>";
                $no++;
              }
              ?>
          </tbody>
        </table>
    </div>
    <div class="col-md-5 ml-5">
      <h4 class="text-center">Harga Lapangan</h4>
      <div class="row mt-5">
        <div class="col">
          <h6 class="text-center">Sintetis</h6>
          <?php 
          while ($data2 = mysqli_fetch_array($result2)){
            echo "<form action='updateharga.php' class='mt-4' method='post'>";
            echo "<input name='id' type='hidden' class='form-control' value='".$data2['ID_HARGA']."'>";
            echo "<label for=''>".$data2['WAKTU']."</label>";
            echo "<input type='text' class='form-control' value='".$data2['HARGA']."'>";
            echo "<button type='submit' name='update' class='btn btn-primary mt-2'>UPDATE</button>";
            echo "</form>";
          }

           ?>
      </div>
      <div class="col">
        <h6 class="text-center">Vinyl</h6>
        <?php 
          while ($data3 = mysqli_fetch_array($result3)){
            echo "<form action='updateharga.php' class='mt-4' method='post'>";
            echo "<input name='id' type='hidden' class='form-control' value='".$data3['ID_HARGA']."'>";
            echo "<label for='harga'>".$data3['WAKTU']."</label>";
            echo "<input id='harga' name='harga' type='text' class='form-control' value='".$data3['HARGA']."'>";
            echo "<button type='submit' name='update' class='btn btn-primary mt-2'>UPDATE</button>";
            echo "</form>";
          }

           ?>
      </div>
    </div>
  </div>
</div>    