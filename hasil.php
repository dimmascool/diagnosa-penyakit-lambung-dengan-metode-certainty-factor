<?php 
    error_reporting(0);
    session_start();

    require 'functions/function.php';

    if (isset($_POST['savedata'])) {
        saveData();
    }

    $array_kode_gejala = array();

    $sql_penyakit = mysqli_query(koneksi(), "SELECT * FROM penyakit");

    while ($data_penyakit = mysqli_fetch_array($sql_penyakit)) {
        $kode_penyakit = $data_penyakit['kode_penyakit'];

        ${"nilai_tertinggi_".$kode_penyakit} = null;
        ${"array_".$kode_penyakit} = array();
        ${"no_".$kode_penyakit} = 1;

        $array_kode_gejala = array_merge($array_kode_gejala, array(
                array(
                    'gejala' => $kode_penyakit
                )
            )
        );
    }

    

   if (isset($_POST)) {

        $jumlah_data_gejala = $_POST;

        for ($i=0; $i < (count($jumlah_data_gejala) / 2); $i++) { 
            $id_gejala = $jumlah_data_gejala['kode_gejala_'.$i];

            if ($jumlah_data_gejala[$id_gejala] != "") {
                $sql_check = mysqli_query(koneksi(), "SELECT * FROM gejala WHERE id_gejala = '$id_gejala'");
                $f_data = mysqli_fetch_array($sql_check);

                for ($iterasi=0; $iterasi < count($array_kode_gejala) ; $iterasi++) {
                    $kode_penyakit = $array_kode_gejala[$iterasi]['gejala'];

                    if ($f_data[$kode_penyakit] == 1) {          
                        ${"array_".$kode_penyakit} = array_merge(${"array_".$kode_penyakit}, array(
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
        }

        for ($iterasi_2=0; $iterasi_2 < count($array_kode_gejala) ; $iterasi_2++) {
            $kode_penyakit2 = $array_kode_gejala[$iterasi_2]['gejala'];


            ${"jumlah_gejala_". $kode_penyakit2} = count(${"array_".$kode_penyakit2});
        }



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

                        <?php for ($iterasi_rumus=0; $iterasi_rumus < count($array_kode_gejala) ; $iterasi_rumus++) : ?>
                            <?php $kode_penyakit_rumus = $array_kode_gejala[$iterasi_rumus]['gejala']; ?>
                            <?php if (${"jumlah_gejala_".$kode_penyakit_rumus} > 0): ?>
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
                                    <?php foreach (${"array_".$kode_penyakit_rumus} as $data) : ?>
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
                                                    $cf[${"no_".$kode_penyakit_rumus}] = $cf_pakarxuser;
                                                    ${"no_".$kode_penyakit_rumus} ++;
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
                                        while (${"i_".$kode_penyakit_rumus} <= ${"jumlah_gejala_".$kode_penyakit_rumus}) : 
                                                // untuk yang campuran
                                                ${"v_".$kode_penyakit_rumus} = ${"i_".$kode_penyakit_rumus} + 1;
                                                ${"x_".$kode_penyakit_rumus} = ${"i_".$kode_penyakit_rumus} - 1;

                                                // var_dump($cf);
                                                if (${"i_".$kode_penyakit_rumus} == 1) {
                                                    // check cf 1 -2                                        
                                                    if ($cf[1] > 0 && $cf[2] > 0) {
                                                        $cf_kombi[${"i_".$kode_penyakit_rumus}] = $cf[${"i_".$kode_penyakit_rumus}] + ( $cf[${"v_".$kode_penyakit_rumus}] * (1-$cf[${"i_".$kode_penyakit_rumus}]));
                                                    } elseif ($cf[1] < 0 && $cf[2] < 0){
                                                        $cf_kombi[${"i_".$kode_penyakit_rumus}] = $cf[${"i_".$kode_penyakit_rumus}] + ( $cf[${"v_".$kode_penyakit_rumus}] * (1+$cf[${"i_".$kode_penyakit_rumus}]));
                                                    } else {
                                                        $cf_kombi[${"i_".$kode_penyakit_rumus}] = ($cf[${"i_".$kode_penyakit_rumus}] + $cf[${"v_".$kode_penyakit_rumus}]) / (1-min($cf[${"i_".$kode_penyakit_rumus}],$cf[${"v_".$kode_penyakit_rumus}]));
                                                    }
                                                } else {
                                                    // check cf reevisi - cf kombi                                      
                                                    if ($cf_kombi[${"x_".$kode_penyakit_rumus}] > 0 && $cf[${"v_".$kode_penyakit_rumus}] > 0) {
                                                        $cf_kombi[${"i_".$kode_penyakit_rumus}] = $cf_kombi[${"x_".$kode_penyakit_rumus}] + ( $cf[${"v_".$kode_penyakit_rumus}] * (1-$cf_kombi[${"x_".$kode_penyakit_rumus}])); 
                                                    } elseif ($cf_kombi[${"x_".$kode_penyakit_rumus}] < 0 && $cf[${"v_".$kode_penyakit_rumus}] < 0) {
                                                        $cf_kombi[${"i_".$kode_penyakit_rumus}] = $cf_kombi[${"x_".$kode_penyakit_rumus}] + ( $cf[${"v_".$kode_penyakit_rumus}] * (1+$cf_kombi[${"x_".$kode_penyakit_rumus}])); 
                                                    } else {
                                                        $cf_kombi[${"i_".$kode_penyakit_rumus}] = ($cf_kombi[${"x_".$kode_penyakit_rumus}] + $cf[${"v_".$kode_penyakit_rumus}]) / (1-min($cf_kombi[${"x_".$kode_penyakit_rumus}],$cf[${"v_".$kode_penyakit_rumus}]));
                                                    }                           
                                                }
                                            ?>
                                                <tr class="text-center"<?php if (${"i_".$kode_penyakit_rumus} === ${"jumlah_gejala_".$kode_penyakit_rumus}): ${"nilai_tertinggi_".$kode_penyakit_rumus} = $cf_kombi[${"x_".$kode_penyakit_rumus}]; ?>style="display: none;"<?php endif ?>>
                                                    <td><?= "CF Kombi ".${"i_".$kode_penyakit_rumus}." :". $cf_kombi[${"i_".$kode_penyakit_rumus}]."<br>"; ?></td>
                                                </tr>
                                    <?php ${"i_".$kode_penyakit_rumus}++; endwhile; ?>                  
                                </table>        
                            </div>
                            <?php endif ?>
                        <?php endfor ?>
                        
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