<?php

$id = $_GET['id'];

$sql= $koneksi->query("DELETE FROM skt WHERE id_no='$id'");

if ($sql) {
  ?>
   <script type="text/javascript">
     alert("Berhasil!");
     document.location='?halaman=dataSkt';
   </script>
  <?php
}
else  {
  echo "gagal";
}



?>