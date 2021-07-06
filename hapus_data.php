<?php
 include "koneksi.php";

 $kode = $_GET['id'];

 $proses = mysqli_query($koneksi,"DELETE FROM barang WHERE   id = $kode") 
            or die (mysqli_error($koneksi));
 if($proses){
    echo  "
    <script>
            alert('Data Berhasil Dihapus');
            window.location.href = 'tables.php';
    </script>";
    }else echo "<script>alert('Data Gagal Dihapus');
            window.location.href = 'tables.php';
            </script>";
    
?>