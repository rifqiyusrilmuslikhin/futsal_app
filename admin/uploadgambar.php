<?php
include "../koneksi/koneksi.php";

if(isset($_POST['uploadgambar']))
{   
	// $header = stripslashes($_FILES['header']);
 //    $header = mysqli_real_escape_string($kon, $header);
 //    $logo = stripslashes($_FILES['logo']);
 //    $logo = mysqli_real_escape_string($kon, $logo);
	$header = $_FILES['header'];
	$logo = $_FILES['logo'];
	$fileheader = $header['name'];
	$filelogo = $logo['name'];
	$nama_tmp_header = $header['tmp_name'];
	$nama_tmp_logo = $logo['tmp_name'];
	$upload_dir = "../img/";
	move_uploaded_file($nama_tmp_header,$upload_dir.$fileheader);
	move_uploaded_file($nama_tmp_logo,$upload_dir.$filelogo);

    $result = mysqli_query($kon, "UPDATE gambar SET GAMBAR_HEADER='$fileheader', LOGO='$filelogo' WHERE ID_GAMBAR='1'");

    if($result){
        echo "<script>  
        alert('Berhasil Update Data :)');  
        window.location = 'index.php?halaman=pengaturan';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Update Data :(');  
        window.location = ''index.php?halaman=pengaturan';  
        </script>";
    }
}
?>