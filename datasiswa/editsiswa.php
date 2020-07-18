<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA SISWA</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/bootstrap.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/animate.css">

     <!-- Font Awesome -->
     <link rel="stylesheet" type="text/css" href="all.css">

	 <!-- Siswa Style -->
     <link rel="stylesheet" type="text/css" href="siswa.css">

</head>
<body>
<div class="container">
    <div class="text-center mt-4 animated fadeInDown" style="background-size: 1px" >
           <h1>EDIT DATA SISWA</h1>
    </div>
    <?php
        include "../../kursus/config/koneksi.php";
        $id = $_GET['id'];
        $datasiswa = mysqli_query($koneksi, "SELECT*FROM tbsiswa WHERE id_siswa='$id'");
        while($ds=mysqli_fetch_array($datasiswa))
        {
    ?>	
	<section class="section-form mx-auto animated zoomInDown">
		<div class="row">
			<div class="col-4" >
				<a href="../../kursus/datasiswa/viewsiswa.php">
					<img src="../../kursus/assets/logo_siswa.svg" style="width: 80%; margin-top:45%; margin-left:25%;"  class="">
				</a>
			</div>
			<hr>
			<div class="col-7">
				<form class="p-3 mt-5" action="update.php" method="POST" >
					<div class="form-group">
						<label for="nama">Nama Lengkap</label>
						<input type="hidden" class="form-control" name="id_siswa" value=<?= $ds['id_siswa']; ?>>
                        <input type="text" class="form-control" id="nama" name="namasiswa" value="<?= $ds['nama_siswa']; ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" id="alamat" value="<?= $ds['alamat'];?>" name="alamat">
					</div>
					<div class="form-group">
						<label for="alamat">Pekerjaan</label>
						<input type="text" class="form-control" id="pekerjaan" value="<?= $ds['pekerjaan'];?>" name="pekerjaan">
					</div>
					<button class="btn btn-success mt-2 text-light" style="width: 180px; font-weight:bold"  type="submit" name="submit">Update</button>
					<button class="btn btn-light mt-2 ml-2 float-right" style="width: 180px; color:#c6c6c6;" type="reset">Reset</button>
				</form>
			</div>
		</div>
	</section>
    <?php
        }
    ?>
    </div>
    <script src="../../kursus/libraries/js/bootstrap.js"></script>
    <script src="../../kursus/libraries/js/all.js"></script>
</body>
</html>
