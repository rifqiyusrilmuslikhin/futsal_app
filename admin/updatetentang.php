<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['updatetentang']))
{   

	$id = $_POST['about'];
	$tentang = $_POST['tentang'];

    $result = mysqli_query($kon, "UPDATE about SET ID_ABOUT='$id', TENTANG='$tentang' WHERE ID_ABOUT='$id'");

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