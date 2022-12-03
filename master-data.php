<?php

use LDAP\Result;

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
                                    <th>Password</th>
                                    <th>No Hp</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                            require_once '../Web_Kelurahan_Kepuharjo/Api/lihatdatamaster.php';
                           

                            $obj = new read;
                            $data = $obj->lihatdata();
                            $nomor = 1;
                            if($data->rowCount()>0){
                                while($row=$data->fetch(PDO::FETCH_ASSOC)){

                                

                            ?>
		                    
                                <tr>
                                <td scope="col"><?php echo $nomor++; ?></td>
                                <td scope="col"><?php echo $row['id_akun']; ?></td>
                                <td scope="col"><?php echo $row['nama_lengkap']; ?></td>
                                <td scope="col"><?php echo $row['password'];?></td>
                                <td scope="col"><?php echo $row['no_hp'];?></td>
                                <td scope="col"><?php echo $row['rt'];?></td>
                                <td scope="col"><?php echo $row['rw'];?></td>
                                <td scope="col"><?php echo $row['alamat'];?></td>
                                
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

    </div>
    <!-- /.container-fluid -->

</div>


<?php
include('include/scripts.php');
include('include/footer.php');
?>