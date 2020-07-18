<?php 
		include "../../kursus/config/koneksi.php";

		if(isset($_POST['submit'])){
			// ambil data dari form
			$id_nilai = $_POST['idNilai'];
            $id_siswa=$_POST['id_siswa'];
            $kelas = $_POST['kelas'];
            $writing = $_POST['writing'];
            $reading = $_POST['reading'];
            $listening = $_POST['listening'];
			// tambah data ke tbkelas
			$insertnilai = mysqli_query($koneksi, "INSERT INTO tbnilai VALUES ('$id_nilai','$id_siswa','$kelas','$writing','$reading','$listening')");

			if($insertnilai)
				echo "<script type='text/javascript'> alert('Data kelas Berhasil Disimpan') </script>";
			else
				echo "<script type='text/javascript'> alert('Data kelas Gagal Disimpan') </script>";
		}
		include "viewnilai.php";
	?>