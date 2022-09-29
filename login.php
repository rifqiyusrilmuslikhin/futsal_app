<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fatkhi Futsal - Login</title>
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
				<li><h4>Login Area Pelanggan</h4></li>
			</ul>
		</div>

		<main>
			<div class="container-login">
				<div class="box-login">
					<form action="proses_login.php" method="post">
						<h2 class="text-center tm-section-title" style="padding: 20px;background-color: #2D99CC; color: #fff;">Silahkan Login</h2>
						<div class="form-group" style="padding: 0 80px;">
			            <label for="username"><h4 style="padding-bottom: 10px;">Username</h4></label>
			            <input type="text" name="username" id="username" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <div class="form-group" style="padding: 0 80px;">
			            <label for="password"><h4 style="padding-bottom: 10px;">Password</h4></label>
			            <input type="password" name="password" id="password" class="form-control" required="required" style="border: 1px solid #ccc;">
			          </div>
			          <a href="index.php" class="tm-btn tm-btn-danger" style=" margin-left: 320px;">KEMBALI</a>
			          <button type="submit" name="loginuser" class="tm-btn tm-btn-primary" >LOGIN</button>
			          <p class="text-center" style="padding: 10px;">Jika Belum Punya Akun Silahkan <a href="register.php" style="text-decoration: none;"><b>Daftar Akun</b></a></p>
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