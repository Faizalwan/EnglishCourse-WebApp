<?php 
		include "../../kursus/config/koneksi.php";

		$id_siswa = $_GET['id'];
			
			$deletesiswa = mysqli_query($koneksi, "DELETE FROM tbsiswa WHERE id_siswa='$id_siswa'");

			if($deletesiswa)
				echo "<script type='text/javascript'> alert('Data Siswa Berhasil Dihapus') </script>";
			else
				echo "<script type='text/javascript'> alert('Data Siswa Gagal Dihapus') </script>";
		include "viewsiswa.php";
	?>