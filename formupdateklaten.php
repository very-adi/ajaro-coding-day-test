<doctype ! html>
<head>
	<title>formulir penambahan data_barang| input data_barang</title>
</head>
<body>
   <header>
        <h3>Form update	 data_barang</h3>
	<center><u><h1>update data_barang</h1></center></u>
   </header>

    <form action="formupdateklaten.php" method="POST">

        <fieldset>

        <p>
	<center>
            <label for="Kode">Kode: </label>
            <input type="text" name="Kode" size="24" maxlength="35">
        </p>
        <p>
            <label for="Nama">Nama: </label>
             <input type="text" name="Nama" size="24" maxlength="35">
        </p>
	<p>
            <label for="Deskripsi">Deskripsi: </label>
             <input type="textarea" name="Deskripsi" size="27,2"maxlength="37">
        </p>
	<p>
            <label for="Stock">Stock: </label>
             <input type="textarea" name="Stock" size="23,9"maxlength="35">
        </p>
        <p>
            <label for="Harga">Harga: </label>
             <input type="text" name="Harga" size="23,9" maxlength="35">
        </p>
	<p>
            <label for="Berat">Berat: </label>
             <input type="text" name="Berat" size="18,2" maxlength="30">gram
        </p>
</center>
	<p>
            <center><input type="submit" name"submit" value="Simpan" /></center>
        </p>

        </fieldset>
	</form>
</html>
</body>