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
                        <th>Buku Id</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                    </tr>
</thead>
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($conn,"select * from buku");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                         <tbody class="table-group-divider">
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['Judul']; ?></td>
                            <td><?php echo $d['Penulis']; ?></td>
                            <td><?php echo $d['Penerbit']; ?></td>
                            <td><?php echo $d['TahunTerbit']; ?></td>
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