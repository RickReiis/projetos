<!DOCTYPE html>
<html>
<head>
	<title>EDITAR</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include "config.php";

	$li = $_GET['li'];
	$usu = "SELECT * FROM tb_usuario WHERE id_usuario = '$li'";
	$dados = mysql_query($usu);
	$row = mysql_fetch_object($dados);
?>
<body>
	<div id="interface">
		<div id="form">
			<form method="post" action="editar2.php?li=<?php echo $row->id_usuario; ?>" class="form">
				<p>
				<label for="nome">nome</label><br>
				<input type="text" name="nome" id="nome" value="<?php echo $row->nome; ?>">
				</p>
				<p>
				<label for="email">email</label><br>
				<input type="email" name="email" id="email" value="<?php echo $row->email; ?>">
				</p>
				<p>
				<label for="usuario">usuario</label><br>
				<input type="text" name="usuario" id="usuario" value="<?php echo $row->usuario; ?>">
				</p>
				<p>
				<label for="senha">senha</label><br>
				<input type="text" name="senha" id="senha" value="<?php echo $row->senha; ?>">
				</p>
				<p class="submit">
				<input type="submit" name="OK" value="VOLTAR">
				<input type="submit" name="OK" value="OK">
				</p>
			</form>
		</div>
	</div>
	</body>
	</html>