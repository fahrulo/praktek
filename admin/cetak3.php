<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
        <link href="css/styles.css" rel="stylesheet" />
	<title>Data Buku Digital Library</title>
</head>
<body>
<table class="table">
            <thead>
                <tr>
                    <th>Kategori Buku Id</th>
                    <th>Buku Id</th>
                    <th>Kategori ID</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from kategoribuku_relasi");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?php echo $d['KategoriBukuID']; ?></td>
                        <td><?php echo $d['BukuID']; ?></td>
                        <td><?php echo $d['KategoriID']; ?></td>
                     
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
	<script>
		window.print();
	</script>
	
</body>
</html>