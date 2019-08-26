<?php
include "../../koneksi.php";
$name= $_POST['alamat']; //get the nama value from form
$q = "SELECT * from skt where name like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q

