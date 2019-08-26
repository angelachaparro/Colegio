<?php
session_start();
require_once 'includes/connect.php';
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$delete = mysqli_query($db, "DELETE FROM usuario WHERE idusuario = {$id}");
	}
header("Location: index.php");
?>
