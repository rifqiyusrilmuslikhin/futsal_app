<?php 
include "koneksi/koneksi.php";

session_start();
if (!isset($_SESSION["loginuser"])){
    echo "<script>  
    alert('Anda Belum Login :) , Silahkan Login Dulu Untuk Membooking Lapangan :)');  
    window.location = 'login.php';  
    </script>";
  }
 
    $username=$_SESSION['loginuser'];
    $query=mysqli_query($kon,"SELECT * FROM pelanggan WHERE USERNAME_PELANGGAN='$username'");
	$data=mysqli_fetch_array($query);


 ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fatkhi Futsal - Edit profil</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css">
	<link href="css/all.min.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="navbar">
			<ul>
				<li><h4>Form Edit Data Pelanggan</h4></li>
			</ul>
		</div>

		<main>
			<div class="container-login">
				<div class="box-login">
					<h2 class="text-center tm-section-title" style="padding: 20px;background-color: #2D99CC; color: #fff;">Edit Profil</h2>
					<form action="proses_edit_user.php" method="post">
						<div class="form-group" style="padding: 0 80px;">
		            <label for="id"><h4 style="padding: 20px 10px 0;">Id Pelanggan</h4></label>
		            <input readonly type="text" name="id" class="form-control" style="background-color: #ccc;" value="<?php echo $data['ID_PELANGGAN']; ?>">
		          </div>
		          <div class="form-group" style="padding: 0 80px;">
		            <label for="username"><h4 style="padding-bottom: 10px;">Username</h4></label>
		            <input readonly type="text" name="username" class="form-control" style="background-color: #ccc;" value="<?php echo $username; ?>">
		          </div>
					<div class="form-group" style="padding: 0 80px;">
		            <label for="nama"><h4 style="padding-bottom: 10px;">Nama</h4></label>
		            <input type="text" name="nama" class="form-control" required="required" style="border: 1px solid #ccc;" value="<?php echo $data['NAMA_PELANGGAN']; ?>">
		          </div>
		          <div class="form-group" style="padding: 0 80px;">
		            <label for="alamat"><h4 style="padding-bottom: 10px;">Alamat</h4></label>
		            <textarea name="alamat" id="alamat" cols="0" rows="4" class="form-control" required="required" style="border: 1px solid #ccc; resize: none;"><?php echo $data['ALAMAT_PELANGGAN']; ?></textarea>
		          </div>
		          <div class="form-group" style="padding: 0 80px;">
		            <label for="email"><h4 style="padding-bottom: 10px;">EMAIL</h4></label>
		            <input type="email" name="email" id="email" class="form-control" required="required" style="border: 1px solid #ccc;" value="<?php echo $data['EMAIL_PELANGGAN']; ?>">
		          </div>
		          <div class="form-group" style="padding: 0 80px;">
		            <label for="telepon"><h4 style="padding-bottom: 10px;">No Telepon</h4></label>
		            <input type="text" name="telepon" id="telepon" class="form-control" required="required" style="border: 1px solid #ccc;" value="<?php echo $data['TELP_PELANGGAN']; ?>">
		          </div>
		          <div class="form-group" style="padding: 0 80px;">
		            <label for="password"><h4 style="padding-bottom: 10px;">Password Baru</h4></label>
		            <input type="password" name="password" class="form-control" required="required" style="border: 1px solid #ccc;">
		          </div>
		          <a href="index.php?halaman=home" class="tm-btn tm-btn-danger" style=" margin-left: 300px; margin-bottom: 40px;">KEMBALI</a>
		          <button type="submit" name="update" class="tm-btn tm-btn-primary">SUBMIT</button>
					</form>
					
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Rifqi Yusril Muslikhin
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		// $(document).ready(function(){
		// 	// Handle click on paging links
		// 	$('.tm-paging-link').click(function(e){
		// 		e.preventDefault();
				
		// 		var page = $(this).text().toLowerCase();
		// 		$('.tm-gallery-page').addClass('hidden');
		// 		$('#tm-gallery-page-' + page).removeClass('hidden');
		// 		$('.tm-paging-link').removeClass('active');
		// 		$(this).addClass("active");
		// 	});
		// });
	</script>
</body>
</html>