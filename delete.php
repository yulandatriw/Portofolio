<?php
include("koneksi.php");
$ID = $_GET['ID'];
$mysqli = mysqli_query($mysqli, "DELETE FROM tbl_pemesan WHERE ID=$ID");
header("Location:data.php");
?>
