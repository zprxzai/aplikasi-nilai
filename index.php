<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda Aplikasi Nilai By Zai</title>
    <link rel="shortcut icon" href="gambar/zai logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
 a{
    text-decoration: none;
    text-decoration-line: none;
    text-decoration-style: none;
    text-decoration-color: none;
    color: black;
   
 }
 .kartel{
    margin-top: auto;
    width: 100%;
    position: fixed;
    bottom: 0;
 }
nav{
   background-color: lightblue;
 }
</style>
<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">
                <img src="gambar/zai logo1.png" alt="Bootstrap" height="74px">
                App Nilai
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=".">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=kelas">kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=siswa">siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=mapel">mata pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=guru">guru</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nilai
                    </button>
                    <ul class="dropdown-menu">  
                        <li><button class="dropdown-item" type="button"><a href="?m=kelas">kelas</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="?m=siswa">Siswa</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="?m=mapel">Mata pelajaran</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="?m=guru">Guru</a></button></li>
                    </ul>
                </div>
                &nbsp;
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php include_once('webpro.php'); ?>
    </div>
    <br>
    <div class="fix-bottom">
        <div class="card kartel">
            <div class="card-body">
                &copy; 2024 - <?= date("Y") ?> - <?= date("m") ?> - <?= date("d") ?> Web Programming

                <!-- Ini adalah komentar HTML di dalam blok PHP -->

                <!-- Y: Tahun empat digit (misalnya, 2024). -->
                <!-- m: Bulan dua digit (01 hingga 12). -->
                <!-- d: Hari dua digit (01 hingga 31). -->
                <!-- H: Jam dalam format 24 jam (00 hingga 23). -->
                <!-- i: Menit dua digit (00 hingga 59). -->
                <!-- s: Detik dua digit (00 hingga 59). -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>