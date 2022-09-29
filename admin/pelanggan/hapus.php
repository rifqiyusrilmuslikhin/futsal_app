<?php
require ('../../koneksi/koneksi.php');

if( isset($_GET['ID_PELANGGAN']) ){
 
 $id = $_GET['ID_PELANGGAN'];

// Delete user row from table based on given id
$result = mysqli_query($kon, "DELETE FROM pelanggan WHERE ID_PELANGGAN='$id'");


 if( $result){
 header('Location: ../index.php?halaman=pelanggan');
 } else {
 die("Maaf Data Gagal di hapus <a href=index.php>Kembali</a>");
 }
}
 else {
 die("Maaf Anda dilarang mengakses secara langsung halaman ini");
}
?>