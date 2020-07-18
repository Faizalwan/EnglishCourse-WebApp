<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA nilai</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/bootstrap.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../../kursus/libraries/css/animate.css">

   
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="all.css">

    <style>
        body {
            font-family : 'Poppins', sans-serif;
            background-image : url("../../kursus/assets/background.jpg");
            background-size : cover;
        }
        .table-color{
            background-color : white;
            border-radius : 8px;
            opacity : 0.92;
        }
        h1{
            font-weight : bold;
            font-size : 40px;
            color : white;
            letter-spacing:5px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="text-center mt-4 animated fadeInDown" style="background-size: 1px" >
           <h1>Nilai Ujian Kursus Bahasa Inggris</h1>
    </div>
    <table class="table table-hover table-color mt-4 text-center animated zoomIn" id="table_id">
        <thead>
            <tr>
            <th scope="col">ID Nilai</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nilai Reading</th>
            <th scope="col">Nilai Writing</th>
            <th scope="col">Nilai Listening</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../kursus/config/koneksi.php";
                $id_nilai = $_GET['id'];
                $datanilai=mysqli_query($koneksi, "SELECT id_nilai,nama_siswa,nama_kelas,nilai_reading,nilai_writing,nilai_listening FROM tbnilai, tbkelas, tbsiswa WHERE tbnilai.id_siswa = tbsiswa.id_siswa AND tbnilai.id_kelas = tbkelas.id_kelas AND id_nilai='$id_nilai'");

                while($dn=mysqli_fetch_array($datanilai)){
                ?>
                    <tr>
                        <td><?= $dn['id_nilai'] ?></td>
                        <td><?= $dn['nama_siswa'] ?></td>
                        <td><?= $dn['nama_kelas'] ?></td>
                        <td><?= $dn['nilai_reading'] ?></td>
                        <td><?= $dn['nilai_writing'] ?></td>
                        <td><?= $dn['nilai_listening'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" align="right">
                            <b><?= "Rata - Rata = ".($dn['nilai_writing']+$dn['nilai_reading']+$dn['nilai_listening'])/3; ?></b>
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
    <br>
   <p class="text-white float-right animated zoomIn">
    <b>
    <?php 
        $tanggalcetak=date('d M Y');
        echo "Bandung, ",$tanggalcetak;
    ?>
    </b>
   </p>
   <script>
        window.print();
   </script>
    </div>

</body>
</html>
