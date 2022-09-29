
 <h3><i class="fas fa-book mr-2"></i> DATA BOOKING </h3><hr>
 <a href="index.php?halaman=tambahbooking" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
        <div class="container-cari">
            <form action="">
            <div class="form-group">
              <label for="">Tampilkan :</label>
              <select name="" id="" class="form-control" style="width: 200px;">
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
                <option value="">100</option>
              </select>
            </div>
          </form>
            <form method="post" class="ml-auto" style="margin-top: 32px;">
            <div class="form-group" style="display: flex;flex-direction: row;">
                <input type="text" class="form-control" name="search" placeholder="Cari">
                <button type="submit" name="cari" class="btn btn-primary ml-2">Cari</button>&nbsp;<input class="btn btn-warning" type="button" value="Kembali" onclick="history.back(-1)">   
            </div>
          </form>
        </div>
        
        
        <table class="table table-striped table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama</th>
              <th scope="col">Lapangan</th>
              <th scope="col">Tanggal Main</th>
              <th scope="col">Jam Main</th>
              <th scope="col">Harga</th>
              <th scope="col">Bayar</th>
              <th scope="col">Sisa</th>
              <th scope="col">Keterangan</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(isset($_POST['cari'])){ 
            $no = 1; //buat urutan nomer 
            $cari = $_POST['search']; 
            $result = mysqli_query($kon, "SELECT ID_BOOKING, NAMA_BOOKING, (SELECT NAMA_PELANGGAN FROM pelanggan WHERE ID_PELANGGAN=booking.ID_PELANGGAN) AS NAMA,(SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=booking.ID_LAPANGAN) AS LAPANGAN,TANGGAL,(SELECT JAM FROM jadwal WHERE ID_JADWAL=booking.ID_JADWAL) AS JAM,(SELECT HARGA FROM harga WHERE ID_HARGA=.booking.ID_HARGA) AS HARGA,DP,SISA,KETERANGAN FROM booking WHERE ID_BOOKING LIKE '%$cari%' OR NAMA_BOOKING LIKE '%$cari%' OR TANGGAL LIKE '%$cari%' OR DP LIKE '%$cari%' OR SISA LIKE '%$cari%' AND KETERANGAN != 'Tertunda' ORDER BY ID_BOOKING ASC");
            
            while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_BOOKING']."</td>";
                      echo "<td>".$data['NAMA']."</td>";
                      echo "<td>".$data['NAMA_BOOKING']."</td>";
                      echo "<td>".$data['LAPANGAN']."</td>";
                      echo "<td>".$data['TANGGAL']."</td>";
                      echo "<td>".$data['JAM']."</td>";
                      echo "<td>".$data['HARGA']."</td>";
                      echo "<td>".$data['DP']."</td>";
                      echo "<td>".$data['SISA']."</td>";
                      include "ifket.php";
                $no++;
              }
            }else{
             $result = mysqli_query($kon, "SELECT ID_BOOKING, NAMA_BOOKING, (SELECT NAMA_PELANGGAN FROM pelanggan WHERE ID_PELANGGAN=booking.ID_PELANGGAN) AS NAMA,(SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=booking.ID_LAPANGAN) AS LAPANGAN,TANGGAL,(SELECT JAM FROM jadwal WHERE ID_JADWAL=booking.ID_JADWAL) AS JAM,(SELECT HARGA FROM harga WHERE ID_HARGA=.booking.ID_HARGA) AS HARGA,DP,SISA,KETERANGAN FROM booking WHERE KETERANGAN != 'Tertunda' ORDER BY ID_BOOKING DESC");
              $no = 1;
              while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_BOOKING']."</td>";
                      echo "<td>".$data['NAMA']."</td>";
                      echo "<td>".$data['NAMA_BOOKING']."</td>";
                      echo "<td>".$data['LAPANGAN']."</td>";
                      echo "<td>".$data['TANGGAL']."</td>";
                      echo "<td>".$data['JAM']."</td>";
                      echo "<td>".$data['HARGA']."</td>";
                      echo "<td>".$data['DP']."</td>";
                      echo "<td>".$data['SISA']."</td>";
                      include "ifket.php";
                $no++;
            }
              
              }
              ?>
          </tbody>
        </table>
        <div class="mt-4" style="margin-left: 800px;">
          <button class="btn">Previous</button>
            <button class="btn bg-secondary text-white">1</button>
            <button class="btn">Next</button>
        </div>
            
        </div>

           