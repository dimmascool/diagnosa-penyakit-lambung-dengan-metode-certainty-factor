<html>
<head>
	<title>halaman pendaftaran online</title>	
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	
		<div class="text-center">
			<p class="h1">Silahkan Daftar</p>
			<p class="h5">Harap isi semua data dengan sesuai dan benar</p>
		</div>
		
		<div class="text-center">
			<form action="" method="post">

			<div class="input-group input-group-default mb-3">
			  <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
			  <input type="text" class="form-control" name="nama" placeholder="Silahkan isikan username anda" required>
			</div>
			<div class="input-group input-group-default mb-3">
			  <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
			  <input type="password" class="form-control" name="pass" placeholder="Silahkan isikan password anda" required>
			</div>
			<div class="input-group input-group-default mb-3">
			  <span class="input-group-text" id="inputGroup-sizing-default">No. Telepon</span>
			  <input type="text" class="form-control" name="telp" placeholder="Silahkan isikan no. telepon anda" required>
			</div>
			<div class="input-group input-group-default mb-3">
			  <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
			  <input type="text" class="form-control" name="alamat" placeholder="Silahkan isikan alamat anda" required>
			</div>
				
			<input type="submit" name="tombol" value="Daftar" class="btn btn-sm btn-primary"/>
			<input type="reset" value="Reset" class="btn btn-sm btn-danger"/>
			</td>
				
				<br><br>
				Punya akun ? Silahkan <a href="login.php">login</a><br>
			</form>
			<?php
				if(isset($_POST['tombol'])){
					include 'koneksi.php';
					if(!is_numeric($_POST['telp'])){
						echo 'Telepon harus angka';
					}else{
						$daftar = mysqli_query($koneksi, "INSERT INTO tableuser VALUES (
							NULL,
							'".ucwords($_POST['nama'])."',
							'".$_POST['pass']."',
							'".$_POST['telp']."',
							'".$_POST['alamat']."')");
						if($daftar){
							echo "<script>alert('Selamat, registrasi berhasil!')</script>";
						}else{
							echo 'gagal daftar';
						}
					}
				}
			?>

		</div>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>