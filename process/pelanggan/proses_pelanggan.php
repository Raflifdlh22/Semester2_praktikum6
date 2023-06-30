<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_nama = $_POST['ukuran'];
   $_warna = $_POST['warna'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_tipe = $_POST['tipe'];
    $_kartu_id = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_warna;// 3
   $ar_data[]=$_stok;
   $ar_data[]=$_harga;
   $ar_data[]=$_tipe;
   $ar_data[]=$_kartu_id; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (nama,nama,warna,stok,harga,tipe,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET nama=?, nama=?, warna=?, stok=?, harga=?, tipe=?, kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location::../../pages/pelanggan/list_pelanggan.php');
?>