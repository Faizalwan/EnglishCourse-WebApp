<?php 
		include "../../kursus/config/koneksi.php";

		if(isset($_POST['submit'])){
			// ambil data dari form
			$namasiswa = $_POST['namasiswa'];
			$alamat=$_POST['alamat'];
			$pekerjaan=$_POST['pekerjaan'];

			// tambah data ke tbsiswa
			$insertsiswa = mysqli_query($koneksi, "INSERT INTO tbsiswa VALUES ('','$namasiswa','$alamat','$pekerjaan')");

			if($insertsiswa)
				echo "<script type='text/javascript'> alert('Data Siswa Berhasil Disimpan') </script>";
			else
				echo "<script type='text/javascript'> alert('Data Siswa Gagal Disimpan') </script>";
		}
		include "viewsiswa.php";
	?>