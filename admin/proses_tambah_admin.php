<?php 
require '../koneksi/koneksi.php';
if(isset($_POST['submit'])){
    $kode = stripslashes($_POST['id']);
    $kode = mysqli_real_escape_string($kon, $kode);

    $nama = stripslashes($_POST['nama']);
    $nama = mysqli_real_escape_string($kon, $nama);

    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($kon, $email);

    $notelp = stripslashes($_POST['notelp']);
    $notelp = mysqli_real_escape_string($kon, $notelp);

    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($kon, $username);
    
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($kon, $password);

    $query = "INSERT INTO admin (ID_ADMIN, USERNAME_ADMIN, PASSWORD_ADMIN, NAMA_ADMIN,  EMAIL_ADMIN, TELP_ADMIN) VALUES ('$kode', '$username', '".md5($password)."', '$nama', '$email','$notelp')";
    $result = mysqli_query($kon, $query);
    if($result){
        echo "<script>  
        alert('Berhasil Menambahkan Data :)');  
        window.location = 'index.php?halaman=admin';  
        </script>";
    }else{
        echo "<script>  
        alert('Gagal Menambahkan Data :(');  
        window.location = 'index.php?halaman=tambahadmin';  
        </script>";
    }
}
?>
