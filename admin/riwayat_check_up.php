<?php 

session_start();
if ($_SESSION['privilege'] != 'Administrator') {
	session_destroy();
	echo "<script>alert('this user is not an Administrator');location.href='../login.php'</script>";
}

    if (isset($_POST['delete_penyakit'])) {
        hapusPenyakit();
    }

require '../functions/function.php';
$sql_data_cf = mysqli_query(koneksi(), "SELECT * FROM data_cf");
$no = 1;


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Riwayat User </title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../vendor/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    	<?php require 'template/sidebar.php';?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require 'template/header.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                	

                    <!-- Page Heading -->
                    <div class="align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Riwayat Pasien</h1>
                    </div>
                    <div class="card">
                        <div class="card-header bg-light">
                            Tabel Riwayat Pemeriksaan
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">        
                                <thead class="table-primary">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Pasien</th>
                                        <th>Status Penyakit</th>
                                        <th>Persentase Penyakit</th>
                                        <th>Tanggal Pemeriksaan Pasien</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($data = mysqli_fetch_array($sql_data_cf)) : ?>
                                    <?php $id_user = $data['id_user']; $sql_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE id_user = '$id_user'"); $data_user = mysqli_fetch_array($sql_user); ?>
                                    <tr>
                                        <td><?= $no ?></td>   
                                        <td><?= $data_user['username'] ?></td>                                     
                                        <td><?= $data['status']?></td>                                        
                                        <td><?= number_format((float)($data['nilai_persentase'] * 100), 2, '.', ''); echo "%" ?></td>                                 
                                        <td><?= $data['created_on']?></td> 
                                                        
                                    </tr>
                                    <?php $no++ ?>
                                <?php endwhile ?>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
            
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-3">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>This website using sb-admin-2 theme</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require 'template/modal_logout.php' ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../vendor/sb-admin-2/js/sb-admin-2.min.js"></script>

    

</body>

</html>