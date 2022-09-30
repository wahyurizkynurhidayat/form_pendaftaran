<!DOCTYPE html>
<html>
<head>
	<title>Form pendaftaran</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran</h3>
	</header>
	
	<form action="proses-pendaftaran1.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">nama: </label>
			<input type="text" name="nama"  />
		</p>
		<p>
			<label for="tempat">tempat lahir: </label>
			<input type="text" name="tempat" />
		</p>
        <p>
            <label for="tanggal">tanggal lahir: </label>
            <input type="date" name="tanggal" />
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <textarea name="alamat" rows="3"></textarea>
        </p>
		<p>
			<label for="jk">Jenis Kelamin: </label>
			<label><input type="radio" name="jk" value="laki2" /> laki laki</label>
			<label><input type="radio" name="jk" value="perempuan" /> perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>islam</option>
				<option>kristen</option>
				<option>katolik</option>
				<option>budha</option>
				<option>hindu</option>
			</select>
		</p>
		<p>
			<input type="submit" value="Submit" name="Submit" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>