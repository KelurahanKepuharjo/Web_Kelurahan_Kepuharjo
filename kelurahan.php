<?php
include('include/header.php');
include('include/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kelurahan</h1>

    <form method="post">
        <div class="col-lg-6">
            <div class=form-group>
                <label>Nama Kelurahan</label>
                <input type="text" name="nama kelurahan" class="form-control">
            </div>
            <div class=form-group>
                <label>Kontak Kelurahan/Telepon Kantor</label>
                <input type="text" name="kontak" class="form-control">
            </div>
            <div class=form-group>
                <label>Alamat Kelurahan</label>
                <input type="text" name="alamat kel" class="form-control">
            </div>
            <div class=form-group>
                <label>Nama Kepala Kelurahan</label>
                <input type="text" name="kepala kelurahan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">TTD Kepala Kelurahan</label>
                <input class="form-control" id="formFileSm" type="file">
            </div>
        </div>
        <button type="submit" name="update" class="btn btn-primary"> Update Profile Kelurahan</button>
</div>
</form>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('include/scripts.php');
include('include/footer.php');
?>