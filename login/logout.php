<?php
session_start();
session_destroy();

?>

<script type="text/javascript">
	alert("Anda Berhasil Logout! ");
	document.location = '/pariwisata/login';
</script>
<?php
exit();
?>
