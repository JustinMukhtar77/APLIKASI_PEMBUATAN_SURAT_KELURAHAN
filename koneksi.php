<?php
$conn = mysqli_connect("localhost","root","","db_surat");
if (mysqli_connect_errno()) {
	echo "connection failed : ".mysqli_connect_errno();
}