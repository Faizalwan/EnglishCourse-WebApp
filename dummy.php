<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Utama</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../kursus/libraries/css/all.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../kursus/libraries/css/bootstrap.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../kursus/libraries/css/animate.css">
    <style>
        body {
            font-family : 'Poppins', sans-serif;
            /* background : #4C4C4C; */
            background-image: linear-gradient(to right, rgba(228,250,255,1), rgba(255,255,255,1));
        }

        h4{
            font-weight:700;
            color:#464646;
        }

        .card{
            background: rgba(255, 255, 255, 1 ) !important;
            border : none;
            border-radius: 8px !important;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            bottom : 0;
        }
        .card-img-top{
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        hr{
            margin-left:-20px;
            margin-right:-20px;
        }
        .a1{
            animation-delay : 0.3s;
        }
        .a2{
            animation-delay : 0.4s;
        }
        .a3{
            animation-delay : 0.5s;
        }
        .flash{
            animation : flash 3s infinite;
        }
        .judul1{
            font-weight : bold;
            font-size : 120px;
            color: #BAE8F3;
            position : absolute;
            top : 70px;
            right : 0;
            opacity : 0.9;
            animation-delay : 1s;
        }
        .judul2{
            font-weight : bold;
            font-size : 50px;
            color: #BAE8F3;
            position : absolute;
            top : 20px;
            left : 90px;
            opacity : 0.3;
            animation-delay : 1s;
        }
        .judul3{
            font-weight : bold;
            font-size : 110px;
            color: #BAE8F3;
            position : absolute;
            bottom : -10px;
            right : 35%;
            opacity : 0.8;
            animation-delay : 1s;
        }
        .or1{
            position : absolute;
            top : 0;
            right : 0;
            width : 30%;
            opacity : 0.6;
        }
        .or2{
            position : absolute;
            top : 0;
            ;eft : 0;
        }
        .or3{
            position : absolute;
            bottom : 20px;
            left : 40px;
            width : 10%;
        }
        
    </style>

</head>
<body>
    <!-- Ornament -->
    <img src="../kursus/assets/ornamen1.png" class="or1 animated fadeInRight" >
    <h1 class="judul1 animated fadeIn" >LISTEN</h1>
    <img src="../kursus/assets/ornamen2.png" class="or2 animated fadeInDown" >
    <h1 class="judul2 animated fadeIn" >WRITE</h1>
    <img src="../kursus/assets/ornamen3.png" class="or3 animated fadeIn" >
    <h1 class="judul3 text-center animated fadeIn" >SPEAK</h1>



    <div class="container">
        <div class="text-center m-0 animated fadeInDown" style="background-size: 1px" >
           <a href="index.php">
               <img src="../kursus/assets/logo.png" style="width: 40%;" >
            </a>
        </div>
            <div class="row mb-3 ml-4">
            <div class="col animated fadeInUp a1 ">
                <div class="card" style="width: 18rem;">
                    <img src="../kursus/assets/siswa.jpg" class="card-img-top" alt="siswa.jpg">
                        <div class="card-body ">
                            <h4 class="text-center" >SISWA</h4>
                            <p class="card-text text-center">
                                Terbuka untuk semua kalangan baik untuk yang masih sekolah hingga yang sudah bekerja.</p>
                            <hr style="margin-left:-20px; margin-right:-20px">
                            <a href="viewkelas.php" class="btn btn-primary btn-block" >Lihat lebih <i class="fas fa-angle-double-right ml-1 flash"></i></a>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="card animated fadeInUp a2" style="width: 18rem;">
                    <img src="../kursus/assets/kelas.jpg" class="card-img-top" alt="kelas.jpg">
                        <div class="card-body">
                            <h4 class="text-center">KELAS</h4>
                            <p class="card-text text-center">
                               Tersedia kelas <b>REGULER, PRIVATE, ADVANCE</b>. Dapat disesuaikan dengan kebutuhan.
                            </p>
                            <hr style="margin-left:-20px; margin-right:-20px">
                            <a href="viewkelas.php" class="btn btn-primary btn-block" >Lihat lebih <i class="fas fa-angle-double-right ml-1 flash "></i></a>
                        </div>
                </div>
            </div> <div class="col">
                <div class="card animated fadeInUp a3" style="width: 18rem;">
                    <img src="../kursus/assets/nilai.jpg" class="card-img-top" alt="kelas.jpg">
                        <div class="card-body">
                            <h4 class="text-center">NILAI</h4>
                            <p class="card-text text-center">
                               Semua lulusan dijamin dapat meraih skor TOEFL diatas 500 poin, <b>GARANSI UANG KEMBALI</b>.
                            </p>
                            <hr style="margin-left:-20px; margin-right:-20px">
                            <a href="viewkelas.php" class="btn btn-primary btn-block" >Lihat lebih<i class="fas fa-angle-double-right ml-1 flash "></i></a>
                        </div>
                </div>
            </div>
        </div>
        </div>
      
    <script src="../kursus/libraries/js/bootstrap.js"></script>
    <script src="../kursus/libraries/js/all.js"></script>
</body>
</html>


src="../kursus/datasiswa/viewsiswa.php"