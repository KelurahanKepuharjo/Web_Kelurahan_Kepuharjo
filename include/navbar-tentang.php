        <!-- Sidebar -->
        <?php
        session_start();

        ?>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="sidebar-brand-icon rotate-n-0">
              <img src="images/logo_kepuharjo.png" height="40">
            </div>
            <div class="sidebar-brand-text mx-2">S-Kepuharjo <sup></sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            MENU UTAMA
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Pengajuan Surat</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Status Surat:</h6>
                <a class="collapse-item" href="surat-masuk-SKTM.php">Surat Masuk</a>
                <a class="collapse-item" href="surat-diproses.php">Surat Diproses</a>
                <a class="collapse-item" href="surat-ditolak.php">Surat Ditolak</a>
                <a class="collapse-item" href="surat-selesai.php">Surat Selesai</a>
              </div>
            </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <?php
          if ($_SESSION['hak_akses'] == "1") {
            echo '<div class="sidebar-heading">';
            echo 'MENU LAINNYA';
            echo '</div>';
            echo '';
            echo '<!-- Nav Item - Charts -->';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="master-data.php">';
            echo '<i class="fas fa-fw fa-chart-area"></i>';
            echo '<span>Data Akun User</span></a>';
            echo '</li>';
            echo '';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="berita.php">';
            echo '<i class="fas fa-fw fa-table"></i>';
            echo '<span>Berita</span></a>';
            echo '</li>';
          } elseif ($_SESSION['hak_akses'] == "2") {
            echo "";
          } elseif ($_SESSION['hak_akses'] == "3") {
            echo "";
          } else {
            echo "";
          }
          ?>
          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">
              <i class="fas fa-fw fa-table"></i>
              <span>Tentang</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">

                  <div class="input-group-append">
                    <!-- <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button> -->
                  </div>
                </div>
              </form>

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                                                                              echo $_SESSION['nama_lengkap'];
                                                                              ?></span>
                    <?php
                    require 'Api/oopkoneksi.php';
                    require 'Api/lihatdatamaster.php';


                    $obj = new readprofile;
                    $data = $obj->lihatprofile();

                    if ($data->rowCount() > 0) {
                      while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                    ?>

                        <img class="img-profile rounded-circle" src="Api/uploads/<?php echo $row['image'] ?> ">
                    <?php }
                    } ?>

                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="profile.php">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <a class="dropdown-item" href="kelurahan.php">
                      <i class="fa fa-building fa-sm fa-fw mr-2 text-gray-400"></i>
                      Kelurahan
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Maka anda akan diarahkan ke halaman landing page.</div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-primary" href="Logout.php">Iya</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">