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

		$sql_penyakit = mysqli_query(koneksi(), "SELECT * FROM penyakit");
		$variable = "";

		$dollar = "$";

		while ($data_penyakit = mysqli_fetch_array($sql_penyakit)) {
			$kode_penyakit = $data_penyakit['kode_penyakit'];

			if (isset($_POST[$kode_penyakit])){
				if ($_POST[$kode_penyakit] == 'on') {
					${"value_".$kode_penyakit} = 1;
				} else {
					${"value_".$kode_penyakit} = 0;
				}
			} else {
				${"value_".$kode_penyakit} = 0;
			}
			$variable = $variable . "'" . ${"value_".$kode_penyakit} . "',";

		}

		$variable_jadi =  substr($variable, 0, -1);		

		$sql = "INSERT INTO gejala VALUES ('$kode_gejala','$nama_gejala','$cf_pakar',$variable_jadi)";

		$sql_insert = mysqli_query(koneksi(), $sql);

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

	    $sql_penyakit = mysqli_query(koneksi(), "SELECT * FROM penyakit");
		$variable = "";

		$dollar = "$";

		while ($data_penyakit = mysqli_fetch_array($sql_penyakit)) {
			$kode_penyakit = $data_penyakit['kode_penyakit'];

			if (isset($_POST[$kode_penyakit])){
				if ($_POST[$kode_penyakit] == 'on') {
					${"value_".$kode_penyakit} = 1;
				} else {
					${"value_".$kode_penyakit} = 0;
				}
			} else {
				${"value_".$kode_penyakit} = 0;
			}
			$variable = $variable . "$kode_penyakit='" . ${"value_".$kode_penyakit} . "',";

		}

		$variable_jadi =  substr($variable, 0, -1);		

		echo $sql = "UPDATE gejala SET id_gejala='$kode_gejala_edit',nama_gejala='$nama_gejala_edit',cf_pakar='$cf_pakar_edit', $variable_jadi WHERE id_gejala = '$kode_gejala'";

	    // if (isset($_POST['grd'])) {
	    // 	if ($_POST['grd'] == "on") {
		   //  	$grd = 1;
		   //  }	    	
	    // } else {
	    // 	$grd = 0;
	    // }

	    // if (isset($_POST['gtt'])) {
	    // 	if ($_POST['gtt'] == "on") {
		   //  	$gtt = 1;
		   //  }	    	
	    // } else {
	    // 	$gtt = 0;
	    // }

	    // if (isset($_POST['dsp'])) {
	    // 	if ($_POST['dsp'] == "on") {
		   //  	$dsp = 1;
		   //  }	    	
	    // } else {
	    // 	$dsp = 0;
	    // }

	    // if (isset($_POST['gtp'])) {
	    // 	if ($_POST['gtp'] == "on") {
		   //  	$gtp = 1;
		   //  }	    	
	    // } else {
	    // 	$gtp = 0;
	    // }

	    

	    $sql_update =  mysqli_query(koneksi(), $sql);
		if ($sql_update) {
			echo "<script>alert('Success');location.href='tabel_relasi.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='tabel_relasi.php';</script>";
		}
	}

	function tambahPenyakit() {
		$nama_penyakit = $_POST['Penyakitname'];
		$kode_penyakit = $_POST['kode_penyakit'];
		$sql_insert_penyakit = mysqli_query(koneksi(), "INSERT INTO penyakit VALUES ('','$kode_penyakit','$nama_penyakit')");
		$sql_insert_tabel_gejala = mysqli_query(koneksi(), "ALTER TABLE gejala ADD $kode_penyakit tinyint(1) DEFAULT 0 NOT NULL");

		if ($sql_insert_penyakit & $sql_insert_tabel_gejala) {
			echo "<script>alert('Success');location.href='tabel_penyakit.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='tabel_penyakit.php';</script>";
			// echo "Gagal : " . mysqli_error($konek);
		}
	}

	function hapusPenyakit(){
		$kode_penyakit = $_POST['kode_penyakit'];
		$sql_hapus_penyakit = mysqli_query(koneksi(), "DELETE FROM penyakit WHERE kode_penyakit = '$kode_penyakit'");
		$sql_hapus_tabel_gejala = mysqli_query(koneksi(), "ALTER TABLE gejala DROP COLUMN $kode_penyakit");

		if ($sql_hapus_tabel_gejala) {
			echo "<script>alert('Success');location.href='tabel_penyakit.php';</script>";
		} else {
			echo "<script>alert('Gagal');location.href='tabel_penyakit.php';</script>";
		}
	}

?>