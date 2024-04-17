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
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>NamaLengkap</th>
                    <th>Alamat</th>
                    <th>Level</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn, "select * from user");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?php echo $d['UserID']; ?></td>
                        <td><?php echo $d['Username']; ?></td>
                        <td><?php echo $d['Password']; ?></td>
                        <td><?php echo $d['Email']; ?></td>
                        <td><?php echo $d['NamaLengkap']; ?></td>
                        <td><?php echo $d['Alamat']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                      
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