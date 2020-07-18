<?php 
		include "../../kursus/config/koneksi.php";

		if(isset($_POST['submit'])){
            // ambil data dari form
            $id_kelas=$_POST['id_kelas'];
            $namakelas = $_POST['nama_kelas'];
			$tahun=$_POST['th_ajar'];
			// tambah data ke tbkelas
			$updatekelas = mysqli_query($koneksi, "UPDATE tbkelas SET nama_kelas='$namakelas',th_ajar='$tahun' WHERE id_kelas = '$id_kelas'");

			if($updatekelas)
				echo "<script type='text/javascript'> alert('Data Kelas Berhasil Diupdate') </script>";
			else
				echo "<script type='text/javascript'> alert('Data Kelas Gagal Diupdate') </script>";
		}
		include "viewkelas.php";
	?>