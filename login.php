<html>
<head>
	<title>Halaman Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<div class="container">		
		<div class="text-center">
			<p class="h1">Silahkan Login</p>
			<p class="h5">Jika Anda Seorang Admin</p>
			<br>
	<div class="text-center">
		<form action="" method="post">
			<div class="input-group input-group-default mb-3">
			  <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
			  <input type="text" class="form-control" name="nama" placeholder="Silahkan isikan nama anda" required>
			</div>
			<div class="input-group input-group-default mb-3">
			  <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
			  <input type="password" class="form-control" name="pass" placeholder="Silahkan isikan nama anda" required>
			</div>
			<br>
			<input type="submit" name="login" value="Login" class="btn btn-sm btn-primary"/>
			<input type="reset" value="Reset" class="btn btn-sm btn-danger"/>
			<br><br>
			Belum punya akun ? Silahkan <a href="daftar.php">daftar</a>
		</form>
			<?php
				if(isset($_POST['login'])){
					include 'koneksi.php';
					$cek = mysqli_query($koneksi, "SELECT * FROM tableuser Where nama = '".$_POST['nama']."' AND
						password = '".$_POST['pass']."'");
					$row = mysqli_fetch_array($cek);
					$count = mysqli_num_rows($cek);
					if($count > 0){
						session_start();
						$_SESSION['nama'] = $row['nama'];
						header ('location:covid.php');
					}else{
						echo 'gagal login';
					}
				}
			?>
		<br><br>

		</div>	
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>