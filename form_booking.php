<?php 
include "koneksi/koneksi.php";

session_start();
if (!isset($_SESSION["loginuser"])){
    echo "<script>  
    alert('Anda Belum Login :) , Silahkan Login Dulu Untuk Membooking Lapangan :)');  
    window.location = 'login.php';  
    </script>";
  }

 if(isset($_POST['booking'])){
    $idjadwal = stripslashes($_POST['idjadwal']);
    $idjadwal = mysqli_real_escape_string($kon, $idjadwal);

    $idharga = stripslashes($_POST['idharga']);
    $idharga = mysqli_real_escape_string($kon, $idharga);

    $idlapangan = stripslashes($_POST['idlapangan']);
    $idlapangan = mysqli_real_escape_string($kon, $idlapangan);

    $tanggal = stripslashes($_POST['tanggal']);
    $tanggal = mysqli_real_escape_string($kon, $tanggal);

    $jam = stripslashes($_POST['jam']);
    $jam = mysqli_real_escape_string($kon, $jam);

    $harga = stripslashes($_POST['harga']);
    $harga = mysqli_real_escape_string($kon, $harga);

    $nama=$_SESSION['loginuser'];
    $query=mysqli_query($kon,"SELECT * FROM pelanggan WHERE USERNAME_PELANGGAN='$nama'");
	$rr=mysqli_fetch_array($query);

}

 ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fatkhi Futsal - Booking</title>
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
				<li><h4>Form Booking Lapangan</h4></li>
			</ul>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Booking Lapangan</h2>
			</header>
			
			<div class="tm-container-inner">
				<h4 style="text-align: right;"><span id="tanggalwaktu"></span></h4>
				<div class="box-booking">
				<div class="kiri-booking">
	        <form class="form-booking" action="proses_booking.php" method="post">
	        	<input type="hidden" name="idharga" value="<?php echo "$idharga"; ?>"> 
 				<input type="hidden" name="idpelanggan" value="<?php echo $rr['ID_PELANGGAN']; ?>"> 
	        	<div class="form-group">
	            <label><h4>Id Jadwal</h4></label>
	            <input readonly type="text" name="idjadwal" class="form-control" value="<?php echo $idjadwal; ?>" style="background-color: #ccc;">
	          </div>
	          <div class="form-group">
	            <label><h4>Id Lapangan</h4></label>
	            <input readonly type="text" name="idlapangan" class="form-control" value="<?php echo $idlapangan; ?>" style="background-color: #ccc;">
	          </div>
	          <div class="form-group">
	            <label><h4>Username</h4></label>
	            <input readonly type="text" name="username" class="form-control" value="<?php echo $nama; ?>" style="background-color: #ccc;">
	          </div>
	          <div class="form-group">
	            <label for="nama"><h4>Nama</h4></label>
	            <input id="nama" type="text" name="nama" class="form-control">
	          </div>
	          <div class="form-group">
	            <label for="tanggal"><h4>Tanggal Main</h4></label>
	            <input readonly type="text" name="tanggal" class="form-control" value="<?php echo $tanggal; ?>" style=" background-color: #ccc;">
	          </div>
	          <div class="form-group">
	            <label for="jam"><h4>Jam Main</h4></label>
	            <input readonly type="text" name="jam" class="form-control" value="<?php echo $jam; ?>" style=" background-color: #ccc;">
	          </div>
	          <div class="form-group">
	            <label for="harga"><h4>Harga</h4></label>
	            <input readonly id="harga" type="text" name="harga" value="<?php echo $harga ?>" class="form-control" style=" background-color: #ccc">
	          </div>
	          <div class="form-group">
	            <label for="alamat"><h4>Alamat</h4></label>
	            <input id="alamat" type="text" name="alamat" class="form-control">
	          </div>
	          <div class="form-group">
	            <label for="notelp"><h4>Nomor Telepon</h4></label>
	            <input id="notelp" type="text" name="notelp" class="form-control">
	          </div>
	          <button type="submit" name="booking" class="tm-btn tm-btn-primary" style="margin-bottom: 20px;">SUBMIT</button>
	          <a href="index.php?halaman=jadwal" class="tm-btn tm-btn-danger" style="margin-bottom: 20px;">KEMBALI</a>
	        </form>
	    </div>
				<div class="kanan-booking">
					<p style="padding: 10px; text-align: justify; background-color: #F5DEB3; color: #FF6347;border-radius: 10px;"><b>Info!</b> Anda hanya dapat melakukan pemesanan sekali, anda tidak dapat mengedit, tetapi jika anda ingin memesan ulang anda dapat menghapus pesanan, dan jika anda ragu dengan pesanan anda bisa klik tombol kembali di bawah, dan ulangi pemesanan</p>
				</div>
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

		var tw = new Date();
		if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
		else (a=tw.getTime());
		tw.setTime(a);
		var tahun= tw.getFullYear ();
		var hari= tw.getDay ();
		var bulan= tw.getMonth ();
		var tanggal= tw.getDate ();
		var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
		var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
		document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
	</script>
</body>
</html>