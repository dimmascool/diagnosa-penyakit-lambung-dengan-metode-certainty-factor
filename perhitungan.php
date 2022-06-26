<?php
    session_start();
    require 'functions/function.php';
    $sql_gejala = mysqli_query(koneksi(), "SELECT * FROM gejala");
    $nomor = 0;
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
    <link href="vendor/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        
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
                        <h1 class="h3 mb-0 text-gray-800">Formulir pengisian gejala-gejala passien</h1>
                         <p class="p mb-0 text-gray-800">Silahkan isi gejala sesuai yang anda rasakan supaya program berjalan lancar</p>
                    </div>

                    <form action="hasil.php" method="post">
                        <table class="table table-bordered">        
                            <thead class="table-primary">
                                <tr>
                                    <th class="text-center">Gejala</th>
                                    <th>Seberapa yakin</th>
                                    <th>Kode Gejala</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($gejala_gejala = mysqli_fetch_array($sql_gejala)) : ?>
                                    <tr>
                                        <td>
                                            <label class="form-check-label" for="<?= $gejala_gejala['id_gejala'] ?>">
                                                <?= $gejala_gejala['nama_gejala'] ?>
                                            </label>
                                            <input type="hidden" name="kode_gejala_<?= $nomor ?>" value="<?= $gejala_gejala['id_gejala'] ?>">
                                        </td>
                                        <td>
                                            <select class="form-control" name="<?= $gejala_gejala['id_gejala'] ?>">
                                                <option value="" selected>pilih</option>
                                                <option value="-1">Pasti Tidak</option>
                                                <option value="-0.8">Hampir Pasti Tidak</option>
                                                <option value="-0.6">Kemungkinan Besar Tidak</option>
                                                <option value="-0.4">Mungkin Tidak</option>
                                                <option value="0">Tidak </option>
                                                <option value="0.4">Mungkin</option>
                                                <option value="0.6">Kemungkinan Besar</option>
                                                <option value="0.8">Hampir Pasti</option>
                                                <option value="1">Pasti</option>
                                            </select>
                                        </td>
                                        <td><?= $gejala_gejala['id_gejala'] ?></td>
                                    </tr>
                                <?php $nomor++; endwhile ?>                                 
                            </tbody>
                        </table>
                        <input class="btn btn-outline-primary" style="float: right;" type="submit">
                        <a href="" class="btn btn-outline-success mr-2" style="float: right;" onclick="location.refresh()">Reset</a>
                    </form>                     
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
    <script src="vendor/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/sb-admin-2/js/sb-admin-2.min.js"></script>
</body>
</html>