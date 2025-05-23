<?php 
session_start();

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "afrida");

// Periksa koneksi
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Menggunakan prepared statements untuk menghindari SQL injection
  $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();
  $hitung = $result->num_rows;

  if($hitung > 0){
    $_SESSION['log'] = 'true';
    header('Location: dashboard.php');
    exit();
  } else {
    $_SESSION['error'] = 'Username atau password salah';
    header('Location: login.php');
    exit();
  }

  $stmt->close();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Afrida Login Admin</title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  </head>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="dashboard.php" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <!-- Tambahkan logo di sini -->
                    <img src="../assets/img/favicon/afrida.png" alt="Logo" width="50" height="50" />
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Afrida</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Afrida Store 👋</h4>
              <p class="mb-4">Please sign-in to your account and access our website</p>

              <form id="formAuthentication" class="mb-3" action="login.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="addusername"
                    name="username"
                    placeholder="Enter your username"
                    autocomplete="off"
                  />
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" name="login" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      <?php
      if(isset($_SESSION['error'])) {
          echo "
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '".$_SESSION['error']."'
          });
          ";
          unset($_SESSION['error']);
      }
      ?>
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
