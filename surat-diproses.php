<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800">Surat Diproses</h1>
    <!-- Topbar Search -->
    <form class="d-grid gap-2 d-md-flex justify-content-md-end navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-2 small" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Surat Diproses</h4>
                    <p class="card-description">
                        Menampilkan data surat yang diproses
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        NIK
                                    </th>
                                    <th>
                                        Nama Lengkap
                                    </th>
                                    <th>
                                        Jenis Surat
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                            require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                            require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';
                           

                            $obj = new readsm;
                            $data = $obj->suratdiproses();
                            $nomor = 1;
                            if($data->rowCount()>0){
                                while($row=$data->fetch(PDO::FETCH_ASSOC)){

                                

                            ?>
		                    
                                <tr>
                                <td scope="col"><?php echo $nomor++; ?></td>
                                <td scope="col"><?php echo $row['id_akun']; ?></td>
                                <td scope="col"><?php echo $row['nama']; ?></td>
                                <td scope="col"><?php echo 'Surat Domisili';?></td>
                                <td scope="col"><?php echo $row['tgl_surat_pengantar'];?></td>
                                <td scope="col"><?php echo $row['status_surat'];?></td>
                                
                                    <td><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                            Detail
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                            Detail
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button>
                                    </td>
                                       
                                </tr>
                                 <?php }}?> 
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 mb-4"></div>
      </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php
include('include/scripts.php');
include('include/footer.php');
?>