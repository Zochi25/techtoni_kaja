<?php
//insert.php  
include 'koneksi.php';
 $nama_pt = $_POST["nama_pt"];  
 $nama_proyek = $_POST["nama_proyek"];  
 $penjawab = $_POST["penjawab"];  
 $kontak = $_POST["kontak"];  
 $query = "INSERT INTO daftar_pt(nama_pt, nama_proyek, penjawab, kontak) VALUES('$nama_pt', '$nama_proyek', '$penjawab', '$kontak')";
 mysqli_query($koneksi,$query);
 //header("location:administrasi_daftarproyek.php");

?>