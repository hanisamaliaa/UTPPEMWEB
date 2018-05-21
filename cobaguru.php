<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01  Transitional//EN">
  <html>
  <head>
  <title>Input Data Guru</title>
  <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
              <link rel="stylesheet" href="src/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  </head>
  <body>
  <form action="simpanguru.php"  method="post" enctype="multipart/form-data"  name="FMHS">
  <table  width="452" border="0" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#669900">
  <tr>
  <td  height="40" align="center"  bgcolor="#669988"><strong><font  color="#FFFFFF">MASUKKAN DATA</font></strong></td>
  </tr>
  <tr>
  <td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
  <tr><td  width="113">NIP</td><td width="11">:</td>
  <td  width="237"><input name="nip" type="text"  id="nip" size="12" maxlength="12"></td>
  </tr>
  <tr><td>Nama</td><td>:</td>
  <td><input  name="nama" type="text" id="nama"  size="30" maxlength="30"></td>
  </tr>
  <tr>
  <td>Alamat</td>
  <td>:</td>
  <td><textarea name="alamat" cols="30"  rows="5" id="alamat"></textarea></td>
  </tr>
  <tr><td>Nomor HP</td><td>:</td>
  <td><input  name="no_hp" type="text" id="no_hp"  size="30" maxlength="30"></td>
  </tr>
  <tr><td>Email</td><td>:</td>
  <td><input  name="email" type="text" id="email"  size="30" maxlength="30"></td>
  </tr>
  <tr><td>Tempat  Lahir</td><td>:</td>
  <td><input  name="tempat_lahir" type="text" id="tempat_lahir"  size="30" maxlength="30"></td>
  </tr>
  <tr><td>Tanggal  Lahir</td><td>:</td>
  <td><select name="tgl" size="1"  id="tgl">
  <?php
  for ($i=1;$i<=31;$i++)
  {
  echo "<option  value=".$i.">".$i."</option>";
  }
  ?>
  </select>
  <select  name="bln" size="1" id="bln">
  <?php
  $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
  for ($i=1;$i<=12;$i++)
  {
  echo "<option  value=".$i.">".$bulan[$i]."</option>";
  }
  ?>
  </select>
  <select  name="thn" size="1" id="thn">
  <?php
  for ($i=1985;$i<=2000;$i++)
  {
  echo "<option  value=".$i.">".$i."</option>";
  }
  ?>
  </select></td>
  </tr>
  <tr><td>Jenis  Kelamin</td><td>:</td>
  <td><input  name="jenis_kelamin" type="radio" value="L" checked> Laki-laki <input  name="jenis_kelamin" type="radio" value="P"> Perempuan  </td>
 <tr><td  colspan="3" align="center"><input  name="fok" type="submit" id="fok"  value="OK">
  <input  name="fulang" type="reset" id="fulang"  value="Ulangi">
  <input name="fulang2"  type="button" id="fulang2" value="Batal"  onClick="javascript:history.back()"></td>
  </tr>
  </tr>
   </table></td>
  </tr>
  </table>
  </form>
  <div  align="center"><a href="index.html">Menu  Utama</a></div>
  </body>
</html>