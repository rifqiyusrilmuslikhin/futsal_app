<?php 
require 'koneksi/koneksi.php';
if(isset($_POST['booking'])){
    $idharga = stripslashes($_POST['idharga']);
    $idharga = mysqli_real_escape_string($kon, $idharga);

    $idlapangan = stripslashes($_POST['idlapangan']);
    $idlapangan = mysqli_real_escape_string($kon, $idlapangan);

    $idjadwal = stripslashes($_POST['idjadwal']);
    $idjadwal = mysqli_real_escape_string($kon, $idjadwal);

    $idpelanggan = stripslashes($_POST['idpelanggan']);
    $idpelanggan = mysqli_real_escape_string($kon, $idpelanggan);

    $tanggal = stripslashes($_POST['tanggal']);
    $tanggal = mysqli_real_escape_string($kon, $tanggal);

    $nama = stripslashes($_POST['nama']);
    $nama = mysqli_real_escape_string($kon, $nama);

    $alamat = stripslashes($_POST['alamat']);
    $alamat = mysqli_real_escape_string($kon, $alamat);

    $notelp = stripslashes($_POST['notelp']);
    $notelp = mysqli_real_escape_string($kon, $notelp);

    $sisa = stripslashes($_POST['harga']);
    $sisa = mysqli_real_escape_string($kon, $sisa);

    $query = "INSERT INTO booking (ID_BOOKING, ID_JADWAL, ID_LAPANGAN, ID_HARGA, ID_PELANGGAN, ID_ADMIN, NAMA_BOOKING, ALAMAT_BOOKING, TELP_BOOKING, DP, TANGGAL, SISA, KETERANGAN) VALUES ('','$idjadwal','$idlapangan','$idharga','$idpelanggan','0','$nama','$alamat','$notelp','0','$tanggal','$sisa','Tertunda')";

    $result = mysqli_query($kon, $query);
    if($result){
        echo "<script>  
        alert('Lapangan Berhasil Dibooking :)');  
        window.location = 'index.php?halaman=booking';  
        </script>";
    }else{
        echo "<script>  
        alert('Booking Gagal:(');  
        window.location = 'index.php?halaman=jadwal';  
        </script>";
    }
}
?>
