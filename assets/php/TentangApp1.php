<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/styles.css">

        <!-- Icon -->
        <link rel="shortcut icon" href="../img/logo.jpg" />

        <title>TAWALAP | Tentang App</title>
    </head>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
                <span class="nav__logo-name">TAWALAP online</span>
            </div>

            <div class="header__img">
                <img src="../img/profile.png" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">TAWALAP<br>online</span>
                    </a>

                    <div class="nav__list">
                        <a href="Home.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>

                        <a href="BuatLaporan.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Buat Laporan</span>
                        </a>
                        
                        <a href="ProsedurLapor.php" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Prosedur Lapor</span>
                        </a>

                        <a href="Pesan.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Pesan</span>
                        </a>

                        <a href="TentangApp1.php" class="nav__link active">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Tentang App</span>
                        </a>

                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Keluar</span>
                </a>
            </nav>
        </div>

        <div class="container">
            <div class="card">
                <div class="content">
                    <h1 style="color: white;"><br>Tentang App</h1>
                    <h3 style="color: white;">Tawalap atau singkatan dari Tamu Wajib Lapor adalah sebuah website<br>
                    	yang dirancang untuk memudahkan warga yang datang ke desa dalam<br>
                    	melakukan pelaporan sebagai tamu secara online dalam waktu 1x24 jam.<br>
                    	Dengan adanya website ini, diharapkan pelaksanaan proses melapor sebagai<br>
                    	tamu di lingkungan desa menjadi lebih efektif dan efisien tanpa harus<br>
                    	mengunjungi rumah kepala desa atau kantor desa. Dengan demikian, tingkat<br>
                    	keamanan dan ketertiban desa diharapkan semakin meningkat.
                    </h3>
                </div>
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>
    </body>
</html>