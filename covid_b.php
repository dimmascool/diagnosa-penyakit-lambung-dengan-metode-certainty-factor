<?php 
error_reporting(0);

$nilai_tertinggi_grd = 0;
$nilai_tertinggi_gtt = 0;
$nilai_tertinggi_dsp = 0;
$nilai_tertinggi_gtp = 0;

$no_1 = 1;
$no_2 = 1;
$no_3 = 1;

$array_grd = array();
$array_gtt = array();
$array_dsp = array();
$array_gtp = array();


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


	// var_dump($array_grd);
	// var_dump($jumlah_gejala_gtt);
	// var_dump($jumlah_gejala_dsp);
	// var_dump($jumlah_gejala_gtp);

	// if($array_grd[0]) {}
	// echo $array_grd[6]['cf_user'];


	
}

?>
<html>
<html>

<head>
    <title>Diagnosa Penyakit Lambung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="text-center">
            <p class="h1">Diagnosa Penyakit Lambung</p>
            <p class="lead">diagnosa penyakit lambung menggunakan metode certainty factor</p>
        </div>

        <form action="" method="post">


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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option> >
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                                <option value="">Pilih</option>
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
                        <td>G019</td>
                    </tr>
                </tbody>
            </table>
            <input class="btn btn-outline-primary" style="float: right;" type="submit" name="submit">
        </form>
    </div>

    <br><br><br>

    <div class="container">
        <div class="row">
            <?php if ($jumlah_gejala_grd > 0): ?>
            <div class="col-12" id="perhiutunganOdp">
                <h3>Perhitungan GERD</h3>
                <table class="table table-bordered">	
					<tr class="table-info">
						<th class="text-center">Perhitungan</th>
					</tr>
					<?php 
						if ($array_grd[0]['cf_user'] < 0 && $array_grd[1]['cf_user'] < 0 && $array_grd[2]['cf_user'] < 0 && $array_grd[3]['cf_user'] < 0 && $array_grd[4]['cf_user'] < 0 && $array_grd[5]['cf_user'] < 0 ) {

							while ($i <= $jumlah_gejala_grd) : 
								$v = $i + 1;
								$x = $i - 1;
								if ($i == 1) {
									$cf_kombi[$i] = $cf[$i] + ( $cf[$v] * (1+$cf[$i]));			 	
								} else {
									$cf_kombi[$i] = $cf_kombi[$x] + ( $cf[$v] * (1+$cf_kombi[$x]));	
								}
							?>
								<tr class="text-center"<?php if ($i === $jumlah_gejala_grd): $nilai_tertinggi_grd = $cf_kombi[$i]; ?>style="display: none;"<?php endif ?>>
									<td><?= "CF Kombi ".$i." :". $cf_kombi[$i]."<br>"; ?></td>
								</tr>
							<?php $i++; endwhile;

						} else if ($array_grd[0]['cf_user'] > 0 && $array_grd[1]['cf_user'] > 0 && $array_grd[2]['cf_user'] > 0 && $array_grd[3]['cf_user'] > 0 && $array_grd[4]['cf_user'] > 0 && $array_grd[5]['cf_user'] > 0 ) {

							while ($i <= $jumlah_gejala_grd) : 
								$v = $i + 1;
								$x = $i - 1;
								if ($i == 1) {
									$cf_kombi[$i] = $cf[$i] + ( $cf[$v] * (1-$cf[$i]));			 	
								} else {
									$cf_kombi[$i] = $cf_kombi[$x] + ( $cf[$v] * (1-$cf_kombi[$x]));	
								}
							?>
								<tr class="text-center"<?php if ($i === $jumlah_gejala_grd): $nilai_tertinggi_grd = $cf_kombi[$i]; ?>style="display: none;"<?php endif ?>>
									<td><?= "CF Kombi ".$i." :". $cf_kombi[$i]."<br>"; ?></td>
								</tr>
							<?php $i++; endwhile;
						} 
					?>
				</table>	
            </div>
            <?php endif ?>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>