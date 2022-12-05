<?php
include('include/header.php');
include('include/navbar-tentang.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil</h1>
    <style>
    .lingkaran1{
	width: 200px;
	height: 200px;
    margin-left: 12%; 
	border-radius: 100%;
    }
    .upload{
        margin-top: 2%;
        margin-left: 21%;
    }
   </style>

    

    <div class="lingkaran1"> <img class="lingkaran1" src="../Web_Kelurahan_Kepuharjo/uploads/Group1.jpeg" alt=""></div>
    <?php
    // $imagepath = "";
    // $newpath = "../WE";
    

    ?>
    <button type="submit" name="upload" class="btn btn-danger upload">Upload</button>
    <form method="post">
        <div class="col-lg-6">
        <div class=form-group>
            <label>Nama</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class=form-group>
            <label>Email</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <div class=form-group>
            <label>Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        </div>
        <button type="submit" name="update" class="btn btn-primary"> Update Profile</button>
        </div>
    </form>
    
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('include/scripts.php');
include('include/footer.php');
?>