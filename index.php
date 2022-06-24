<?php 
	session_start();

	if (isset($_SESSION['username'])) {
		echo "<script>location.href='perhitungan.php'</script>";
	} else {
		echo "<script>location.href='login.php'</script>";
	}

?>