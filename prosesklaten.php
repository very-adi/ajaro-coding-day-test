<?php
include("koneksi.php");

//cek apakah tombol Add sudah diklik belum
if(isset($_post['Tambah'])){

    //ambil data formulir
    $Kode = $_post['Kode'];
    $Nama = $_post['Nama'];
    $Harga = $_post['Harga'];
    //buat query
    $sql = "insert into data_barang (Kode,Nama,Harga) value ('$Kode','$Nama','$Harga')";
    $query = mysqli_query($db,$sql);

    //apakah query simpan berhasil?
    if ($query) {

        //kalau berhasilkan dialihkan ke halaman banjar4.php dengan status=SUKSES
        header('location:data_barang.php?status=SUKSES');
    }else {
            //kalau gagal alihkan kehalaman banjar4.php dengan status=GAGAL
            header('location:data_barang.php?status=GAGAL');
    }

} else {
    die ("AKSES DILARANG...");
} 


?>