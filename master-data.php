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
                                    <th>Password</th>
                                    <th>No Hp</th>
                                    <th>Aksi
                                        <td>
                                            <tr>
                                                <tr></tr>
                                            </tr>
                                        </td>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
	                        if(isset($_GET['pesan'])){
		                    $pesan = $_GET['pesan'];
		                    if($pesan == "input"){
			                echo "Data berhasil di input.";
		                    }else if($pesan == "update"){
			                echo "Data berhasil di update.";
		                    }else if($pesan == "hapus"){
			                echo "Data berhasil di hapus.";
		                        }
	                        }
	                        ?>
                           
                            <?php 
		                    include "../Web_Kelurahan_Kepuharjo/koneksi/koneksi.php";
		                    $query = mysqli_query($conn,"SELECT id_akun, nama_lengkap, password, no_hp FROM akun");
        
		                    $nomor = 1;
		                    while($data = mysqli_fetch_assoc($query)){
                            
		                    ?>
                                <tr>
                                <td scope="col"><?php echo $nomor++; ?></td>
                                <td scope="col"><?php echo $data['id_akun']; ?></td>
                                <td scope="col"><?php echo $data['nama_lengkap']; ?></td>
                                <td scope="col"><?php echo $data['password']; ?></td>
                                <td scope="col"><?php echo $data['no_hp']; ?></td>
                                <?php } ?>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                          Detail
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button>
                                    
                                       
                                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                          Detail
                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                        </button>
                                       
                                        
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

</div>


<?php
include('include/scripts.php');
include('include/footer.php');
?>