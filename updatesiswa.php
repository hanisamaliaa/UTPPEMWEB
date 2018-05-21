<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
if (empty($nis))
{   
    die("Isikan nis!");
}
elseif(empty($nama))
{
    die("Isikan Nama!");
}
else //bisa tambahkan pengecekan yang lain jika perlu
{
    //proses upload photo jika ada
    $myqry="UPDATE siswa SET nama='$nama',tempat_lahir='$tempat_lahir',".
            "tanggal_lahir='$tanggal_lahir',alamat='$alamat',jenis_kelamin='$jenis_kelamin' WHERE nis='$nis' LIMIT 1";
    mysqli_query($koneksi,$myqry) or die(mysqli_error());
    header("location:datasiswa.php");
    exit;
}       
?>