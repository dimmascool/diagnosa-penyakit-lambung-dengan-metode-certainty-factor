<?php 

session_start();


require '../functions/function.php';
require 'function.php';

if ($_SESSION['privilege'] != 'Administrator') {
	session_destroy();
	echo "<script>alert('this user is not an Administrator');location.href='../login.php'</script>";
}

$kode_gejala = $_GET['kode_gejala'];
$sql_gejala = mysqli_query(koneksi(), "SELECT * FROM gejala WHERE id_gejala = '$kode_gejala'");
$sql_penyakit = mysqli_query(koneksi(), "SELECT * FROM penyakit");
$array_kode_gejala = array();

while ($data_penyakit = mysqli_fetch_array($sql_penyakit)) {
    $kode_penyakit = $data_penyakit['kode_penyakit'];
    $array_kode_gejala = array_merge($array_kode_gejala, array(
            array(
                'gejala' => $kode_penyakit,
                'nama_gejala' => $data_penyakit['nama_penyakit']
            )
        )
    );    
}


if (isset($_POST['submit_edit'])) {
    // var_dump($_POST);
    editGejala();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perhitungan</title>

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
                    <div class="container-fluid">
                    <div class="container">
                        <h3>Edit Gejala</h3>
                        <hr>
                        <form class="row g-3" method="post" action="">
                            <?php while ($data = mysqli_fetch_array($sql_gejala)) : ?>                         
                               <div class="col-md-2">
                                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                                    <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" value="<?= $kode_gejala ?>" required>
                                    <input type="hidden" class="form-control" id="kode_gejala_lama" name="kode_gejala_lama" value="<?= $kode_gejala ?>" required>
                                </div>
                                <div class="col-md-7">
                                    <label for="nama_gejala" class="form-label">Nama Gejala</label>
                                    <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" value="<?= $data['nama_gejala'] ?>" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="cf_pakar" class="form-label">CF Pakar</label>
                                    <input type="text" class="form-control" id="cf_pakar" name="cf_pakar" value="<?= $data['cf_pakar'] ?>" required>
                                    <br>
                                </div>
                                <?php for ($looping_gejala=0; $looping_gejala < count($array_kode_gejala) ; $looping_gejala++) : ?>
                                    <?php 
                                        $kode_gejala = $array_kode_gejala[$looping_gejala]['gejala']; 
                                        $nama_gejala = $array_kode_gejala[$looping_gejala]['nama_gejala']; 
                                    ?>  
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="<?= $kode_gejala ?>" name="<?= $kode_gejala ?>" <?php if ($data[$kode_gejala]) {echo "checked";} ?>>
                                            <label class="custom-control-label" for="<?= $kode_gejala ?>"><?= $nama_gejala ?></label>
                                        </div>
                                    </div>  
                                <?php endfor ?>                                                                                                  
                                <div class="col-md-12">
                                    <br>
                                    <input class="btn btn-primary" type="submit" name="submit_edit" value="Submit"  required>
                                </div>
                            <?php endwhile ?>
                        </form>
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