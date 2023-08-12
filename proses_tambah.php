<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_user = $_REQUEST['id_user'];
$nama_barang = $_POST['nama_barang'];
$keterangan = $_POST['keterangan'];

mysqli_query($con,"insert into data values('','$id_user','$nama_barang','$keterangan')");

//$sql = "INSERT INTO data id_user values 'id_user'";
//mysqli_query($con, $sql);

//$query = mysqli_query($con,"SELECT id_user FROM data ORDER BY id_user DESC LIMIT 1");
// $data = mysqli_fetch_array($query);

// menginput data ke database
//mysqli_query($con,"insert into data values('','','$nama_barang','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>