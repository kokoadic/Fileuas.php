<?php
	include_once "koneksi.php";
	$data = json_decode(file_get_contents('php://input'), true);
	$nim_mhs=$data['nim_mhs'];
	$nama_mhs=$data['nama_mhs'];
	$tgl_lahir=$data['tgl_lahir'];
	$prodi=$data['prodi'];
	$alamat=$data['alamat'];
	$jenis_kelamin=$data['jenis_kelamin'];
	$agama=$data['agama'];
	$sql = "update biodata set nim_mhs='$nim_mhs', nama_mhs='$nama_mhs'
	, tgl_lahir='$tgl_lahir', prodi='$prodi', alamat='$alamat', jenis_kelamin='$jenis_kelamin',
	 agama='$agama' where nim_mhs='$nim_mhs'";
	
	
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
