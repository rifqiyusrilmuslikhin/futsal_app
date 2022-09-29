<?php
include_once("../koneksi/koneksi.php");

if(isset($_GET['ID_BOOKING']))
{   

	$id = $_GET['ID_BOOKING'];

    $result = mysqli_query($kon, "DELETE FROM booking  WHERE ID_BOOKING='$id'");

    if($result){
        echo "<script>  
        alert('Pesan Berhasil Dihapus :)');  
        window.location = 'index.php?halaman=pesanbaru';  
        </script>";
    }else{
        echo "<script>  
        alert('Pesan Gagal Dihapus :(');  
        window.location = ''index.php?halaman=pesanbaru';  
        </script>";
    }
}
?>