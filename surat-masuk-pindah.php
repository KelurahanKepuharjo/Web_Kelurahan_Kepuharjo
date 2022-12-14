<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Pengajuan Surat Pindah</h1>
        <form class="d-grid gap-2 d-md-flex justify-content-md-end navbar-search">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jenis Pengajuan
                <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readsmdash;
                        $data = $obj->sumsmdash();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['total'];
                            }
                        }
                        ?></span>
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="surat-masuk-SKTM.php">SKTM <?php $value = 1?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readsktm;
                        $data = $obj->sumsktm();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-domisili.php">Domisili <?php $value = 2?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readdomisili;
                        $data = $obj->sumdomisili();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-akta.php">Akta Kelahiran <?php $value = 3?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readakta;
                        $data = $obj->sumakta();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-pindah.php">Keterangan Pindah <?php $value = 4?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readpindah;
                        $data = $obj->sumpindah();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-belummenikah.php">Belum menikah <?php $value = 5?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readbelumnikah;
                        $data = $obj->sumbelumnikah();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-kematian.php">Kematian <?php $value = 6?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readkematian;
                        $data = $obj->sumkematian();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-usaha.php">Surat Usaha <?php $value = 6?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readusaha;
                        $data = $obj->sumusaha();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
                <a class="dropdown-item" href="surat-masuk-berkelakuanbaik.php">Surat Berkelakuan Baik <?php $value = 7?>
                    <span class="badge badge-danger badge-counter">
                        <?php
                        require_once 'Api/oopkoneksi.php';
                        require_once 'Api/lihatdatamaster.php';


                        $obj = new readkelakuanbaik;
                        $data = $obj->sumkelakuanbaik();


                        $nomor = 1;
                        if ($data->rowCount() > 0) {
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

                                echo $row['sumid'];
                            }
                        }
                        ?></span>
                </a>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Surat Masuk Pindah</h4>
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
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once 'Api/oopkoneksi.php';
                                require_once 'Api/suratmasuk.php';


                                $obj = new suratmasukpindah;
                                $data = $obj->lihatsuratmasuk();
                                $nomor = 1;
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                                    


                                ?>

                                        <tr>
                                            <td scope="col"><?php echo $nomor++; ?></td>
                                            <td scope="col"><?php echo $row['id_akun']; ?></td>
                                            <td scope="col"><?php echo $row['nama']; ?></td>
                                            <td scope="col"><?php echo 'Surat Pindah'; ?></td>
                                            <td scope="col"><?php echo $row['tgl_pengajuan']; ?></td>
                                            <td scope="col"><span class="badge badge-secondary"><?php echo $row['status_surat']; ?></span></td>
                                            <td><?php if($_SESSION['hak_akses']== '2'){ ?>
                                            <a class="btn btn-primary" href="Api/update/updatpindahst.php?kode=<?php echo $row['id_surat']?>">Proses Surat RT</a>
                                            <?php }elseif($_SESSION['hak_akses']=='3'){?>
                                            <a class="btn btn-primary" href="Api/update/updateRWpindah.php?kode=<?php echo $row['id_surat']?>">Proses Surat RW</a>
                                            <?php }elseif($_SESSION['hak_akses']=='1'){?>
                                            <a class="btn btn-primary" href="Api/update/kelUpdatepindah.php?kode=<?php echo $row['id_surat']?>">Proses Surat Kelurahan</a>
                                            <?php }else{} ?>
                                          </td>

                                        </tr>
                                <?php }
                                } ?>
                               
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