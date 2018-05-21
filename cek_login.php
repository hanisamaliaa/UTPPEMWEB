<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 if (!empty($username) && !empty($password)){
$sql = mysqli_query($koneksi , "select * FROM login WHERE username = '$username' and password = '$password'");
 $result = mysqli_num_rows($sql);
 if ($result) {
 	header('location:index.html');
 } else {
 	echo "username atau password salah 		<a href='index.php' a> kembali";
 }
 } else {
 	echo "username atau password kosong 	<a href='index.php' a> kembali";
 }
?>