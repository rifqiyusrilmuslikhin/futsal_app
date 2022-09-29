<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['updatekontak']))
{   

	$id = $_POST['idkontak'];
	$hub = $_POST['hub'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $fb = $_POST['fb'];
    $tw = $_POST['tw'];
    $ig = $_POST['ig'];
    $map = $_POST['map'];

    $result = mysqli_query($kon, "UPDATE kontak SET ID_KONTAK='$id', ISI_KONTAK='$hub', ALAMAT='$alamat', EMAIL_KONTAK='$email', TELP_KONTAK='$telepon', FB='$fb', TW='$tw', IG='$ig', MAP='$map' WHERE ID_KONTAK='$id'");

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