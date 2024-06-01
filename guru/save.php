<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');

    $nip  = $_POST['nip'];
    $nama  = $_POST['nama'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $telepon  = $_POST['telepon'];

    $acak = rand();
    $namafile = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $akhiran = pathinfo($namafile, PATHINFO_EXTENSION);
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'svg');

    if(!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $sql = "INSERT INTO guru SET nip='$nip', nama='$nama',  tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', telepon='$telepon'";
    } else{
        if(!in_array($akhiran, $ekstensi)) {
            header("location:index.php?m=guru");
            echo '<script language="JavaScript">';
                echo 'alert("Akhiran file tidak diizinkan.")';
            echo '</script>';
        } else {
            if ($ukuran < 100000000000) {
                $nmfile = $acak . '_' . $namafile;
                move_uploaded_file($_FILES['foto']['tmp_name'], 'guru/foto/'.$nmfile);
                $sql = "INSERT INTO guru SET nip='$nip', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', telepon='$telepon', foto='$nmfile'";
            } else {
                // header("location:index.php?m=guru");
                // echo '<script language="JavaScript">';
                //     echo 'alert("Ukuran file anda, terlalu besar.")';
                // echo '</script>';
                echo 'disini 2';
            }
        }
      
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=guru&s=view');
    }else{
        include "index.php?m=guru&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}