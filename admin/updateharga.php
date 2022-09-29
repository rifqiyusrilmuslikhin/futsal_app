<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['update']))
{   

	$id = $_POST['id'];
	$harga = $_POST['harga'];

    $result = mysqli_query($kon, "UPDATE harga SET ID_HARGA='$id', HARGA='$harga' WHERE ID_HARGA='$id'");

    if($result){
        echo "<script>  
        alert('Berhasil Update Data :)');  
        window.location = 'index.php?halaman=lapangan';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Update Data :(');  
        window.location = ''index.php?halaman=lapangan';  
        </script>";
    }
}
?>