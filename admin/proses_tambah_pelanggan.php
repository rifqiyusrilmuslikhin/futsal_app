<?php 
require '../koneksi/koneksi.php';
if(isset($_POST['submit'])){
    $kode = stripslashes($_POST['id']);
    $kode = mysqli_real_escape_string($kon, $kode);

    $nama = stripslashes($_POST['nama']);
    $nama = mysqli_real_escape_string($kon, $nama);

    $alamat = stripslashes($_POST['alamat']);
    $alamat = mysqli_real_escape_string($kon, $alamat);

    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($kon, $email);

    $notelp = stripslashes($_POST['notelp']);
    $notelp = mysqli_real_escape_string($kon, $notelp);

    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($kon, $username);
    
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($kon, $password);

    $query = "INSERT INTO pelanggan (ID_PELANGGAN, NAMA_PELANGGAN, ALAMAT_PELANGGAN, EMAIL_PELANGGAN, TELP_PELANGGAN, USERNAME_PELANGGAN, PASSWORD_PELANGGAN) VALUES ('$kode', '$nama', '$alamat', '$email','$notelp', '$username', '".md5($password)."')";
    $result = mysqli_query($kon, $query);
    if($result){
        echo "<script>  
        alert('Berhasil Menambahkan Data :)');  
        window.location = 'index.php?halaman=pelanggan';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Menambahkan Data :(');  
        window.location = 'index.php?halaman=tambahpelanggan';  
        </script>";
    }
}
?>
