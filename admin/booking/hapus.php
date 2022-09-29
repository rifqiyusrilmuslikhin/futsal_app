<?php
require ('../../koneksi/koneksi.php');

if( isset($_GET['ID_BOOKING']) ){
 
 $id = $_GET['ID_BOOKING'];

// Delete user row from table based on given id
$result = mysqli_query($kon, "DELETE FROM booking WHERE ID_BOOKING='$id'");


 if( $result){
 header('Location: ../index.php?halaman=booking');
 } else {
 die("Maaf Data Gagal di hapus <a href=index.php>Kembali</a>");
 }
}
 else {
 die("Maaf Anda dilarang mengakses secara langsung halaman ini");
}
?>