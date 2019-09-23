<?php
include('koneksi.php');
$Kode = $_GET['Kode'];
$query = mysqli_query($db,"select * from barang where Kode='$Kode'");
while($data = mysqli_fetch_array($query)){
?>

<doctype ! html>
<head>
	<title>formulir penambahan data_barang| input data_barang</title>
</head>
<body>
   <header>
        <h3>Form input data_barang</h3>
	<u><center><h1>input data_barang</h1></u></center>
   </header>

    <form action="formupdateklaten.php" method="POST">
        <fieldset>
       <p>
	<center>
            <label for="Kode">Kode: </label>
            <input type="text" name="Kode" value="<?= $data['Kode'] ?>" size="24" maxlength="35">
        </p>
        <p>
            <label for="Nama">Nama: </label>
             <input type="text" name="Nama" size="24" maxlength="35">
        </p>
	<p>
            <label for="Deskripsi">Deskripsi: </label>
            <textarea name="Deskripsi" id="" cols="30" rows="5"></textarea>
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
             <input type="text" name="Berat" size="17,9" maxlength="30">gram
        </p>
</center>
	<p>
            <center><input type="submit" value="Tambah" name="Tambah" />
            <button><a href="data_barang.php">Back</a></button></center>
        </p>

        </fieldset>
	</form>
<?php } ?>
</html>
</body>