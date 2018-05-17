<?php
include "config.php";

	$op = $_POST['OK'];
	$li = $_GET['li'];
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	if ($op == "VOLTAR") 
	{
		header("Refresh:0;index.php");
	}
	elseif(empty($id)|| empty($nome)|| empty($email)|| empty($usuario)|| empty($senha))
	{
		echo "<script>alert('Preencha todos os campos');history.back();</script>";
	}
	else
	{
	mysql_query("update tb_usuario set id_usuario = '$id' where id_usuario = '$li'");
	mysql_query("update tb_usuario set nome = '$nome' where id_usuario = '$id'");
	mysql_query("update tb_usuario set email = '$email' where id_usuario = '$id'");
	mysql_query("update tb_usuario set usuario = '$usuario' where id_usuario = '$id'");
	mysql_query("update tb_usuario set senha = '$senha' where id_usuario = '$id'");
	echo "<script>alert('Usuario modificado com sucesso!')</script>";
	header("Refresh:0;index.php");
	}	
?>