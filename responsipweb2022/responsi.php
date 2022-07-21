<?php
	echo "<head><link rel=stylesheet type=text/css href=responsi.css><title>Daftar Calon Anggota</head></title>";
	$fp = fopen("data.txt","a+");
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$alasan = $_POST['alasan'] ;
	fputs($fp,"$nama|$alamat|$email|$status|$alasan");
	fclose($fp);

	echo "<div>Terima Kasih Atas Partisipasi Anda Mengisi Formulir Pendaftaran</div><br>";
	echo "<h2 class=link><a href=responsi.html> Isi Formulir Pendaftaran </a></h2><br>";
	echo "<h2 class=link><a href=data.php> Lihat Data Calon Anggota </a></h2><br>";
?>