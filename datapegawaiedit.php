<center>
<?php
error_reporting(0);
include "koneksi.php";
$sqlp = mysqli_query($kon, "select * from data_pegawai where 
nip='$_GET[idm]'");
$rn = mysqli_fetch_array($sqlp);
?>
<div style="margin;0 auto;width:700px;">
<h2 style="background:skyblue;padding:20px 0;text-align:center">Edit Data 
Pegawai </h2>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<table style="text-align:left;" border="0" cellpadding="0">
<tr><th>NIP </th><th>
<input type="text" name="nip" id="nip" value="<?php echo
"$rn[nip]"; ?>"></th></tr>
<tr><th>Nama </th><th>
<input type="text" name="nama" id="nama" value="<?php echo
"$rn[nama]"; ?>"></th></tr>
<tr><th>Tempat Lahir </th><th>
<input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php
echo "$rn[tempat_lahir]"; ?>"> </th></tr>
<tr><th>Alamat </th><th>
<input type="text" name="alamat" id="alamat" value="<?php echo
"$rn[alamat]"; ?>"></th></tr>
<tr><th>Tanggal Lahir </th><th>
<input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo
"$rn[tanggal_lahir]"; ?>"></th></tr>
<tr><th>L\P </th><th>
<input type="text" name="l" id="l" value="<?php
echo "$rn[l]"; ?>"></th></tr>
<tr><th>Gol </th><th>
<input type="text" name="golongan" id="golongan" value="<?php echo
"$rn[golongan]"; ?>"></th></tr>
<tr><th>Eselon </th><th>
<input type="text" name="eselon" id="eselon" value="<?php echo
"$rn[eselon]"; ?>"></th></tr>
<tr><th>Jabatan </th><th>
<input type="text" name="jabatan" id="jabatan" value="<?php echo
"$rn[jabatan]"; ?>"></th></tr>
<tr><th>Tempat Tugas </th><th>
<input type="text" name="tempat_tugas" id="tempat_tugas" value="<?php echo
"$rn[tempat_tugas]"; ?>"></th></tr>
<tr><th>Agama </th><th>
<input type="text" name="agama" id="agama" value="<?php echo
"$rn[agama]"; ?>"></th></tr>
<tr><th>Unit Kerja </th><th>
<input type="text" name="unit_kerja" id="unit_kerja" value="<?php echo
"$rn[unit_kerja]"; ?>"></th></tr>
<tr><th>No Hp </th><th>
<input type="text" name="no_hp" id="no_hp" value="<?php echo
"$rn[no_hp]"; ?>"></th></tr>
<tr><th>NPWP </th><th>
<input type="text" name="npwp" id="npwp" value="<?php echo
"$rn[npwp]"; ?>"></th></tr>
<tr><th><th>
<input type="submit" name="simpan" id="simpan" value="Simpan Data Pegawai">
</th></tr>
</p>
</table>
</form>
</center>
<?php
error_reporting(0);
if($_POST["simpan"]){
include "koneksi.php";
$sqlp = mysqli_query($kon , "update data_pegawai set 
nama='$_POST[nama]' , tempat_lahir='$_POST[tempat_lahir]' 
, alamat='$_POST[alamat]' , tanggal_lahir='$_POST[tanggal_lahir]' 
, l='$_POST[l]' , golongan='$_POST[golongan]' ,eselon='$_POST[eselon]' ,jabatan='$_POST[jabatan]' ,tempat_tugas='$_POST[tempat_tugas]' ,agama='$_POST[agama]' , unit_kerja='$_POST[unit_kerja]' ,no_hp='$_POST[no_hp]' ,npwp='$_POST[npwp]' where nip= 
'$_POST[nip]'");
if($sqlp){
echo "Data Pegawai Berhasil Diubah";
}else{
echo "Gagal Mengubah";
}
echo "<META HTTP-EQUIV = 'Refresh' Content = '1;URL=homedatapegawai.php'>";
}
?>