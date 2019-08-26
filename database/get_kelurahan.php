<?php
include '../koneksi.php';
$kec = $_GET['kec'];
 
$kec  = mysqli_query($koneksi,"SELECT id_kel,nama_kel FROM kelurahan WHERE id_kec='$kec' order by nama_kel");
 
echo "<option required=''>-- Pilih Kelurahan --</option>";
while($k = mysqli_fetch_array($kec)){
    echo "<option required='' value=\"".$k['id_kel']."\">".$k['nama_kel']."</option>\n";
}
?>