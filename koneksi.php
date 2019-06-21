<?php
$server = "localhost";
$user = "id9996632_kukuh";
$pass = "12345678";
$db = "id9996632_biodata";
$koneksi = mysqli_connect($server,$user,$pass,$db);
mysqli_set_charset($koneksi,'utf8');
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
}
?>
