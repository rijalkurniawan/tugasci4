
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register Kampus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>template/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url() ?>template/https://fonts.gstatic.com" rel="preconnect">
  <link href="<?= base_url() ?>template/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Admin Kampus</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form method="post" action="<?= base_url(); ?>/register/process" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username">
                      <div class="invalid-feedback">Please, enter your username!</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      <div class="invalid-feedback">Please enter a valid Email email!</div>
                    </div>

                    <div class="col-12">
                      <label for="password_conf" class="form-label">Confirmasi Password</label>
                      <input type="password" class="form-control" id="password_conf" name="password_conf">
                      <div class="invalid-feedback">Please enter a valid Email password!</div>
                    </div>

                    <div class="col-12">
                      <label for="name" class="form-label">Nama</label>
                      <input type="name" class="form-control" id="password_conf" name="name">
                      <div class="invalid-feedback">Please enter a valid Email password!</div>
                    </div>

                    <div class="col-12">
                      <label for="level" class="form-label">Level</label>
                      
                      <select class="form-control" name="level" >
			                <option value="">-----Pilih-----</option>
			                <option value="<?= $product->password;?>0">Admin</option>
			                <option value="<?= $product->password;?>1">Mahasiswa</option>
			                <option value="<?= $product->password;?>2">Dosen</option>
		                </select>
                      <div class="invalid-feedback">Please enter your Level!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by Admin Kampus</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>template/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>template/assets/js/main.js"></script>

</body>

</html>