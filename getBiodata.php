<?php 
	header("Content-type: application/json; charset=ISO-8859-1");
	include_once "koneksi.php";
	$sql = "select * from biodata";
	$query = mysqli_query($koneksi, $sql);
	$arrBio = array();
	while ($row = mysqli_fetch_array($query)){
		$arrBio[] = $row;
	}
	echo json_encode($arrBio );
	mysqli_close($koneksi);
 ?>