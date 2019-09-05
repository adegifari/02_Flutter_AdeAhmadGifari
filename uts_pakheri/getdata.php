<?php 
	include "conn.php";
	$data = $conn->query("SELECT * FROM tb_siswa");
	
	$hasil = array();
	while ($a = $data->fetch_assoc()) {
		$hasil[] = $a;
	}
	echo json_encode($hasil);
 ?>