<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_surat";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat = $_POST['tempat'];
$p = $_POST['penyebab'];
$tgl = $_POST['tanggal'];

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "INSERT INTO tb_kematian (no, nik, nama, jk, tempat, tanggal, penyebab) VALUES ('1','$nik','$nama','$jk','$tempat','$tgl','$p')";

// if ($sql) {
// 	echo "<script>alert('succes saved')</script>";
// }else{
// 	echo "error : ".$sql.mysqli_error($conn);
// }

// $document = str_replace("#NAMA", $nama, $document);
// $document = str_replace("#JK", $jk, $document);
// $document = str_replace("#KTP", $nik, $document);
// $document = str_replace("#PENYEBAB", $p, $document);
// $document = str_replace("#TANGGAL", $tgl, $document);
// //header untuk membuka dokumen file output RTF dengan MS. Word
// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=cetak.doc");
// header("Content-length: ".strlen($document));
// echo $document;

$document = file_get_contents("cetak.rtf");
//isi dokument dinyatakan dalam bentuk string

$document = str_replace("#NAMA", $nama, $document);
$document = str_replace("#JK", $jk, $document);
$document = str_replace("#KTP", $nik, $document);
$document = str_replace("#PENYEBAB", $p, $document);
$document = str_replace("#TANGGAL", $tgl, $document);
//header untuk membuka dokumen file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=cetak.doc");
header("Content-length: ".strlen($document));
echo $document;

?> 


//$document = file_get_contents("cetak.rtf");
//isi dokument dinyatakan dalam bentuk string

// $document = str_replace("#NAMA", $nama, $document);
// $document = str_replace("#JK", $jk, $document);
// $document = str_replace("#KTP", $nik, $document);
// $document = str_replace("#PENYEBAB", $p, $document);
// $document = str_replace("#TANGGAL", $tgl, $document);
// //header untuk membuka dokumen file output RTF dengan MS. Word
// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=cetak.doc");
// header("Content-length: ".strlen($document));
// echo $document;


// $nokematian = $_POST['nama'];
// $nik = $_POST['nik'];
// $nama = $_POST['nama'];
// $jk = $_POST['jk'];
// $tempat = $_POST['tempat'];
// $tanggal = $_POST['tanggal'];
// $penyebab = $_POST['penyebab'];
// mysqli_query("insert into tb_kematian values('$nokematian','$nik','$nama','$jk','$tempat','$tanggal','$penyebab')");