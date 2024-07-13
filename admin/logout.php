<?php include("connection/config.php");
if ($_SESSION['aid']) {
 	session_destroy();
 	header("location:login.php");
 } ?>
