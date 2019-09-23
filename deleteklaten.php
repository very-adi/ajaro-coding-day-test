<?php

include("koneksi.php");

if( isset($_GET['Kode']) ){
    
    // ambil id dari query string
    $Kode = $_GET['Kode'];
    // buat query hapus
    // $sql = "DELETE FROM barang WHERE Kode=$Kode";
    $query = mysqli_query($db, "delete  from barang where Kode='$Kode'");

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: deleteklaten.php');
    } else {
        die("gagal menghapus...");
    }

}else{
    header('Location: data_barang.php');
}

?>