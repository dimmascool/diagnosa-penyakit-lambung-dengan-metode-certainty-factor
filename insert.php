<?php	
	include 'koneksi.php';
	$Nama = $_POST['Nama'];
	$Umur = $_POST['Umur'];
	$Hasil = $_POST['Status'];
	$sql = "INSERT INTO tablecovid VALUES ('','$Nama','$Umur','$Hasil')";
	$exec = mysqli_query($koneksi, $sql);
	if($exec){
		echo "<script>alert('Data berhasil di input');location.href='covid.php';</script>";
	}else{
		echo 'query gagal'. mysqli_error($koneksi); 
	}