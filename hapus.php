<?php  
include 'functions.php';

$id = $_GET["id"];

$sql = "DELETE FROM tbl_181 WHERE id=$id";
$hasil = mysqli_query($con,$sql);
if( $hasil ) {
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'index.php';
		</script>";
}else {
	echo "<script>
			alert('data gagal dihapus');
			document.location.href = 'index.php';
		</script>";
}
?>