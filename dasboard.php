<?php
session_start();
include "connection.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if(empty($_SESSION['username'])){ 
    die("Anda belum login"); 
}

$koneksi = mysqli_connect($host, $username, $password, $database);
$user = $_SESSION['username'];
$sql="SELECT * from register where username='$user'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dasboard.css"> 
</head>
<body>
    <div class="navbar">
        
        <div class="profile">
            <img src="image/bpbd.png" class="user-pict">
            <div class="info">
                <h2>Nama User</h2>
                <p>Email User</p>     
            </div>
            <img src="image/setting.png" class="user-set" onclick="toggleMenu()">

            <div class="sub-menu-set" id="subMenu">
                
                <a href="/home/" class="sub-menu-link">
                    <img src="image/setting.png">
                    <p>Edit Profile</p>
                    <span></span>
                </a>
                <a href="/home/" class="sub-menu-link">
                    <img src="image/setting.png">
                    <p>Ganti Password</p>
                    <span></span>
                </a>
                
            </div>
        </div>
        
        <hr>

        <div class="menu">
            <ul <?php if ($data['level']=='Admin'): ?>>
                <li><a href="/home/">Halaman Utama</a></li> 
                <li><a href="/home/">Laporan</a></li>
                <li><a href="/home/">Bencana</a></li> 
                <li><a href="/home/">Kelola Pegawai</a></li>    
                <li><a href="/home/">Kelola akun</a></li> 
            </ul>
            <ul <?php elseif($data['level']=='Operator'): ?>>
                <li><a href="/home/">Halaman Utama</a></li> 
                <li><a href="/home/">Laporan</a></li>
                <li><a href="/home/">Bencana</a></li>     
                <li><a href="/home/">Kelola akun</a></li> 
            </ul>
            <ul <?php elseif($data['level']=='Lapangan'): ?>>
                <li><a href="/home/">Halaman Utama</a></li> 
                <li><a href="/home/">Laporan</a></li>
                <li><a href="/home/">Bencana</a></li> 
            </ul>
            <?php endif; ?>
                
        </div>
        
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
        

    </div>


    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>

</body>
</html>