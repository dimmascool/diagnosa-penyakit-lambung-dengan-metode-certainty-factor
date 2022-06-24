<?php 

session_start();

require '../functions/function.php';

$sql_gejala = mysqli_query(koneksi(), "SELECT * FROM gejala");

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabel Relasi</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Tabel Relasi</h1>
                    </div>


                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h5 class="m-0 font-weight-bold text-primary">Tabel Relasi<i></h5>
                            <div class="d-sm-inline-block">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalTambahGejala">
                                  Tambah Gejala
                                </button>
                            </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Kode Gejala</th> 
                                            <th class="text-center">Nama Gejala</th>
                                            <th class="text-center">CF Pakar</th>            
                                            <th class="text-center">GRD</th>    
                                            <th class="text-center">GTT</th>
                                            <th class="text-center">DSP</th>
                                            <th class="text-center">GTP</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while ($gejala_gejala = mysqli_fetch_array($sql_gejala)): ?>
                                            <tr>  
                                                <td><?= $gejala_gejala['id_gejala'] ?></td>
                                                <td><?= $gejala_gejala['nama_gejala'] ?></td>
                                                <td><?= $gejala_gejala['cf_pakar'] ?></td>
                                                <?php if ($gejala_gejala['grd'] == true ): ?>
                                                    <td class="text-center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                                <?php else : ?>
                                                    <td></td>
                                                <?php endif ?>
                                                <?php if ($gejala_gejala['gtt'] == true ): ?>
                                                    <td class="text-center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                                <?php else : ?>
                                                    <td></td>
                                                <?php endif ?>
                                                <?php if ($gejala_gejala['dsp'] == true ): ?>
                                                    <td class="text-center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                                <?php else : ?>
                                                    <td></td>
                                                <?php endif ?>
                                                <?php if ($gejala_gejala['gtp'] == true ): ?>
                                                    <td class="text-center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                                <?php else : ?>
                                                    <td></td>
                                                <?php endif ?>
                                                <td>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>                                         
                                         <?php endwhile ?>     
                                    </tbody>
                                </table>
                            </div>
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

            <div class="modal fade bd-example-modal-lg" id="modalTambahGejala" tabindex="-1" role="dialog" aria-labelledby="labelModalTambahAdmin" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="labelModalTambahAdmin">Buat Gejala Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="row" method="POST" action="">
                        <div class="col-md-3">
                            <label for="KodeGejala" class="form-label">Kode</label>
                            <input type="text" class="form-control" id="namaGejala" name="KodeGejala" required>
                        </div> 
                        <div class="col-md-7">
                            <label for="namaGejala" class="form-label">Nama Gejala</label>
                            <input type="text" class="form-control" id="namaGejala" name="namaGejala" required>
                        </div>   
                        <div class="col-md-2">
                            <label for="cf_pakar" class="form-label">CF Pakar</label>
                            <input type="text" class="form-control" id="cf_pakar" name="cf_pakar" required>
                        </div>     
                        <div class="col-auto mt-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="grdCheckButton">
                              <label class="form-check-label" for="grdCheckButton">
                                Gerd
                              </label>
                            </div>
                        </div>      
                        <div class="col-auto mt-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="gttCheckButton">
                              <label class="form-check-label" for="gttCheckButton">
                                Gastritis
                              </label>
                            </div>
                        </div>     
                        <div class="col-auto mt-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="dspCheckButton">
                              <label class="form-check-label" for="dspCheckButton">
                                Dispepsia
                              </label>
                            </div>
                        </div>     
                        <div class="col-auto mt-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="gtpCheckButton">
                              <label class="form-check-label" for="gtpCheckButton">
                                Gastroparesis
                              </label>
                            </div>
                        </div>    
                        <div class="col-md-12 mt-3">
                            <button class="btn btn-outline-primary" name="submit">Kirim Data</button>
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
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