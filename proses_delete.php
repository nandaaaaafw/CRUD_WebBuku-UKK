<?php
include('koneksi.php');
$id = $_GET['id_buku'];
$query = "DELETE FROM tbl_buku where id_buku = '$id'";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data buku berhasil dihapus.');window.location='index.php';</script>";
}
