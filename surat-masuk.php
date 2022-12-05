<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800">Pengajuan Surat</h1>
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
                    <h4 class="card-title">Surat Masuk</h4>
                    <p class="card-description">
                        Menampilkan data surat masuk untuk disetujui
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
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                            require_once '../Web_Kelurahan_Kepuharjo/Api/suratmasuk.php';
                           

                            $obj = new suratmasuk;
                            $data = $obj->lihatsuratmasuk();
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
                                       
                                </tr>
                                 <?php }}?>
                                <!-- <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        3602183134758
                                    </td>
                                    <td>
                                        Nadia Ayu Safitri
                                    </td>
                                    <td>
                                        Surat Keterangan Tidak Mampu
                                    </td>
                                    <td>
                                        17 Nopember 2022
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        3602183134759
                                    </td>
                                    <td>
                                        Faisal Oktabrian
                                    </td>
                                    <td>
                                        Surat Keterangan Untuk Nikah
                                    </td>
                                    <td>
                                        18 Nopember 2022
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr> -->
                            </tbody>

                        </table>
                    </div>
                </div>          
            </div>
            <div class="col-lg-6 mb-4"></div>
            <button type="button" class="btn btn-info">SETUJUI SEMUA</button>
        </div>
        <div class="col-lg-6 mb-4">

        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php
include('include/scripts.php');
include('include/footer.php');
?>