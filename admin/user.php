<?php 

session_start();

require '../functions/function.php';

$sql_user = mysqli_query(koneksi(), "SELECT * FROM user");

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar User</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Daftar User</h1>
                    </div>


                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h5 class="m-0 font-weight-bold text-primary">Tabel Daftar User<i></h5>
                            <div class="d-sm-inline-block">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#labelModalTambahUser">
                                  Tambah User
                                </button>
                            </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Nama User</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while ($data_user = mysqli_fetch_array($sql_user)): ?>
                                            <tr>
                                                <td><?php $no = 1; echo $no; $no ++ ?></td>
                                                <td><?= $data_user['username'] ?></td>
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
            <!-- End of Footer -->

            <div class="modal fade bd-example-modal-lg" id="labelModalTambahUser" tabindex="-1" role="dialog" aria-labelledby="labelModalTambahUser" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="labelModalTambahUser">Buat User Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="row" method="POST" action="">
                                <div class="col-md-6">
                                    <label for="Username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="Username" name="username" required>
                                </div> 
                                <div class="col-md-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="Password" name="password" required>
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
            </div>
            

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