<?php

include("config.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah_asal'];

    $sql ="INSERT INTO data_casis (nama, nisn, jenis_kelamin, alamat, sekolah_asal) VALUE ('$nama', '$nisn', '$jk', '$alamat', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if( $query){
        header('Location: index.php?status=sukses');

    }else {
        header('Location: index.php?status=gagal');

    }
}else{
    die("Access Denied..");
}
?>