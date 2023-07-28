<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIPELBA - Form Bencana</title>
    <link rel="shortcut icon" href="logo_bpbd.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Bagian body HTML -->
    
    <?php
// Mengimpor file connection.php
require 'connection.php';

// Menangkap data yang dikirim melalui method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data POST seperti sebelumnya...
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $alamat = $_POST['alamat'];
    $rw = $_POST['rw'];
    $rt = $_POST['rt'];
    $dusun = $_POST['dusun'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $koordinat = $_POST['koordinat'];
    $jenis_bencana = $_POST['jenis_bencana'];
    $kronologi = $_POST['kronologi'];
    $kerusakan = $_POST['kerusakan'];
    $korban_jiwa = $_POST['korban_jiwa'];
    $korban_lk = $_POST['korban_lk'];
    $korban_pr = $_POST['korban_pr'];
    $fasum = $_POST['fasum'];
    $infra = $_POST['infra'];
    $harta = $_POST['harta'];
    $unit_usaha = $_POST['unit_usaha'];
    $kerugian = $_POST['kerugian'];
    $nama_korban = $_POST['nama_korban'];
    $jumlah_luka = $_POST['jumlah_luka'];
    $jumlah_hilang = $_POST['jumlah_hilang'];
    $keterangan_bantuan = $_POST['keterangan_bantuan'];
    $petugas_piket = $_POST['petugas_piket'];

    // Query SQL untuk memasukkan data ke dalam tabel input_laporan_bencana
    $query = "INSERT INTO input_laporan_bencana (tanggal, waktu, alamat, rw, rt, dusun, desa, kecamatan, koordinat, jenis_bencana, kronologi, kerusakan, korban_jiwa, korban_lk, korban_pr, fasum, infra, harta, unit_usaha, kerugian, nama_korban, jumlah_luka, jumlah_hilang, keterangan_bantuan, petugas_piket) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Menyiapkan pernyataan (prepared statement)
    $stmt = mysqli_prepare($connection, $query);

    // Periksa apakah prepared statement berhasil
    if ($stmt) {
        // Bind parameter ke prepared statement seperti sebelumnya...
        // Bind parameter ke prepared statement
        mysqli_stmt_bind_param(
            $stmt,
            "sssssssssssssssssssssssss", // Sesuaikan jumlah 's' sesuai dengan jumlah kolom (25 kolom tanpa kolom "id")
            $tanggal,
            $waktu,
            $alamat,
            $rw,
            $rt,
            $dusun,
            $desa,
            $kecamatan,
            $koordinat,
            $jenis_bencana,
            $kronologi,
            $kerusakan,
            $korban_jiwa,
            $korban_lk,
            $korban_pr,
            $fasum,
            $infra,
            $harta,
            $unit_usaha,
            $kerugian,
            $nama_korban,
            $jumlah_luka,
            $jumlah_hilang,
            $keterangan_bantuan,
            $petugas_piket
        );


        // Eksekusi prepared statement
        $result = mysqli_stmt_execute($stmt);

        // Periksa apakah data berhasil dimasukkan
        if ($result) {
            echo "Data berhasil dimasukkan ke dalam tabel input_laporan_bencana.";
        } else {
            echo "Data gagal dimasukkan ke dalam tabel input_laporan_bencana: " . mysqli_error($connection);
        }

        // Tutup prepared statement
        mysqli_stmt_close($stmt);
    } else {
        // Jika terjadi kesalahan dalam membuat prepared statement
        echo "Error: " . mysqli_error($connection);
    }

    // Tutup koneksi
    mysqli_close($connection);
}
?>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-warning"><i class="fa fa-hashtag me-2"></i>SIPELBA</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <!-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <!-- <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div> -->
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Rekapan Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="laporan_bencana.php" class="dropdown-item">Laporan Bencana</a>
                            <a href="laporan_bantuan.php" class="dropdown-item">Laporan Bantuan</a>
                            <a href="laporan_penanganan.php" class="dropdown-item">Laporan Penanganan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Input Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="form_bencana.php" class="dropdown-item">Formulir Bencana</a>
                            <a href="form_bantuan.php" class="dropdown-item">Formulir Bantuan</a>
                            <a href="form_penanganan.php" class="dropdown-item">Formulir Penanganan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    <a href="kelola_akun.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-lines-fill"></i>Kelola Account</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="form_register.php" class="dropdown-item">Tambahkan User</a>
                            <a href="lihat_user.php" class="dropdown-item">Lihat User</a>
                            <a href="ganti_password.php" class="dropdown-item">Ganti Password</a>
                        </div>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-warning mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <!-- <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div> -->
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-50">
                        <div class="bg-light rounded h-100 p-4">
                            <form method="POST" action="">
                                <h2 class="mb-4">Penanganan Bencana</h2>
                            <label for="jenis_bencana" class="form-label">Jenis Bencana/ Kejadian</label>
                            <select class="form-select form-select-sm mb-3" id="jenis_bencana" name="jenis_bencana" aria-label=".form-select-sm example">
                                <option selected>Pilih Jenis Bencana</option>
                                <option value="Tanah Longsor">Tanah Longsor</option>
                                <option value="Banjir Luapan">Banjir Luapan</option>
                                <option value="Tanah Ambles">Tanah Ambles</option>
                                <option value="Angin Kencang">Angin Kencang</option>
                                <option value="Karhutlah">Karhutlah</option>
                                <option value="Banjir Bandang">Banjir Bandang</option>
                                <option value="Tanah Gerak">Tanah Gerak</option>
                                <option value="Pohon Tumbang">Pohon Tumbang</option>
                                <option value="Kebakaran">Kebakaran</option>
                                <option value="Rumah Tersambar Petir">Rumah Tersambar Petir</option>
                                <option value="Atap Rumah Ambruk">Atap Rumah Ambruk</option>
                            </select>
                             
                            <label for="kronologi" class="form-label">*Masukan jenis bencana apabila tidak tertera pada daftar diatas</label>
                            <input class="form-control form-control-sm mb-3" type="text" placeholder="masukan bencana lainya"
                                aria-label=".form-control-sm example">

                            <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Kejadian</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="mb-3">
                                <label for="waktu" class="form-label">Waktu Kejadian</label>
                                <input type="text" class="form-control" id="waktu" name="waktu"
                                    aria-describedby="emailHelp">
                            </div>

                            <button type="submit" class="btn btn-secondary"><i class="bi bi-geo-alt-fill"></i></button>
                            <div class="bg-light rounded h-100 mt-2">
                                <iframe class="position-relative rounded w-100 h-200"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="border:0; height: 300px;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                            </div>

                            <div class="mb-3">
                                <label for="waktu" class="form-label">Lokasi Kejadian</label>
                                <input type="text" class="form-control" id="waktu" name="waktu"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="korban_pr" class="form-label">RT</label>
                                <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="korban_pr" class="form-label">RW</label>
                                <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                    aria-describedby="emailHelp">
                            </div>

                            </select>
                            <label for="dusun" class="form-label">Dusun</label>
                            <select class="form-select form-select-sm mb-3" id="dusun" name="dusun" aria-label=".form-select-sm example">
                                <option selected>Pilih Dusun</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <label for="desa" class="form-label">Desa</label>
                            <select class="form-select form-select-sm mb-3" id="desa" name="desa" aria-label=".form-select-sm example">
                                <option selected>Pilih Desa</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <select class="form-select form-select-sm mb-3" id="kecamatan" name="kecamatan" aria-label=".form-select-sm example">
                                <option selected>Pilih Kecamatan</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>

                            <label for="kronologi" class="form-label">Kronologi Kejadian</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="kronologi" name="kronologi" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Jelaskan Kronologi Kejadian</label>
                            </div>

                            <br><h5 class="mb-3">Dampak</h5>
                            <hr>
                            <div class="col-sm-10 mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Rusak Ringan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Rusak Sedang
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Rusak Berat
                                            </label>
                                        </div>
                               </div>

                               <label for="kronologi" class="form-label">Nama Korban</label>
                                <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="kronologi" name="kronologi" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Masukan nama sesuai dengan KTP</label>
                                </div>

                               <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Jumlah Jiwa</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Laki-Laki</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Perempuan</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>
                            
                                <br><h5 class="mb-3">Kelompok Rentan</h5>
                                <hr>
                                <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Balita</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Lansia</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Wanita Hamil</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="korban_pr" class="form-label">Disabilitas</label>
                                    <input type="Number" class="form-control" id="korban_pr" name="korban_pr"
                                        aria-describedby="emailHelp">
                                </div>

                                <br><h5 class="mb-3">Tafsiran Kerusakan</h5>
                                <hr>

                                <div class="mb-3">
                                <label for="kerugian" class="form-label">Kerugian (Rp)</label>
                                <input type="number" class="form-control" id="kerugian" name="kerugian"
                                    aria-describedby="emailHelp">
                                 </div>

                                <label for="kronologi" class="form-label">Kebutuhan Mendesak</label>
                                <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="kronologi" name="kronologi" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Kebutuhan apa saja yang dibutuhkan</label>
                                </div>

                                <label for="kronologi" class="form-label">Upaya Yang Dilakukan</label>
                                <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="kronologi" name="kronologi" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Upaya apa saja yang dilakukan</label>
                                </div>

                                <label for="kronologi" class="form-label">Kendala</label>
                                <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="kronologi" name="kronologi" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Kendala apa saja yang dialami</label>
                                </div>

                                <label for="kronologi" class="form-label">Instansi Yang Terlibat</label>
                                <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="kronologi" name="kronologi" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Instansi apa saja yang terlibat</label>
                                 </div>

                                 <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Dokumentasi Kejadian</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Dokumentasi KTP</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Dokumentasi KK</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>

                                <br><h6 >Nama Pelapor</h6>
                                <div class="mb-3">
                                <input type="text" class="form-control" id="petugas_piket" name="petugas_piket"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">
                                </div>
                                </div>

                            <hr>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>