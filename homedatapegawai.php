<div style="width: auto; margin:0 auto ;">
<h2 style=" background-color:skyblue ; padding: 20px 0; text-align:center;">DATA PEGAWAI </h2>	
<div>
	<a href="datapegawaiadd.php"><button type="button">Tambah Data</button></a>
	<a href="" class="btn btn-success" target="_blank"><i class="fa fa-print"></button> Cetak PDF</a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
               
            </table>
        </div>
    </div>
</div>
	<th>
</div>
<br>
</div>

<table cellpadding="0" cellpadding="1" border="1" style="width:100% ">
<tr>
<thead>
	<th>No</th>
	<th>NIP</th>
	<th>Nama</th>
	<th>Tempat Lahir</th>
	<th>Alamat</th>
	<th>Tanggal Lahir</th>
	<th>L/P</th>
	<th>Gol</th>
	<th>Eselon</th>
	<th>Jabatan</th>
	<th>Tempat Tugas</th>
	<th>Agama</th>
	<th>Unit Kerja</th>
	<th>No Hp</th>
	<th>NPWP</th>
	<th>Aksi</th>
</tr>
</thead>

<?php
include "koneksi.php";
$sqlp = mysqli_query($kon, "select * from data_pegawai");
$no =1;
while ($rn = mysqli_fetch_array($sqlp)) {
	echo "<tr>
	<td>$no </td>
	<td>$rn[nip] </td>
	<td>$rn[nama] </td>
	<td>$rn[tempat_lahir] </td>
	<td>$rn[alamat] </td>
	<td>$rn[tanggal_lahir] </td>
	<td>$rn[l] </td>
	<td>$rn[golongan] </td>
	<td>$rn[eselon] </td>
	<td>$rn[jabatan] </td>
	<td>$rn[tempat_tugas] </td>
	<td>$rn[agama] </td>
	<td>$rn[unit_kerja] </td>
	<td>$rn[no_hp] </td>
	<td>$rn[npwp] </td>
	<td>
	<a href ='datapegawaiedit.php?idm=$rn[nip]'>Edit</a><?</td>
	<a href ='datapegawaidel.php?idm=$rn[nip]'>Hapus</a><?</td>
	</tr>";
	$no++;
}
?>
</table>
