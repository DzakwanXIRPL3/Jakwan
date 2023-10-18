<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$satuan = $_POST['satuan'];
$stokbarang = $_POST['stokbarang'];
$hargabarang = $_POST['hargabarang'];
 
// update data ke database
mysqli_query($koneksi,"update tb_barokah set kodebarang='$kodebarang', namabarang='$namabarang', satuan='$satuan',stokbarang='$stokbarang',hargabarang='$hargabarang' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>