<?php
	include_once "koneksi.php";
	$data = json_decode(file_get_contents('php://input'), true);
	$nim_mhs=$data['nim_mhs'];
	$sql = "delete from biodata where nim_mhs='$nim_mhs'";
	
	$info=array();
	$info['sql']=$sql;
	if (mysqli_query($koneksi, $sql)) {
		$info['success'] =1;
		$info['detail'] = 'success';
	} else {
		$info['success'] =0;
		$info['detail'] =mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
	echo json_encode($info);
?>