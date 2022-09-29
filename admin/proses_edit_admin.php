<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['update']))
{   

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$notelp = $_POST['telepon'];
	$username = $_POST['username'];
	$password = $_POST['password'];

    $result = mysqli_query($kon, "UPDATE admin SET ID_ADMIN='$id',USERNAME_ADMIN='$username',PASSWORD_ADMIN='".md5($password)."', NAMA_ADMIN='$nama',EMAIL_ADMIN='$email',TELP_ADMIN='$notelp' WHERE ID_ADMIN='$id'");

    if($result){
        echo "<script>  
        alert('Berhasil Update Data :)');  
        window.location = 'index.php?halaman=admin';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Update Data :(');  
        window.location = 'index.php?halaman=editadmin';  
        </script>";
    }
}
?>