<?php 
require_once '../../database/dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM produk WHERE id=?";
$statement = $dbh->prepare($sql);
$statement->execute([$_iddel]);
// redirect page
header('location:../../pages/produk/list_produk.php');
?>