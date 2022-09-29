<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['update']))
{   

	$id = $_POST['idz'];
	$nama = $_POST['namaz'];
	$alamat = $_POST['alamatz'];
	$email = $_POST['emailz'];
	$notelp = $_POST['notelpz'];
	$username = $_POST['usernamez'];
	$password = $_POST['passwordz'];

    $result = mysqli_query($kon, "UPDATE pelanggan SET ID_PELANGGAN='$id', NAMA_PELANGGAN='$nama',ALAMAT_PELANGGAN='$alamat',EMAIL_PELANGGAN='$email',TELP_PELANGGAN='$notelp',USERNAME_PELANGGAN='$username',PASSWORD_PELANGGAN='".md5($password)."' WHERE ID_PELANGGAN='$id'");

    if($result){
        echo "<script>  
        alert('Berhasil Update Data :)');  
        window.location = 'index.php?halaman=pelanggan';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Update Data :(');  
        window.location = 'index.php?halaman=editpelanggan';  
        </script>";
    }
}
?>