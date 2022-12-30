<?php
include('include/header.php');
include('include/navbar.php');

?>
<?php
require_once 'Api/oopkoneksi.php';
require_once 'Api/lihatdatamaster.php';
$obj = new readberita;
if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $judull = $_POST['judul'];
    $bagann = $_POST['bagan'];
    $deskripsi = $_POST['deskripsi'];
    if ($obj->insertberita($judull, $bagann, $deskripsi)) :

    else :
        echo ' <div class="alert alert-danger">Data Gagal Ditambahkan</div>';
    endif;
endif;
?>

<?php
require_once 'Api/oopkoneksi.php';
require_once 'Api/perbarui/update.php';
$obj = new deleteberita;
if ($_SERVER['REQUEST_METHOD'] == 'GET') :
    $idbrt = $_GET['idberita'];
   
    if ($obj->delberita($idbrt)) :
    endif;
endif;
?>

<!-- Begin Page Content -->
<link rel="stylesheet" href="css/berita.css">
<div class="container">
    <div class="judul">Berita Kepuharjo</div>
    <form action="berita.php" method="post">
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
                require_once 'Api/oopkoneksi.php';
                require_once 'Api/lihatdatamaster.php';


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

                            <td>
                            <form action="" method="get">  
                            <input class="btn btn-danger" type="submit" value="Hapus">
                                                <td scope="col" ><input type="hidden"name ="idberita" id="idberita" value="<?php echo $row['id_berita']; ?>" /></td>
                                </form>  
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