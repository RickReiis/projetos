<?php
include "config.php";

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	if(empty($nome)|| empty($email)|| empty($usuario)|| empty($senha))
	{
		echo "<script>alert('Preencha todos os campos');history.back();</script>";
	}
	
	else
	{
		$consulta = mysql_num_rows(mysql_query("SELECT * FROM tb_usuario WHERE usuario = '$usuario' OR email = '$email'"));
		if ($consulta>=1)
		{
			echo "<script>alert('Usuario ou email ja existente!');history.back();</script>";
		}else
		{
		mysql_query("INSERT INTO tb_usuario(nome,email,usuario,senha)
		VALUES('$nome','$email','$usuario','$senha')");
		echo "<script>alert('Usuario cadastrado com sucesso!')</script>";
		header("Refresh:0;index.php");
		}	
	}
?>		