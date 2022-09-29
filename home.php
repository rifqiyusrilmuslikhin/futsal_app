<?php 
include "koneksi/koneksi.php";
$result = mysqli_query($kon,"SELECT * FROM about"); 
 ?>
<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Selamat Datang di Fatkhi Futsal</h2>
				
					<?php 
						while($data = mysqli_fetch_array($result)) { 
							echo "<p class='col-12 text-center'>".$data['TENTANG']."</p>";
						};
					 ?>
				
			</header>