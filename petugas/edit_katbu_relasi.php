<!DOCTYPE html>
<html>

<head>
    <title>Digital Library</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <br />
    <br />
    <center>
    <h3>EDIT DATA</h3>
    </center>
    <?php
    include 'koneksi.php';
    $KategoriBukuID = $_GET['KategoriBukuID'];
    $data = mysqli_query($conn, "select * from kategoribuku_relasi where KategoriBukuID ='$KategoriBukuID '");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
        <form method="post" action="update_katgorbuku.php">
            <table>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="KategoriBukuID" value="<?php echo $d['KategoriBukuID']; ?>"class="form_login">
                    </td>
                </tr>
                <td>Buku ID</td>
                <td>
                    <input type="text" name="BukuID" value="<?php echo $d['BukuID']; ?>"class="form_login">
                </td>
            </tr>
            <tr>
                <td>Kategori ID</td>
                <td>
                    <input type="text" name="KategoriID" value="<?php echo $d['KategoriID']; ?>"class="form_login">
                </td>
            </tr>
            <tr>
                    <td></td>
                    <td><input type="submit" value="EDIT" class="tombol_login"></td>
                </tr>
            </table>
            <a href="index.php#kategoribuku_relasi">Kembali</a>
        </form>
    <?php
    }
    ?>

</body>

</html>