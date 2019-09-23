<?php

$server = "localhost";
$user = "id10972052_barangsql	";
$password = "kepoyhaa";
$nama_database = "id10972052_data_barang";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
	die("gagal terhubung dengan database: " . mysql_connect_error());
}
echo "_____________Koneksi anda telah TERHUBUNG______________";


?>