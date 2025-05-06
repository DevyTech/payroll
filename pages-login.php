<?php
include './config/connection.php';

// Validasi User-Agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (empty($userAgent) || preg_match('/curl|wget|bot|spider|crawler/i', $userAgent)) {
  die('Access denied');
}
session_start();
?>
<!-- coment -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-sekolah.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('assets/img/bg.jpg');
      /* Ganti dengan nama file gambarmu */
      background-size: cover;
      /* Menyesuaikan ukuran penuh layar */
      background-position: center 1px;
      /* Menempatkan gambar di tengah */
      background-repeat: no-repeat;
      /* Tidak mengulang gambar */
      height: 100vh;
      /* Tinggi 100% viewport */
      width: 100%;
    }

    .card-body h5 {
      font-family: "Nunito", sans-serif;
    }
  </style>


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 fw-bold">Payroll Xpert</h5>
                  </div>

                  <form class="row g-3" method="post">

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                        <input type="text" name="username" class="form-control" id="username" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" class="form-control" id="password" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <input type="submit" name="submit" class="btn btn-primary w-100" value="Login" />
                    </div>
                    <div class="credits">
                      <p class="text-center small mb-0">Developed by <a href="#">Dev Tech</a></p>
                    </div>
                  </form>

                </div>
              </div>



              <?php
              // fungsi ketika tombol submit ditekan
              if (isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password_input = mysqli_real_escape_string($conn, $_POST['password']);

                $cek = mysqli_query($conn, "SELECT * FROM users_table WHERE username = '" . $username . "'");

                if (mysqli_num_rows($cek) > 0) {
                  $d = mysqli_fetch_object($cek);
                  // disini menggunakan password_hash untuk menenkripsi password
                  $password_hash = $d->password;

                  if (password_verify($password_input, $password_hash)) {
                    // Kata sandi cocok
                    $_SESSION['status_login'] = true;
                    $_SESSION['uid'] = $d->id;
                    $_SESSION['uname'] = $d->name;
                    $_SESSION['ulevel'] = $d->role;
                    // jika sesuai username maupun password, maka akan dipindahkan ke dashboard admin panel
                    echo "<script> window.location = 'index.php' </script>";
                  } else {
                    echo '<div class="alert alert-danger" role="alert">
													Password Salah!
												 </div>';
                  }
                } else {
                  echo '<div class="alert alert-danger" role="alert">
												Username tidak ditemukan!
											  </div>';
                }
              }



              ?>











            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>