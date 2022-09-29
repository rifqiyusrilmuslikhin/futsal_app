<?php
require ('../../koneksi/koneksi.php');

if( isset($_GET['ID_ADMIN']) ){
 
 $id = $_GET['ID_ADMIN'];

// Delete user row from table based on given id
$result = mysqli_query($kon, "DELETE FROM admin WHERE ID_ADMIN='$id'");


 if( $result){
 header('Location: ../index.php?halaman=admin');
 } else {
 die("Maaf Data Gagal di hapus <a href=index.php>Kembali</a>");
 }
}
 else {
 die("Maaf Anda dilarang mengakses secara langsung halaman ini");
}
?>