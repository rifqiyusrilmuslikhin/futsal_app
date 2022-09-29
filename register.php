<?php
	include 'koneksi/koneksi.php';
	$query = mysqli_query($kon, "SELECT max(ID_PELANGGAN) as kodeTerbesar FROM pelanggan");
	$data = mysqli_fetch_array($query);
	$kodePelanggan = $data['kodeTerbesar'];
	$urutan = (int) substr($kodePelanggan, 3, 3);
	$urutan++;
	$huruf = "PLG";
	$kodePelanggan = $huruf . sprintf("%03s", $urutan);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fatkhi Futsal - Register</title>
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
				<li><h4>Form Registrasi Pelanggan</h4></li>
			</ul>
		</div>

		<main>
			<div class="container-login">
				<div class="box-login">
					<form action="proses_registrasi.php" method="post">
						<h2 class="text-center tm-section-title" style="padding: 20px;background-color: #2D99CC; color: #fff;">Daftar Akun</h2>
						<div class="form-group" style="padding: 0 80px;">
			            <label for="id"><h4 style="padding-bottom: 10px;">Id</h4></label>
			            <input type="text" name="id" id="id" class="form-control" value="<?php echo "$kodePelanggan" ?>" readonly style="border: 1px solid #ccc; background-color: #ccc;">
			          </div>
						<div class="form-group" style="padding: 0 80px;">
			            <label for="nama"><h4 style="padding-bottom: 10px;">Nama</h4></label>
			            <input type="text" name="nama" id="nama" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <div class="form-group" style="padding: 0 80px;">
			            <label for="alamat"><h4 style="padding-bottom: 10px;">Alamat</h4></label>
			            <textarea name="alamat" id="alamat" cols="0" rows="4" class="form-control" required="required" style="border: 1px solid #ccc; resize: none;"></textarea>
			          </div>
			          <div class="form-group" style="padding: 0 80px;">
			            <label for="notelp"><h4 style="padding-bottom: 10px;">No Telepon</h4></label>
			            <input type="text" name="notelp" id="notelp" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <div class="form-group" style="padding: 0 80px;">
			            <label for="email"><h4 style="padding-bottom: 10px;">Email</h4></label>
			            <input type="text" name="email" id="email" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <div class="form-group" style="padding: 0 80px;">
			            <label><h4 style="padding-bottom: 10px;">Username</h4></label>
			            <input type="text" name="username" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <div class="form-group" style="padding: 0 80px;">
			            <label><h4 style="padding-bottom: 10px;">Password</h4></label>
			            <input type="password" name="password" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <a href="index.php" class="tm-btn tm-btn-danger" style=" margin-left: 320px; margin-bottom: 40px;">KEMBALI</a>
			          <button type="submit" name="registrasi" class="tm-btn tm-btn-primary">SUBMIT</button>
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