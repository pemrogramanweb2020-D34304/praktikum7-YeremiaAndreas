<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nik = $_POST['NIK'];
    $nama = $_POST['NAMA'];
    $tanggal_lahir= $_POST['Tanggal_lahir'];
    $tempat_lahir = $_POST['Tempat_lahir'];
    $foto = $_POST['Foto'];

    $sql = "INSERT INTO data_kependudukan (NIK, NAMA, Tempat_lahir, Tanggal_lahir, Foto) VALUE ('$nik', '$nama', '$tanggal_lahir', '$tempat_lahir', '$foto')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} 
else {
    die("Akses dilarang...");
}

?>