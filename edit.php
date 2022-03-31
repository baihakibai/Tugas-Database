<?php  
include 'functions.php';
if (isset($_POST["submit"])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE tbl_181 SET nama = '$nama', alamat = '$alamat' WHERE id = '$id'";
	$hasil = mysqli_query($con, $sql);
	if (!$hasil) {
		echo "eksekusi tambah data gagal";
	}else{
		echo "<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php  
	include 'functions.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM tbl_181 WHERE id=$id";
	$result = mysqli_query($con, $query);
	if (!$result) {
		echo "query salah";
	}
	while ($row = mysqli_fetch_array($result)) {
	?>

	<h3>Ubah Data</h3>
	<form action="" method="POST">
		<div class="mb-3 mt-3">
     	<input type="hidden" class="form-control" id="id" name="id" value="<?= $row['id']; ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="nama">Nama:</label>
     	<input type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama" value="<?= $row['nama']; ?>">
    </div>
    <div class="mb-3">
      <label for="alamat">Alamat:</label>
    	<input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat" value="<?= $row['alamat']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Simpan Perubahan</button>
  <?php } ?>
</body>
</html>