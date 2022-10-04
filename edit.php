<?php
include('koneksi.php');
if(!isset($_GET['id'])){
    header('Location: tabel-daftar.php?');
}
//Nama : wahyu rizky nh
$kode = $_GET['id'];
$sql = "SELECT * FROM tb_daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);
$tb_daftar = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT DATA DIRI PENDAFTAR</title>
</head>
<body>
    <h3>EDIT DATA DIRI PENDAFTAR</h3>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $tb_daftar['id'] ?>"/>
        <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" value="<?php echo $tb_daftar['nama'] ?>"/>
            </p>
            <p>
                <label for="tempat">Tempat Lahir :</label>
                <input type="text" name="tempat" value="<?php echo $tb_daftar['tempat'] ?>"/>
            </p>
            <p>
                <label for="tanggal">Tanggal Lahir :</label>
                <input type="date" name="tanggal" value="<?php echo $tb_daftar['tanggal'] ?>"/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" rows="5" value="<?php echo $tb_daftar['alamat'] ?>" ></textarea>
            </p>
            <p>
                <label for="jk">Jenis Kelamin :</label>
                <label><input type="radio" name="jk" value="laki-laki" <?php echo ('laki-laki') ? "checked": "" ?> />Laki - Laki</label>
                <label><input type="radio" name="jk" value="prempuan" <?php echo ('prempuan') ? "checked": "" ?> />Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                <option <?php echo ('Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ('kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ('katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ('hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ('budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ('konghucu') ? "selected": "" ?>>Konghucu</option>
                </select>
            </p>
            <p>
            <input type="submit" value="Daftar" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>