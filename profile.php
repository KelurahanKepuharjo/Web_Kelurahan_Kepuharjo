<?php
include('include/header.php');
include('include/navbar-tentang.php');

require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
require_once '../Web_Kelurahan_Kepuharjo/Api/suratdiproses.php';
$obj = new readprofile;
$data = $obj->lihatprofile();
$nomor = 1;
    if ($data->rowCount() > 0) {
    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $row['image'];
?>
<link rel="stylesheet" href="css/profil.css">
<!-- Begin Page Content -->
<div class="container">

    <form method="POST" action="" enctype="multipart/form-data">
        <h1 class="judul">Profil</h1>
        <div class="lingkaran1">
            <img class="img-profile rounded-circle" src="../Web_Kelurahan_Kepuharjo/Api/uploads/<?php echo $row['image']; ?> ">
          <?php }} ?>
        </div>
    </form>

    
    <form method="POST" action="" enctype="multipart/form-data">        

<input type="file" name="choosefile" value="" />

<div>

    <button type="submit" name="uploadfile">

    UPLOAD

    </button>

</div>

</form>

    <?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    require_once '../Web_Kelurahan_Kepuharjo/Api/lihatdatamaster.php';


    $obj = new readprofile;
    $data = $obj->lihatprofile();

    if ($data->rowCount() > 0) {
        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

    ?>

    <?php }
    } ?>
    <form>
        <div class="field-box">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class=form-group>
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class=form-group>
                <label>Status</label>
                <input type="text" name="status" class="form-control">
            </div>
            <div class="button">
                <input type="submit" value="Edit Profil">
            </div>
        </div>
        <div class="col-lg-6 mb-4">

        </div>
    </form>
</div>


<?php
$akun = $_SESSION['id_akun'];
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    // $file_ext = strrchr($_FILES["choosefile"]["name"], '.');
    // $target_file = md5(basename($_FILES["choosefile"]["name"])).$file_ext;
    // move_uploaded_file($_FILES["choosefile"]["name"], $target_dir.$target_file);

    $folder = "../Web_Kelurahan_Kepuharjo/Api/uploads/" . $filename;

    // connect with the database

    $db = mysqli_connect("localhost", "root", "", "kepuharjo");

    // query to insert the submitted data
    $sql = "UPDATE akun SET image = '$filename' WHERE id_akun = '$akun'";
    // $sql = "INSERT INTO akun (image) VALUES ('$filename') where id_akun = '$akun'";

    // function to execute above query

    mysqli_query($db, $sql);

    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
  

}

?>
<!-- /.container-fluid -->


<!-- End of Main Content -->

<?php
include('include/scripts.php');
include('include/footer.php');
?>