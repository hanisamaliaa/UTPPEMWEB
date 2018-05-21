<?php
  include "koneksi.php";
  $nip=$_POST['nip'];
  $nama=$_POST['nama'];
  $tempat_lahir=$_POST['tempat_lahir'];
  $tanggal_lahir =  $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl']; 
  $alamat=$_POST['alamat'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  //masing-masing variabel yang diawali dengan $_POST harus sesuai dengan  nama yang dibuat dalam form
  if (empty($nip))
  {              
     die("Isikan  NIP!"); //Berhenti dan munculkan pesan jika nim tidak diisi
  } 
  elseif(empty($nama))
  {
     die("Isikan  Nama!"); //Berhenti dan munculkan pesan jika nama tidak diisi
     //anda bisa  tambahkan struktur if yang lain jika ada data yang perlu dicek
  }
  else
  {
     $cekdata="select nip FROM guru where nip='$nip'";
     $ada=mysqli_query($koneksi,$cekdata)  or die(mysqli_error());
     if(mysqli_num_rows($ada)>0)
     { die("NIP  telah Terdaftar!"); }
  
  mysqli_query($koneksi,"insert  into guru(nip,nama,tempat_lahir,tanggal_lahir,alamat,jenis_kelamin)  " . 
  "values('$nip','$nama','$tempat_lahir','$tanggal_lahir','$alamat','$jenis_kelamin')")  or die(mysqli_error());
  echo  "Berhasil";
  header('location:dataguru.php');
     }     
?>