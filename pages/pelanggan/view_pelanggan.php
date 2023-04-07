<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
	h1 {
		margin-top: 30px;
		margin-bottom: 30px;
		text-align: center;
	}
	table {
		margin-top: 30px;
		margin-bottom: 30px;
	}
</style> 
</head>
<body>
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>

        <tr>
            <td>Kode</td>
            <td><?=$row['kode']?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><?=$row['nama']?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?=$row['jk']?></td>
        </tr>
        <tr>   
            <td>Tempat Lahir</td>
            <td><?=$row['tmp_lahir']?></td>
        </tr>

        <tr>   
            <td>Tanggal Lahir</td>
            <td><?=$row['tgl_lahir']?></td>
        </tr>
        <tr>   
            <td>Email</td>
            <td><?=$row['email']?></td>
        </tr>

        <tr>   
            <td>kartu</td>
            <td><?=$row['kartu_id']?></td>
        </tr>
        
    </tbody>
</table>
</body>
</html>