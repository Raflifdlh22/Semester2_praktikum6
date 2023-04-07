<?php 
    require_once '../../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pelanggan</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
			font-size: 14px;
			text-align: center;
		}

		table th, table td {
			padding: 10px;
			border: 1px solid #ccc;
		}

		table th {
			background-color: #f2f2f2;
			font-weight: bold;
		}

		.btn {
			display: inline-block;
			padding: 8px 12px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			text-decoration: none;
			font-size: 14px;
			margin-right: 10px;
		}

		.btn-success {
			background-color: #28a745;
		}

		.btn-primary {
			background-color: #007bff;
		}

		.btn-danger {
			background-color: #dc3545;
		}
	</style>
</head>
<body>
    <h1>Daftar Pelanggan</h1>
        <a class="btn btn-success" href="form_pelanggan.php" role="button">add pelanggan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td>
                            <?=$nomor?>
                        </td>
                        <td>
                            <?=$row['kode']?>
                        </td>

                        <td>
                            <?=$row['nama']?>
                        </td>
                        <td>
                            <?=$row['jk']?>
                        </td>
                        <td>
                            <?=$row['tmp_lahir']?>
                        </td>
                        <td>
                            <?=$row['tgl_lahir']?>
                        </td>
                        <td>
                            <?=$row['email']?>
                        </td>
                        <td>
                            <?=$row['kartu_id']?>
                        </td>
                        <td>
<a class="btn btn-primary" href="view_pelanggan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="../../pages/pelanggan/edit_pelanggan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="../../process/pelanggan/delete_pelanggan.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data pelanggan <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </body>
</html>