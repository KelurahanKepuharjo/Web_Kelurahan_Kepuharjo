<?php
include('include/header.php');
include('include/navbar-tentang.php');
?>
<link rel="stylesheet" href="css/profil.css">
<!-- Begin Page Content -->

<div class="container">
    <!-- Page Heading -->
    <h1 class="judul">Profil</h1>

    <div class="lingkaran1">
        <img class="lingkaran1" src="../Web_Kelurahan_Kepuharjo/uploads/Group1.jpeg" alt="">
        <div class="sub_link">
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            <i class="fa fa-camera" style="color: #fff"></i>
        </div>
    </div>
    <?php
    // $imagepath = "";
    // $newpath = "../WE";


    ?>
    <form method="post">
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
                <input type="submit" value="Tambah Berita">
            </div>
        </div>
        <!-- <div class="button">
            <input type="submit" value="Update Profil">
        </div> -->

    </form>
    <div class="col-lg-6 mb-4">

    </div>
</div>

<!-- /.container-fluid -->


<!-- End of Main Content -->

<?php
include('include/scripts.php');
include('include/footer.php');
?>