<?php
include('include/header.php');
include('include/navbar-tentang.php');

?>
<?php
        require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
        require_once '../Web_Kelurahan_Kepuharjo/Api/lihatdatamaster.php';
        $obj = new readberita;
        if ($_SERVER['REQUEST_METHOD']=='POST'):
        $judull = $_POST['judul'];
        $bagann = $_POST['bagan'];
        $deskripsi = $_POST['deskripsi'];
        if ($obj->insertberita($judull, $bagann, $deskripsi)):
        
        else:
            echo ' <div class="alert alert-danger">Data Gagal Ditambahkan</div>';
        endif;
            endif;    
            ?>

<!-- Begin Page Content -->
<link rel="stylesheet" href="css/berita.css">
<div class="container">
    <div class="judul">Berita Kepuharjo</div>
    <form action="../Web_Kelurahan_Kepuharjo/berita.php" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Judul Berita</span>
                <input type="text" name="judul" placeholder="Silahkan Diisi" required>
            </div>
            <div class="input-box-2">
                <span class="details">Bagan Berita</span>
                <textarea name="bagan" id="message" cols="30" rows="10" type="text" placeholder="Silahkan Diisi" required></textarea>
            </div>
            <div class="input-box-3">
                <span class="details">Deskripsi Berita</span>
                <textarea name="deskripsi" id="message" cols="30" rows="10" type="text" placeholder="Silahkan Diisi" required></textarea>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Tambah Berita">
        </div>
    </form>
</div>




<div class="card-body">
    <h4 class="card-title"></h4>
    <div class="table-responsive">
        <table class="table">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Bagan Berita Kepuharjo</th>
                    <th>Deskripsi Berita Kepuharjo</th>
                    <th>Aksi</th>

            </thead>
            <tbody>
                <?php
                require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
                require_once '../Web_Kelurahan_Kepuharjo/Api/lihatdatamaster.php';


                $obj = new readberita;
                $data = $obj->lihatberita();


                $nomor = 1;
                if ($data->rowCount() > 0) {
                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {


                ?>

                        <tr>
                            <td scope="col"><?php echo $nomor++; ?></td>

                            <td scope="col" align="justify"><?php echo $row['judul']; ?></td>
                            <td scope="col" align="justify"><?php echo $row['sub_title']; ?></td>
                            <td scope="col" align="justify"><?php echo $row['dekripsi']; ?></td>

                            <td><button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                                    Hapus
                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                </button>
                            </td>

                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</div>




<?php
include('include/scripts.php');
include('include/footer.php');
?>