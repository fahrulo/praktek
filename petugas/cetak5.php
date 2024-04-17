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
                    <th>PeminjamanID</th>
                    <th>User Id</th>
                    <th>Buku Id</th>
                    <th>TanggalPeminjaman</th>
                    <th>TanggalPengembalian</th>
                    <th>StatusPeminjaman</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?php echo $d['PeminjamanID']; ?></td>
                        <td><?php echo $d['UserID']; ?></td>
                        <td><?php echo $d['BukuID']; ?></td>
                        <td><?php echo $d['TanggalPeminjaman']; ?></td>
                        <td><?php echo $d['TanggalPengembalian']; ?></td>
                        <td><?php echo $d['StatusPeminjaman']; ?></td>
                       
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