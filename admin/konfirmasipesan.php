<?php
include_once("../koneksi/koneksi.php");

if(isset($_GET['ID_BOOKING']))
{   

	$id = $_GET['ID_BOOKING'];

    $result = mysqli_query($kon, "UPDATE booking SET KETERANGAN='Belum Lunas' WHERE ID_BOOKING='$id'");

    if($result){
        echo "<script>  
        alert('Konfirmasi Berhasil :)');  
        window.location = 'index.php?halaman=pesanbaru';  
        </script>";
    }else{
        echo "<script>  
        alert('Konfirmasi Gagal :(');  
        window.location = ''index.php?halaman=pesanbaru';  
        </script>";
    }
}
?>
