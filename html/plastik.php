<?php
require 'config/function.php';
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Dashboard Afrida Store</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/afrida.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>

  <style>
    .zoomable {
      width: 100px;
    }

    .search-container {
      margin: 20px;
      text-align: right;
      /* Align text to the right */
    }

    .search-input {
      width: 300px;
      padding: 10px;
      font-size: 16px;
      border: 2px solid #ddd;
      border-radius: 5px;
      outline: none;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .search-input:focus {
      border-color: #333;
      box-shadow: 0 0 5px rgba(51, 51, 51, 0.3);
    }

    .search-button {
      padding: 10px 20px;
      font-size: 16px;
      margin-left: 10px;
      border: none;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out, transform 0.2s;
    }

    .search-button:hover {
      background-color: #555;
      transform: translateY(-2px);
    }

    .search-button:active {
      transform: translateY(0);
    }

    .modal-container {
      position: relative;
    }

    .search-container {
      position: absolute;
      right: 0;
    }
  </style>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="dashboard.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                  <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                  <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                  <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                </defs>

              </svg>
            </span>
            <!--IMG-->
            <!--IMG-->
            <!--IMG-->
            <img src="../assets/img/favicon/afrida.png" alt="Logo" width="50" height="50" class="ms-2" />
            <!--END IMG-->
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Afrida</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Beranda</div>
            </a>
          </li>

          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Products</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Katalog</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="plastik.php" class="menu-link">
                  <div data-i18n="Account">Plastik</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="kue.php" class="menu-link">
                  <div data-i18n="Notifications">Bahan Kue</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="makanan.php" class="menu-link">
                  <div data-i18n="Connections">Bahan Makanan</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Components -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Keuangan</span></li>
          <!-- Cards -->
          <!-- User interface -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-box"></i>
              <div data-i18n="User interface">Keuangan</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="masuk.php" class="menu-link">
                  <div data-i18n="Accordion">Pemasukkan</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="keluar.php" class="menu-link">
                  <div data-i18n="Alerts">Pengeluaran</div>
                </a>
              </li>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->

            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">

                <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">username</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="login.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Plastik /</span> Stok Plastik</h4>

            <hr class="my-5" />

            <!-- Bootstrap Dark Table -->
            <div class="modal-container d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah
              </button>
              <form method="POST" action="" class="search-container d-flex">
                <input type="text" name="search" class="search-input" placeholder="Search for products..." required autocomplete="off">
                <button type="submit" class="search-button">Search</button>
              </form>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form id="beritaForm" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <input type="file" name="gambar" placeholder="judul-berita" class="form-control" autocomplete="off">
                      <br>
                      <input type="text" name="nama_barang" placeholder="nama_barang" class="form-control" autocomplete="off">
                      <br>
                      <input type="text" name="satuan" placeholder="satuan" class="form-control" autocomplete="off">
                      <br>
                      <input type="text" name="stok" placeholder="stok" class="form-control" autocomplete="off">
                      <br>
                      <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="card">
              <h5 class="card-header">Daftar Produk Plastik</h5>
              <div class="table-responsive text-nowrap">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Satuan</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="item-table" class="table-border-bottom-0">
                    <?php
                    $search_query = isset($_POST['search']) ? $_POST['search'] : '';
                    $query = "SELECT * FROM plastik";

                    if ($search_query != '') {
                      $query .= " WHERE nama_barang LIKE '%" . $search_query . "%' OR satuan LIKE '%" . $search_query . "%' OR stok LIKE '%" . $search_query . "%'";
                    }
                    $ambildata = mysqli_query($conn, "select * from plastik");
                    while ($data = mysqli_fetch_array($ambildata)) {
                      $idb = $data['id'];
                      $nama_barang = $data['nama_barang'];
                      $satuan = $data['satuan'];
                      $stok = $data['stok'];
                      $gambar = $data['gambar'];
                      $gambar_tag = $gambar ? '<img src="../uploads/' . $gambar . '" class="zoomable">' : 'no photo';

                    ?>
                      <tr>
                        <td><?= $gambar_tag; ?></td>
                        <td><?= $nama_barang; ?></td>
                        <td><?= $satuan; ?></td>
                        <td><?= $stok; ?></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $idb; ?>">Edit</button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $idb; ?>">Delete</button>
                        </td>
                      </tr>
                      <!-- Edit Modal -->
                      <div class="modal fade" id="edit<?= $idb; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                              <div class="modal-body">
                                <input type="file" name="gambar" class="form-control">
                                <br>
                                <input type="hidden" name="idb" value="<?= $idb; ?>">
                                <input type="text" name="nama_barang" value="<?= $nama_barang; ?>" class="form-control">
                                <br>
                                <input type="text" name="satuan" value="<?= $satuan; ?>" class="form-control">
                                <br>
                                <input type="text" name="stok" value="<?= $stok; ?>" class="form-control">
                                <br>
                                <button type="submit" class="btn btn-warning" name="editbarang">Save</button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- Delete Modal -->
                      <div class="modal fade" id="delete<?= $idb; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Barang?</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post">
                              <div class="modal-body">
                                Apakah Anda yakin ingin menghapus <?= $nama_barang; ?>?
                                <input type="hidden" name="idb" value="<?= $idb; ?>">
                                <br><br>
                                <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../assets/js/stock.js"></script>
    <script>
      document.querySelector('.search-input').addEventListener('keyup', function() {
        let searchQuery = this.value.toLowerCase();
        let rows = document.querySelectorAll('#item-table tr');

        rows.forEach(row => {
          let itemName = row.cells[1].innerText.toLowerCase();
          let unit = row.cells[2].innerText.toLowerCase();
          let stock = row.cells[3].innerText.toLowerCase();

          if (itemName.includes(searchQuery) || unit.includes(searchQuery) || stock.includes(searchQuery)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        <?php if (isset($_SESSION['message'])) : ?>
          Swal.fire({
            icon: '<?= $_SESSION['message']['type'] ?>',
            title: '<?= $_SESSION['message']['title'] ?>',
            text: '<?= $_SESSION['message']['text'] ?>',
          });
          <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
      });
    </script>


    <!-- edit data -->
    </head>
</body>

</html>