<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ppdb_24";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal tarhubung dengan database: " . mysqli_connect_error());
}
?>