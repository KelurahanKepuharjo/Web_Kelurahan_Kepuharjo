<?php
include('include/header.php');
include('include/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- kartu surat masuk -->
    <div class="col-xl-3 col-md-6 mb-2">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Surat Masuk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <img src="img/icon-masuk.png" height="40">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- kartu surat diproses -->
    <div class="col-xl-3 col-md-6 mb-2">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Surat Diproses</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <img src="img/icon-diproses.png" height="40">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- kartu surat dapat diambil-->
    <div class="col-xl-3 col-md-6 mb-2">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Surat Dapat Diambil</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <img src="img/icon-diambil.png" height="40">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- kartu jenis surat -->
    <div class="col-xl-3 col-md-6 mb-2">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jenis Surat</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <img src="img/icon-jenis-surat.png" height="40">
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- kartu jenis surat -->
    <!-- <div class="col-xl-3 col-md-6 mb-2">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jenis Surat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="img/icon-jenis-surat.png" height="40">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

    <!-- kartu surat selesai -->
    <div class="col-xl-3 col-md-6 mb-2">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Surat Selesai</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <img src="img/icon-selesai.png" height="40">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- kartu surat ditolak -->
    <div class="col-xl-3 col-md-6 mb-2">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Surat Ditolak</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <img src="img/icon-ditolak.png" height="40">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jenis Pengajuan Surat</h4>
            <p class="card-description">
              Menampilkan data jenis pengajuan
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Pengajuan Surat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Keterangan Usaha</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Keterangan Pindah</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Keterangan Belum Menikah</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Keterangan Kematian</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Keterangan Domisili</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Keterangan Tidak Mampu</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-4">

    </div>
  </div>

</div>
<!-- /.container-fluid -->


<?php
include('include/scripts.php');
include('include/footer.php');
?>