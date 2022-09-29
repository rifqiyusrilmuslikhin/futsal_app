<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['update']))
{   

	$id = $_POST['id'];
	$bayar = $_POST['bayar'];
	$sisa = $_POST['harga'];

    if($sisa=='0'){
        $result = mysqli_query($kon, "UPDATE booking SET DP='$bayar', SISA='$sisa', KETERANGAN='Lunas' WHERE ID_BOOKING='$id'");
    }elseif($sisa!='0'){
        $result = mysqli_query($kon, "UPDATE booking SET DP='$bayar', SISA='$sisa', KETERANGAN='Belum Lunas' WHERE ID_BOOKING='$id'");
    }    


    if($result){
        echo "<script>  
        alert('Berhasil Update Data :)');  
        window.location = 'index.php?halaman=booking';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Update Data :(');  
        window.location = 'index.php?halaman=editbooking';  
        </script>";
    }
}
?>