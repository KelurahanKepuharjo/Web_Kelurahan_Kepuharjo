<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master Data</h1>

    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Masyarakat</h4>
                    <p class="card-description">
                        Menampilkan data masyarakat
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat, Tanggal dan Lahir</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>3602183134759</td>
                                    <td>Nadia Ayu Safitri</td>
                                    <td>jember, 26 Desember 2003</td>
                                    <td>Tegal Besar Permai 1</td>
                                    <td><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                            Detail
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>3602183134760</td>
                                    <td>Faisal Oktabrian Sholihin</td>
                                    <td>jember, 08 Oktober 2002</td>
                                    <td>Griya Mangli Permai</td>
                                    <td><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                            Detail
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>


<?php
include('include/scripts.php');
include('include/footer.php');
?>