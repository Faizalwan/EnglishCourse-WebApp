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
           <h1>DATA NILAI</h1>
    </div>
    <table class="table table-hover table-color mt-4 text-center animated zoomIn" id="table_id">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Nilai</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nilai Reading</th>
            <th scope="col">Nilai Writing</th>
            <th scope="col">Nilai Listening</th>
            <th scope="col">Cetak</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../kursus/config/koneksi.php";
                $no = 1;
                $datanilai=mysqli_query($koneksi, "SELECT id_nilai,nama_siswa,nama_kelas,nilai_reading,nilai_writing,nilai_listening FROM tbnilai, tbkelas, tbsiswa WHERE tbnilai.id_siswa = tbsiswa.id_siswa AND tbnilai.id_kelas = tbkelas.id_kelas");

                if(!$datanilai){
                    printf("Error : %sn\n", mysqli_error($koneksi));
                    exit();
                }

                while($dn=mysqli_fetch_array($datanilai)){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $dn['id_nilai'] ?></td>
                        <td><?= $dn['nama_siswa'] ?></td>
                        <td><?= $dn['nama_kelas'] ?></td>
                        <td><?= $dn['nilai_reading'] ?></td>
                        <td><?= $dn['nilai_writing'] ?></td>
                        <td><?= $dn['nilai_listening'] ?></td>
                        <td>
                            <a href="cetaknilai.php?id=<?= $dn['id_nilai'];?>" class="btn btn-success px-3 py-2 ml-2" style="width: 60px" >
                                <i class="fas fa-print"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
    <p class="text-white animated zoomIn"><b>E = Elementary | I = Intermediate | * A = Advance </b></p>
    <div class="row justify-content-center">
        <div class="col-2">
            <a href="nilaisiswa.php" class="btn btn-warning text-light text-center animated fadeInUp" >
                <p style="font-weight:bold; width:125px;" class="m-0" >Add Data</p>
            </a>
        </div>
        <div class="col-2 ">
            <a href="../../kursus/index.php" class="btn btn-light text-center animated fadeInUp mb-3">
                <p style="width:125px; color:#949494;" class="m-0" >Back to Home</p>
            </a>
        </div>
    </div>
    </div>

</body>
</html>
