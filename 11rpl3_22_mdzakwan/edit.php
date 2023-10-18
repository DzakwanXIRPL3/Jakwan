<!DOCTYPE html>
<html>
<head>
	<title>Toko Barokah Jaya</title>
</head>
<body>
 
	<h2>DAFTAR NAMA BARANG</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_barokah where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Kode Barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kodebarang" value="<?php echo $d['kodebarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="namabarang" value="<?php echo $d['namabarang']; ?>"></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td><input type="text" name="satuan" value="<?php echo $d['satuan']; ?>"></td>
				</tr>
                <tr>
					<td>Stok Barang</td>
					<td><input type="text" name="stokbarang" value="<?php echo $d['stokbarang']; ?>"></td>
				</tr>
                <tr>
					<td>Harga Barang</td>
					<td><input type="text" name="hargabarang" value="<?php echo $d['hargabarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>