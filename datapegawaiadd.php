<center>
<div style="width: auto; margin:0 auto;">
<h2 style=" background-color: skyblue; padding:20px 0; text-align:center;">Input Data Pegawai</h2>

<form name="form1" method="post" action="" enctype="multipart/form-data">
<table style="text-align:left;" border="0" cellpadding="0">
	<tr><th>NIP</th><th>
	<input type="text" name="nip" id="nip"></th></tr>

	<th>Nama</th><th>
	<input type="text" name="nama" id="nama"></th></tr>

	<tr><th>Tempat Lahir</th><th>
	<input type="text" name="tempat_lahir" id="tempat_lahir"></th></tr>

	<tr><th>Alamat</th><th>
	<input type="text" name="alamat" id="alamat"></th></tr>

	<tr><th>Tanggal Lahir</th><th>
	<input type="text" name="tanggal_lahir" id="tanggal_lahir"></th></tr>

	<tr><th>L/P</th><th>
	<input type="text" name="l" id="l"></th></tr>

	<tr><th>Gol</th><th>
	<input type="text" name="golongan" id="golongan"></th></tr>

	<tr><th>Eselon</th><th>
	<input type="text" name="eselon" id="eselon"></th></tr>

	<tr><th>Jabatan</th><th>
	<input type="text" name="jabatan" id="jabatan"></th></tr>

	<tr><th>Tempat Tugas</th><th>
	<input type="text" name="tempat_tugas" id="tempat_tugas"></th></tr>

	<tr><th>Agama</th><th>
	<input type="text" name="agama" id="agama"></th></tr>

	<tr><th>Unit Kerja</th><th>
	<input type="text" name="unit_kerja" id="unit_kerja"></th></tr>

	<tr><th>No Hp</th><th>
	<input type="text" name="no_hp" id="np_hp"></th></tr>

	<tr><th>NPWP</th><th>
	<input type="text" name="npwp" id="npwp"></th></tr>
	<tr><th></th><th>
		<input type="submit" name="simpan" id="simpan" value="simpan data pegawai"> </th></tr>
		<tr><tr><th><th><a href="index.php"><button type="button">kembali</button></a>
		</form>
	</div>
</table>		
</center>

<?php
error_reporting(0);
if($_POST["simpan"]){
	include "koneksi.php";

	$sqlp = mysqli_query($kon, "insert into data_pegawai (nip, nama, tempat_lahir, alamat, tanggal_lahir, l, golongan, eselon, jabatan, tempat_tugas, agama, unit_kerja, no_hp, npwp)
		values ('$_POST[nip]', '$_POST[nama]', '$_POST[tempat_lahir]', '$_POST[alamat]', '$_POST[tanggal_lahir]', '$_POST[l]', '$_POST[golongan]', '$_POST[eselon]', '$_POST[jabatan]', '$_POST[tempat_tugas]', '$_POST[agama]', '$_POST[unit_kerja]', '$_POST[no_hp]', '$_POST[npwp]' )");

	if($sqlp){
		echo "Data Pegawai Berhasil Disimpan";
	}else{
		echo "Gagal Menyimpan";
	}
	echo "<META HTTP-EQUIV = 'Refresh' Content = '1;URL=homedatapegawai.php'>";
	}
?>