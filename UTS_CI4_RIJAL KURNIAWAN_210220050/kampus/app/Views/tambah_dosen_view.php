
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Dosen</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>template/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url()?>template/https://fonts.gstatic.com" rel="preconnect">
  <link href="<?= base_url()?>template/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>template/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url()?>template/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url()?>template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>template/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url()?>home" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin Kampus</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

	<nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
      
        <li class="nav-item dropdown pe-3">
        
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url()?>template/assets/img/default.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Hello Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6></h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/login">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url()?>home">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="<?= base_url()?>#">
          <i class="bi bi-menu-button-wide"></i><span>Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('mahasiswa/create/') ?>">
              <i class="bi bi-circle"></i><span>Tambah Data Mahasiswa</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url()?>mahasiswa">
              <i class="bi bi-circle"></i><span>Data Mahasiswa</span>
            </a>
          </li>

        </ul>
      </li><!-- End Mahasiswa Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Dosen</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('dosen/create/') ?>" class="active">
              <i class="bi bi-circle"></i><span>Tambah Data Dosen</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url()?>dosen">
              <i class="bi bi-circle"></i><span>Data Dosen</span>
            </a>
          </li>
        
        </ul>
      </li><!-- End Dosen Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FORM TAMBAH DATA DOSEN</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="/dosen/insert" method="post">
                <div class="col-12">
                  <label for="nama_dosen" class="form-label">Nama</label>
				  <input type="hidden" name="id_dosen" value="<?= $product->id_dosen;?>">
                  <input type="text" name="nama_dosen" value="<?= $product->nama_dosen;?>" class="form-control" id="nama_dosen">
                </div>
                <div class="col-12">
                  <label for="email_dosen" class="form-label">Email</label>
                  <input type="text" name="email_dosen" value="<?= $product->email_dosen;?>" class="form-control" id="email_dosen">
                </div>
                <div class="col-12">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="text" name="nip" value="<?= $product->nip;?>" class="form-control" id="nip">
                </div>
                <div class="col-12">
                  <label for="jabtan" class="form-label">Jabatan</label>
                  <input type="text" name="jabatan" value="<?= $product->jabatan;?>" class="form-control" id="jabatan">
                </div>
				<div class="col-12">
                  <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                  <input type="text" name="mata_kuliah" value="<?= $product->mata_kuliah;?>" class="form-control" id="mata_kuliah">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2023 Copyright <strong><span>Admin Kampus</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a>Admin Kampus</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>template/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url()?>template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>template/assets/js/main.js"></script>

</body>

</html>