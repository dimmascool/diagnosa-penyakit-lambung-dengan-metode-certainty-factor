<?php 
    session_start();
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <?php require 'template/header.php';?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Formulir pengisian gejala-gejala passien</h1>
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
                                <tr>
                                    <td>                        
                                        <label class="form-check-label" for="G01">
                                            Rasa terbakar di tengah dada
                                        </label>                            
                                    </td>
                                    <td>
                                        <select class="form-control" name="G01">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G01</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G02">
                                            Mulas
                                        </label>                            
                                    </td>
                                    <td>
                                        <select class="form-control" name="G02">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G02</td>
                                </tr>
                                <tr>
                                    <td>                            
                                        <label class="form-check-label" for="G03">
                                            Bau Mulut
                                        </label>                            
                                    </td>
                                    <td>
                                        <select class="form-control" name="G03">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G03</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G04">
                                            Mual
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G04">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G04</td>
                                </tr>
                                <tr>
                                    <td>                            
                                        <label class="form-check-label" for="G05">
                                            Nyeri didada
                                        </label>                            
                                    </td>   
                                    <td>
                                        <select class="form-control" name="G05">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>                   
                                    <td>G05</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G06">
                                            Sulit menelan
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G06">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G06</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G07">
                                            Kembung
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G07">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G07</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G08">
                                            Nafsu makan berkurang
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G08">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G08</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G09">
                                            Muntah
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G09">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G09</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G10">
                                            Lebih cepat kenyang
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G10">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G010</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G11">
                                            Perut keram
                                        </label>
                                    </td>   
                                    <td>
                                        <select class="form-control" name="G11">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>                                           
                                    <td>G011</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G12">
                                            Muntah setelah makan
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G12">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G012</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G13">
                                            Merasa kenyang
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G13">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G013</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G14">
                                            Penurunan berat badan
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G14">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G014</td>
                                </tr>   
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G15">
                                            Riwayat diabetes
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G15">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G015</td>
                                </tr>   
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G16">
                                            Nyeri di ulu hati
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G16">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G016</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G17">
                                            Mudah kenyang
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G17">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G017</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G18">
                                            Rasa tidak nyaman di perut
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G18">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label" for="G19">
                                            Perut terasa panas
                                        </label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="G19">
                                            <option value="" selected>pilih</option>
                                            <option value="-1">Pasti Tidak</option>
                                            <option value="-0.8">Hampir Pasti Tidak</option>
                                            <option value="-0.6">Kemungkinan Besar Tidak</option>
                                            <option value="-0.4">Mungkin Tidak</option>
                                            <option value="0.1">Tidak </option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>
                                    <td>G019</td>
                                </tr>
                            </tbody>
                        </table>
                        <input class="btn btn-outline-primary" style="float: right;" type="submit" name="submit">
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin-2/js/sb-admin-2.min.js"></script>

    

</body>

</html>