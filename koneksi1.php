<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_xiirpl1";

$db = mysqli_connect ($server, $user, $password, $nama_database);

if (!$db ){
    die("Gagal tersambung dengan database". mysqli_connect_error());
}
?>