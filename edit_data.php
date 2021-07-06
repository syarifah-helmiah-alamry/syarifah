<?php
 include "koneksi.php";

 $kode = "null";
 if (isset($_GET['id']))
     $kode = $_GET['id'];
 $proses_ambil = mysqli_query($koneksi, "SELECT * FROM barang WHERE id = $kode")
                 or die (mysqli_error($koneksi));
 
 if (isset($_GET['proses'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
   

     $proses_update_data = mysqli_query($koneksi, "UPDATE barang SET kode=$kode, nama=\"$nama\", harga=\"$harga\", stock=\"$stock\"")
     or die(mysqli_error($koneksi));
     if($proses_update_data){
         echo "
         <script>
             alert('Data Berhasil Diupdate !!');
             window.location.href='tables.php';
         </script>";
     }else {
         echo "
         <script>
             alert('Data Gagal Diupdate !!');
             window.location.href='tables.php';
         </script>";
     }
 } 
?>