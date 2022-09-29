<?php 

include 'koneksi/koneksi.php';
$result= mysqli_query($kon,"SELECT * FROM gambar");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fatkhi Futsal</title>
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
		<div class="placeholder">
					 
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/<?php echo $data['GAMBAR_HEADER'] ?>">

				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/<?php echo $data['LOGO'] ?>" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Fatkhi Futsal</h1>
								<h6 class="tm-site-description">Sistem Informasi Penyewaan Lapangan Futsal</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<?php include "menu.php"; ?>
						</nav>	
					</div>
				</div>
			</div>

		</div>

		<main>
			<?php 
			    if(isset($_GET['halaman'])){
			        $halaman = $_GET['halaman'];
			        switch ($halaman) {
			            case 'home':
			                include "home.php";
			                break;
			            case 'lapangan':
			                include "lapangan.php";
			                break;
			            case 'jadwal':
			                include "jadwal.php";
			                break;
			            case 'booking':
			            	include "booking.php";
			            	break;
			            case 'contact':
			            	include "contact.php";
			            	break;
			            default:
			            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
			            break;
			        }
			    }else {
			        include "home.php";
			    }
			?>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Rifqi Yusril Muslikhin
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
		$(document).ready(function() {
        $(".drop-down ul li").hover(function() { 
            $(this).find("ul").slideToggle("fast"); 
         });
    });
	</script>
</body>
</html>