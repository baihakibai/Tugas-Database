<?php  

include 'functions.php';
if (isset($_POST["submit"])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO `tbl_181` (`id`, `nama`, `alamat`) VALUES ('', '$nama', '$alamat')";
	$result = mysqli_query($con, $query);
	if (!$result) {
		echo "<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>";
	}else{
		echo "<script>
				alert('Data Berhasil Ditambahkan');
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
	<title>Tambah Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
	<h3>Tambah Data</h3>
	<form action="" method="POST">
    <div class="mb-3 mt-3">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama">
    </div>
    <div class="mb-3">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
  </form>
</body>
</html>