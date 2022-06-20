<?php 
    error_reporting(0);

    // echo $uyeee = (0.55172413793103 + (-0.2)) / (1-(-0.2));
    // echo "<br>";
    // echo $uyeee = (0.46275862068966 + (0.24 * (1 - 0.46275862068966)));
    // echo "<br>";
    // echo $uyeee = (0.59169655172414 + (-0.4)) / (1-(-0.4));

    $nilai_tertinggi_grd = 0;
    $nilai_tertinggi_gtt = 0;
    $nilai_tertinggi_dsp = 0;
    $nilai_tertinggi_gtp = 0;

    $array_grd = array();
    $array_gtt = array();
    $array_dsp = array();
    $array_gtp = array();

    $no_grd = 1;
    $no_gtt = 1;
    $no_dsp = 1;
    $no_gtp = 1;


    if (isset($_POST['submit'])) {


        if ($_POST['G01']) {
            $nilai_tertinggi_grd = $nilai_tertinggi_grd + 1;

            $array_grd = array_merge($array_grd, array(
                array(
                    'gejala' => 'G01',
                    'cf_pakar' => '0.8',
                    'cf_user' => $_POST['G01']
                )
            ));
        }

        if ($_POST['G02']) {
            $nilai_tertinggi_grd = $nilai_tertinggi_grd + 1;

            $array_grd = array_merge($array_grd, array(
                array(
                    'gejala' => 'G02',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G02']
                )
            ));

        }

        if ($_POST['G03']) {
            $nilai_tertinggi_grd = $nilai_tertinggi_grd + 1;

            $array_grd = array_merge($array_grd, array(
                array(
                    'gejala' => 'G03',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G03']
                )
            ));
        }

        if ($_POST['G04']) {
            $nilai_tertinggi_grd = $nilai_tertinggi_grd + 1;
            $nilai_tertinggi_gtt = $nilai_tertinggi_gtt + 1;
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_grd = array_merge($array_grd, array(
                array(
                    'gejala' => 'G04',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G04']
                )
            ));

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G04',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G04']
                )
            ));

            $array_gtt = array_merge($array_gtt, array(
                array(
                    'gejala' => 'G04',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G04']
                )
            ));
        }

        if ($_POST['G05']) {
            $nilai_tertinggi_grd = $nilai_tertinggi_grd + 1;

            $array_grd = array_merge($array_grd, array(
                array(
                    'gejala' => 'G05',
                    'cf_pakar' => '0.6',
                    'cf_user' => $_POST['G05']
                )
            ));
        }

        if ($_POST['G06']) {        
            $nilai_tertinggi_grd = $nilai_tertinggi_grd + 1;

            $array_grd = array_merge($array_grd, array(
                array(
                    'gejala' => 'G06',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G06']
                )
            ));
        }



        if ($_POST['G07']) {
            $nilai_tertinggi_gtt = $nilai_tertinggi_gtt + 1;
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G07',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G07']
                )
            ));

            $array_gtt = array_merge($array_gtt, array(
                array(
                    'gejala' => 'G07',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G07']
                )
            ));
        }

        if ($_POST['G08']) {
            $nilai_tertinggi_gtt = $nilai_tertinggi_gtt + 1;
            
            $array_gtt = array_merge($array_gtt, array(
                array(
                    'gejala' => 'G08',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G08']
                )
            ));

        }

        if ($_POST['G09']) {
            $nilai_tertinggi_gtt = $nilai_tertinggi_gtt + 1;
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G09',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G09']
                )
            ));

            $array_gtt = array_merge($array_gtt, array(
                array(
                    'gejala' => 'G09',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G09']
                )
            ));
        }

        if ($_POST['G10']) {
            $nilai_tertinggi_gtt = $nilai_tertinggi_gtt + 1;

            $array_gtt = array_merge($array_gtt, array(
                array(
                    'gejala' => 'G10',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G10']
                )
            ));
        }

        if ($_POST['G11']) {
            $nilai_tertinggi_gtp = $nilai_tertinggi_gtp + 1;

            $array_gtp = array_merge($array_gtp, array(
                array(
                    'gejala' => 'G11',
                    'cf_pakar' => '0.6',
                    'cf_user' => $_POST['G11']
                )
            ));
        }

        if ($_POST['G12']) {
            $nilai_tertinggi_gtp = $nilai_tertinggi_gtp + 1;

            $array_gtp = array_merge($array_gtp, array(
                array(
                    'gejala' => 'G12',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G12']
                )
            ));
        }

        if ($_POST['G13']) {
            $nilai_tertinggi_gtp = $nilai_tertinggi_gtp + 1;

            $array_gtp = array_merge($array_gtp, array(
                array(
                    'gejala' => 'G13',
                    'cf_pakar' => '0.2',
                    'cf_user' => $_POST['G13']
                )
            ));
        }

        if ($_POST['G14']) {
            $nilai_tertinggi_gtp = $nilai_tertinggi_gtp + 1;
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G14',
                    'cf_pakar' => '0.6',
                    'cf_user' => $_POST['G14']
                )
            ));

            $array_gtp = array_merge($array_gtp, array(
                array(
                    'gejala' => 'G14',
                    'cf_pakar' => '0.6',
                    'cf_user' => $_POST['G14']
                )
            ));
        }

        if ($_POST['G15']) {
            $nilai_tertinggi_gtp = $nilai_tertinggi_gtp + 1;

            $array_gtp = array_merge($array_gtp, array(
                array(
                    'gejala' => 'G15',
                    'cf_pakar' => '0.8',
                    'cf_user' => $_POST['G15']
                )
            ));
        }

        if ($_POST['G16']) {
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G16',
                    'cf_pakar' => '0.6',
                    'cf_user' => $_POST['G16']
                )
            ));
        }

        if ($_POST['G17']) {
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G17',
                    'cf_pakar' => '0.4',
                    'cf_user' => $_POST['G17']
                )
            ));
        }

        if ($_POST['G18']) {
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G18',
                    'cf_pakar' => '0.6',
                    'cf_user' => $_POST['G18']
                )
            ));
        }

        if ($_POST['G19']) {
            $nilai_tertinggi_dsp = $nilai_tertinggi_dsp + 1;

            $array_dsp = array_merge($array_dsp, array(
                array(
                    'gejala' => 'G19',
                    'cf_pakar' => '0.8',
                    'cf_user' => $_POST['G19']
                )
            ));
        }

        $jumlah_gejala_grd = count($array_grd);
        $jumlah_gejala_gtt = count($array_gtt);
        $jumlah_gejala_dsp = count($array_dsp);
        $jumlah_gejala_gtp = count($array_gtp);

        // echo $nilai_tertinggi_grd;
        // echo $nilai_tertinggi_gtt;
        // echo $nilai_tertinggi_dsp;
        // echo $nilai_tertinggi_gtp;

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="vendor/sb-admin-2/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

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
            <footer class="sticky-footer bg-white">
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin-2/js/sb-admin-2.min.js"></script>

    

</body>

</html>