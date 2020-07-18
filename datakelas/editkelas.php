<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA KELAS</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/bootstrap.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/animate.css">

     <!-- Font Awesome -->
     <link rel="stylesheet" type="text/css" href="all.css">

	 <!-- Kelas Style -->
     <link rel="stylesheet" type="text/css" href="kelas.css">

</head>
<body>
<div class="container">
    <div class="text-center mt-4 animated fadeInDown" style="background-size: 1px" >
           <h1>EDIT DATA KELAS</h1>
    </div>
    <?php
        include "../../kursus/config/koneksi.php";
        $id = $_GET['id'];
        $datakelas = mysqli_query($koneksi, "SELECT*FROM tbkelas WHERE id_kelas='$id'");
        while($dk=mysqli_fetch_array($datakelas))
        {
    ?>	
	<section class="section-form mx-auto animated zoomInDown">
		<div class="row">
			<div class="col-4" >
				<a href="../../kursus/datakelas/viewkelas.php">
					<img src="../../kursus/assets/logo_kelas.svg" style="width: 80%; margin-top:40%; margin-left:25%;">
				</a>
			</div>
			<hr>
			<div class="col-7">
				<form class="p-3 mt-5" action="updatekelas.php" method="POST">
					<div class="form-group">
						<label for="nama">Nama Kelas</label>
						<input type="hidden" class="form-control" name="id_kelas" value=<?= $dk['id_kelas']; ?>>
                        <input type="text" class="form-control" id="nama" name="nama_kelas" value="<?= $dk['nama_kelas']; ?>">
					</div>
					<div class="form-group">
						<label for="tahun">Tahun Ajar</label>
						<input type="text" class="form-control" id="tahun" value="<?= $dk['th_ajar'];?>" name="th_ajar">
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
