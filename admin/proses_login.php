<?php 
require '../koneksi/koneksi.php';
session_start();
if(isset($_POST['loginadmin'])){
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($kon, $username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_escape_string($kon, $password);
    $query =  "SELECT * FROM admin WHERE USERNAME_ADMIN='$username' and PASSWORD_ADMIN='".md5($password)."'";
    $result = mysqli_query($kon, $query);
    $rows = mysqli_num_rows($result);
    if($rows == 1){
        $_SESSION['loginadmin'] = $username;
        header("Location: index.php?halaman=dashboard");
    }else{
        echo "<script>  
        alert('Username atau Password Anda Salah :(');  
        window.location = 'login.php';  
        </script>";
    };
};
?>
