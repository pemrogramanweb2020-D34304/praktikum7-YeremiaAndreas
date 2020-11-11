<?php

include("config.php");

if( isset($_GET['id']) ){
    $nik = $_GET['NIK'];

    $sql = "DELETE FROM data_kependudukan WHERE id=$nik";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: form.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>