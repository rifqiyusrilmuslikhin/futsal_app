<?php 

$result = mysqli_query($kon,"SELECT ID_BOOKING,(SELECT USERNAME_PELANGGAN FROM pelanggan WHERE ID_PELANGGAN=booking.ID_PELANGGAN) AS NAMA,NAMA_BOOKING,(SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=booking.ID_LAPANGAN) AS LAPANGAN,TANGGAL,(SELECT JAM FROM jadwal WHERE ID_JADWAL=booking.ID_JADWAL) AS JAM,(SELECT HARGA FROM harga WHERE ID_HARGA=.booking.ID_HARGA) AS HARGA,TELP_BOOKING,KETERANGAN FROM booking WHERE KETERANGAN = 'Tertunda' ORDER BY TANGGAL DESC");
 
 ?>
<h3><i class="fas fa-book mr-2"></i> DAFTAR BOOKING BARU </h3><hr>
        <p class="alert alert-warning p-2 rounded text-center mt-4"><b>INFO!</b> HARAP KONFIRMASI PEMESANAN LAPANGAN KEPADA PELANGGAN YANG BERSANGKUTAN DENGAN MELALU SMS ATAU TELEPON KEPADA PIHAK YANG MEMESAN LAPANGAN FUTSAL</p>

        
        <table class="table table-striped table-bordered text-center mt-5">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Lapangan</th>
              <th scope="col">Tanggal Main</th>
              <th scope="col">Jam Main</th>
              <th scope="col">Harga</th>
              <th scope="col">Keterangan</th>
              <th colspan="2" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
             <?php
              $no = 1;
              while ($data = mysqli_fetch_array($result)) {
                      echo "<th scope='row'>".$no."</th>";
                      echo "<td style='display:none;'>".$data['ID_BOOKING']."</td>";
                      echo "<td>".$data['NAMA']."</td>";
                      echo "<td>".$data['NAMA_BOOKING']."</td>";
                      echo "<td>".$data['TELP_BOOKING']."</td>";
                      echo "<td>".$data['LAPANGAN']."</td>";
                      echo "<td>".$data['TANGGAL']."</td>";
                      echo "<td>".$data['JAM']."</td>";
                      echo "<td>".$data['HARGA']."</td>";
                      echo "<td><p class='bg-primary text-white p-1 rounded'>".$data['KETERANGAN']."</p></td>";
                      echo "<td><a href='konfirmasipesan.php?ID_BOOKING=".$data['ID_BOOKING']."' class='btn bg-warning' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;' onclick='return konfirmasi()'><i class='fas fa-check-circle text-white' data-toggle='tooltip' title='konfirmasi'></i></a></td>";
                      echo "<td><a href='hapuspesan.php?ID_BOOKING=".$data['ID_BOOKING']."' class='btn bg-danger' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;' onclick='return hapus()'><i class='fas fa-trash text-white' data-toggle='tooltip' title='delete'></i></a></td>";
                      echo "</tr>";
                $no++;
              }
              ?>
            
          </tbody>
        </table>
        </div>

<script>
  function hapus()
{
    tanya = confirm("Anda yakin akan menghapus data ?");
    if (tanya== true) {
      return true;
    }
    else {
      return false;
      } 
} 

function konfirmasi()
{
    tanya = confirm("Dengan klik ini bahwa pelanggan bersangkutan benar benar memesan lapangan futsal");
    if (tanya== true) {
      return true;
    }
    else{
      return false;
      } 
} 
</script>