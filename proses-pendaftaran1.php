<?php
include("koneksi1.php");
if(isset($_POST['Submit'])){
    $nama = $_POST['nama'];
	$tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO tb_daftar (nama, tempat, tanggal, alamat, jk, agama) VALUES ('$nama', '$tempat', '$tanggal', '$alamat', '$jk', '$agama')";
	$query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: form_pendaftaran.php?status=sukses');
	} 
}
?>