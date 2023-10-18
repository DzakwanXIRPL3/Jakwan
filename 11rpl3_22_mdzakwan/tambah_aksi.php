<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$satuan = $_POST['satuan'];
$stokbarang = $_POST['stokbarang'];
$hargabarang = $_POST['hargabarang'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_barokah values('','$kodebarang','$namaBbrang','$satuan','$stokbarang','$hargabarang')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>