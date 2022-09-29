<?php 
include "../koneksi/koneksi.php";

$data_pelanggan = mysqli_query($kon,"SELECT * FROM pelanggan");
$jumlah_pelanggan = mysqli_num_rows($data_pelanggan);

$data_lapangan = mysqli_query($kon,"SELECT * FROM lapangan");
$jumlah_lapangan = mysqli_num_rows($data_lapangan);
 
$data_booking = mysqli_query($kon,"SELECT * FROM booking WHERE KETERANGAN != 'Tertunda'");
$jumlah_booking = mysqli_num_rows($data_booking);

$data_admin = mysqli_query($kon,"SELECT * FROM admin");
$jumlah_admin = mysqli_num_rows($data_admin);

$pesanbaru = mysqli_query($kon,"SELECT ID_BOOKING,(SELECT NAMA_PELANGGAN FROM pelanggan WHERE ID_PELANGGAN=booking.ID_PELANGGAN) AS NAMA,(SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=booking.ID_LAPANGAN) AS LAPANGAN,TANGGAL,(SELECT JAM FROM jadwal WHERE ID_JADWAL=booking.ID_JADWAL) AS JAM,(SELECT HARGA FROM harga WHERE ID_HARGA=.booking.ID_HARGA) AS HARGA,(SELECT TELP_PELANGGAN FROM pelanggan WHERE ID_PELANGGAN=booking.ID_PELANGGAN) AS TELEPON,KETERANGAN FROM booking WHERE KETERANGAN = 'Tertunda' ORDER BY TANGGAL DESC");
$jumlah_pesan = mysqli_num_rows($pesanbaru);

 ?>
<h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD </h3><hr>
        <div class="row text-white">
          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user mr-2"></i>
              </div>
              <h5 class="card-title">Data Pelanggan</h5>
              <div class="display-4"><?php echo $jumlah_pelanggan; ?></div>
              <a href="index.php?halaman=pelanggan" style="text-decoration: none;"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-warning ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-home mr-2"></i>
              </div>
              <h5 class="card-title">Data Lapangan</h5>
              <div class="display-4"><?php echo $jumlah_lapangan; ?></div>
              <a href="index.php?halaman=lapangan" style="text-decoration: none;"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-danger ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book mr-2"></i>
              </div>
              <h5 class="card-title">Data Booking</h5>
              <div class="display-4"><?php echo $jumlah_booking ?></div>
              <a href="index.php?halaman=booking" style="text-decoration: none;"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-secondary ml-5 mt-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-envelope mr-2"></i>
              </div>
              <h5 class="card-title">Booking Baru</h5>
              <div class="display-4"><?php echo $jumlah_pesan ?></div>
              <a href="index.php?halaman=pesanbaru" style="text-decoration: none;"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-success ml-5 mt-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-cog mr-2"></i>
              </div>
              <h5 class="card-title">Data Admin</h5>
              <div class="display-4"><?php echo $jumlah_admin ?></div>
              <a href="index.php?halaman=admin" style="text-decoration: none;"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>