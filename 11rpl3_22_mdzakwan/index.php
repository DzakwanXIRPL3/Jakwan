<!DOCTYPE html>
<html>
<head>
	<title>DATA BARANG TOKO BANGUNAN BAROKAH</title>
</head>
<body>
 
	<h2>PER HARI INI</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>KodeBarang</th>
			<th>NamaBarang</th>
			<th>SatuanBarang</th>
			<th>StokBarang</th>
            <th>HargaBarang</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_barokah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['KodeBarang']; ?></td>
				<td><?php echo $d['NamaBarang']; ?></td>
				<td><?php echo $d['SatuanBarang']; ?></td>
                <td><?php echo $d['StockBarang']; ?></td>
                <td><?php echo $d['HargaBarang']; ?></td>
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