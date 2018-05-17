<?php
include "config.php";
	$cod = "SELECT*FROM tb_usuario";
	$co = mysql_query($cod);
	$nid = 1;
	while($row = mysql_fetch_object($co))
	{
		$id = $row->id_usuario;
		mysql_query("update tb_usuario set id_usuario = '$nid' where id_usuario = '$id'");
		$nid++;
	}
	header("Refresh:0;index.php");
?>