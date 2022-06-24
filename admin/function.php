<?php 


	function tambahAdmin() {
		$username	= $_POST['username'];
		$password	= $_POST['password'];

		$sql_insert = mysqli_query(koneksi(), "INSERT INTO admin VALUES ('','$username','$password')");
		if ($sql_insert) {
			echo "<script>alert('Success');location.href='admin.php';</script>";
		} else {
			echo "<script>alert('Gagal mendaftarkan admin baru');location.href='admin.php';</script>";
		}
	}

	function hapusAdmin($idAdmin){
		$sql_delete = mysqli_query(koneksi(), "DELETE FROM admin WHERE admin_id = '$idAdmin'");
		if ($sql_delete) {
			echo "<script>alert('Success');location.href='admin.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='admin.php';</script>";
		}
	}

	function tambahUser($userrr, $passs) {
		$username_user_regis	= $userrr;
		$password_user_regis 	= $passs;
		$create_on = date("Y-m-d");

		$sql_insert = mysqli_query(koneksi(), "INSERT INTO user VALUES ('','$username_user_regis','$password_user_regis', '$create_on')");
		if ($sql_insert) {
			echo "<script>alert('Success');location.href='user.php'</script>";
		} else {
			echo "<script>alert('Gagal mendaftarkan user baru');location.href='user.php'</script>";
		}
	}

	function hapusUser($idUser){
		$sql_delete = mysqli_query(koneksi(), "DELETE FROM user WHERE id_user = '$idUser'");
		if ($sql_delete) {
			echo "<script>alert('Success');location.href='user.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='user.php';</script>";
		}
	}

	function tambahGejala() {
		$kode_gejala = $_POST['KodeGejala'];
		$nama_gejala = $_POST['namaGejala'];
		$cf_pakar = $_POST['cf_pakar'];
		$grd = 0;
		$gtt = 0;
		$dsp = 0;
		$gtp = 0;
		
		if (isset($_POST['grd'])){
			if ($_POST['grd'] == 'on'){
				$grd = 1;
			}
		}
		if (isset($_POST['gtt'])){
			if ($_POST['gtt'] == 'on'){
				$gtt = 1;
			}
		}
		if (isset($_POST['dsp'])){
			if ($_POST['dsp'] == 'on'){
				$dsp = 1;
			}
		}
		if (isset($_POST['gtp'])){
			if ($_POST['gtp'] == 'on'){
				$gtp = 1;
			}
		}

		$sql_insert = mysqli_query(koneksi(), "INSERT INTO gejala VALUES ('$kode_gejala','$nama_gejala', '$cf_pakar','$grd','$gtt','$dsp','$gtp')");

		if ($sql_insert) {
			echo "<script>alert('Success');location.href='tabel_relasi.php'</script>";
		} else {
			echo "<script>alert('Gagal');location.href='tabel_relasi.php'</script>";
		}
	}

	function hapusGejala($kode_gejala) {
		$sql_delete = mysqli_query(koneksi(), "DELETE FROM gejala WHERE id_gejala = '$kode_gejala'");
		if ($sql_delete) {
			echo "<script>alert('Success');location.href='tabel_relasi.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='tabel_relasi.php';</script>";
		}
	}

	function editGejala() {
		$kode_gejala = $_POST['kode_gejala_lama'];
		$kode_gejala_edit = $_POST['kode_gejala'];
	    $nama_gejala_edit = $_POST['nama_gejala'];
	    $cf_pakar_edit = $_POST['cf_pakar'];

	    if (isset($_POST['grd'])) {
	    	if ($_POST['grd'] == "on") {
		    	$grd = 1;
		    }	    	
	    } else {
	    	$grd = 0;
	    }

	    if (isset($_POST['gtt'])) {
	    	if ($_POST['gtt'] == "on") {
		    	$gtt = 1;
		    }	    	
	    } else {
	    	$gtt = 0;
	    }

	    if (isset($_POST['dsp'])) {
	    	if ($_POST['dsp'] == "on") {
		    	$dsp = 1;
		    }	    	
	    } else {
	    	$dsp = 0;
	    }

	    if (isset($_POST['gtp'])) {
	    	if ($_POST['gtp'] == "on") {
		    	$gtp = 1;
		    }	    	
	    } else {
	    	$gtp = 0;
	    }

	    

	    $sql_update =  mysqli_query(koneksi(), "UPDATE `gejala` SET `id_gejala`='$kode_gejala_edit',`nama_gejala`='$nama_gejala_edit',`cf_pakar`='$cf_pakar_edit',`grd`='$grd',`gtt`='$gtt',`dsp`='$dsp',`gtp`='$gtp' WHERE id_gejala = '$kode_gejala'");
		if ($sql_update) {
			echo "<script>alert('Success');location.href='tabel_relasi.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='tabel_relasi.php';</script>";
		}
	}

?>