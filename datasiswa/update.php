<?php 
		include "../../kursus/config/koneksi.php";

		if(isset($_POST['submit'])){
            // ambil data dari form
            $id_siswa=$_POST['id_siswa'];
			$namasiswa = $_POST['namasiswa'];
			$alamat=$_POST['alamat'];
			$pekerjaan=$_POST['pekerjaan'];

			// tambah data ke tbsiswa
			$updatesiswa = mysqli_query($koneksi, "UPDATE tbsiswa SET nama_siswa='$namasiswa',alamat='$alamat',pekerjaan='$pekerjaan' WHERE id_siswa='$id_siswa'");

			if($updatesiswa)
				echo "<script type='text/javascript'> alert('Data Siswa Berhasil Diupdate') </script>";
			else
				echo "<script type='text/javascript'> alert('Data Siswa Gagal Diupdate') </script>";
		}
		include "viewsiswa.php";
	?>