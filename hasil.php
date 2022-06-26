<?php 
    error_reporting(0);
    session_start();

    require 'functions/function.php';

    if (isset($_POST['savedata'])) {
        saveData();
    }

    $nilai_tertinggi_grd = null;
    $nilai_tertinggi_gtt = null;
    $nilai_tertinggi_dsp = null;
    $nilai_tertinggi_gtp = null;

    $array_grd = array();
    $array_gtt = array();
    $array_dsp = array();
    $array_gtp = array();

    $no_grd = 1;
    $no_gtt = 1;
    $no_dsp = 1;
    $no_gtp = 1;


    if (isset($_POST)) {
        $jumlah_data_gejala = $_POST;


        for ($i=0; $i < (count($jumlah_data_gejala) / 2); $i++) { 
            $id_gejala = $jumlah_data_gejala['kode_gejala_'.$i];

            if ($jumlah_data_gejala[$id_gejala] != "") {
                $sql_check = mysqli_query(koneksi(), "SELECT * FROM gejala WHERE id_gejala = '$id_gejala'");
                $f_data = mysqli_fetch_array($sql_check);

                if ($f_data['grd'] == 1) {          
                    $array_grd = array_merge($array_grd, array(
                            array(
                                'gejala' => $id_gejala,
                                'cf_pakar' => $f_data['cf_pakar'],
                                'cf_user' => $_POST[$id_gejala]
                            )
                        )
                    );
                }

                if ($f_data['gtt'] == 1) {          
                    $array_gtt = array_merge($array_gtt, array(
                            array(
                                'gejala' => $id_gejala,
                                'cf_pakar' => $f_data['cf_pakar'],
                                'cf_user' => $_POST[$id_gejala]
                            )
                        )
                    );
                }

                if ($f_data['dsp'] == 1) {          
                    $array_dsp = array_merge($array_dsp, array(
                            array(
                                'gejala' => $id_gejala,
                                'cf_pakar' => $f_data['cf_pakar'],
                                'cf_user' => $_POST[$id_gejala]
                            )
                        )
                    );
                }

                if ($f_data['gtp'] == 1) {          
                    $array_gtp = array_merge($array_gtp, array(
                            array(
                                'gejala' => $id_gejala,
                                'cf_pakar' => $f_data['cf_pakar'],
                                'cf_user' => $_POST[$id_gejala]
                            )
                        )
                    );
                }
            }
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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hasil</title>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ringkasan</h1>                        
                    </div>

                    <div class="row">
                        <!-- ini buat perhitungan GERD -->
                        <?php if ($jumlah_gejala_grd > 0): ?>
                        <div class="col-12" id="perhiutunganGrd">
                            <h3>Perhitungan GERD</h3>
                            <table class="table table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Pakar</th>
                                        <th scope="col">User</th>
                                        <th scope="col">CF Pakar * CF User</th>
                                    </tr>
                                </thead>
                                <?php foreach ($array_grd as $data) : ?>
                                    <tbody>
                                        <tr>
                                            <td class="d-none"><?= $no_grd;?></td>
                                            <td><?= $data['gejala'] ?></td>
                                            <?php 
                                                $cf_pakar = $data['cf_pakar'];
                                                $cf_user = $data['cf_user'];
                                                $cf_pakarxuser = $cf_pakar * $cf_user;
                                            ?>
                                            <td><?= $cf_pakar ?></td>
                                            <td><?= $cf_user ?></td>
                                            <td><?= $cf_pakarxuser ?></td>
                                            <?php 
                                                $cf[$no_grd] = $cf_pakarxuser;
                                                $no_grd ++;
                                            ?>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <table class="table table-bordered">    
                                <tr class="table-info">
                                    <th class="text-center">Perhitungan</th>
                                </tr>
                                <?php                       
                                    if ($array_grd[0]['cf_user'] < 0 && $array_grd[1]['cf_user'] < 0 && $array_grd[2]['cf_user'] < 0 && $array_grd[3]['cf_user'] < 0 && $array_grd[4]['cf_user'] < 0 && $array_grd[5]['cf_user'] < 0 ) {
                                        // untuk yang negatif negatif
                                        while ($i_grd <= $jumlah_gejala_grd) : 
                                            $v_grd = $i_grd + 1;
                                            $x_grd = $i_grd - 1;
                                            if ($i_grd == 1) {
                                                $cf_kombi[$i_grd] = $cf[$i_grd] + ( $cf[$v_grd] * (1+$cf[$i_grd]));             
                                            } else {
                                                $cf_kombi[$i_grd] = $cf_kombi[$x_grd] + ( $cf[$v_grd] * (1+$cf_kombi[$x_grd])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_grd === $jumlah_gejala_grd): $nilai_tertinggi_grd = $cf_kombi[$x_grd]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_grd." :". $cf_kombi[$i_grd]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_grd++; endwhile;

                                    } else if ($array_grd[0]['cf_user'] > 0 && $array_grd[1]['cf_user'] > 0 && $array_grd[2]['cf_user'] > 0 && $array_grd[3]['cf_user'] > 0 && $array_grd[4]['cf_user'] > 0 && $array_grd[5]['cf_user'] > 0 ) {
                                        // untuk yang positif positif
                                        while ($i_grd <= $jumlah_gejala_grd) : 
                                            $v_grd = $i_grd + 1;
                                            $x_grd = $i_grd - 1;
                                            if ($i_grd == 1) {
                                                $cf_kombi[$i_grd] = $cf[$i_grd] + ( $cf[$v_grd] * (1-$cf[$i_grd]));             
                                            } else {
                                                $cf_kombi[$i_grd] = $cf_kombi[$x_grd] + ( $cf[$v_grd] * (1-$cf_kombi[$x_grd])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_grd === $jumlah_gejala_grd): $nilai_tertinggi_grd = $cf_kombi[$x_grd]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_grd." :". $cf_kombi[$i_grd]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_grd++; endwhile;
                                    } else {
                                        while ($i_grd <= $jumlah_gejala_grd) : 
                                            // untuk yang campuran
                                            $v_grd = $i_grd + 1;
                                            $x_grd = $i_grd - 1;

                                            // var_dump($cf);
                                            if ($i_grd == 1) {
                                                // check cf 1 -2                                        
                                                if ($cf[1] > 0 && $cf[2] > 0) {
                                                    $cf_kombi[$i_grd] = $cf[$i_grd] + ( $cf[$v_grd] * (1-$cf[$i_grd]));
                                                } elseif ($cf[1] < 0 && $cf[2] < 0){
                                                    $cf_kombi[$i_grd] = $cf[$i_grd] + ( $cf[$v_grd] * (1+$cf[$i_grd]));
                                                } else {
                                                    $cf_kombi[$i_grd] = ($cf[$i_grd] + $cf[$v_grd]) / (1-min($cf[$i_grd],$cf[$v_grd]));
                                                }
                                            } else {
                                                // check cf reevisi - cf kombi                                      
                                                if ($cf_kombi[$x_grd] > 0 && $cf[$v_grd] > 0) {
                                                    $cf_kombi[$i_grd] = $cf_kombi[$x_grd] + ( $cf[$v_grd] * (1-$cf_kombi[$x_grd])); 
                                                } elseif ($cf_kombi[$x_grd] < 0 && $cf[$v_grd] < 0) {
                                                    $cf_kombi[$i_grd] = $cf_kombi[$x_grd] + ( $cf[$v_grd] * (1+$cf_kombi[$x_grd])); 
                                                } else {
                                                    $cf_kombi[$i_grd] = ($cf_kombi[$x_grd] + $cf[$v_grd]) / (1-min($cf_kombi[$x_grd],$cf[$v_grd]));
                                                }                           
                                            }
                                        ?>
                                                <tr class="text-center"<?php if ($i_grd === $jumlah_gejala_grd): $nilai_tertinggi_grd = $cf_kombi[$x_grd]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_grd." :". $cf_kombi[$i_grd]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_grd++; endwhile;
                                    } ?>                    
                            </table>        
                        </div>
                        <?php endif ?>

                        <!-- ini buat perhitungan Gastritis -->

                        <?php if ($jumlah_gejala_gtt > 0): ?>
                        <div class="col-12" id="perhiutunganGtt">
                            <h3>Perhitungan Gastritis</h3>
                            <table class="table table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Pakar</th>
                                        <th scope="col">User</th>
                                        <th scope="col">CF Pakar * CF User</th>
                                    </tr>
                                </thead>
                                <?php foreach ($array_gtt as $data) : ?>
                                    <tbody>
                                        <tr>
                                            <td class="d-none"><?= $no_gtt;?></td>
                                            <td><?= $data['gejala'] ?></td>
                                            <?php 
                                                $cf_pakar = $data['cf_pakar'];
                                                $cf_user = $data['cf_user'];
                                                $cf_pakarxuser = $cf_pakar * $cf_user;
                                            ?>
                                            <td><?= $cf_pakar ?></td>
                                            <td><?= $cf_user ?></td>
                                            <td><?= $cf_pakarxuser ?></td>
                                            <?php 
                                                $cf[$no_gtt] = $cf_pakarxuser;
                                                $no_gtt ++;
                                            ?>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <table class="table table-bordered">    
                                <tr class="table-info">
                                    <th class="text-center">Perhitungan</th>
                                </tr>
                                <?php                       
                                    if ($array_gtt[0]['cf_user'] < 0 && $array_gtt[1]['cf_user'] < 0 && $array_gtt[2]['cf_user'] < 0 && $array_gtt[3]['cf_user'] < 0 && $array_gtt[4]['cf_user'] < 0) {
                                        // untuk yang negatif negatif
                                        while ($i_gtt <= $jumlah_gejala_gtt) : 
                                            $v_gtt = $i_gtt + 1;
                                            $x_gtt = $i_gtt - 1;
                                            if ($i_gtt == 1) {
                                                $cf_kombi[$i_gtt] = $cf[$i_gtt] + ( $cf[$v_gtt] * (1+$cf[$i_gtt]));             
                                            } else {
                                                $cf_kombi[$i_gtt] = $cf_kombi[$x_gtt] + ( $cf[$v_gtt] * (1+$cf_kombi[$x_gtt])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_gtt === $jumlah_gejala_gtt): $nilai_tertinggi_gtt = $cf_kombi[$x_gtt]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_gtt." :". $cf_kombi[$i_gtt]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_gtt++; endwhile;

                                    } else if ($array_gtt[0]['cf_user'] > 0 && $array_gtt[1]['cf_user'] > 0 && $array_gtt[2]['cf_user'] > 0 && $array_gtt[3]['cf_user'] > 0 && $array_gtt[4]['cf_user'] > 0) {
                                        // untuk yang positif positif
                                        while ($i_gtt <= $jumlah_gejala_gtt) : 
                                            $v_gtt = $i_gtt + 1;
                                            $x_gtt = $i_gtt - 1;
                                            if ($i_gtt == 1) {
                                                $cf_kombi[$i_gtt] = $cf[$i_gtt] + ( $cf[$v_gtt] * (1-$cf[$i_gtt]));             
                                            } else {
                                                $cf_kombi[$i_gtt] = $cf_kombi[$x_gtt] + ( $cf[$v_gtt] * (1-$cf_kombi[$x_gtt])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_gtt === $jumlah_gejala_gtt): $nilai_tertinggi_gtt = $cf_kombi[$x_gtt]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_gtt." :". $cf_kombi[$i_gtt]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_gtt++; endwhile;
                                    } else {
                                        while ($i_gtt <= $jumlah_gejala_gtt) : 
                                            // untuk yang campuran
                                            $v_gtt = $i_gtt + 1;
                                            $x_gtt = $i_gtt - 1;

                                            // var_dump($cf);
                                            if ($i_gtt == 1) {
                                                // check cf 1 -2                                        
                                                if ($cf[1] > 0 && $cf[2] > 0) {
                                                    $cf_kombi[$i_gtt] = $cf[$i_gtt] + ( $cf[$v_gtt] * (1-$cf[$i_gtt]));
                                                } elseif ($cf[1] < 0 && $cf[2] < 0){
                                                    $cf_kombi[$i_gtt] = $cf[$i_gtt] + ( $cf[$v_gtt] * (1+$cf[$i_gtt]));
                                                } else {
                                                    $cf_kombi[$i_gtt] = ($cf[$i_gtt] + $cf[$v_gtt]) / (1-min($cf[$i_gtt],$cf[$v_gtt]));
                                                }
                                            } else {
                                                // check cf reevisi - cf kombi                                      
                                                if ($cf_kombi[$x_gtt] > 0 && $cf[$v_gtt] > 0) {
                                                    $cf_kombi[$i_gtt] = $cf_kombi[$x_gtt] + ( $cf[$v_gtt] * (1-$cf_kombi[$x_gtt])); 
                                                } elseif ($cf_kombi[$x_gtt] < 0 && $cf[$v_gtt] < 0) {
                                                    $cf_kombi[$i_gtt] = $cf_kombi[$x_gtt] + ( $cf[$v_gtt] * (1+$cf_kombi[$x_gtt])); 
                                                } else {
                                                    $cf_kombi[$i_gtt] = ($cf_kombi[$x_gtt] + $cf[$v_gtt]) / (1-min($cf_kombi[$x_gtt],$cf[$v_gtt]));
                                                }                           
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_gtt === $jumlah_gejala_gtt): $nilai_tertinggi_gtt = $cf_kombi[$x_gtt]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_gtt." :". $cf_kombi[$i_gtt]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_gtt++; endwhile;
                                    } ?>                    
                            </table>        
                        </div>
                        <?php endif ?>

                        <!-- ini buat perhitungan Dispepsia -->

                        <?php if ($jumlah_gejala_dsp > 0): ?>
                        <div class="col-12" id="perhiutungandsp">
                            <h3>Perhitungan Dispepsia</h3>
                            <table class="table table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Pakar</th>
                                        <th scope="col">User</th>
                                        <th scope="col">CF Pakar * CF User</th>
                                    </tr>
                                </thead>
                                <?php foreach ($array_dsp as $data) : ?>
                                    <tbody>
                                        <tr>
                                            <td class="d-none"><?= $no_dsp;?></td>
                                            <td><?= $data['gejala'] ?></td>
                                            <?php 
                                                $cf_pakar = $data['cf_pakar'];
                                                $cf_user = $data['cf_user'];
                                                $cf_pakarxuser = $cf_pakar * $cf_user;
                                            ?>
                                            <td><?= $cf_pakar ?></td>
                                            <td><?= $cf_user ?></td>
                                            <td><?= $cf_pakarxuser ?></td>
                                            <?php 
                                                $cf[$no_dsp] = $cf_pakarxuser;
                                                $no_dsp ++;
                                            ?>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <table class="table table-bordered">    
                                <tr class="table-info">
                                    <th class="text-center">Perhitungan</th>
                                </tr>
                                <?php                       
                                    if ($array_dsp[0]['cf_user'] < 0 && $array_dsp[1]['cf_user'] < 0 && $array_dsp[2]['cf_user'] < 0 && $array_dsp[3]['cf_user'] < 0 && $array_dsp[4]['cf_user'] < 0 && $array_dsp[5]['cf_user'] < 0 && $array_dsp[6]['cf_user'] < 0 && $array_dsp[7]['cf_user'] < 0) {
                                        // untuk yang negatif negatif
                                        while ($i_dsp <= $jumlah_gejala_dsp) : 
                                            $v_dsp = $i_dsp + 1;
                                            $x_dsp = $i_dsp - 1;
                                            if ($i_dsp == 1) {
                                                $cf_kombi[$i_dsp] = $cf[$i_dsp] + ( $cf[$v_dsp] * (1+$cf[$i_dsp]));             
                                            } else {
                                                $cf_kombi[$i_dsp] = $cf_kombi[$x_dsp] + ( $cf[$v_dsp] * (1+$cf_kombi[$x_dsp])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_dsp === $jumlah_gejala_dsp): $nilai_tertinggi_dsp = $cf_kombi[$x_dsp]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_dsp." :". $cf_kombi[$i_dsp]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_dsp++; endwhile;

                                    } else if ($array_dsp[0]['cf_user'] > 0 && $array_dsp[1]['cf_user'] > 0 && $array_dsp[2]['cf_user'] > 0 && $array_dsp[3]['cf_user'] > 0 && $array_dsp[4]['cf_user'] > 0 && $array_dsp[5]['cf_user'] > 0 && $array_dsp[6]['cf_user'] > 0 && $array_dsp[7]['cf_user'] > 0) {
                                        // untuk yang positif positif
                                        while ($i_dsp <= $jumlah_gejala_dsp) : 
                                            $v_dsp = $i_dsp + 1;
                                            $x_dsp = $i_dsp - 1;
                                            if ($i_dsp == 1) {
                                                $cf_kombi[$i_dsp] = $cf[$i_dsp] + ( $cf[$v_dsp] * (1-$cf[$i_dsp]));             
                                            } else {
                                                $cf_kombi[$i_dsp] = $cf_kombi[$x_dsp] + ( $cf[$v_dsp] * (1-$cf_kombi[$x_dsp])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_dsp === $jumlah_gejala_dsp): $nilai_tertinggi_dsp = $cf_kombi[$x_dsp]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_dsp." :". $cf_kombi[$i_dsp]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_dsp++; endwhile;
                                    } else {
                                        while ($i_dsp <= $jumlah_gejala_dsp) : 
                                            // untuk yang campuran
                                            $v_dsp = $i_dsp + 1;
                                            $x_dsp = $i_dsp - 1;

                                            // var_dump($cf);
                                            if ($i_dsp == 1) {
                                                // check cf 1 -2                                        
                                                if ($cf[1] > 0 && $cf[2] > 0) {
                                                    $cf_kombi[$i_dsp] = $cf[$i_dsp] + ( $cf[$v_dsp] * (1-$cf[$i_dsp]));
                                                } elseif ($cf[1] < 0 && $cf[2] < 0){
                                                    $cf_kombi[$i_dsp] = $cf[$i_dsp] + ( $cf[$v_dsp] * (1+$cf[$i_dsp]));
                                                } else {
                                                    $cf_kombi[$i_dsp] = ($cf[$i_dsp] + $cf[$v_dsp]) / (1-min($cf[$i_dsp],$cf[$v_dsp]));
                                                }
                                            } else {
                                                // check cf reevisi - cf kombi                                      
                                                if ($cf_kombi[$x_dsp] > 0 && $cf[$v_dsp] > 0) {
                                                    $cf_kombi[$i_dsp] = $cf_kombi[$x_dsp] + ( $cf[$v_dsp] * (1-$cf_kombi[$x_dsp])); 
                                                } elseif ($cf_kombi[$x_dsp] < 0 && $cf[$v_dsp] < 0) {
                                                    $cf_kombi[$i_dsp] = $cf_kombi[$x_dsp] + ( $cf[$v_dsp] * (1+$cf_kombi[$x_dsp])); 
                                                } else {
                                                    $cf_kombi[$i_dsp] = ($cf_kombi[$x_dsp] + $cf[$v_dsp]) / (1-min($cf_kombi[$x_dsp],$cf[$v_dsp]));
                                                }                           
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_dsp === $jumlah_gejala_dsp): $nilai_tertinggi_dsp = $cf_kombi[$x_dsp]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_dsp." :". $cf_kombi[$i_dsp]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_dsp++; endwhile;
                                    } ?>                    
                            </table>        
                        </div>
                        <?php endif ?>

                        <!-- ini buat perhitungan Gastroparesis -->

                        <?php if ($jumlah_gejala_gtp > 0): ?>
                        <div class="col-12" id="perhiutungangtp">
                            <h3>Perhitungan Gastroparesis</h3>
                            <table class="table table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Pakar</th>
                                        <th scope="col">User</th>
                                        <th scope="col">CF Pakar * CF User</th>
                                    </tr>
                                </thead>
                                <?php foreach ($array_gtp as $data) : ?>
                                    <tbody>
                                        <tr>
                                            <td class="d-none"><?= $no_gtp;?></td>
                                            <td><?= $data['gejala'] ?></td>
                                            <?php 
                                                $cf_pakar = $data['cf_pakar'];
                                                $cf_user = $data['cf_user'];
                                                $cf_pakarxuser = $cf_pakar * $cf_user;
                                            ?>
                                            <td><?= $cf_pakar ?></td>
                                            <td><?= $cf_user ?></td>
                                            <td><?= $cf_pakarxuser ?></td>
                                            <?php 
                                                $cf[$no_gtp] = $cf_pakarxuser;
                                                $no_gtp ++;
                                            ?>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <table class="table table-bordered">    
                                <tr class="table-info">
                                    <th class="text-center">Perhitungan</th>
                                </tr>
                                <?php                       
                                    if ($array_gtp[0]['cf_user'] < 0 && $array_gtp[1]['cf_user'] < 0 && $array_gtp[2]['cf_user'] < 0 && $array_gtp[3]['cf_user'] < 0 && $array_gtp[4]['cf_user'] < 0) {
                                        // untuk yang negatif negatif
                                        while ($i_gtp <= $jumlah_gejala_gtp) : 
                                            $v_gtp = $i_gtp + 1;
                                            $x_gtp = $i_gtp - 1;
                                            if ($i_gtp == 1) {
                                                $cf_kombi[$i_gtp] = $cf[$i_gtp] + ( $cf[$v_gtp] * (1+$cf[$i_gtp]));             
                                            } else {
                                                $cf_kombi[$i_gtp] = $cf_kombi[$x_gtp] + ( $cf[$v_gtp] * (1+$cf_kombi[$x_gtp])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_gtp === $jumlah_gejala_gtp): $nilai_tertinggi_gtp = $cf_kombi[$x_gtp]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_gtp." :". $cf_kombi[$i_gtp]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_gtp++; endwhile;

                                    } else if ($array_gtp[0]['cf_user'] > 0 && $array_gtp[1]['cf_user'] > 0 && $array_gtp[2]['cf_user'] > 0 && $array_gtp[3]['cf_user'] > 0 && $array_gtp[4]['cf_user'] > 0) {
                                        // untuk yang positif positif
                                        while ($i_gtp <= $jumlah_gejala_gtp) : 
                                            $v_gtp = $i_gtp + 1;
                                            $x_gtp = $i_gtp - 1;
                                            if ($i_gtp == 1) {
                                                $cf_kombi[$i_gtp] = $cf[$i_gtp] + ( $cf[$v_gtp] * (1-$cf[$i_gtp]));             
                                            } else {
                                                $cf_kombi[$i_gtp] = $cf_kombi[$x_gtp] + ( $cf[$v_gtp] * (1-$cf_kombi[$x_gtp])); 
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_gtp === $jumlah_gejala_gtp): $nilai_tertinggi_gtp = $cf_kombi[$x_gtp]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_gtp." :". $cf_kombi[$i_gtp]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_gtp++; endwhile;
                                    } else {
                                        while ($i_gtp <= $jumlah_gejala_gtp) : 
                                            // untuk yang campuran
                                            $v_gtp = $i_gtp + 1;
                                            $x_gtp = $i_gtp - 1;

                                            // var_dump($cf);
                                            if ($i_gtp == 1) {
                                                // check cf 1 -2                                        
                                                if ($cf[1] > 0 && $cf[2] > 0) {
                                                    $cf_kombi[$i_gtp] = $cf[$i_gtp] + ( $cf[$v_gtp] * (1-$cf[$i_gtp])); 
                                                } elseif ($cf[1] < 0 && $cf[2] < 0){
                                                    $cf_kombi[$i_gtp] = $cf[$i_gtp] + ( $cf[$v_gtp] * (1+$cf[$i_gtp]));
                                                } else {
                                                    $cf_kombi[$i_gtp] = ($cf[$i_gtp] + $cf[$v_gtp]) / (1-min($cf[$i_gtp],$cf[$v_gtp]));
                                                }
                                            } else {
                                                // check cf reevisi - cf kombi                                      
                                                if ($cf_kombi[$x_gtp] > 0 && $cf[$v_gtp] > 0) {
                                                    $cf_kombi[$i_gtp] = $cf_kombi[$x_gtp] + ( $cf[$v_gtp] * (1-$cf_kombi[$x_gtp]));
                                                } elseif ($cf_kombi[$x_gtp] < 0 && $cf[$v_gtp] < 0) {
                                                    $cf_kombi[$i_gtp] = $cf_kombi[$x_gtp] + ( $cf[$v_gtp] * (1+$cf_kombi[$x_gtp]));
                                                } else {
                                                    $cf_kombi[$i_gtp] = ($cf_kombi[$x_gtp] + $cf[$v_gtp]) / (1-min($cf_kombi[$x_gtp],$cf[$v_gtp]));
                                                }                           
                                            }
                                        ?>
                                            <tr class="text-center"<?php if ($i_gtp === $jumlah_gejala_gtp): $nilai_tertinggi_gtp = $cf_kombi[$x_gtp]; ?>style="display: none;"<?php endif ?>>
                                                <td><?= "CF Kombi ".$i_gtp." :". $cf_kombi[$i_gtp]."<br>"; ?></td>
                                            </tr>
                                        <?php $i_gtp++; endwhile;
                                    } ?>                    
                            </table>        
                        </div>
                        <?php endif ?>
                        <div class="text-center col-12 mt-5">

                            <?php 
                                if ($jumlah_gejala_grd == 1) { $nilai_tertinggi_grd = $array_grd[0]['cf_user'] *  $array_grd[0]['cf_pakar']; $status = "GERD";}
                                if ($jumlah_gejala_gtt == 1) { $nilai_tertinggi_gtt = $array_gtt[0]['cf_user'] *  $array_gtt[0]['cf_pakar']; $status = "Gastritis";}
                                if ($jumlah_gejala_dsp == 1) { $nilai_tertinggi_dsp = $array_dsp[0]['cf_user'] *  $array_dsp[0]['cf_pakar']; $status = "Dispepsia";}
                                if ($jumlah_gejala_gtp == 1) { $nilai_tertinggi_gtp = $array_gtp[0]['cf_user'] *  $array_gtp[0]['cf_pakar']; $status = "Gastroparesis";}

                                $nilai_tertinggi = max($nilai_tertinggi_grd, $nilai_tertinggi_gtt, $nilai_tertinggi_dsp, $nilai_tertinggi_gtp); 
                            
                                if ($nilai_tertinggi == $nilai_tertinggi_grd) {
                                    $status = "GERD";
                                    $solusi = "GERD dapat diatasi dengan mengubah perilaku sehari-hari, seperti menurunkan berat badan, tidak langsung berbaring setelah makan, menjauhi makanan tertentu, termasuk buah yang asam, dan berhenti merokok. Beberapa tanaman herbal, seperti jahe, juga diklaim bermanfaat untuk mengatasi penyakit asam lambung.";
                                } else if ($nilai_tertinggi == $nilai_tertinggi_gtt) {
                                    $status = "Gastritis";
                                    $solusi = "Pengobatan untuk gangguan pencernaan ini akan tergantung dari penyebab yang mendasarinya. Jika anda mengalami gastritis akibat penggunaan obat antiinflamasi nonsteroid (NSAID) atau obat lain, menghindari obat tersebut mungkin cukup untuk meredakan gejala. Jika anda merasa bahwa obat yang diresepkan dokter menyebabkan gastritis, bicarakan dengan dokter sebelum menghentikan atau mengubah dosisnya.Sementara itu, jika gastritis disebabkan oleh infeksi bakteri, gunakan antibiotik, beberapa jenis obat lain juga dapat digunakan untuk mengobati gastritis: Obat penghambat tingkat histamin pada tubuh, Obat penghambat produksi asam lambung.";
                                } else if ($nilai_tertinggi == $nilai_tertinggi_dsp) {
                                    $status = "Dispepsia";
                                    $solusi = "Anda bisa merubah pola hidup anda seperti: 
                                        <br>• Makan dalam porsi kecil, tetapi sering dan dianjurkan untuk makan 5–6 kali sehari.
                                        <br>• Membatasi konsumsi kafein dan alkohol.
                                        <br>• Menghindari penggunaan atau konsumsi antinyeri, seperti aspirin dan ibuprofen. Gunakan antinyeri lain yang lebih aman bagi lambung seperti parasetamol.
                                        <br>• Mengontrol stres dan rasa cemas.";
                                } else if ($nilai_tertinggi == $nilai_tertinggi_gtp) {
                                    $status = "Gastroparesis";
                                    $solusi = "Mengubah menu makanan anda sangat disarankan. lebih disarankan untuk mengonsumsi makanan yang lebih mudah dicerna seperti buah-buahan dan juga sayur-sayuran.";
                                }

                                // apabila ada nilai yang sama                                
                                if ($nilai_tertinggi_grd == $nilai_tertinggi_gtt AND $nilai_tertinggi_grd == $nilai_tertinggi_dsp) {
                                    $status = "GERD, Gastritis dan Gastroparesis";
                                    $solusi = "Anda mengalami gejala yang dapat terbilang berat maka segera konsultasi langsung dengan dokter agar penanganan penyakit bisa ditangani secara maksimal";
                                } else if ($nilai_tertinggi_gtt == $nilai_tertinggi_dsp ) {
                                    $status = "Gastritis dan Dispepsia";
                                    $solusi = "Utamakan atur pola makan dan juga jenis makanan, dianjurkan 5-6 kali sehari dalam porsi kecil. juga hindari lah konsumsi kafein dan alkohol. anda dapat mengunakan antibiotik sebagai peanganan awal";
                                    if ($nilai_tertinggi_gtt < $nilai_tertinggi_grd) {
                                        $status = "GERD";
                                        $solusi = "GERD dapat diatasi dengan mengubah perilaku sehari-hari, seperti menurunkan berat badan, tidak langsung berbaring setelah makan, menjauhi makanan tertentu, termasuk buah yang asam, dan berhenti merokok. Beberapa tanaman herbal, seperti jahe, juga diklaim bermanfaat untuk mengatasi penyakit asam lambung.";
                                    }
                                } else if ($nilai_tertinggi_dsp == $nilai_tertinggi_gtp) {
                                    $status = "Dispepsia dan Gastroparesis";
                                    $solusi = "Utamakan atur pola makan dan juga jenis makanan, diutamakan bagi anda untuk mengkonsumsi makanan yang mudah dicerna oleh lambung. ini adalah solusi awal untuk penanganan lebih lanjut segera konsultasi kan dengan dokter untuk mendapatkan resep obat";
                                    if ($nilai_tertinggi == $nilai_tertinggi_gtt) {
                                        $status = "Gastritis";
                                        $solusi = "Pengobatan untuk gangguan pencernaan ini akan tergantung dari penyebab yang mendasarinya. Jika anda mengalami gastritis akibat penggunaan obat antiinflamasi nonsteroid (NSAID) atau obat lain, menghindari obat tersebut mungkin cukup untuk meredakan gejala. Jika anda merasa bahwa obat yang diresepkan dokter menyebabkan gastritis, bicarakan dengan dokter sebelum menghentikan atau mengubah dosisnya.Sementara itu, jika gastritis disebabkan oleh infeksi bakteri, gunakan antibiotik, beberapa jenis obat lain juga dapat digunakan untuk mengobati gastritis: Obat penghambat tingkat histamin pada tubuh, Obat penghambat produksi asam lambung.";
                                    }
                                }

                                if ($nilai_tertinggi < 0) {
                                    $solusi = "None";
                                }


                                // echo $nilai_tertinggi_grd . "<br>" . $nilai_tertinggi_gtt . "<br>" . $nilai_tertinggi_dsp . "<br>" . $nilai_tertinggi_gtp ;
              
                            ?>

                            <?php if ($nilai_tertinggi != 0): ?>
                                <div class="card text-center ">
                                    <div class="card-header">
                                    Hasil
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $status; ?></h4>
                                        <h1 class="card-text"><?php $persen = $nilai_tertinggi * 100; echo number_format((float)$persen, 2, '.', ''); echo "%";?></h1>
                                        <h4 class="card-title">Solusi yang dapat kami berikan adalah : </h4>
                                        <p class="card-title"><?= $solusi; ?></p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="#" class="btn btn-sm btn-primary shadow-sm d-none" id="buttonClick" onclick="printHasil()"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a><br><br>
                                            <?php if (isset($_SESSION['username'])): ?>
                                                <form method="POST" action="">
                                                    <input type="text" name="status" value="<?= $status ?>" hidden readonly>
                                                    <input type="text" name="nilai_persentase" value="<?= $nilai_tertinggi ?>" hidden readonly>
                                                    <button class="btn btn-sm btn-primary shadow-sm" id="buttonSaveToServer" name="savedata" value="true"><i class="fas fa-download fa-sm text-white-50"></i> Save Data</button>
                                                </form>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Untuk mendapatkan hasil yang maksimal harap melakukan konsultasi dengan dokter lambung
                                    </div>
                                </div>
                                <br><br>
                            <?php endif ?>              
                        </div>
                    </div>

                    
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

    <?php require 'template/modal_logout.php' ?>

    <script>
        function printHasil() {
            const clickButton = document.getElementById("buttonClick");
            clickButton.classList.add("d-none");
            const saveButton = document.getElementById("buttonSaveToServer");
            saveButton.classList.add("d-none");
            window.print();
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin-2/js/sb-admin-2.min.js"></script>

    

</body>

</html>