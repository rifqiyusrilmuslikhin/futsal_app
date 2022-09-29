<?php
include_once("koneksi/koneksi.php");

if(isset($_POST['update']))
{   

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$notelp = $_POST['telepon'];
	$username = $_POST['username'];
	$password = $_POST['password'];

    $result = mysqli_query($kon, "UPDATE pelanggan SET ID_PELANGGAN='$id', NAMA_PELANGGAN='$nama',ALAMAT_PELANGGAN='$alamat',EMAIL_PELANGGAN='$email',TELP_PELANGGAN='$notelp',USERNAME_PELANGGAN='$username',PASSWORD_PELANGGAN='".md5($password)."' WHERE ID_PELANGGAN='$id'");

    if($result){
        echo "<script>  
        alert('Berhasil Update Data :)');  
        window.location = 'index.php?halaman=home';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Update Data :(');  
        window.location = 'edituser.php';  
        </script>";
    }
}
?>