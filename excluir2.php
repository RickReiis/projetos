<?php 
include "config.php";
	$li = $_GET['li'];
	$del = "DELETE FROM tb_usuario WHERE id_usuario = '$li'";
	mysql_query($del);
	header("Refresh:0;atualizar.php");
?>