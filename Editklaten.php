<?php

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
        header('Location: edit.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("...*****AKSKES DILARANG*****...");
}

?>