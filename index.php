<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}

if (isset($_POST['submit'])) {
 $user= $_POST['username'];
 $password = $_POST['password'];

 $sql = "SELECT * FROM login WHERE username='$user' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['username'] = $row['username'];
  header("Location: smayogya.php");
 } else {
  echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="gambar_al/fixlogott.png">

 <title>Tiger Turbo Futsal</title>
</head>
<body >
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Login</h4>
              <h6 class="font-weight-light">Login untuk melanjutkan</h6>
              <form action="" method="POST" class="login-email">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit">SIGN IN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Ingin Menjadi Member TTF ? hubungi admin <a href="https://wa.me/62882000805174" target="_blank" class="text-primary">Sekarang</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>

</html>
