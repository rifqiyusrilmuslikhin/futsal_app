<?php 

$namlap1 = mysqli_query($kon,"SELECT * FROM `lapangan` WHERE ID_LAPANGAN = '1'");
$datlap1 = mysqli_fetch_array($namlap1);

$namlap2 = mysqli_query($kon,"SELECT * FROM `lapangan` WHERE ID_LAPANGAN = '2'");
$datlap2 = mysqli_fetch_array($namlap2);

$namlap3 = mysqli_query($kon,"SELECT * FROM `lapangan` WHERE ID_LAPANGAN = '3'");
$datlap3 = mysqli_fetch_array($namlap3);

$result2 = mysqli_query($kon,"SELECT * FROM harga WHERE ID_HARGA BETWEEN '1' AND '2'");
$result3 = mysqli_query($kon,"SELECT * FROM harga WHERE ID_HARGA BETWEEN '3' AND '4'");
$result4 = mysqli_query($kon,"SELECT * FROM harga WHERE ID_HARGA BETWEEN '1' AND '2'");

 ?>
<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Daftar Lapangan</h2>
			</header>
			<div class="tm-container-inner">
				<div class="box">
					<div class="kiri">
						<img src="img/<?php echo $datlap1['GAMBAR_LAPANGAN']; ?>" alt="Image" class="img-fluid tm-person-img" />
					</div>
					<div class="kanan">
						<h3 class="text-center tm-section-title"><?php echo $datlap1['NAMA_LAPANGAN']; ?></h3>
						<div class="box-lapangan">
							<div class="kiri-lapangan">
								<h4>Jenis Lapangan</h4>
								<h4>Harga Siang</h4>
								<h4>Harga Malam</h4>
							</div>
							<div class="kanan-lapangan">
								<h4>: <?php echo $datlap1['JENIS_LAPANGAN']; ?></h4>
								<?php 
					          while ($data2 = mysqli_fetch_array($result2)){
					            echo "<h4>: ".$data2['HARGA']." Perjam</h4>";
					          }

					           ?>
							</div>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="kiri">
						<img src="img/<?php echo $datlap2['GAMBAR_LAPANGAN']; ?>" alt="Image" class="img-fluid tm-person-img" />
					</div>
					<div class="kanan">
						<h3 class="text-center tm-section-title"><?php echo $datlap2['NAMA_LAPANGAN']; ?></h3>
						<div class="box-lapangan">
							<div class="kiri-lapangan">
								<h4>Jenis Lapangan</h4>
								<h4>Harga Siang</h4>
								<h4>Harga Malam</h4>
							</div>
							<div class="kanan-lapangan">
								<h4>: <?php echo $datlap2['JENIS_LAPANGAN']; ?></h4>
								<?php 
					          while ($data3 = mysqli_fetch_array($result3)){
					            echo "<h4>: ".$data3['HARGA']." Perjam</h4>";
					          }

					           ?>
							</div>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="kiri">
						<img src="img/<?php echo $datlap3['GAMBAR_LAPANGAN']; ?>" alt="Image" class="img-fluid tm-person-img" />
					</div>
					<div class="kanan">
						<h3 class="text-center tm-section-title"><?php echo $datlap3['NAMA_LAPANGAN']; ?></h3>
						<div class="box-lapangan">
							<div class="kiri-lapangan">
								<h4>Jenis Lapangan</h4>
								<h4>Harga Siang</h4>
								<h4>Harga Malam</h4>
							</div>
							<div class="kanan-lapangan">
								<h4>: <?php echo $datlap3['JENIS_LAPANGAN']; ?></h4>
								<?php 
					          while ($data4 = mysqli_fetch_array($result4)){
					            echo "<h4>: ".$data4['HARGA']." Perjam</h4>";
					          }

					           ?>
							</div>
						</div>
					</div>
				</div>
			</div>