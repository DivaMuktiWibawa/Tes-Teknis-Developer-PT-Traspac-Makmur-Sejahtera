<?php
error_reporting(0);
include "koneksi.php";
$sqlp = mysqli_query($kon, "delete from data_pegawai where nip='$_GET[idm]'");
if($sqlp){
echo "Data Pegawai Berhasil Dihapus";
}else{
echo "Gagal Menyimpan";
}
echo "<META HTTP-EQUIV = 'Refresh' Content = '1;URL=homedatapegawai.php'>";
?>