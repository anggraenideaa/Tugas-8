<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Sidebar Menu - Bootstrap 5</title>
</head>
<style >
	.sidebar {
		position: fixed;
		top: 0;
		left: 0;
		height: 100vh;
		width: 250px;
		background-color: #0C134F;
		padding: 20px;
		
		font-family: 'Poppins', sans-serif
		color: #fff;
	}

	.main-content {
		margin-left: 250px;
		padding: 20px;
	}

	*{
		font-size: 12px;
	}

	.nav-pills li a:hover {
		background-color: #2F58CD;
		color: #fff;
	}

	.nav-pills li a{
		color: #fff;
	}

	.p-2{
		background-color: #b8d8be;
	}

	a{
		color: black;
	}

	a:hover{
		color: #234d20;
	}
	.warning {
		color: #FF0000;
	}
</style>
<body>
	<div class="sidebar">
		<a class="d-flex text-decoration-none mt-1 align-item-center">
			<span class="fs-4 d-none d-sm-inline text-white">
				Formulir Peserta Didik
			</span>
		</a>

		<ul class="nav nav-pills flex-column mt-5">
			<li class="nav-item py-2 py-sm-0 ">
				<a href="index.php" class="nav-link" aria-current="page">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
						<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
					</svg>
					<span class="fs-4 ms-3 d-none d-sm-inline">
						Registrasi 
					</span>
				</a>
			</li>

			<li class="nav-item py-2 py-sm-0 ">
				<a href="index2.php" class="nav-link" aria-current="page">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
					</svg>
					<span class="fs-4 ms-3 d-none d-sm-inline">
						Data Pribadi
					</span>
				</a>
			</li>

			<li class="nav-item py-2 py-sm-0 ">
				<a href="index3.php" class="nav-link active" aria-current="page">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
						<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
					</svg>
					<span class="fs-4 ms-3 d-none d-sm-inline">
						Data Ayah
					</span>
				</a>
			</li>

			<li class="nav-item py-2 py-sm-0">
				<a href="index4.php" class="nav-link" aria-current="page">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
						<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
					</svg>
					<span class="fs-4 ms-3 d-none d-sm-inline">
						Data Ibu
					</span>
				</a>
			</li>
		</ul>
		<div class="dropdown open mt-5">
			<button class="btn border-none dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-expanded="false">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right text-white" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
					<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
				</svg>
				<span class="ms-3 text-white" style="font-size:19px;">Profile</span>
			</button>

			<div class="dropdown-menu" aria-labelledby="triggerId">
				<a type="button" class="dropdown-item" href="logout.php">Log Out</a>

			</div>
		</div>
	</div>

	<div class="main-content" >
		<div class="container text-center m-3">
			<h2 style="font-weight: bold;">FORMULIR PESERTA DIDIK</h2>	
		</div>

		<div class="container">
			<div class="row g-3 align-items-center">
				<div class="col-auto">
					<h5>
						Tanggal :
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$tanggal = date('d/m/Y');
						echo $tanggal;
						?>
					</h5>
				</div>
			</div>
		</div>

		<div class="container text-white mt-1 mb-1" style="background:#000; ">
			<h5>DATA AYAH KANDUNG</h5>
		</div>

		<div class="container">
			<form method="post" action="proses3.php" onsubmit="showAlert(event)">	
				<div class="row g-3 align-items-center">
					<div class="col-3">
						<label for="namaAyah" class="col-form-label">34. Nama Ayah Kandung</label>
					</div>
					<div class="col">
						<input type="text" id="namaAyah" name="namaAyah" class="form-control" required>
					</div>
				</div>

				<div class="row g-3 align-items-center">
					<div class="col-3">
						<label for="lahirAyah" class="col-form-label">35. Tahun Lahir</label>
					</div>
					<div class="col">
						<input type="text" id="lahirAyah" name="lahirAyah" class="form-control" required>
					</div>
				</div>

				<div class="row g-3 align-items-center">
					<div class="col-3">
						<label for="pendidikanAyah" class="col-form-label">36. Pendidikan</label>
					</div>
					<div class="col">
						<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="pendidikanAyah" name="pendidikanAyah">
							<option value="tdkSekolah">Tidak Sekolah</option>
							<option value="putusSd">Putus SD</option>
							<option value="sd">SD Sederajat</option>
							<option value="smp">SMP Sederjat</option>
							<option value="sma">SMA Sederajat</option>
							<option value="d1">D1</option>
							<option value="d2">D2</option>
							<option value="d3">D3</option>
							<option value="s1">D4/S1</option>
							<option value="s2">S2</option>
						</select>
					</div>
				</div>

				<div class="row g-3 align-items-center">
					<div class="col-3">
						<label for="pekerjaanAyah" class="col-form-label">37. Pekerjaan</label>
					</div>
					<div class="col">
						<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="pekerjaanAyah" name="pekerjaanAyah">
							<option value="tdkBekerja">Tidak bekerja</option>
							<option value="nelayan">Nelayan</option>
							<option value="petani">Petani</option>
							<option value="peternak">Peternak</option>
							<option value="pns">PNS/TNI/POLRI</option>
							<option value="karyawan">Karyawan Swasta</option>
							<option value="pedagangKecil">Pedagang Kecil</option>
							<option value="pedagangBesar">Pedagang Besar</option>
							<option value="wiraswastaAyah">Wiraswasta</option>
							<option value="wirausaha">Wirausaha</option>
							<option value="buruh">Buruh</option>
							<option value="pensiunan">Pensiunan</option>
							<option value="lain">Lain-lain</option>
							<option value="wirausaha">Wirausaha</option>
						</select>
					</div>
				</div>

				<div class="row g-3 align-items-center">
					<div class="col-3">
						<label for="penghasilanAyah" class="col-form-label">38. Penghasilan Bulanan</label>
					</div>
					<div class="col">
						<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="penghasilanAyah" name="penghasilanAyah">
							<option value="1">Kurang dari 500.000</option>
							<option value="2">500.000 - 999.999</option>
							<option value="3">1 juta - 1.999.999</option>
							<option value="4">2 juta - 4.999.999</option>
							<option value="5">5 juta - 20 juta</option>
							<option value="6">lebih dari 20 juta</option>
						</select>
					</div>
				</div>

				<div class="row g-3 align-items-center">
					<div class="col-3">
						<label for="berkebutuhanAyah" class="col-form-label">39. Berkebutuhan Khusus</label>
					</div>
					<div class="col">
						<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="berkebutuhanAyah" name="berkebutuhanAyah">
							<option value="tdk">Tidak</option>
							<option value="netra">netra</option>
							<option value="rungu">Rungu</option>
							<option value="grahitaRingan">Grahita Ringan</option>
							<option value="grahitaSedang">Grahita Sedang</option>
							<option value="daksaRingan">Daksa Ringan</option>
							<option value="daksaSedang">Daksa Sedang</option>
							<option value="laras">Laras</option>
							<option value="wicara">Wicara/option>
							<option value="tuna">Tuna Ganda</option>
							<option value="hiper">Hiper Aktif</option>
							<option value="cerdas">Cerdas Istimewa</option>
							<option value="bakat">Bakat Istimewa</option>
							<option value="sulitBelajar">Kesulitan Belajar</option>
							<option value="narkoba">Narkoba</option>
							<option value="indigo">Indigo</option>
							<option value="down">Down Sindrome</option>
							<option value="autis">Autis</option>
						</select>
					</div>
				</div>

				<div class="container mt-5">
					<div class="row">
						<div class="col">
							<input type="submit" value="Submit" class="btn btn-primary">
							<input type="reset" value="Reset" class="btn btn-secondary " onclick="resetForm()">
						</div>
						<div class="col text-end">
							<a href="index4.php" class="btn btn-warning" style="text-decoration: none; color: #000;">Next</a>
						</div>
					</div>
				</div>
			</form>
			<div id="alertContainer" class="mt-3"></div>
		</div>
	</div>

		<script>
			function resetForm() {
				var elements = document.getElementsByClassName("form-control");
				for (var i = 0; i < elements.length; i++) {
					elements[i].value = ""; // Mengosongkan nilai inputan
				}
			}

			function validateForm() {
				var name = document.getElementById('namaAyah').value;
				var email = document.getElementById('lahirAyah').value;
				var email = document.getElementById('pendidikanAyah').value;
				var email = document.getElementById('pekerjaanAyah').value;
				var email = document.getElementById('penghasilanAyah').value;
				var email = document.getElementById('berkebutuhanAyah').value;

				if (name.trim() === '' || email.trim() === '') {
					showAlert('All fields are required!');
					return false;
				}

				return true;
			}

			function showAlert(message) {
				var alertContainer = document.getElementById('alertContainer');
				alertContainer.innerHTML = '<div class="alert alert-danger" role="alert">' +
					message +
					'</div>';
			}

		</script>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	-->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</body>
</html>
