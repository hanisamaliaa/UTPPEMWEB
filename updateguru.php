<?php
include "koneksi.php";
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
if (empty($nip))
{   
    die("Isikan nip!");
}
elseif(empty($nama))
{
    die("Isikan Nama!");
}
else //bisa tambahkan pengecekan yang lain jika perlu
{
    //proses upload photo jika ada
    $myqry="UPDATE guru SET nama='$nama',tempat_lahir='$tempat_lahir',".
            "tanggal_lahir='$tanggal_lahir',alamat='$alamat',jenis_kelamin='$jenis_kelamin' WHERE nip='$nip' LIMIT 1";
    mysqli_query($koneksi,$myqry) or die(mysqli_error());
    header("location:dataguru.php");
    exit;
}       
?>