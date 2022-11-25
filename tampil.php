<html>
<head>
    <title>Tutorial Cara Menampilkan Gambar Dengan Script PHP</title>
</head>
<body>
    <h2>Menampilkan Gambar Foto Siswa Dengan PHP</h2>
    <?php
        $Open = mysqli_connect("localhost","root","");
        if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !<br>");
        }
        $Koneksi = mysqli_select_db("upload_image");
        if (!$Koneksi){
            die ("Koneksi ke Database Gagal !");
        }
    ?>
    <p>Data Siswa</p>
    <hr/>
    <table border="1">
            <tr>
                <td width="20">No</td>
                <td width="80">Foto Siswa</td>
                <td width="120">Nama</td>
            </tr>
            <?php
                $no=0;
                $query    = mysqli_query("SELECT * FROM tb_siswa");
                while ($data    =mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td align="center"><?php echo "<img src='img/$data[foto]' width='70' height='90' />";?></td>
                <td><?php echo $data['nama']?></td>
            </tr>
            <?php
                }
            ?>
    </table>
</body>
</html>