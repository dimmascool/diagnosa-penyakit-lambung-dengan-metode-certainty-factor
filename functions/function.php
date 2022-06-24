<?php 

	function koneksi() {
		$host		= 'localhost';
		$username 	= 'root';
		$password 	= '';
		$db 		= 'cf';

		$koneksi = mysqli_connect($host, $username, $password, $db);
		return $koneksi;
	}


	function login($userr, $pass) {
		$username_user	= $userr;
		$password_user 	= $pass;

		$check_username = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username_user' AND password = '$password_user'");
		$data_user = mysqli_fetch_array($check_username);
		if (mysqli_num_rows($check_username) > 0) {
			session_start();
			$_SESSION['id_user']	= $data_user['id_user'];
			$_SESSION['username'] 	= $userr;
			$_SESSION['privilege'] 	= 'Regular User';
			echo "<script>alert('Success');location.href='index.php'</script>";
		} else {
			echo "<script>alert('Username atau Password Salah');location.href='login.php'</script>";
		}
	}

	function register($userrr, $passs) {
		$username_user_regis	= $userrr;
		$password_user_regis 	= $passs;
		$create_on = date("Y-m-d");

		$sql_insert = mysqli_query(koneksi(), "INSERT INTO user VALUES ('','$username_user_regis','$password_user_regis', '$create_on')");
		if ($sql_insert) {
			echo "<script>alert('Success');location.href='login.php'</script>";
		} else {
			echo "<script>alert('Gagal mendaftarkan user baru');location.href='register.php'</script>";
		}
	}


	function saveData() {
		$status = $_POST['status'];
		$nilai_persentase = $_POST['nilai_persentase'];
		$id_user = $_SESSION['id_user'];
		$create_on = date("Y-m-d");

		$sql_insert_nilai = mysqli_query(koneksi(), "INSERT INTO data_cf VALUES ('','$id_user','$status','$nilai_persentase', '$create_on')");
		if ($sql_insert_nilai) {
			echo "<script>alert('Success');location.href='profil.php'</script>";
		} 
	}

	function loginAdmin() {
		$username_admin		= $_POST['username'];
		$password_admin 	= $_POST['password'];

		$check_username = mysqli_query(koneksi(), "SELECT * FROM admin WHERE username = '$username_admin' AND password = '$password_admin'");
		$check_username = mysqli_query(koneksi(), "SELECT * FROM admin WHERE username = '$username_admin' AND password = '$password_admin'");
		if (mysqli_num_rows($check_username) > 0) {
			session_start();
			$_SESSION['id_user']	= $data_user['id_user'];
			$_SESSION['username'] = $username_admin;
			$_SESSION['privilege'] = 'Administrator';
			echo "<script>alert('Success');location.href='admin/index.php'</script>";
		} else {
			echo "<script>alert('Username atau Password Salah');location.href='login_admin.php'</script>";
		}
	}


?>