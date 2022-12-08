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
                                <!-- suratsktm -->
                                <?php
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';


                                $obj = new sktm;
                                $data = $obj->suratdiproses();
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
                                        <td scope="col"><span class="badge badge-warning"><?php echo $row['status_surat']; ?></span></td>

                                        <td>
                                        <?php //Dibagian Ini Modalnya Oke?>
                                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="" data-toggle="modal" data-target="#PreviewsktmModal">
                                                    Preview Data
                                            </a>
                                            <div class="modal fade" id="PreviewsktmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"> 
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview Surat </h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <style>
                                                            .form-group{
                                                                margin-left: 10%;
                                                                margin-right: 10%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat, Tanggal Lahir</label>
                                                            <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis kelamin</label>
                                                            <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label>Kebangsaan/Agama</label>
                                                            <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan</label>
                                                            <input type="text" name="pekerjaan" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengajuan</label>
                                                            <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Download</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kirim Via WhatsApp</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php //Sampai Sini ?>
                                        </td>
                                    </tr>
                                    <?php  }} ?>

                                <!-- suratdomisili -->
                                <?php
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';


                                $obj = new readsm;
                                $data = $obj->suratdiproses();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {



                                ?>
                                    <tr>
                                        <td scope="col"><?php echo $nomor++; ?></td>
                                        <td scope="col"><?php echo $row['id_akun']; ?></td>
                                        <td scope="col"><?php echo $row['nama']; ?></td>
                                        <td scope="col"><?php echo 'Surat Domisili'; ?></td>
                                        <td scope="col"><?php echo $row['tgl_surat_pengantar']; ?></td>
                                        <td scope="col"><span class="badge badge-warning"><?php echo $row['status_surat']; ?></span></td>

                                        <td>
                                        <?php //Dibagian Ini Modalnya Oke?>
                                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="" data-toggle="modal" data-target="#PreviewdomisiliModal">
                                                    Preview Data
                                            </a>
                                            <div class="modal fade" id="PreviewdomisiliModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"> 
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview Surat </h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <style>
                                                            .form-group{
                                                                margin-left: 10%;
                                                                margin-right: 10%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat, Tanggal Lahir</label>
                                                            <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kebangsaan/Agama</label>
                                                            <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label>Status</label>
                                                            <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan</label>
                                                            <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengajuan</label>
                                                            <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Download</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kirim Via WhatsApp</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php //Sampai Sini ?>
                                        </td>
                                    </tr>
                                    <?php  }} ?>
                                    
                                <!-- suratbelumnikah -->
                                <?php
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';


                                $obj = new readsm;
                                $data = $obj->suratdiproses();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {



                                ?>
                                    <tr>
                                        <td scope="col"><?php echo $nomor++; ?></td>
                                        <td scope="col"><?php echo $row['id_akun']; ?></td>
                                        <td scope="col"><?php echo $row['nama']; ?></td>
                                        <td scope="col"><?php echo 'Surat Belum Nikah'; ?></td>
                                        <td scope="col"><?php echo $row['tgl_surat_pengantar']; ?></td>
                                        <td scope="col"><span class="badge badge-warning"><?php echo $row['status_surat']; ?></span></td>

                                        <td>
                                        <?php //Dibagian Ini Modalnya Oke?>
                                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="" data-toggle="modal" data-target="#PreviewbelumnikahModal">
                                                    Preview Data
                                            </a>
                                            <div class="modal fade" id="PreviewbelumnikahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"> 
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview Surat </h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <style>
                                                            .form-group{
                                                                margin-left: 10%;
                                                                margin-right: 10%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat, Tanggal Lahir</label>
                                                            <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis kelamin</label>
                                                            <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label>Kebangsaan/Agama</label>
                                                            <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan</label>
                                                            <input type="text" name="pekerjaan" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengajuan</label>
                                                            <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Download</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kirim Via WhatsApp</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php //Sampai Sini ?>
                                        </td>
                                    </tr>
                                    <?php  }} ?>

                                <!-- suratkematian -->
                                <?php
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';


                                $obj = new readsm;
                                $data = $obj->suratdiproses();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {



                                ?>
                                    <tr>
                                        <td scope="col"><?php echo $nomor++; ?></td>
                                        <td scope="col"><?php echo $row['id_akun']; ?></td>
                                        <td scope="col"><?php echo $row['nama']; ?></td>
                                        <td scope="col"><?php echo 'Surat Kematian'; ?></td>
                                        <td scope="col"><?php echo $row['tgl_surat_pengantar']; ?></td>
                                        <td scope="col"><span class="badge badge-warning"><?php echo $row['status_surat']; ?></span></td>

                                        <td>
                                        <?php //Dibagian Ini Modalnya Oke?>
                                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="" data-toggle="modal" data-target="#PreviewkematianModal">
                                                    Preview Data
                                            </a>
                                            <div class="modal fade" id="PreviewkematianModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"> 
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview Surat </h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <style>
                                                            .form-group{
                                                                margin-left: 10%;
                                                                margin-right: 10%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Mendiang</label>
                                                            <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Saksi</label>
                                                            <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hubungan Saksi</label>
                                                            <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label>Hari Kematian</label>
                                                            <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal/Bulan/Tahun</label>
                                                            <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat Terakhir</label>
                                                            <input type="text" name="pekerjaan" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Penyebab Kematian</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keterangan Pengajuan</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengajuan</label>
                                                            <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Download</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kirim Via WhatsApp</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php //Sampai Sini ?>
                                        </td>
                                    </tr>
                                    <?php  }} ?>
                                    
                                <!-- suratakta -->
                                <?php
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';


                                $obj = new readsm;
                                $data = $obj->suratdiproses();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {



                                ?>
                                    <tr>
                                        <td scope="col"><?php echo $nomor++; ?></td>
                                        <td scope="col"><?php echo $row['id_akun']; ?></td>
                                        <td scope="col"><?php echo $row['nama']; ?></td>
                                        <td scope="col"><?php echo 'Surat Akta'; ?></td>
                                        <td scope="col"><?php echo $row['tgl_surat_pengantar']; ?></td>
                                        <td scope="col"><span class="badge badge-warning"><?php echo $row['status_surat']; ?></span></td>

                                        <td>
                                        <?php //Dibagian Ini Modalnya Oke?>
                                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="" data-toggle="modal" data-target="#PreviewaktaModal">
                                                    Preview Data
                                            </a>
                                            <div class="modal fade" id="PreviewaktaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"> 
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview Surat </h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <style>
                                                            .form-group{
                                                                margin-left: 10%;
                                                                margin-right: 10%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat, Tanggal Lahir</label>
                                                            <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis kelamin</label>
                                                            <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label>Kebangsaan/Agama</label>
                                                            <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan</label>
                                                            <input type="text" name="pekerjaan" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Ayah</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Umur Ayah</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bangsa/Agama Ayah</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan Ayah</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat Ayah</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Ibu</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Umur Ibu</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bangsa/Agama Ibu</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan Ibu</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat Ibu</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengajuan</label>
                                                            <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Download</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kirim Via WhatsApp</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php //Sampai Sini ?>
                                        </td>
                                    </tr>
                                    <?php  }} ?>

                                <!-- suratusaha -->
                                <?php
                                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                                require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';


                                $obj = new readsm;
                                $data = $obj->suratdiproses();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {



                                ?>
                                    <tr>
                                        <td scope="col"><?php echo $nomor++; ?></td>
                                        <td scope="col"><?php echo $row['id_akun']; ?></td>
                                        <td scope="col"><?php echo $row['nama']; ?></td>
                                        <td scope="col"><?php echo 'Surat Usaha'; ?></td>
                                        <td scope="col"><?php echo $row['tgl_surat_pengantar']; ?></td>
                                        <td scope="col"><span class="badge badge-warning"><?php echo $row['status_surat']; ?></span></td>

                                        <td>
                                        <?php //Dibagian Ini Modalnya Oke?>
                                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="" data-toggle="modal" data-target="#PreviewusahaModal">
                                                    Preview Data
                                            </a>
                                            <div class="modal fade" id="PreviewusahaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"> 
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview Surat </h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <style>
                                                            .form-group{
                                                                margin-left: 10%;
                                                                margin-right: 10%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <label>Nomor Surat</label>
                                                            <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat, Tanggal Lahir</label>
                                                            <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis kelamin</label>
                                                            <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label>Kebangsaan / Agama</label>
                                                            <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pekerjaan</label>
                                                            <input type="text" name="pekerjaan" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Usaha</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keterangan Pengajuan</label>
                                                            <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengajuan</label>
                                                            <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                                                            <span class="text-danger">
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Download</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kirim Via WhatsApp</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php //Sampai Sini ?>
                                        </td>
                                    </tr>
                                    <?php  }} ?>

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