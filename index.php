<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Cara Menampilkan Data Sesuai </h1>
    
    <form action="proses_login.php" method="post">
              <div class="form-group first mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password" id="password">
              </div>
              <div class="form-group last mb-3">
              <h6>Belum Punya akun ? Buat <a href="regis.php">Disini</a></h6>
              </div>
              <button type="submit" name="btnlogin" class="btn btn-block btn-primary">login</button>
              <br>
              <br>
            </form>
            <?php
            
            if(isset($_GET['pesan'])){
              if($_GET['pesan'] == "gagal"){ ?>
                  <br>
                  <div class="alert alert-danger" role="alert">
                       Anda Gagal Login
                  </div>
              <?php }else if($_GET['pesan'] == "logout"){ ?>
                  <br>
                  <div class="alert alert-success" role="alert">
                       Anda berhasil Logout
                  </div>
              <?php }else if($_GET['pesan'] == "belum_login"){ ?>
                  <br>
                   <div class="alert alert-info" role="alert">
                   Anda belum login
              </div>
             <?php } ?>
           <?php } ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>