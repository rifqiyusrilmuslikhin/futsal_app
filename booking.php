<?php 


    $nama=$_SESSION['loginuser'];
    $query=mysqli_query($kon,"SELECT * FROM pelanggan WHERE USERNAME_PELANGGAN='$nama'");
	$rr=mysqli_fetch_array($query);
    $result = mysqli_query($kon,"SELECT ID_BOOKING,ID_PELANGGAN,(SELECT USERNAME_PELANGGAN FROM pelanggan WHERE ID_PELANGGAN=booking.ID_PELANGGAN) AS NAMA,NAMA_BOOKING, (SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=booking.ID_LAPANGAN) AS LAPANGAN,TANGGAL,(SELECT JAM FROM jadwal WHERE ID_JADWAL=booking.ID_JADWAL) AS JAM,(SELECT HARGA FROM harga WHERE ID_HARGA=.booking.ID_HARGA) AS HARGA,TELP_BOOKING,KETERANGAN FROM booking WHERE ID_PELANGGAN= '$rr[ID_PELANGGAN]' ORDER BY TANGGAL ASC");


 ?>
<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">History Booking Lapangan</h2>
			</header>
			
			<div class="tm-container-inner">
				<table border="1" cellspacing="0" cellpadding="10">
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
				            <th scope="col">Aksi</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
			              $no = 1;
			              while ($data = mysqli_fetch_array($result)) {
			                      echo "<td>".$no."</td>";
			                      echo "<td style='display:none;'>".$data['ID_BOOKING']."</td>";
			                      echo "<td>".$data['NAMA']."</td>";
			                      echo "<td>".$data['NAMA_BOOKING']."</td>";
			                      echo "<td>".$data['TELP_BOOKING']."</td>";
			                      echo "<td>".$data['LAPANGAN']."</td>";
			                      echo "<td>".$data['TANGGAL']."</td>";
			                      echo "<td>".$data['JAM']."</td>";
			                      echo "<td>".$data['HARGA']."</td>";
			                      include "ifket.php";
			                $no++;
			              }
			              ?>

				    </tbody>
				</table>
			</div>