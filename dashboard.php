<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

<?php 

include "config.php";



session_start();
$id_user = $_SESSION['id_user'];
$username = $_SESSION['username'];

if($_SESSION['status'] != "login"){
    header("location:index.php?pesan=belum_login");
}

?>

<div class="container">
<h1>Username : <?= $username ?></h1>
<table class="table table-striped mt-3">
            <tr>			
				<th>No</th>
                <th>ID USER</th>
				<th>NAMA BARANG</th>
				<th>KETERANGAN</th>
			</tr>
            <?php 
	 		$id = 1;
			$data = mysqli_query($con,"select * from data WHERE id_user='$id_user' ORDER BY id DESC");
			while($barang = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $id++; ?></td>
					<td><?php echo $barang ['id_user']; ?></td>
					<td><?php echo $barang ['nama_barang']; ?></td>
					<td><?php echo $barang ['keterangan']; ?></td>
				</tr>
				<?php
			}
 
			?>
</table>

<a href="logout.php">Logout</a>
<a href="tambah_data.php">Tambah Data</a>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>