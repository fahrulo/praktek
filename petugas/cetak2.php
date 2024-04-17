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
                        <th>Nama Kategori</th>
                    </tr>
</thead>
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($conn,"select * from kategoribuku");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                         <tbody class="table-group-divider">
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['NamaKategori']; ?></td>
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