<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM tb_daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:tabel-daftar.php?status=sukses");
} else {
    die ("akses dilarang");
}
?>
<!-- Nama : wahyu rizky nh-->