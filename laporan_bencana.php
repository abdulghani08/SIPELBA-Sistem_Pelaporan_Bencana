<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIPELBA - Laporan Bencana</title>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-bar-chart-line-fill"></i>Rekapan Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="laporan_bencana.php" class="dropdown-item">Laporan Bencana</a>
                            <a href="laporan_bantuan.php" class="dropdown-item">Laporan Bantuan</a>
                            <a href="laporan_penanganan.php" class="dropdown-item">Laporan Penanganan</a>
                            <a href="laporan_harian.php" class="dropdown-item">Laporan Harian</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Input Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="form_bencana.php" class="dropdown-item">Laporan Bencana</a>
                            <a href="form_bantuan.php" class="dropdown-item">Laporan Bantuan</a>
                            <a href="form_penanganan.php" class="dropdown-item">Laporan Penanganan</a>
                            <a href="form_lapharian.php" class="dropdown-item">Laporan Harian</a>
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

            <!-- Table Start -->
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Data Laporan Bantuan</h6>
                            
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Lihat data berdasarkan bencana</option>
                                <option value="1">Banjir</option>
                                <option value="2">Kebakaran</option>
                                <option value="2">Angin</option>
                                <option value="3">Gempa</option>
                                <option value="3">Gunung Meletus</option>
                                <option value="3">Tsunami</option>
                            </select>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal Kejadian</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Lokasi Kejadian</th>
                                            <th scope="col">RT</th>
                                            <th scope="col">RW</th>
                                            <th scope="col">Desa</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Koordinat</th>
                                            <th scope="col">Jenis Bencana</th>
                                            <th scope="col">Kronologi</th>
                                            <th scope="col">Dampak</th>
                                            <th scope="col">jumlah korban</th>
                                            <th scope="col">laki-laki</th>
                                            <th scope="col">Perempuan</th>
                                            <th scope="col">Kerusakan Fasilitas umum</th>
                                            <th scope="col">Kerusakan Infrastruktur</th>
                                            <th scope="col">Harta Benda</th>
                                            <th scope="col">Unit Usaha</th>
                                            <th scope="col">Kerugian</th>
                                            <th scope="col">Korban</th>
                                            <th scope="col">Jumlah luka-luka</th>
                                            <th scope="col">Jumlah hilang</th>
                                            <th scope="col">Bantuan yang telah diberikan</th>
                                            <th scope="col">Petugas piket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>19-8-2023</td>
                                            <td>09.30 WIB</td>
                                            <td>jl.garuda indonesia desa macan putih</td>
                                            <td>03</td>
                                            <td>04</td>
                                            <td>Singaparma</td>
                                            <td>Macan putih</td>
                                            <td>-8.241597, 112.817471</td>
                                            <td>Banjir</td>
                                            <td>hujan deras air meluap ke pemukiman</td>
                                            <td>rumah terendam</td>
                                            <td>256</td>
                                            <td>100</td>
                                            <td>156</td>
                                            <td>puskesmas</td>
                                            <td>rumah warga</td>
                                            <td>ludes</td>
                                            <td>ludes</td>
                                            <td>300.000.000</td>
                                            <td>Sukidi,sugiman martina, fatimah, sukijah</td>
                                            <td>34</td>
                                            <td>0</td>
                                            <td>Beras, air bersih, pempes</td>
                                            <td>Sutrisno</td>
                                        </tr>
                                    </tbody>
                                </table>                      
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="bi bi-cloud-arrow-down-fill"></i> Download Data</button>
                </div>
            </div>
            <!-- Table End -->

          

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