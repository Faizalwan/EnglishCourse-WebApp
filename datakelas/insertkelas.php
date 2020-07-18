<?php 
		include "../../kursus/config/koneksi.php";

		if(isset($_POST['submit'])){
			// ambil data dari form
			$namakelas = $_POST['nama_kelas'];
			$tahun=$_POST['th_ajar'];
			// tambah data ke tbkelas
			$insertkelas = mysqli_query($koneksi, "INSERT INTO tbkelas VALUES ('','$namakelas','$tahun')");

			if($insertkelas)
				echo "<script type='text/javascript'> alert('Data kelas Berhasil Disimpan') </script>";
			else
				echo "<script type='text/javascript'> alert('Data kelas Gagal Disimpan') </script>";
		}
		include "viewkelas.php";
	?>