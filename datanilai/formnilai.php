<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM NILAI</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/bootstrap.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/animate.css">

     <!-- Font Awesome -->
     <link rel="stylesheet" type="text/css" href="all.css">

	 <!--Nilai Style -->
     <link rel="stylesheet" type="text/css" href="nilai.css">

</head>
<body>
<div class="container">
    <div class="text-center mt-4 animated fadeInDown" style="background-size: 1px" >
           <h1>FORM NILAI</h1>
    </div>
	
	<section class="section-form mx-auto animated zoomInDown">
		<div class="row">
        <div class="col-4" >
				<a href="../../kursus/datanilai/nilaisiswa.php">
					<img src="../../kursus/assets/logo_nilai.svg" style="width: 80%; margin-top:40%; margin-left:25%;">
				</a>
			</div>
			<hr>
			<?php 
				include "../../kursus/config/koneksi.php";
				// Mendapatkan data siswa
				$id=$_GET['id'];

				// Query Data Kelas
				$datakelas = mysqli_query($koneksi, "SELECT*FROM tbkelas");

				// Mengambil data siswa sesuai id
				$datasiswa = mysqli_query($koneksi, "SELECT*FROM tbsiswa WHERE id_siswa='$id'");
				while($ds=mysqli_fetch_array($datasiswa)){;
			?>
			<div class="col-7">
				<form class="p-3 mt-5" action="insertnilai.php" method="POST" >
					<div class="form-row">
					<div class="form-group col-8">
						<label for="idNilai">ID Nilai</label>
						<input type="text" class="form-control form-control-sm" id="idNilai" placeholder="ID nilai baru" name="idNilai" required>
					</div>
					</div>
                   <div class="form-row">
				   <div class="form-group col-8">
						<label for="nama_siswa">Nama</label>
						<input type="hidden" class="form-control" id="id_siswa" name="id_siswa" value="<?= $ds['id_siswa']; ?>">
						<input type="text" class="form-control form-control-sm disabled" id="nama_siswa" name="nama_siswa" value="<?= $ds['nama_siswa'];?>" readonly>
					</div>
				   <div class="form-group col-4">
						<label for="kelas">Kelas</label>
						<select name="kelas" id="kelas" class="form-control form-control-sm" >
							<?php 
								while($dk=mysqli_fetch_array($datakelas)){
									$id_kelas = $dk['id_kelas'];
									$kelas = $dk['nama_kelas'];

									echo "<option value='$id_kelas'> $kelas </option>";
								}
							?>
						</select>
					</div>
				   </div>
					<div class="form-row">
						<div class="form-group col-4">
							<label for="writing">Nilai Writing</label>
							<input type="number" class="form-control form-control-sm" id="writing" name="writing"required>
						</div>
						<div class="form-group col-4">
							<label for="reading">Nilai Reading</label>
							<input type="number" class="form-control form-control-sm" id="reading" name="reading"required>
						</div>
						<div class="form-group col-4">
							<label for="listening">Nilai Listening</label>
							<input type="number" class="form-control form-control-sm" id="listening" name="listening"required>
						</div>
					</div>
					<button class="btn btn-success mt-2 text-light" style="width: 180px; font-weight:bold"  type="submit" name="submit">Submit</button>
					<button class="btn btn-light mt-2 ml-2 float-right" style="width: 180px; color:#c6c6c6;" type="reset">Reset</button>
				</form>
			</div>
		</div>
	</section>
	<?php } ?>
    </div>
    <script src="../../kursus/libraries/js/bootstrap.js"></script>
    <script src="../../kursus/libraries/js/all.js"></script>
</body>
</html>
