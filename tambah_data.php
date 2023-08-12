<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pimpinan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<?php

include "config.php";
session_start();
$username = $_SESSION['username'];
$query = "SELECT * FROM admin WHERE username='$username'";
$result = mysqli_query($con, $query);

$id_user = $_SESSION['id_user'];
$query = "SELECT * FROM data WHERE id_user='$id_user'";
$res = mysqli_query($con, $query);
?>
<?php
 if(mysqli_num_rows($result)>0){
    $user = mysqli_fetch_array($result);
        $_SESSION["id_user"] = $user["id_user"];
 }
?>

</head>
<body>
<div class="container">
		<h2 style="text-align: center;">Tambah Data Pimpinan</h2>
		<form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_barang" required="required">
			</div>
			<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
				<input type="text" class="form-control" placeholder="Masukkan Kontak" name="keterangan" required="required">
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

</section>
<!-- Main content -->

<!-- /.Main content -->
</div>
