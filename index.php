<?php  
include "functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<table class="table table-striped">
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		$sql = "SELECT * FROM tbl_181";
		$hasil = mysqli_query($con, $sql);
		$no = 1;
		while($row = mysqli_fetch_array($hasil)){
		?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $row['id']; ?></td>
			<td><?= $row['nama']; ?></td>
			<td><?= $row['alamat']; ?></td>
			<td>
				<a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Edit</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data <?= $row['nama'] ?>?')">Hapus</a>
			</td>
		</tr>
		<?php  
		$no++;
		}
		?>
	</table>
	<a href="insert.php" class="btn btn-success">Tambah Data</a>
</body>
</html>