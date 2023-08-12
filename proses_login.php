<?php
   // menghubungkan koneksi
   include "config.php";

   // menagkap data yang dikirim dari form
  
   $username = $_POST['username'];  
   $password = $_POST['password'];

   // menyeleksi data admin dengan username dan password yg sesuai
   $data = mysqli_query($con,"select * from admin where username='$username' and password='$password'");

   // menghitung jumlah data yang ditemukan
 if(mysqli_num_rows($data)>0){
   $row = mysqli_fetch_array($data);
   session_start();
   $_SESSION['id_user'] = $row['id_user'];
   $_SESSION['username'] = $row['username'];
   $_SESSION['password'] = $row['password'];
   $_SESSION['status'] = "login";

   header("location:dashboard.php");
   }else{
       header("location:index.php?pesan=gagal");
   }


?>


	
