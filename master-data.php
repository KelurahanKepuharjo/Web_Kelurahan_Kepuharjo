<?php

use LDAP\Result;

include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Master Data</h1>
        <form class="d-grid gap-2 d-md-flex justify-content-md-end navbar-search">
            <div class="input-group">
                <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control bg-light border-2 small" placeholder="Cari Akun..." >
            </div>
        </form>
    </div>

    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Masyarakat</h4>
                    <p class="card-description">
                        Menampilkan data masyarakat
                    </p>
                    <div class="table-responsive">
                    
                        <table id="myTable" class="table">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>No Hp</th>
                                    <th>RT</th>
                                    <th>RW</th>

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
                                if ($data->rowCount() > 0) {
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {


                                ?>

                                        <tr>
                                            <td scope="col"><?php echo $nomor++; ?></td>
                                            <td scope="col"><?php echo $row['id_akun']; ?></td>
                                            <td scope="col"><?php echo $row['nama_lengkap']; ?></td>
                                            <td scope="col"><?php echo $row['no_hp']; ?></td>
                                            <td scope="col"><?php echo $row['rt']; ?></td>
                                            <td scope="col"><?php echo $row['rw']; ?></td>


                                            <td><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                                                    Hapus
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                            </td>
                                            

                                        </tr>
                                        
                                <?php }
                                } ?>
                            </tbody>
                        </table>

                        <script>
                        function searchTable() {
                        // Get the input field value
                        var input = document.getElementById("searchInput").value;
                        // Get the table
                        var table = document.getElementById("myTable");
                        // Get the rows of the table
                        var rows = table.getElementsByTagName("tr");
                        // Loop through the rows
                        for (var i = 0; i < rows.length; i++) {
                            // Get the cells of the current row
                            var cells = rows[i].getElementsByTagName("td");
                            // Set found to false
                            var found = false;
                            // Loop through the cells
                            for (var j = 0; j < cells.length; j++) {
                            // If the cell's text content contains the input value, set found to true
                            if (cells[j].textContent.toLowerCase().indexOf(input.toLowerCase()) > -1) {
                                found = true;
                            }
                            }
                            // If found is true, show the row, otherwise hide it
                            if (found) {
                            rows[i].style.display = "";
                            } else {
                            rows[i].style.display = "none";
                            }
                        }
                        }
                        </script>
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