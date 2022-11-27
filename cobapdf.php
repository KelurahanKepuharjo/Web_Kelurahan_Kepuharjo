<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Registration Form in PHP - Tutsmake.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                    <h2>Preview data Syarat Surat</h2>
                </div>
                
                <form action="../Web_Kelurahan_Kepuharjo/pdfsktm.php" method="post">

                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" name="nomor" class="form-control" value="" maxlength="50" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="" maxlength="50" required="">
                    </div>
                    <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" class="form-control" value="" maxlength="50" required="">
                    </div>
                    <div class="form-group">
                        <label>Jenis kelamin</label>
                        <input type="text" name="kelamin" class="form-control" value="" maxlength="50" required="">
                    </div>
                    <div class="form-group ">
                        <label>Kebangsaan / Agama</label>
                        <input type="text" name="kebangsaan" class="form-control" value="" maxlength="30" required="">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input type="text" name="tanggalsurat" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger">
                    </div>
                    

                    <input type="submit" class="btn btn-primary" name="signup" value="submit">
                </form>
            </div>
        </div>    
    </div>
</body>
</html>