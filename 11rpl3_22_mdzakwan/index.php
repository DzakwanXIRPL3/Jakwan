<!DOCTYPE html>
<html>
<head>
	<title>Toko Barokah Jaya</title>
</head>
<body>
 
	<h2>DAFTAR NAMA BARANG</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Id Barang</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>

			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_barokah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodebarang']; ?></td>
				<td><?php echo $d['namabarang']; ?></td>
				<td><?php echo $d['satuan'];?></td>
                <td><?php echo $d['stokbarang']; ?></td>
				<td><?php echo $d['hargabarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>