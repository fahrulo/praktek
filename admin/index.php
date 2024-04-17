<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Digital Library</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Halaman Admin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#buku">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kategoribuku">Kategori Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kategoribuku_relasi">Kategori Buku Relasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#koleksipribadi">Koleksi Pribadi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Peminjaman">Peminjaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ulasanbuku">Ulasan Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="#user">User</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Digital Library</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Perpustakaan Digital</p>
                    <a class="btn btn-primary btn-xl" href="../login/index.php">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Buku-->
    <section class="page-section bg-primary" id="buku">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center text-white mt-0">Buku</h2>
            
            <hr class="divider" />
            <br />
            <a href="tambah.php" class="btn btn-success">+ Tambah Data</a>
            <br />
            <br />
            <a href="cetak1.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
            <br>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-white mt-0">Buku Id</th>
                        <th class="text-white mt-0">Judul</th>
                        <th class="text-white mt-0">Penulis</th>
                        <th class="text-white mt-0">Penerbit</th>
                        <th class="text-white mt-0">Tahun Terbit</th>
                        <th class="text-white mt-0">Opsi</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($conn, "select * from buku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="text-white mt-0"><?php echo $d['BukuID']; ?></td>
                            <td class="text-white mt-0"><?php echo $d['Judul']; ?></td>
                            <td class="text-white mt-0"><?php echo $d['Penulis']; ?></td>
                            <td class="text-white mt-0"><?php echo $d['Penerbit']; ?></td>
                            <td class="text-white mt-0"><?php echo $d['TahunTerbit']; ?></td>
                            <td>
                                <a href="edit.php?BukuID=<?php echo $d['BukuID']; ?>" class="btn btn-success">EDIT</a>
                                <a href="hapus.php?BukuID=<?php echo $d['BukuID']; ?>" class="btn btn-danger">HAPUS</a>
                            </td>
                        </tr>
                    <?php
                }
                    ?>
                    </tbody>
            </table>
        </div>
    </section>
    <!-- Kategoribuku-->
    <section class="page-section bg-primary" id="kategoribuku">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center text-white mt-0">Kategori Buku</h2>
            <hr class="divider" />
            <br />
            <a href="tambah_katbu.php" class="btn btn-success">+ Tambah Data</a>
            <br />
            <br />
            <a href="cetak2.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
            <br>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-white mt-0">Kategori Id</th>
                        <th class="text-white mt-0">Nama Kategori</th>
                        <th class="text-white mt-0">Opsi</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($conn, "select * from kategoribuku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="text-white mt-0"><?php echo $d['KategoriID']; ?></td>
                            <td class="text-white mt-0"><?php echo $d['NamaKategori']; ?></td>
                            <td>
                                <a href="edit_katbu.php?KategoriID=<?php echo $d['KategoriID']; ?>" class="btn btn-success">EDIT</a>
                                <a href="hapus_katbu.php?KategoriID=<?php echo $d['KategoriID']; ?>" class="btn btn-danger">HAPUS</a>
                            </td>
                        </tr>
                    <?php
                }
                    ?>
                    </tbody>
            </table>
        </div>
    </section>
</body>

</html>
<!-- Kategoribuku_relasi-->
<section class="page-section bg-primary" id="kategoribuku_relasi">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center text-white mt-0">Kategori Buku Relasi</h2>
        <hr class="divider" />
        <br />
        <a href="tambah_kategoribuku_relasi.php" class="btn btn-success">+ Tambah Data</a>
        <br />
        <br />
        <a href="cetak3.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-white mt-0">Kategori Buku Id</th>
                    <th class="text-white mt-0">Buku Id</th>
                    <th class="text-white mt-0">Kategori ID</th>
                    <th class="text-white mt-0">Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from kategoribuku_relasi");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="text-white mt-0"><?php echo $d['KategoriBukuID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['BukuID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['KategoriID']; ?></td>
                        <td>
                            <a href="edit_katbu_relasi.php?KategoriBukuID=<?php echo $d['KategoriBukuID']; ?>" class="btn btn-success">EDIT</a>
                            <a href="hapus_katbu_relasi.php?KategoriBukuID=<?php echo $d['KategoriBukuID']; ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
    </div>
</section>
<!-- koleksipribadi-->
<section class="page-section bg-primary" id="koleksipribadi">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center text-white mt-0">Koleksi Pribadi</h2>
        <hr class="divider" />
        <br />
        <a href="tambah_koleksipribadi.php" class="btn btn-success">+ Tambah Data</a>
        <br />
        <br />
        <a href="cetak4.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-white mt-0">Koleksi Id</th>
                    <th class="text-white mt-0">User Id</th>
                    <th class="text-white mt-0">Buku Id</th>
                    <th class="text-white mt-0">Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from koleksipribadi");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="text-white mt-0"><?php echo $d['KoleksiID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['UserID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['BukuID']; ?></td>
                        <td>
                            <a href="edit_kolsek.php?KoleksiID=<?php echo $d['KoleksiID']; ?>" class="btn btn-success">EDIT</a>
                            <a href="hapus_kolsek.php?KoleksiID=<?php echo $d['KoleksiID']; ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
    </div>
</section>
<!-- Peminjaman-->
<section class="page-section bg-primary" id="Peminjaman">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center text-white mt-0">Peminjaman</h2>
        <hr class="divider" />
        <br />
        <a href="tambah_peminjaman.php" class="btn btn-success">+ Tambah Data</a>
        <br />
        <br />
        <a href="cetak5.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-white mt-0">PeminjamanID</th>
                    <th class="text-white mt-0">User Id</th>
                    <th class="text-white mt-0">Buku Id</th>
                    <th class="text-white mt-0">TanggalPeminjaman</th>
                    <th class="text-white mt-0">TanggalPengembalian</th>
                    <th class="text-white mt-0">StatusPeminjaman</th>
                    <th class="text-white mt-0">Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="text-white mt-0"><?php echo $d['PeminjamanID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['UserID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['BukuID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['TanggalPeminjaman']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['TanggalPengembalian']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['StatusPeminjaman']; ?></td>
                        <td>
                            <a href="edit_peminjam.php?PeminjamanID=<?php echo $d['PeminjamanID']; ?>" class="btn btn-success">EDIT</a>
                            <a href="hapus_peminjam.php?PeminjamanID=<?php echo $d['PeminjamanID']; ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
    </div>
</section>
<!-- Ulasanbuku-->
<section class="page-section bg-primary" id="ulasanbuku">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center text-white mt-0">Ulasan Buku</h2>
        <hr class="divider" />
        <br />
        <a href="tambah_ulasanbuku.php" class="btn btn-success">+ Tambah Data</a>
        <br />
        <br />
        <a href="cetak6.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-white mt-0">Ulasan ID</th>
                    <th class="text-white mt-0">User Id</th>
                    <th class="text-white mt-0">Buku Id</th>
                    <th class="text-white mt-0">Ulasan</th>
                    <th class="text-white mt-0">Rating</th>
                    <th class="text-white mt-0">Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from ulasanbuku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="text-white mt-0"><?php echo $d['UlasanID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['UserID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['BukuID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['Ulasan']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['Rating']; ?></td>
                        <td>
                            <a href="edit_ulasan.php?UlasanID=<?php echo $d['UlasanID']; ?>" class="btn btn-success">EDIT</a>
                            <a href="hapus_ulasan.php?UlasanID=<?php echo $d['UlasanID']; ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
    </div>
</section>
<!-- User-->
<section class="page-section bg-primary" id="user">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center text-white mt-0">User</h2>
        <hr class="divider" />
        <br />
        <a href="tambah_user.php" class="btn btn-success">+ Tambah Data</a>
        <br />
        <br />
        <a href="cetak7.php" target="_BLANK" class="btn btn-secondary">Cetak</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-white mt-0">User Id</th>
                    <th class="text-white mt-0">Username</th>
                    <th class="text-white mt-0">Password</th>
                    <th class="text-white mt-0">Email</th>
                    <th class="text-white mt-0">NamaLengkap</th>
                    <th class="text-white mt-0">Alamat</th>
                    <th class="text-white mt-0">Level</th>
                    <th class="text-white mt-0">Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from user");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="text-white mt-0"><?php echo $d['UserID']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['Username']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['Password']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['Email']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['NamaLengkap']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['Alamat']; ?></td>
                        <td class="text-white mt-0"><?php echo $d['level']; ?></td>
                        <td>
                            <a href="edit_user.php?UserID=<?php echo $d['UserID']; ?>" class="btn btn-success">EDIT</a>
                            <a href="hapus_user.php?UserID=<?php echo $d['UserID']; ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
    </div>
</section>
</body>

</html>