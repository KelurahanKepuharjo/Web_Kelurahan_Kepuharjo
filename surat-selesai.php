<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Surat Selesai</h1>
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
                    <h4 class="card-title">Surat Selesai</h4>
                    <p class="card-description">
                        Menampilkan data surat yang telah diproses
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
                                        Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                               
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                                $obj = new suratselesai;
                                $data = $obj->lihatsuratselesaiSKTM();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                                ?>

                                        <tr>
                                            <td scope="col"><?php echo $nomor++; ?></td>
                                            <td scope="col"><?php echo $row['id_akun']; ?></td>
                                            <td scope="col"><?php echo $row['nama']; ?></td>
                                            <td scope="col"><?php echo 'Surat SKTM'; ?></td>
                                            <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                            <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                        </tr>
                                        
                                <?php }
                                } ?>
                                 <?php
                               
                               require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                               require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                               $obj = new suratselesai;
                               $data = $obj->lihatsuratselesaidomisili();
                               $nomor = 1;
                               if ($data->rowCount() > 0) {
                                   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                               ?>

                                       <tr>
                                           <td scope="col"><?php echo $nomor++; ?></td>
                                           <td scope="col"><?php echo $row['id_akun']; ?></td>
                                           <td scope="col"><?php echo $row['nama']; ?></td>
                                           <td scope="col"><?php echo 'Surat Domisili'; ?></td>
                                           <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                           <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                       </tr>
                                       
                               <?php }
                               } ?>
                                <?php
                               
                               require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                               require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                               $obj = new suratselesai;
                               $data = $obj->lihatsuratselesaiakta();
                               $nomor = 1;
                               if ($data->rowCount() > 0) {
                                   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                               ?>

                                       <tr>
                                           <td scope="col"><?php echo $nomor++; ?></td>
                                           <td scope="col"><?php echo $row['id_akun']; ?></td>
                                           <td scope="col"><?php echo $row['nama_anak']; ?></td>
                                           <td scope="col"><?php echo 'Surat Akta'; ?></td>
                                           <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                           <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                       </tr>
                                       
                               <?php }
                               } ?>
                                
                                <?php
                               
                               require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                               require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                               $obj = new suratselesai;
                               $data = $obj->lihatsuratselesaibelumnikah();
                               $nomor = 1;
                               if ($data->rowCount() > 0) {
                                   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                               ?>

                                       <tr>
                                           <td scope="col"><?php echo $nomor++; ?></td>
                                           <td scope="col"><?php echo $row['id_akun']; ?></td>
                                           <td scope="col"><?php echo $row['nama']; ?></td>
                                           <td scope="col"><?php echo 'Surat Belum Nikah'; ?></td>
                                           <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                           <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                       </tr>
                                       
                               <?php }
                               } ?>
                                <?php
                               
                               require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                               require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                               $obj = new suratselesai;
                               $data = $obj->lihatsuratselesaikematian();
                               $nomor = 1;
                               if ($data->rowCount() > 0) {
                                   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                               ?>

                                       <tr>
                                           <td scope="col"><?php echo $nomor++; ?></td>
                                           <td scope="col"><?php echo $row['id_akun']; ?></td>
                                           <td scope="col"><?php echo $row['nama_almarhum']; ?></td>
                                           <td scope="col"><?php echo 'Surat Kematian'; ?></td>
                                           <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                           <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                       </tr>
                                       
                               <?php }
                               } ?>
                                <?php
                               
                               require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                               require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                               $obj = new suratselesai;
                               $data = $obj->lihatsuratselesaiusaha();
                               $nomor = 1;
                               if ($data->rowCount() > 0) {
                                   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                               ?>

                                       <tr>
                                           <td scope="col"><?php echo $nomor++; ?></td>
                                           <td scope="col"><?php echo $row['id_akun']; ?></td>
                                           <td scope="col"><?php echo $row['nama']; ?></td>
                                           <td scope="col"><?php echo 'Surat Usaha'; ?></td>
                                           <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                           <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                       </tr>
                                       
                               <?php }
                               } ?>
                               <?php
                               
                               require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                               require_once '../Web_Kelurahan_Kepuharjo/Api/suratselesai.php';
                               $obj = new suratselesai;
                               $data = $obj->lihatsuratselesaiberkelakuanbaik();
                               $nomor = 1;
                               if ($data->rowCount() > 0) {
                                   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                               ?>

                                       <tr>
                                           <td scope="col"><?php echo $nomor++; ?></td>
                                           <td scope="col"><?php echo $row['id_akun']; ?></td>
                                           <td scope="col"><?php echo $row['nama']; ?></td>
                                           <td scope="col"><?php echo 'Surat Berkelakuan Baik'; ?></td>
                                           <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                           <td scope="col"><span class="badge badge-success"><?php echo $row['status_surat']; ?></span></td>

                                       </tr>
                                       
                               <?php }
                               } ?>
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