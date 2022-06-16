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
	<html>
	<html>
	<head>
		<title>Diagnosa Penyakit Lambung</title>	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

	<body>


		<div class="container">		
			<div class="text-center">
				<p class="h1">Hasil Diagnosa Penyakit Lambung</p>
			</div>
			
			<!-- <form action="" method="post">


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
			</form>		 -->
		</div>

		<br><br><br>

		<div class="container">
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

				<div class="text-center">
					<?php
						$nilai_tertinggi = max($nilai_tertinggi_grd, $nilai_tertinggi_gtt, $nilai_tertinggi_dsp, $nilai_tertinggi_gtp); 
						if ($nilai_tertinggi == $nilai_tertinggi_grd) {
							$status = "GERD";
						} else if ($nilai_tertinggi == $nilai_tertinggi_gtt) {
							$status = "Gastritis";
						} else if ($nilai_tertinggi == $nilai_tertinggi_dsp) {
							$status = "Dispepsia";
						} else if ($nilai_tertinggi == $nilai_tertinggi_gtp) {
							$status = "Gastroparesis";
						}			
					?>

					<?php if ($jumlah_gejala_grd == 1) { $nilai_tertinggi = $array_grd[0]['cf_user'] *  $array_grd[0]['cf_pakar']; }?>
					<?php if ($jumlah_gejala_gtt == 1) { $nilai_tertinggi = $array_gtt[0]['cf_user'] *  $array_gtt[0]['cf_pakar']; }?>
					<?php if ($jumlah_gejala_dsp == 1) { $nilai_tertinggi = $array_dsp[0]['cf_user'] *  $array_dsp[0]['cf_pakar']; }?>
					<?php if ($jumlah_gejala_gtp == 1) { $nilai_tertinggi = $array_gtp[0]['cf_user'] *  $array_gtp[0]['cf_pakar']; }?>

					<?php if ($nilai_tertinggi > 0 || $nilai_tertinggi < 0): ?>
						<div class="card text-center ">
							<div class="card-header">
							Hasil
							</div>
							<div class="card-body">
								<h4 class="card-title"><?= $status; ?></h4>
								<h1 class="card-text"><?php $persen = $nilai_tertinggi * 100; echo number_format((float)$persen, 2, '.', ''); echo "%";?></h1>
								<a href="#" class="btn btn-primary" onclick="printHasil()" id="buttonClick">Print Hasil</a>
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
		<script>
			function printHasil() {
				const clickButton = document.getElementById("buttonClick");
				clickButton.classList.add("d-none");
				window.print();

			}
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
	</html>