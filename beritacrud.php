<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CRUD FROM API</title>

    <link href="../Web_Kelurahan_Kepuharjo/view/crud.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-dark bg-mynav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My App</a>
      </div>
    </nav>

    <div class="container">
      <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight"><h2>Users</div>
        <div class="p-2 bd-highlight">
          <button type="button" class="btn btn-secondary" onclick="showUserCreateBox()">Create</button>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table">
          <thead>
</br>
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
</br>
<?php 
		include "../Web_Kelurahan_Kepuharjo/koneksi/koneksi.php";
		$query = mysqli_query($conn,"SELECT * FROM berita");
        
		$nomor = 1;
		while($data = mysqli_fetch_array($query)){
		?>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Subtitle</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Action</th>
            </tr>
			<tr>
              <td scope="col"><?php echo $nomor++; ?></td>
              <td scope="col"><?php echo $data['judul']; ?></td>
              <td scope="col"><?php echo $data['sub_title']; ?></td>
              <td scope="col"><?php echo $data['dekripsi']; ?></td>
            </tr>
			<?php } ?>
          </thead>
          <tbody id="mytable">
            <tr>
              <th scope="row" colspan="5">Loading...</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- <script src="index.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="../Web_Kelurahan_Kepuharjo/view/berita.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	<br/>
 
	
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Subtitle</th>
			<th>Deskripsi</th>
		</tr>
		
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['sub_title']; ?></td>
			<td><?php echo $data['dekripsi']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id_berita']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id_berita']; ?>">Hapus</a>					
			</td>
		</tr>
	
	</table>
</body>
</html> -->