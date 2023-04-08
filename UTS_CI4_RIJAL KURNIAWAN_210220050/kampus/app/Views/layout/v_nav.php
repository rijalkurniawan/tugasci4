</header>
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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="<?= base_url()?>mahasiswa">
          <i class="bi bi-menu-button-wide"></i><span>Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="<?= base_url()?>dosen">
          <i class="bi bi-journal-text"></i><span>Dosen</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('dosen/create/') ?>">
              <i class="bi bi-circle"></i><span>Tambah Data Dosen</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url()?>dosen">
              <i class="bi bi-circle"></i><span>Data Dosen</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->
      </ul>
      </li><!-- End Tables Nav -->

      
      </li><!-- End Blank Page Nav -->
</ul>
</aside>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?=$title?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ()?>home">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->