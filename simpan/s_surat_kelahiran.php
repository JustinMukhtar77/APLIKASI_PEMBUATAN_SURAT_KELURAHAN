<?php
	if (isset($_POST['submit'])) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_surat";
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("connection failed : ".mysqli_connect_error());
		}
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$ayah = $_POST['ayah'];
		$ibu = $_POST['ibu'];
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];
		$sql = mysqli_query($conn,"INSERT INTO tb_kelahiran VALUES('$nama','$jk','$ayah','$ibu','$tempat','$tanggal')");
		if ($sql) {
			echo "succes";
		}else{
			echo "failed";
		}
	}
?>