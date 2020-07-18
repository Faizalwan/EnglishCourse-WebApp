<?php 
		include "../../kursus/config/koneksi.php";

		$id_kelas = $_GET['id'];
			
			$deletekelas = mysqli_query($koneksi, "DELETE FROM tbkelas WHERE id_kelas='$id_kelas'");

			if($deletekelas)
				echo "<script type='text/javascript'> alert('Data kelas Berhasil Dihapus') </script>";
			else
				echo "<script type='text/javascript'> alert('Data kelas Gagal Dihapus') </script>";
		include "viewkelas.php";
	?>