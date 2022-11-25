<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../view/stylee.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i id="btn"> <img src="../images/bars.png" alt=""></i>
        <i id="cancel"> <img src="../images/bars.png" alt=""></i>
    </label>
    <div class="sidebar">
        <header>S-Kepuharjo</header>
        <ul>
            <li><a href="#">
                <img src="../images/icon1.png" alt="" class="icon">
                <span class="deskription">Dashboard</span>
            </a></li>
        </ul>
        <ul>
            <li><a href="#">
                <img src="../images/icon2.png" alt="" class="icon">
                <span class="deskription">Pengajuan Surat</span>
                
            </a></li>
            <div class="sub-sidebar">
                <ul>
                    <li><a href="#">
                        <img src="../images/icon3.png" alt="" class="icon">
                        <span class="deskription">Surat Masuk</span>
                    </a></li>
                </ul>
                <ul>
                    <li><a href="#">
                        <img src="../images/icon4.png" alt="" class="icon">
                        <span class="deskription">Surat Diproses</span>
                    </a></li>
                </ul>
                <ul>
                    <li><a href="#">
                        <img src="../images/icon5.png" alt="" class="icon">
                        <span class="deskription">Surat Dapat Diambil</span>
                    </a></li>
                </ul>
                <ul>
                    <li><a href="#">
                        <img src="../images/icon6.png" alt="" class="icon">
                        <span class="deskription">Surat Ditolak</span>
                    </a></li>
                </ul>
                <ul>
                    <li><a href="#">
                        <img src="../images/icon7.png" alt="" class="icon">
                        <span class="deskription">Surat Selesai</span>
                    </a></li>
                </ul>
            </div>
        </ul>
        <ul>
            <li><a href="#">
                <img src="../images/icon8.png" alt="" class="icon">
                <span class="deskription">Master Data</span>
            </a></li>
        </ul>
        <ul>
            <li><a href="#">
                <img src="../images/icon9.png" alt="" class="icon">
                <span class="deskription">Tentang</span>
            </a></li>
        </ul>
        <h2 class="version-text">Version 1.0</h2>
    </div>
    
</body>
</html>

<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
