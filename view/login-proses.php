<?php 
session_start();
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$passwordhash = md5($password);
$query1 = mysqli_query("SELECT * FROM user WHERE id_karyawan = '$username' AND password = '$passwordhash' AND jabatan = 'Administrasi'");
// $query2 = mysqli_query("SELECT * FROM user WHERE id_karyawan = '$username' AND password = '$passwordhash' AND jabatan = 'Lapangan'");
if (mysqli_num_rows($query1)>0){
    $_SESSION['username1'] = $username;
    header("location: administrasi_daftarproyek.php");
}
// elseif (mysqli_num_rows($query2)>0) {
//     $_SESSION['username2'] = $username;
//     header("location: administrasi_daftarproyek.php");
// }
else{
    header("location: login.php");
}

?>
