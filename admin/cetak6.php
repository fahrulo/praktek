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
                    <th>Ulasan ID</th>
                    <th>User Id</th>
                    <th>Buku Id</th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from ulasanbuku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?php echo $d['UlasanID']; ?></td>
                        <td><?php echo $d['UserID']; ?></td>
                        <td><?php echo $d['BukuID']; ?></td>
                        <td><?php echo $d['Ulasan']; ?></td>
                        <td><?php echo $d['Rating']; ?></td>
                        
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