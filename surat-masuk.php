<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pengajuan Surat</h1>

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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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

                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <button type="button" class="btn btn-info">SETUJUI SEMUA</button>
</div>

<?php
include('include/scripts.php');
include('include/footer.php');
?>