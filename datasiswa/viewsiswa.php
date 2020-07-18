<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA SISWA</title>

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
           <h1>DATA SISWA</h1>
    </div>
    <table class="table table-hover table-color mt-4 text-center animated zoomIn" id="table_id">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Siswa</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../kursus/config/koneksi.php";
                $no = 1;
                $datasiswa=mysqli_query($koneksi, "SELECT * FROM tbsiswa") or die (mysqli_error());

                if(!$datasiswa){
                    printf("Error : %sn\n", mysqli_error($koneksi));
                    exit();
                }

                while($ds=mysqli_fetch_array($datasiswa)){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ds['id_siswa'] ?></td>
                        <td><?= $ds['nama_siswa'] ?></td>
                        <td><?= $ds['alamat'] ?></td>
                        <td><?= $ds['pekerjaan'] ?></td>
                        <td>
                            <a href="editsiswa.php?id=<?= $ds['id_siswa'];?>" class="btn btn-primary px-3 py-2 ml-2" style="width: 60px" >
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="deletesiswa.php?id=<?= $ds['id_siswa'];?>" class="btn btn-danger px-3 py-2 ml-1" style="width:60px"  >
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            
        </tbody>
    </table>
    <div class="row justify-content-center">
        <div class="col-2">
            <a href="formsiswa.php" class="btn btn-warning text-light text-center animated fadeInUp" >
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
