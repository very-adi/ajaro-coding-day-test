<?php
include("koneksi.php");
?>

<nav>

	<a href="formklaten.php">
	<p align="center">
	<input type="submit" value="Tambah" name="Tambah" /></a>
	</p>
	<center>

<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
		   if($_GET['status'] == 'SUKSES'){
				echo "inputan barang berhasil...!";
		 } else {
			    echo "inputan barang GAGAL...!";
		   }

		

		   include("koneksi.php");
			  if(isset($_POST['Simpan']) ){
		   
			   // ambil data dari formulir
			   $Kode = $_POST['Kode'];
			   $Nama = $_POST['Nama'];
			   $Harga = $_POST['Harga'];
			   // buat query update
			   $sql = "UPDATE barang SET Kode='$Kode',Nama='$Nama','Harga',='$Harga' WHERE Kode=$Kode";
			   $query = mysqli_query($db, $sql);
		   
			   // apakah query update berhasil?
			   if( $query ) {
				   // kalau berhasil alihkan ke halaman list-siswa.php
				   header('Location: Editklaten.php');
			   } else {
				   // kalau gagal tampilkan pesan
				   die("Gagal menyimpan perubahan...");
			   }
		   
		   
		   } else {
			   die("...*****AKSKES DILARANG*****...");
		   }
		   
		   

		   include("koneksi.php");
		   
		   if( isset($_GET['Kode']) ){
		   
			   
			   $Kode = $_GET['Kode'];
		   
			   
			   $sql = "DELETE FROM barang WHERE Kode=$Kode";
			   $query = mysqli_query($db, $sql);
		   
			   
			   if( $query ){
				   header('Location: deleteklaten.php');
			   } else {
				   die("gagal menghapus...");
			   }
		   
		   } else {
			   die("...AKSES DILARANG...");
		   }
		   
		   ?>





	<?php endif;  ?>
	<html>
<br>
<table border="1"width="340px"height="40px">
<thead>
    <tr>
		   <th>Kode</th>
		   <th>Nama</th>
		   <th>Harga</th>
		   <th colspan="2">Aksi</th>
</tr>
</thead>
<tbody>





<?php
$sql = "select * from barang";
$query = mysqli_query($db,$sql);
while($data_barang = mysqli_fetch_array($query)){
    echo "<tr>";
	echo "<td>".$data_barang['Kode']."</td>";
	echo "<td>".$data_barang['Nama']."</td>";
	echo "<td>".$data_barang['Harga']."</td>";
	echo "<td><a href='edit.php?Kode=".$data_barang['Kode']."'>Edit</a> | ";
	echo "<td><a href='deleteklaten.php?Kode=".$data_barang['Kode']."'>Delete</a> | ";
}
?>

</body>
</center>
</html>